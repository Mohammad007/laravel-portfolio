<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Profile - Dashboard</title>

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
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
          <a href="{{ url('/') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Website View</a>
          </div>
         
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <div class="col-lg-12 mb-4">

                <form class="user" method="POST" action="{{ url('admin/Pupdate') }}" enctype="multipart/form-data">
                  {{csrf_field()}}
  
                  <input type="hidden" name="id" value="{{ $profile['0']->id }}">
  
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $profile['0']->name }}">
                    </div>
                    <div class="col-sm-4">
                      <label>Posts</label>
                      <input type="text" class="form-control" name="posts" value="{{ $profile['0']->posts }}">
                    </div>
  
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <label>DOB</label>
                      <input type="text" class="form-control" name="dob" value="{{ $profile['0']->dob }}">
                    </div>
                  </div>
   
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="{{ $profile['0']->email }}">
                    </div>
                    <div class="col-sm-6">
                      <label>Status</label>
                      <input type="text" class="form-control" name="status" value="{{ $profile['0']->status }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>LinkedIn</label>
                      <input type="text" class="form-control" name="lin" value="{{ $profile['0']->lin }}">
                    </div>
                    <div class="col-sm-6">
                      <label>Instagram</label>
                      <input type="text" class="form-control" name="ins" value="{{ $profile['0']->ins }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Facebook</label>
                      <input type="text" class="form-control" name="fb" value="{{ $profile['0']->fb }}">
                    </div>
                    <div class="col-sm-6">
                      <label>Twitter</label>
                      <input type="text" class="form-control" name="twi" value="{{ $profile['0']->twi }}">
                    </div>
                  </div>
  
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>CV</label>
                      <input type="file" class="form-control" name="cv" value="">
                    </div>
  
                    <div class="col-sm-6">
                      <label>Profile</label>
                      <input type="file" class="form-control" name="profile" value="">
                    </div>
                  </div>
  
                  <div class="form-group row">
                    <div class="col-sm-6">
                     <img src="{{asset('images') }}/{{ $profile['0']->cv }}" >
                    </div>
  
                    <div class="col-sm-6">
                      <img src="{{asset('images') }}/{{ $profile['0']->profile }}" width="100px" height="100px">
                    </div>
                  </div>
  
                  <div class="col-sm-6">
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit" >
                  </div>
                </form>
  
              </div>
             
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
