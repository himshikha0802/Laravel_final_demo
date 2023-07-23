@extends('layout.admin.layout')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <!-- /.box -->
        <a  class="btn btn-primary" href="{{route('doctor.create')}}" class="btn btn-primary">New Doctor</a>
        <div class="box">
          <div class="box-header" style="height:50px;background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal">
            <center><h4> <b>Record of Doctors:</b></h4></center>

          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding" style="background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal">
            <table class="table table-condensed">
              <tr>
                {{-- <th style="width: 10px">Specialist Id</th> --}}
                <th>Doctor Id</th>
                <th>Name</th>
                <th>description</th>
                <th>PhoneNumber</th>
                <th>Image</th>
                <th>Doctor's Specialist</th>
                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($doctors as $i=>$doctor)
              {{-- @dd($doctor) --}}
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$doctor['Name']}}</td>
                    <td>{{$doctor['description']}}</td>
                    <td>{{$doctor['PhoneNumber']}}</td>
                    <td> <img src="{{$doctor->image_path}}" style="width: 70px; height: 70px;" class="img-circle" alt=""></td>
                    <td>{{$doctor->specialist->SpecialistType ?? ""}}</td>

                    <td><a class="btn btn-primary" href="{{route('doctor.edit',$doctor['id'])}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{route('doctor.delete',$doctor['id'])}}">Delete</a></td>
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
