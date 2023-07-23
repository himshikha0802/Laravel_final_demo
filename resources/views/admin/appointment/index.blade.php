@extends('layout.admin.layout')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <!-- /.box -->

        <div class="box" style="background-color:#a0c9da;border-style:ridge;border-pixel:10px;border-color:teal">
          <div class="box-header">
            <h3 class="box-title">APPOINTMENTS:</h3>

          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
              <form method="POST" action="{{route('approved')}}">
                @csrf
            <table class="table table-condensed">
              <tr>
                {{-- <th style="width: 10px">Specialist Id</th> --}}
                <th >NAME</th>
                <th>EMAIL</th>
                <th>SUBJECT</th>
                <th>PHONE</th>
                <th>DATE</th>
                <th>CATEGORY</th>
                <th>STATUS</th>
                <th style="width: 40px">MESSAGE</th>
              </tr>
              @foreach ($data as $appointment)
              {{-- @dd($doctor)--}}
                  <tr>
                    <td style="display:none">{{$appointment['id']}}</td>
                    <td>{{$appointment['Name']}}</td>
                    <td>{{$appointment['Email']}}</td>
                    <td>{{$appointment['subject']}}</td>
                    <td>{{$appointment['Phone']}}</td>
                    <td>{{$appointment['Date']}}</td>
                    <td>{{$appointment['Category']}}</td>
                    <td>{{$appointment['status']}}</td>
                    <td>{{$appointment['form_message']}}</td>
                    <td>

                        {{-- <a class="btn btn-success" href="{{url('approved',$appointment->id)}}">Approved</a></td> --}}

                        <a class="btn btn-success" href="{{route('approve-patient', $appointment->id)}}" type="submit">Approve</button>
                            <a class="btn btn-warning" href="{{route('cancel-patient', $appointment->id)}}" type="submit">Cancel</button>
                                <a  class="btn btn-danger" href="{{route('appointment.delete',$appointment['id'])}}" type="submit">Delete</a>
                   {{-- <td><a href="{{route('apps.delete',$apps['id'])}}">Delete</a></td>
                   <td><a href="{{route('apps.edit',$apps['id'])}}">Edit</a></td>--}}

                  </tr>
                 @endforeach

            </table>
              </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->

  </section>
@endsection
