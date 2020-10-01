<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Setting - Dashboard</title>

  <!-- Custom fonts for this template-->
@include('filecss')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
 @include('adminside')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
      @include('adminnav')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Setting</h1>
          <a href="{{ url('/') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Website View</a>
          </div>
         
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <form class="user" method="POST" action="{{ url('admin/update') }}" enctype="multipart/form-data">
                {{csrf_field()}}

                <input type="hidden" name="id" value="{{ $setting['0']->id }}">

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Location</label>
                  <input type="text" class="form-control" name="location" value="{{ $setting['0']->location }}">
                  </div>
                  <div class="col-sm-4">
                    <label>Contact</label>
                    <input type="text" class="form-control" name="contact" value="{{ $setting['0']->contact }}">
                  </div>

                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Work & Footer Background Color</label>
                    <input type="color" class="form-control" name="color" value="{{ $setting['0']->color }}">
                  </div>
                </div>
 
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $setting['0']->email }}">
                  </div>
                  <div class="col-sm-6">
                    <label>Footer</label>
                    <input type="text" class="form-control" name="footer" value="{{ $setting['0']->footer }}">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6">
                    <label>Favicon</label>
                    <input type="file" class="form-control" name="favicon" value="">
                  </div>

                  <div class="col-sm-6">
                    <label>Logo</label>
                    <input type="file" class="form-control" name="logo" value="">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6">
                   <img src="{{asset('images') }}/{{ $setting['0']->favicon }}" >
                  </div>

                  <div class="col-sm-6">
                    <img src="{{asset('images') }}/{{ $setting['0']->logo }}" >
                  </div>
                </div>

                <div class="col-sm-6">
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit" >
                </div>
              </form>

            </div>
 
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     
      @include('filejs')

</body>

</html>
