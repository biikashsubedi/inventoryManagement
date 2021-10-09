<!DOCTYPE html>
<html lang="en">

@include('system.layouts.header')

<body>
<div id="global-loader">
    <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<div class="wrapper">
    @include('system.layouts.sidebar')
    @include('system.layouts.navHeader')
    <div class="page-wrapper">
        <div class="page-content-wrapper">
            <div class="page-content">

                @yield('content')

            </div>
        </div>
    </div>
    <div class="overlay toggle-btn-mobile"></div>
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <div class="footer">
        <p class="mb-0">Bikki @2021 | Developed By : <a href="#" target="_blank">Bikki Soft</a>
        </p>
    </div>
</div>

@include('system.layouts.jsScripts')
<script>
    $("#global-loader").fadeOut("slow");
</script>
</body>

</html>
