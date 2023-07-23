@include('layouts.admin.head')
@include('layouts.admin.header')
<form name="contact_form" class="default-form contact-form" action="{{route('appointment')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="text" name="Name" placeholder="Name" required="">
            </div>
            <div class="form-group">
                <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <select name="subject">
                    <option>Departments</option>
                    <option>Diagnostic</option>
                    <option>Psychological</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="text" name="Phone" placeholder="Phone" required="">
            </div>
            <div class="form-group">
                <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                <i class="fa fa-calendar" aria-hidden="true"></i>
            </div>
            <div class="form-group">
                <select name="Category">
                    <option>Doctor</option>
                    <option>Diagnostic</option>
                    <option>Psychological</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <textarea name="form_message" placeholder="Your Message" required=""></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn-style-one">submit now</button>
            </div>
        </div>
    </div>
</form>
@include('layouts.admin.footer')
