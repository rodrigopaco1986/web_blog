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

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
              <h5>Title</h5>
              <p>Sidebar content</p>
          </div>
      </aside>
      <!-- /.control-sidebar -->

      @include('layouts.blog.partials.footer')

  </div>
  <!-- ./wrapper -->

  <!-- Main scripts -->
  <script src="{{ mix('admin/js/default.js') }}"></script>
</body>
</html>
