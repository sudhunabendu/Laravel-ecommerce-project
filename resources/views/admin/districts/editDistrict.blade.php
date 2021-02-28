@extends('admin.adminLayout')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Districts</h1>
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
    <form role="form" class="col-lg-10" action="{{route('admin.district.update',$district->id)}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$district->name}}">
        </div>
        <div class="form-group">
          <label>Select a division for this district</label>
          <select name="division_id" class="form-control">
          <option value="">Select a division for the district</option>
          @foreach($divisions as $division)
          <option value="{{$division->id}}"{{$district->division->id == $division->id ? 'selected' : ''}}>{{$division->name}}</option>  
          @endforeach
          </select>
        </div>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
</div>

@endsection