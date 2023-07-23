@extends('layout.admin.layout')
@section('content')
<section class="content-header" style="background-color:#70b8c9;border-style:ridge;border-pixel:10px;border-color:teal"">
    <h1>
        Patient
    </h1>

  </section>
<section class="content" style="background-color:#69a8b6;border-style:ridge;border-pixel:10px;border-color:teal"">

    <div class="row" style="background-color:#a5c9d1;border-color:teal"">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" style="background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal"">
          <div class="box-header with-border">
            <h3 class="box-title">Patient</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('patient.update',$patient['id'])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name"  value="{{$patient['name']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description">{{$patient['description']}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="contact" placeholder="PhoneNumber"  value="{{$patient['contact']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="PhoneNumber"  value="{{$patient['address']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="age" placeholder="PhoneNumber"  value="{{$patient['age']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image"  value="{{$patient['image']}}">
              </div>
              <div class="box-footer" style="background-color:#6bb7c9;">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          </div>
        </div>
    </section>
    @endsection
