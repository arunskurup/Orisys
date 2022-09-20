@extends('layouts.backend')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">


      <!-- Default box -->
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">Product</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="row">
            <div class="col-12 mr-4 ">
                <br>
                <a href="{{route('Product.create')}}">
              <input type="submit" value="Create Product" class="btn btn-success float-right pr-2 "></a>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 10%">
                        Image
                      </th>
                      <th style="width: 10%">
                        Qty
                      </th>
                      <th style="width: 20%">
                        Category
                      </th>
                      <th style="width: 10%">
                        SubCategory
                      </th>
                      <th style="width: 10%">
                        Product name
                      </th>
                      <th style="width: 20%">
                        Product details
                      </th>
                      <th style="width: 10%">
                        Price
                      </th>

                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $i=0;
                @endphp
                @foreach ($Product as $item)
                    @php
                        $i++;
                    @endphp

                <tr>
                    <td>
                        {{$i}}
                    </td>
                    <td>
                        <img src="{{$item->image}}" alt="" height="50px">
                    </td>
                    <td>
                        {{$item->qty}}
                    </td>
                    <td>
                        @php
                            $sub = \App\Models\subcategory::find($item->subcategory_id);
                        @endphp
                       {{$sub->subcategory}}
                        <br/>
                        <small>
                            Created {{$item->created_at}}
                        </small>
                    </td>
                    <td>
                        @php
                            $cre = \App\Models\category::find($item->category_id);
                        @endphp
                        {{$cre->category}}
                    </td>
                    <td>
                        {{$item->name}}
                    </td>
                    <td>
                        {{ Str::limit($item->Details, 30) }}

                    </td>
                    <td>
                        {{$item->price}}
                    </td>


                    <td class="project-actions text-right row">

                        <a class="btn btn-primary btn-sm" href="{{route('Product.update',$item->id)}}">
                            <i class="fas fa-pen">
                            </i>
                            Update
                        </a>

                        <a class="btn btn-danger btn-sm" href="{{route('Product.delete',$item->id)}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach


              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop
