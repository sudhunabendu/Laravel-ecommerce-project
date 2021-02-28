@extends('admin.adminLayout')

@section('content')
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Brand</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="card card-primary">
    @include('admin.message')
    <form role="form" class="col-lg-10" action="{{route('admin.brand.update',$brand->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Brand Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$brand->name}}">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" cols="12" rows="2" class="form-control">
          {{$brand->description}}
          </textarea>
        </div>

        <label for="exampleInputFile">Old Brand Image</label>
        <img src="{{asset('public/images/brands/'.$brand->image)}}" width="100" />

        <div class="form-group">
          <label for="exampleInputFile">New Brand Image</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" id="image">
              <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
</div>

@endsection