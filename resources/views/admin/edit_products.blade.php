@extends('admin.adminLayout')

@section('content')
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Update Product</h1>
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
  <!-- form start -->

  <!-- <div class="container"> -->
  <div class="card card-primary">
    <!-- <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div> -->
    <!-- /.card-header -->
    <!-- form start -->
    @include('admin.message')
    <form role="form" class="col-lg-10" action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Product Title</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$product->title}}">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" cols="12" rows="2" class="form-control">{{$product->description}}</textarea>
        </div>

        <div class="form-group">
          <label>Price</label>
          <input type="number" name="price" class="form-control" id="exampleInputEmail1" value="{{$product->price}}">
        </div>

        <div class="form-group">
          <label>Quantity</label>
          <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" value="{{$product->quantity}}">
        </div>

        <div class="form-group">
          <label>Slug</label>
          <input type="text" name="slug" class="form-control" id="exampleInputEmail1" value="{{$product->slug}}">
        </div>

          <div class="form-group">
          <label>Select Category</label>
          <div class="select2-purple">
          <select class="form-control select2" name="category_id" data-dropdown-css-class="select2-purple" >
            <option value="">Please select the category for product</option>
            @foreach(App\Category::orderBy('name','asc')->where('parent_id', NULL)->get() as $parent)
            <option value="{{$parent->id}}" {{$parent->id == $product->category->id ? 'selected' : ''}} >{{$parent->name}}</option>
            @foreach(App\Category::orderBy('name','asc')->where('parent_id', $parent->id)->get() as $child)
            <option value="{{$child->id}}" {{$child->id == $product->category->id ? 'selected' : ''}} >----->  {{$child->name}}</option>
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
            @foreach(App\Brand::orderBy('name','asc')->get() as $br)
            <option value="{{$br->id}}" {{ $br->id == $product->brand->id ? 'selected' : ''}}>{{$br->name}}</option>
            @endforeach
          </select>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputFile">Product Picture</label>
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
          <label for="exampleInputFile">Product Picture</label>
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
          <label for="exampleInputFile">Product Picture</label>
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
          <label for="exampleInputFile">Product Picture</label>
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
          <label for="exampleInputFile">Product Picture</label>
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
        <button type="submit" class="btn btn-primary">Update Product</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
</div>

@endsection