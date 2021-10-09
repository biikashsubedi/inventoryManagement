<?php

namespace App\Http\Controllers\System\Auth;

use App\Domains\System\LoginDomain;
use App\Exceptions\CustomGenericException;
use App\Http\Controllers\System\ResourceController;
use App\Http\Requests\System\LoginRequest;
use App\Services\System\LoginService;
use App\Traits\CustomThrottleRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends ResourceController
{
    use AuthenticatesUsers, CustomThrottleRequest;

    public function __construct(LoginService $service)
    {
        parent::__construct($service);
        $this->domain = (new LoginDomain());
    }

    public function loginForm()
    {
        if (\Auth::check()) {
            return redirect()->to(route('home.index'));
        }
        return view('system.auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        try {
            if (method_exists($this, 'hasTooManyAttempts') && $this->hasTooManyAttempts($request, $attempt = 5)) {
                $this->customFireLockoutEvent($request);
                return $this->customLockoutResponse($request);
            }
            $user = $this->service->loginType($request);
            if (Auth::attempt($user)) {
                setRoleCache(authUser());
//                setConfigCookie();
//                $this->createLoginLog($request);
                return $this->sendLoginResponse($request);
            }

            $this->incrementAttempts($request, $decay = 1);

            return $this->sendFailedLoginResponse($request);

        } catch (\Exception $e) {
            \Log::error('error while login ' . $e);
            if (authUser() != null) {
                clearRoleCache(authUser());
                $this->guard()->logout();
            }
            throw new CustomGenericException($e->getMessage());
        }
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }
        return redirect()->to(route('home.index'));
    }

    public function logout(Request $request)
    {
        if (authUser() != null) {
            clearRoleCache(authUser());
        }
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect(PREFIX . '/login')->withErrors(['alert-success' => 'Successfully logged out!']);
    }
}
