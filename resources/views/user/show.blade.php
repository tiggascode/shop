@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
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
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                      </div>
                      <form action="{{ route('user.delete', $user->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                      <div class="mr-3">
                        <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
                      </div>
                    </div>
                        

                    <div class="card-body table-responsice p-0">
                        <table class="table table-hover table-nowrap ">
                            <tbody>
                                <tr>
                                    <td>Id</th>
                                    <td>{{ $user->id }}</th>
                                </tr>
                                <tr>
                                    <td>Name</th>
                                    <td>{{ $user->name }}</th>
                                </tr>
                                <tr>
                                    <td>Surname</th>
                                    <td>{{ $user->surname }}</th>
                                </tr>
                                <tr>
                                    <td>Patronymic</th>
                                    <td>{{ $user->patronymic }}</th>
                                </tr>
                                <tr>
                                    <td>Email</th>
                                    <td>{{ $user->email }}</th>
                                </tr>
                                <tr>
                                    <td>Age</th>
                                    <td>{{ $user->age }}</th>
                                </tr>
                                <tr>
                                  <td>Gender</td>
                                  <td>{{ $user->genderTitle }}</td>
                                </tr>
                                <tr>
                                    <td>Address</th>
                                    <td>{{ $user->address }}</th>
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