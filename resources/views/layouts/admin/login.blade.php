<!DOCTYPE html>
<html>

    @include('layouts.admin.partials.head')

    <body class="hold-transition login-page">

        @yield('content')

        <!-- Main scripts -->
        <script src="{{ mix('admin/js/default.js') }}"></script>

    </body>
</html>
