<!-- Contact Section -->
@include('layouts.admin.head')
@include('layouts.admin.header')

<!-- Contact Section -->
<section class="appoinment-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="accordion-section">
    <div class="section-title">
        <h3>FAQ</h3>
    </div>
    <div class="accordion-holder">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Why Should I choose jivandan?
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        Hospitality management is a perfect blend of day-to-day business activities and customer service. It imparts the skills of customer service which is the core of nearly every role you are ever going to perform. You will also be working behind the scenes in positions that may include food service and catering. Hospitality management includes handling different types of businesses including hotels, restaurant chains, resorts, casinos, travel and tour agencies and airlines. Graduates with Bachelors in Hospitality Management are polished in their skills to become and continue to be effective managers and supervisors
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            What are the Centre’s visiting hours?
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        For patients, hospital is a place for treatment and recovery. Keep this in mind when planning your hospital visit. Before you leave home, check with the hospital to make sure the patient is well enough to see you.

                        Patients may also be away from their room during the day for tests and other treatment or therapies. Knowing this in advance means you will not make the trip to the hospital only to be refused entry or to have a long wait to see the patient.

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            How many visitors are allowed?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Visitors are an important part of the recovery process and are welcome in hospitals. Visitors can help people recover faster, and also help reduce their anxiety and stress. However, it is up to the person in hospital to decide if they want visitors, and visitors must also respect hospital policies and visiting hours.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area">
    <div class="section-title">
        <h3>Request
            <span>Appointment</span>
        </h3>
    </div>

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
</div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
@include('layouts.admin.footer')
<!-- End Contact Section -->
