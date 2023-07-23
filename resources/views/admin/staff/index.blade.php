@extends('layout.admin.layout')
@section('content')
<section class="content" >
    <div class="row" >
      <div class="col-md-12">

        <!-- /.box -->
        <a href="{{route('staff.create')}}" class="btn btn-primary">NEW STAFF:</a>
        <div class="box"  >
          <div class="box-header" style="height:50px;background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal">
            <center><h3 class="box-title">STAFF RECORDS</h3></center>

          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding" style="background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal" >
            <table class="table table-condensed" >
              <tr>
                <th style="width: 10px"></th>
                <th>NAME</th>
                <th>AGE</th>
                <th>QUALIFICATION</th>
                <th>SALARY</th>
                <th>ADDRESS</th>
                <th>POST</th>

                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($staff as $i=>$staff)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$staff['name']}}</td>
                    <td>{{$staff['age']}}</td>
                    <td>{{$staff['qualification']}}</td>
                    <td>{{$staff['salary']}}</td>
                    <td>{{$staff['address']}}</td>
                    <td>{{$staff['post']}}</td>


                    <td><a class="btn btn-info"  href="{{route('staff.edit',$staff['id'])}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{route('staff.delete',$staff['id'])}}">Delete</a></td>
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
