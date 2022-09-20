@extends('layouts.backend')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Add Category</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <form action="{{route('Category.create')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="row">
                <div class="form-group col-6">
                  <label for="inputName">Category</label>
                  <input type="text" id="Category" name="Category" class="form-control" required>
                </div>

                    <div class="form-group col-6">
                        <label for="inputName"></label>
                        <br>
                      <input type="submit" value="Add Category" class=" btn btn-success float-left">
                    </div>
                  </div>

                </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Category</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                        Category
                      </th>

                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $i=0;
                @endphp
                @foreach ($category as $item)
                    @php
                        $i++;
                    @endphp

                <tr>
                    <td>
                        {{$i}}
                    </td>
                    <td>
                       {{$item->category}}
                        <br/>
                        <small>
                            Created {{$item->created_at}}
                        </small>
                    </td>


                    <td class="project-actions text-right">

                        <a class="btn btn-danger btn-sm" href="{{route('Category.delete',$item->id)}}">
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
