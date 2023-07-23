@extends('layout.admin.layout')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <!-- /.box -->
        <a href="{{route('service.create')}}" class="btn btn-primary">New Service</a>
        <div class="box">
          <div class="box-header" style="height:50px;background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal">
            <center><h3 class="box-title">Services</h3></center>

          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding" style="background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal">
            <table class="table table-condensed">
              <tr>
                {{-- <th style="width: 10px">Specialist Id</th> --}}
                <th>Service Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($services as $i=>$service)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$service['title']}}</td>
                    <td>{{$service['description']}}</td>
                    <td> <img src="{{$service->image_path}}" style="width: 70px; height: 70px;" class="img-circle" alt=""></td>

                    <td><a class="btn btn-primary" href="{{route('service.edit',$service['id'])}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{route('service.delete',$service['id'])}}">Delete</a></td>
                  </tr>
              @endforeach

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->

  </section>
@endsection
