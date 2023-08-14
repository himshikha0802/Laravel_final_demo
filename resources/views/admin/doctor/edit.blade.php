@extends('layout.admin.layout')
@section('content')
<section class="content-header" style="background-color: #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">
    <h1>
      Doctor
    </h1>

  </section>
<section class="content" style="background-color: #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">

    <div class="row" style="background-color: #a2cd75;border-color:teal"">
      <!-- left column -->
      <div class="col-md-12" >
        <!-- general form elements -->
        <div class="box box-primary" style="background-color: #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">
          <div class="box-header with-border">
            <h3 class="box-title">Doctor</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('doctor.update',$doctor['id'])}}" method="post" enctype="multipart/form-data">

            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name" value="{{$doctor['Name']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description">{{$doctor['description']}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">PhoneNumber</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phonenumber" placeholder="PhoneNumber" value="{{$doctor['PhoneNumber']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image" >
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3">Specialist</label>
                <div class="col-sm-9">
                  <select class="form-control mb-3" name="specialist_id">
                    <option value="" selected disabled>
                      --Select Doctor Specialist--
                    </option>
                    {{-- @if($specialists) --}}
                    @foreach ($specialists as $specialist)
                    <option value="{{$specialist['id']}}" {{$specialist->id == $doctor->specialist_id ? 'selected':''}}>{{$specialist['SpecialistType']}}</option>
                    @endforeach
                    {{-- @endif --}}
                  </select>
                </div>
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer" style="background-color: #a2cd75;">
              <button type="submit" class="btn btn-success" >Submit</button>
            </div>
            {{csrf_field()}}
          </form>
        </div>
        </div>
      </div>
  </section>
  @endsection
