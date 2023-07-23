@extends('layout.admin.layout')
@section('content')
<section class="content" >
    <div class="row"  >
      <div class="col-md-12" >

        <!-- /.box -->
        <a class="btn btn-primary"  href="{{route('specialist.create')}}" class="btn btn-primary">New Specialist</a>
        <div class="box" >
          <div class="box-header" style="height:50px;background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal">
            <center><h4> <b>Record of Specialist:</b></h4></center>

          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding" style="background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal" >
            <table class="table table-condensed">
              <tr>
                <th style="width: 10px"></th>
                <th>SpecialistType</th>
                <th>description</th>
                {{-- <th>Status</th> --}}

                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($specialists as $i=>$specialist)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$specialist['SpecialistType']}}</td>
                    <td>{{$specialist['description']}}</td>
                    {{-- <td>{{$specialist['is_active']}}</td> --}}
                    <td>{{$specialist->doctors->count()}}</td>

                    <td><a class="btn btn-primary"  href="{{route('specialist.edit',$specialist['id'])}}">Edit</a></td>
                    <td><a class="btn btn-danger"  href="{{route('specialist.delete',$specialist['id'])}}">Delete</a></td>
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
