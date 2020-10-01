<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User - Dashboard</title>

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
            <h1 class="h3 mb-0 text-gray-800">User</h1>
          <a href="{{ url('/') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Website View</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            @if (!empty($data->id))
                
            <div class="col-lg-12 mb-4">

                <form class="user" method="POST" action="{{ url('admin/Cupdate') }}" >
                  {{csrf_field()}}
  
                  <input type="hidden" name="id" value="{{ $data->id }}">
  
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label>Name</label>
                      <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                      </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $data->email }}">
                    </div>
                    <div class="col-sm-4">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password" value="{{ $data->password }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Update" >
                  </div>
                </form>
  
              </div>
                  
              @else
                  
              <div class="col-lg-12 mb-4">

                <form class="user" method="POST" action="{{ url('admin/add') }}" >
                  {{csrf_field()}}
  
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                      </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="col-sm-4">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Add" >
                  </div>
                </form>
  
              </div>

              @endif

              <div class="col-lg-12 mb-4">

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>

                    @php
                        foreach($user as $show):
                    @endphp
                    <tr>
                        <td>{{ $show->id }}</td>
                        <td>{{ $show->name }}</td>
                        <td>{{ $show->email }}</td>
                        <td>{{ $show->password }}</td>
                        <td>
                            <a href="{{route('admin/edit',$show->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="{{route('admin/delete',$show->id)}}" class=" btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @php
                        endforeach
                    @endphp
                </table>

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
