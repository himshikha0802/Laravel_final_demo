@extends('layout.admin.layout')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <!-- /.box -->
        <a href="{{route('patient.create')}}" class="btn btn-success">New Patient</a>
        <div class="box">
          <div class="box-header" style="height:50px;background-color:#9cf4a8;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">
           <center> <h3 class="box-title">Patients</h3></center>

          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding" style="background-color:#c7edb5;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">
            <table class="table table-condensed">
              <tr>
                {{-- <th style="width: 10px">Specialist Id</th> --}}
                <th>Patient Id</th>
                <th>Name</th>
                <th>description</th>
                <th>Contact</th>
                <th>Image</th>
                <th>Address</th>
                <th>Age</th>
                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($patients as $i=>$patient)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$patient['name']}}</td>
                    <td>{{$patient['description']}}</td>
                    <td>{{$patient['contact']}}</td>
                    <td> <img src="{{$patient->image_path}}" style="width: 70px; height: 70px;" class="img-circle" alt=""></td>
                    <td>{{$patient['address']}}</td>
                    <td>{{$patient['age']}}</td>

                    <td><a class="btn btn-success" href="{{route('patient.edit',$patient['id'])}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{route('patient.delete',$patient['id'])}}">Delete</a></td>
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
