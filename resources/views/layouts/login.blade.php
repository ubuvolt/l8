<!DOCTYPE html>
<html lang="en">

    @include('dashboard.bits.head');



    <body class="bg-gradient-primary">

        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>
        <script src="{{ asset('js/sb-admin-2.min.js') }}" defer></script>

    </body>

</html>