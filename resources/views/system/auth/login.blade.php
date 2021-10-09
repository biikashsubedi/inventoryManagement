<!DOCTYPE html>
<html lang="en">

@include('system.auth.layout.header')

<body class="bg-login">
<!-- wrapper -->
<div class="wrapper">
    <div class="section-authentication-login d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                @include('system.layouts.message')
                <div class="card radius-15">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5">
                                <div class="text-center">
                                    <img src="{{asset('assets/images/logo-icon.png')}}" width="80" alt="">
                                    <h3 class="mt-4 font-weight-bold">{{translate('Welcome Back')}}</h3>
                                </div>

                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label>{{translate('Account Detail')}}</label>
                                        <input type="text" name="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Enter your email, username or mobile" required/>
                                        @error('email')
                                        <p class="invalid-text text-danger">{{translate($message)}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{translate('Password')}}</label>
                                        <input type="password" name="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               placeholder="Enter your password" required/>
                                        @error('password')
                                        <p class="invalid-text text-danger">{{translate($message)}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="attempt" class="custom-control-input"
                                                       id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">
                                                    {{translate('Remember Me')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group col text-right"><a href="#"><i
                                                    class='bx bxs-key mr-2'></i>{{translate('Forget Password?')}}</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mt-3 w-100">
                                        <input type="submit" class="btn btn-primary btn-block" value="Login"/>
                                        <button type="submit" class="btn btn-primary"><i
                                                class="lni lni-arrow-right"></i>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('assets/images/login-images/login-frent-img.png')}}"
                                 class="card-img login-img h-100" alt="...">
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
</body>

</html>
