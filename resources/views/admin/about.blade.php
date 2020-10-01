<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About - Dashboard</title>

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
            <h1 class="h3 mb-0 text-gray-800">About</h1>
          <a href="{{ url('/') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Website View</a>
          </div>
         
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

                <form class="user" method="POST" action="{{ url('admin/Aboutupdate') }}" >
                  {{csrf_field()}}
  
                  <input type="hidden" name="id" value="{{ $about['0']->id }}">
  
                  <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                      <label>Contact</label>
                    <textarea class="form-control" name="content" rows="5">{{ $about['0']->content }}</textarea>
                    </div>
                  </div>
                   
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>No 1</label>
                      <input type="text" class="form-control" name="no0" value="{{ $about['0']->no0 }}">
                    </div>
                    <div class="col-sm-6">
                      <label>Lang 1</label>
                      <input type="text" class="form-control" name="lang0" value="{{ $about['0']->lang0 }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>No 2</label>
                      <input type="text" class="form-control" name="no1" value="{{ $about['0']->no1 }}">
                    </div>
                    <div class="col-sm-6">
                      <label>Lang 2</label>
                      <input type="text" class="form-control" name="lang1" value="{{ $about['0']->lang1 }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>No 3</label>
                      <input type="text" class="form-control" name="no2" value="{{ $about['0']->no2 }}">
                    </div>
                    <div class="col-sm-6">
                      <label>Lang 3</label>
                      <input type="text" class="form-control" name="lang2" value="{{ $about['0']->lang2 }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>No 4</label>
                      <input type="text" class="form-control" name="no3" value="{{ $about['0']->no3 }}">
                    </div>
                    <div class="col-sm-6">
                      <label>Lang 4</label>
                      <input type="text" class="form-control" name="lang3" value="{{ $about['0']->lang3 }}">
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
