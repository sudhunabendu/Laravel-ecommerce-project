@extends('admin.adminLayout')

@section('content')
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
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
    <form role="form" class="col-lg-10" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Product Title</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Product title">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" cols="12" rows="2" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label>Price</label>
          <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Price">
        </div>

        <div class="form-group">
          <label>Quantity</label>
          <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Quantity">
        </div>

        <div class="form-group">
          <label>Slug</label>
          <input type="text" name="slug" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Slug">
        </div>

        <div class="form-group">
          <label>Select Category</label>
          <div class="select2-purple">
          <select class="form-control select2" name="category_id" data-dropdown-css-class="select2-purple" >
            <option value="">Please select the category for product</option>
            @foreach(App\Category::orderBy('name','asc')->where('parent_id', NULL)->get() as $parent)
            <option value="{{$parent->id}}">{{$parent->name}}</option>
            @foreach(App\Category::orderBy('name','asc')->where('parent_id', $parent->id)->get() as $child)
            <option value="{{$child->id}}">----->  {{$child->name}}</option>
            @endforeach
            @endforeach
          </select>
          </div>
        </div>

        <div class="form-group">
          <label>Select Brand</label>
          <div class="select2-purple">
          <select class="form-control select2" name="brand_id" data-dropdown-css-class="select2-purple" >
            <option value="">Please select the brand for product</option>
            @foreach(App\Brand::orderBy('name','asc')->get() as $brand)
            <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
          </select>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="product_img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
          <br>
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="product_img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
          <br>
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="product_img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
          <br>
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="product_img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
          <br>
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="product_img[]" class="custom-file-input" id="exampleInputFile">
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
</div>

@endsection