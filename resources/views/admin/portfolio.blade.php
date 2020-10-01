<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portflio - Dashboard</title>

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
            <h1 class="h3 mb-0 text-gray-800">Portflio</h1>
          <a href="{{ url('/') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Website View</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            @if (!empty($data->id))
                
            <div class="col-lg-12 mb-4">

                <form class="user" method="POST" action="{{ url('admin/Portfolioupdate') }}" enctype="multipart/form-data">
                  {{csrf_field()}}
  
                  <input type="hidden" name="id" value="{{ $data->id }}">
  
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <img class="img-profile rounded-rounded" src="{{asset('images') }}/{{ $data->image }}" width="50px" height="50px">
                    </div>
                    <div class="col-sm-5">
                      <label>Category Tag</label>
                      <select class="form-control" name="category_tag">
                        <option value="{{ $data->category_tag }}">{{ $data->category_tag }}</option>
                        @php
                        foreach($category as $cates):
                        @endphp
                          <option value="{{ $cates->category_tag }}">{{ $cates->category_tag }}</option>
                          @php
                          endforeach
                          @endphp
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Update" >
                  </div>
                </form>
  
            </div>
                  
              @else
                  
              <div class="col-lg-12 mb-4">

                <form class="user" method="POST" action="{{ url('admin/Portfoliocreate') }}" enctype="multipart/form-data">
                  {{csrf_field()}}
  
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-sm-6">
                      <label>Category Tag</label>
                      <select class="form-control" name="category_tag">
                        @php
                        foreach($category as $cates):
                        @endphp
                          <option value="{{ $cates->category_tag }}">{{ $cates->category_tag }}</option>
                          @php
                          endforeach
                          @endphp
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Create" >
                  </div>
                </form>
  
              </div>

              @endif

              <div class="col-lg-12 mb-4">

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Category Tag</th>
                        <th>Action</th>
                    </tr>

                    @php
                        foreach($portfolio as $show):
                    @endphp
                    <tr>
                        <td>{{ $show->id }}</td>
                        <td>
                            <img class="img-profile rounded-rounded" src="{{asset('images') }}/{{ $show->image }}" width="50px" height="50px">
                        </td>
                        <td>{{ $show->category_tag }}</td>
                        <td>
                            <a href="{{route('admin/Portfolioedit',$show->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="{{route('admin/Portfoliodelete',$show->id)}}" class=" btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
