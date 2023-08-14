
<form name="contact_form" class="default-form contact-form" action="{{route('appointment')}}" method="post">
    @csrf
    
                @extends('layout.user.layout')
                @section('content')
                <section class="content">
                    <div class="row">
                      <div class="col-md-12">
                
                        <!-- /.box -->
                
                        <div class="box" style="background-color:#58ea69;border-style:ridge;border-pixel:10px;border-color:rgb(105, 35, 197)">
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
           
</form>
