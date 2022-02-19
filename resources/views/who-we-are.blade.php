@extends('main')

@section('title', '| Who We Are')

@section('style')

@endsection

@section('content')
<div id="slider-wrap">
        <div id="slider" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
            <div class="carousel-inner">
                <div class="item active">
                    <img data-mobile-src="{{ asset('public/images/banner/mobile/who-we-are1.jpg') }}" data-desktop-src="{{ asset('public/images/banner/who-we-are1.jpg') }}" alt="">
                </div>
               <div class="item">
                    <img data-mobile-src="{{ asset('public/images/banner/mobile/who-we-are2.jpg') }}" data-desktop-src="{{ asset('public/images/banner/who-we-are2.jpg') }}" alt="">
                </div>
               
            </div>
            <div class="carousel-navigation">
                <a class="left carousel-control" href="#slider" role="button" data-slide="prev"><span
                    class="glyphicon glyphicon-chevron-left icon-left-open-big" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span> </a><a class="right carousel-control" href="#slider"
                        role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right icon-right-open-big"
                            aria-hidden="true"></span><span class="sr-only">Next</span> </a>
            </div>
            <div class="clearfix">
            </div>
        </div>

     
    </div>
    <div id="PageContent" class="pad30 about-us">
        <div class="container">
            <h1 class="section-head">About Us</h1>
            <div class="modiTabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#Who-We-Are">Who We Are</a></li>
                   
                    <li><a data-toggle="tab" href="#Workshop">Workshop</a></li>
                    
                    <li><a data-toggle="tab" href="#Careers">Careers</a></li>
                    
                </ul>
            </div>
            <div class="ModiContent tab-content">
                <div role="tabpanel" class="tab-pane active" id="Who-We-Are">
                    <h2>Who We Are
                    </h2>
                    <p>
                        Ahuja Auto Abhikaran, an authorized service dealership for Mahindra in Indore. Started in May 2016, It is strategically located in Indore. 
Dedication, commitment and the desire to attain perfection are the priceless attributes which has kept us ahead in the never ending marathon of achievements.


                    </p>
                    <h2>Vision
                    </h2>
                    <p>
                        Ahuja Auto Abhikaran visualize to be one of the leading dealership of Mahindra with modern operations services.
                    </p>
                    <h2>Mission
                    </h2>
                    <p>
                        Ahuja Auto Abhikaran provides highest level of customer satisfaction through service with the help of highly trained & skilled manpower which will cope-up with new technology.
                    </p>
                    <h2>Our Services
                    </h2>
                    <p>
                        Ahuja Auto Abhikaran services are well equipped with ultra modern facilities to take care of your vehicles. We also undertake total maintenance plan for all vehicles to give 
hassle free relationship.
                    </p>
                    <p>
                        Service quality is never compromised and our sole mode of advertisement remains the references given by our satisfied customers to friends and associates. This was possible 
only because of treating every customer like a king and giving him added value for his time, money and trust. You get all your car requirements under one roof, beneath which, 
Customer Care is not an option, but a way of life.
                    </p>
                    <ul>
                        <li>Key highlights of our services</li>
                        <li>No prior Appointments required</li>
                     
                        <li>Free Pick up & Delivery Services
                        </li>
                        <li>Trained Supervisors & Technicians

     Dedicated work force of 300 plus staffs</li>
                        <li>Mechanical Deputations for Emergency Break Down provided 24x7.</li>
                        <li>Car Detailing, Anti-Rust Treatments, Surface Refinement, Interior Cleaning etc with world renowned 3M products.</li>
                        <li>Oven Baked Booth Painting Process</li>
                        <li>Computerized Paint Mixing Booth Stupendous & Infinite Range Of Paints</li>
                        <li>Insurance renewal with Cashless facilities.</li>
                    </ul>



                </div>
              
                <div role="tabpanel" class="tab-pane" id="Workshop">
                   

                      
                      <div class="picsgrid">
                       
                        <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/1.jpg') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/2.jpg') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/3.jpg') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/4.jpg') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/5.jpg') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/6.jpg') }}" /></a>
                        </div>
                         <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/7.jpg') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/8.jpg') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/9.jpg') }}" /></a>
                        </div>
                            <div class="col-sm-4 col-md-3 col-xs-6">
                            <a href="#" class="feather" data-featherparent="workshop">
                                <img src="{{ asset('public/images/about/workshop/thumbs/10.jpg') }}" /></a>
                        </div>
                    </div>
                    <link href="{{ asset('public/css/featherlight.min.css') }}" rel="stylesheet" type="text/css" />
                    <script src="{{ asset('public/js/featherlight.min.js') }}" type="text/javascript" charset="utf-8"></script>
                    <script src="{{ asset('public/js/featherlight.gallery.min.js') }}" type="text/javascript" charset="utf-8"></script>
                </div>
                


                <div role="tabpanel" class="tab-pane" id="Careers">
                    <h3>Careers</h3>
                    Coming Soon
                </div>


                
            </div>
        </div>
    </div>
@endsection