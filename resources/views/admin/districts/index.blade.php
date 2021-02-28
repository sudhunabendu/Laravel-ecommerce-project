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
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    @include('admin.message')
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Division Id</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($district as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->division_id}}</td>
            <!-- <td> <img src="{{asset('public/images/categories/'.$item->image)}}" width="100" /></td> -->
            <td> <a href="{{route('admin.district.edit', $item->id)}}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              <a href="#deleteModal{{$item->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
              <!-- delete Modal -->
              <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('admin.district.delete',$item->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">Permenent Delete</button>

                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Priority</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection