<?php

namespace App\Traits;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait CustomThrottleRequest
{
    protected function hasTooManyAttempts(Request $request, $attempt = 5)
    {
        return $this->customlimiter()->tooManyAttempts(
            $this->customThrottleKey($request), $this->customMaxAttempts($attempt)
        );
    }

    protected function incrementAttempts(Request $request, $minutes = 1)
    {
        $this->customlimiter()->hit(
            $this->customThrottleKey($request), $this->customDecayMinutes($minutes) * 60
        );
    }

    protected function customLockoutResponse(Request $request)
    {
        $seconds = $this->customlimiter()->availableIn(
            $this->customThrottleKey($request)
        );
        return back()->withErrors(['alert-throttle' => 'To many attempts. Please try again after '.$seconds.' seconds']);
    }

    protected function clearAttempts(Request $request)
    {
        $this->customlimiter()->clear($this->customThrottleKey($request));
    }

    protected function customFireLockoutEvent(Request $request)
    {
        event(new Lockout($request));
    }

    protected function customThrottleKey(Request $request)
    {
        $key = $request->getRequestUri() . $request->getMethod();
        return Str::lower($key) . '|' . $request->ip();
    }

    protected function customlimiter()
    {
        return app(RateLimiter::class);
    }

    public function customMaxAttempts($attempt)
    {
        return $attempt;
    }

    public function customDecayMinutes($minutes)
    {
        return $minutes;
    }
}
