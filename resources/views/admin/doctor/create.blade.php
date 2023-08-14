@extends('layout.admin.layout')

@section('content')

<section class="content-header" style="border-style:ridge;border-pixel:10px;">
    <h1>
      Doctor
    </h1>

  </section>
<section class="content" style="background-color:  #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)"">

    <div class="row">
      <!-- left column -->
      <div class="col-md-12" style="background-color:  #a2cd75">
        <!-- general form elements -->
        <div class="box box-primary" style="background-color: #a2cd75;border-color:rgb(5, 159, 11)">
          <div class="box-header with-border">
            <h3 class="box-title"><center>Doctor</center></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">

            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name here...">
                <span class="text-danger">{{$errors->first('name')}}</span>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description" placeholder="description here..."></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">PhoneNumber</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phonenumber" placeholder="PhoneNumber here...">
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
                     @if($specialists)
                    @foreach ($specialists as $specialist)
                    <option value="{{$specialist['id']}}">{{$specialist['SpecialistType']}}</option>
                    @endforeach
                     @endif
                  </select>
                </div>
              </div>

            </div>
            <!-- /.box-body -->


              <button type="submit" class="btn btn-success">Submit</button>

            {{csrf_field()}}
          </form>
        </div>
        </div>
      </div>
  </section>

  @endsection

