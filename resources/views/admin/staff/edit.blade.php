@extends('layout.admin.layout')
@section('content')
<section class="content-header" >
    <h1>
      STAFF RECORD
    </h1>

  </section>
<section class="content"  style="background-color: #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">

    <div class="row" style="background-color: #a2cd75;border-color:rgb(5, 159, 11)">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary"  style="background-color: #a2cd75;border-style:ridge;border-pixel:10px;border-color:rgb(5, 159, 11)">
          <div class="box-header with-border" >
            <h3 class="box-title">Staff record</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('staff.update',$staff['id'])}}" method="post">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NAME:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name Here.." value="{{$staff['name']}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">AGE:</label>
                <textarea type="text" class="form-control" name="age">{{$staff['age']}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">QUALIFICATION:</label>
                <textarea type="text" class="form-control" name="qualification">{{$staff['qualification']}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">SALARY:</label>
                <textarea type="text" class="form-control" name="salary">{{$staff['salary']}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ADDRESS:</label>
                <textarea type="text" class="form-control" name="address">{{$staff['address']}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">POST:</label>
                <textarea type="text" class="form-control" name="post">{{$staff['post']}}</textarea>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer" style="background-color: #a2cd75;">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
  </section>
  @endsection
