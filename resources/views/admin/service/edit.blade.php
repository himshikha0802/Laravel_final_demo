@extends('layout.admin.layout')
@section('content')
<section class="content-header" style="background-color: #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">
    <h1>
        Services
    </h1>

  </section>
<section class="content" style="background-color: #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">

    <div class="row" style="background-color: #a2cd75;border-color:rgb(5, 159, 11)">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" style="background-color: #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">
          <div class="box-header with-border">
            <h3 class="box-title">Services</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('service.store',$service['id'])}}" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Name" value="{{$service['title']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description">{{$service['description']}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image" v value="{{$service['image']}}">
              </div>
              <div class="box-footer" style="background-color: #a2cd75;">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
              {{csrf_field()}}
            </form>
          </div>
          </div>
        </div>
    </section>
    @endsection
