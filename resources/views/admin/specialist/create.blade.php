@extends('layout.admin.layout')
@section('content')
<section class="content-header" >
    <h1>
      Specialist
    </h1>

  </section>
<section class="content" >

    <div class="row" >
      <!-- left column -->
      <div class="col-md-12" >
        <!-- general form elements -->
        <div class="box box-primary" style="background-color:#a5c9d1;" >
          <div class="box-header with-border" >
            <h3 class="box-title">Specialist</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('specialist.store')}}" method="post">
            {{csrf_field()}}
            <div class="box-body" >
              <div class="form-group">
                <label for="exampleInputEmail1">SpecialistType</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="SpecialistType" placeholder="Specialist here...">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description" placeholder="descripiton here..."></textarea>
              </div>
              {{-- <div class="checkbox">
                <label>
                  <input type="checkbox" name="is_active"> Status
                </label>
              </div> --}}
            </div>
            <!-- /.box-body -->

            <div class="box-footer"  style="background-color:rgb(140, 173, 196)";>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
  </section>
  @endsection
