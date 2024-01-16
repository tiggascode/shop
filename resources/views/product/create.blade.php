@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Product</h1>
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
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title">
              </div>
              <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="Description">
              </div>
              <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Content" cols="30"  rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="Price">
              </div>
              <div class="form-group">
                <input type="text" name="count" class="form-control" placeholder="Count">
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="custom-file">
                    <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>

              <div class="form-group ">
                <select name="category_id" class="form-control select2" style="width: 100%;">
                  <option value="1" selected="selected" diabled>Select Category</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->title }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                  <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Select a Tag" style="width: 100%;">
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                  </select>
                </div>
              <div class="form-group">
                  <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Select a Color" style="width: 100%;">
                    @foreach($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->title }}</option>
                    @endforeach
                  </select>
                </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Create">
              </div>
            </form>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection