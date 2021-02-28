@extends('admin.adminLayout')

@section('content')
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Diviision</h1>
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
    <form role="form" class="col-lg-10" action="{{route('admin.division.update',$divisions->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>divisions Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$divisions->name}}">
        </div>
        <div class="form-group">
          <label>Priority</label>
          <input type="text" name="priority" class="form-control" id="exampleInputEmail1" value="{{$divisions->priority}}">
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