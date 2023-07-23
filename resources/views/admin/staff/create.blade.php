@extends('layout.admin.layout')
@section('content')

<section class="content" >

    <div class="row">
      <!-- left column -->
      <div class="col-md-12" >
        <!-- general form elements -->
        <div class="box box-primary" style="background-color:#a5c9d1;">
          <div class="box-header with-border">
           <center> <h3 class="box-title"><b>Lets add new staff:</b></h3></center>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('staff.store')}}" method="post">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NAME:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name Here...">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">AGE:</label>
                <textarea type="text" class="form-control" name="age" placeholder="Age Here..."></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">QUALIFICATION:</label>
                <textarea type="text" class="form-control" name="qualification" placeholder="Qualification Here..."></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">SALARY:</label>
                <textarea type="text" class="form-control" name="salary" placeholder="Salary Here..."></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ADDRESS:</label>
                <textarea  type="text" class="form-control" name="address" placeholder="Address Here..."></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">POST:</label>
                <textarea  type="text" class="form-control" name="post" placeholder="Post Here..."></textarea>
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer"  style="background-color:rgb(140, 173, 196)">
              <button type="submit" class="btn btn-success" >Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
  </section>
  @endsection
