@extends('layouts.backend')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if (isset($product))
        <form action="{{route('Product.Update',$product->id)}}" method="post" enctype="multipart/form-data" >
        @else
        <form action="{{route('Product.created')}}" method="post" enctype="multipart/form-data" >
        @endif

            @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Product</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body row">
              <div class="form-group col-6">
                <label for="inputName">Product Name</label>
                <input type="text" name="name" id="inputName" class="form-control" @if (isset($product))
                    value="{{$product->name}}"
                @endif required>
              </div>
              <div class="form-group col-6">
                <label for="inputName">Product Price</label>
                <input type="text" id="inputName" name="price" class="form-control" @if (isset($product))
                value="{{$product->price}}"
            @endif required>
              </div>
              <div class="form-group col-12">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" name="Description" class="form-control" rows="4" @if (isset($product))
                value="{{$product->Details}}"
            @endif required>
            @if (isset($product))
            {{$product->Details}}
        @endif</textarea>
              </div>
              <div class="form-group col-6">
                <label for="inputStatus">Category</label>
                <select onchange="changesub()" name="Category" id="Category" class="form-control custom-select" required>

                  @foreach ($category as $item)
                      <option @if (isset($product))
                      @if ($product->category_id == $item->id)
                      selected
                      @endif
                  @endif value="{{$item->id}}">{{$item->category}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-6">
                <label for="Subcategory">Subcategory</label>
                <select name="Subcategory" id="Subcategory" class="form-control custom-select" required>
                    @foreach ($subcategory as $item)
                    <option @if (isset($product))
                    @if ($product->subcategory_id == $item->id)
                    selected
                    @endif
                @endif  value="{{$item->id}}">{{$item->subcategory}}</option>
                @endforeach

                </select>
              </div>

              <div class="form-group col-6">
                <label for="inputName">Image</label>
                <input type="file" id="image" name="image" class="form-control"@if (!isset($product)) required @endif >
                @if (isset($product))
                <br>
                <label for="inputName">Old Image</label>
                   <img src="{{$product->image}}" height="50px" alt="" srcset="">
                @endif
              </div>
              <div class="form-group col-6">
                <label for="inputName">stock</label>
                <input type="number" id="qty" name="qty" class="form-control" min="1"@if (isset($product))
                value="{{$product->qty}}"
            @endif required>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <a href="{{route('Product')}}" class="btn btn-secondary">Cancel</a>
          <input type="submit" @if (isset($product))
          value="Update Project"
          @else
          value="Create new Project"
          @endif  class="btn btn-success float-right">
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
@stop
@section('script')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>

</script>
@stop
