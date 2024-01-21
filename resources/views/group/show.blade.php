@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Group</h1>
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
                        <a href="{{ route('group.edit', $group->id) }}" class="btn btn-primary">Edit</a>
                      </div>
                      <form action="{{ route('group.delete', $group->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                      <div class="mr-3">
                        <a href="{{ route('group.index') }}" class="btn btn-primary">Back</a>
                      </div>
                    </div>
                        

                    <div class="card-body table-responsice p-0">
                        <table class="table table-hover table-nowrap ">
                            <tbody>
                                <tr>
                                    <td>Id</th>
                                    <td>{{ $group->id }}</th>
                                </tr>
                                <tr>
                                    <td>Title</th>
                                    <td>{{ $group->title }}</th>
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