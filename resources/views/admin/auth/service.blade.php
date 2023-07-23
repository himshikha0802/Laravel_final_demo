@include('layouts.admin.head')
@include('layouts.admin.header')
<!--Service Section-->
<section class="service-section bg-gray section" id="service">
    <div class="container">
        <div class="section-title text-center">
            <h3>Provided
                <span>Services</span></h3>
            </h2><b>
            <p>Hospital services is a term that refers to medical and surgical services and the supporting laboratories, equipment and personnel that make up the medical and surgical mission of a hospital or hospital system.</b></p>
            </h2> </div>
        <div class="row testimonial-carousel">
            @foreach($services as $service)
            <div class="slide-item">
                <div class="inner-box">
                    <div class="img_holder">

                        <a href="service.html">
                            <img src="{{$service->image_path}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center inner-box">
                        {{-- <span>Better Service At Low Cost</span> --}}
                        <a href="service.html">
                            <h6>{{$service->title}}</h6>
                        </a>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="resources/admin/images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="resources/admin/images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="resources/admin/images/gallery/1.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Dormitory</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="resources/admin/images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="resources/admin/images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!--End Service Section-->
@include('layouts.admin.footer')
