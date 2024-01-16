@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
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
                    <div class="card-header">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">Create</a>
                    </div>

                    <div class="card-body table-responsice p-0">
                        <table class="table table-hover table-nowrap ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Patronymic</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user )
                                <tr>
                                    <td>{{ $user->id }}</th>
                                    <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></th>
                                    <td>{{ $user->surname }}</th>
                                    <td>{{ $user->patronymic }}</th>
                                    <td>{{ $user->email }}</th>
                                    <td>{{ $user->age }}</th>
                                    <td>{{ $user->genderTitle }}</th>
                                    <td>{{ $user->address }}</th>
                                </tr>
                                @endforeach
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