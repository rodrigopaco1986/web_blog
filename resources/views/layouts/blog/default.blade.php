<!DOCTYPE html>
<html lang="en">

@include('layouts.blog.partials.head')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        @include('layouts.blog.partials.navbar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.blog.partials.footer')

    </div>
    <!-- ./wrapper -->

    <!-- Main scripts -->
    <script defer src="{{ mix('admin/js/default.js') }}"></script>
</body>
</html>
