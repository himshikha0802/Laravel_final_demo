@extends('layout.admin.layout')
@section('content')
<section class="content-header" >
    <h1>
      Specialist
    </h1>

  </section>
<section class="content" style="background-color:#70b8c9;border-style:ridge;border-pixel:10px;border-color:teal"">

    <div class="row" style="background-color:#a5c9d1;border-color:teal"">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" style="background-color:#a5c9d1;border-style:ridge;border-pixel:10px;border-color:teal"">
          <div class="box-header with-border">
            <h3 class="box-title">Specialist</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('specialist.update',$specialist['id'])}}" method="post">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Specialist Type</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="SpecialistType" placeholder="Specialist Type" value="{{$specialist['SpecialistType']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description">{{$specialist['description']}}</textarea>
              </div>
              {{-- <div class="checkbox">
                <label>
                  <input type="checkbox" name="is_active" {{$specialist['is_active']?'checked':null}}> Status
                </label>
              </div> --}}
            </div>
            <!-- /.box-body -->

            <div class="box-footer" style="background-color:#6bb7c9;">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
  </section>
  @endsection
