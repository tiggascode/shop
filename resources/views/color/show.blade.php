@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Color</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Main</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex p-3">
                      <div class="mr-3">
                        <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary">Edit</a>
                      </div>
                      <form class="mr-3" action="{{ route('color.delete', $color->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                      <div class="mr-3">
                        <a href="{{ route('color.index') }}" class="btn btn-primary">Back</a>
                      </div>
                    </div>
                        

                    <div class="card-body table-responsice p-0">
                        <table class="table table-hover table-nowrap ">
                            <tbody>
                                <tr>
                                    <td>Id</th>
                                    <td>{{ $color->id }}</th>
                                </tr>
                                <tr>
                                    <td>Title</th>
                                    <td>{{ $color->title }}</th>
                                </tr>
                                <tr>
                                  <td>Color</td>
                                  <td><i class="fas fa-square"  style="color:{{ $color->title }}"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection