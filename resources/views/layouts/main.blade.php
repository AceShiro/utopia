<!DOCTYPE html>
<html lang="en">

@include('includes.header')


<body>

    <div id="wrapper">

        @include('includes.navbar')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('title')
                        <hr>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

@include('includes.footer')

</html>