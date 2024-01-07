
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wolf | Projektmanagement</title>

    @include('layouts.template-scripts.head-scripts')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

   @include('layouts.template-scripts.navbar')

    @include('layouts.template-scripts.sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

   @include('layouts.template-scripts.footer')

</div>
<!-- ./wrapper -->

@include('layouts.template-scripts.footer-scripts')

</body>
</html>
