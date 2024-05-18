@extends('layout.master')


@section('title','Contact')
@section('content')
<a name="back-to-top"></a>

    @include('layout.header')
    <div class="container-fluid   p-0">
        <div class="page-header" style="background-image: url('img/contact.jpg'); background-attachment:fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home.index') }}">Home</a>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        {{--  <div class="hr">
            <hr>
        </div>  --}}



        <div class="contact mt-0 ">
            <div class="container">
                <div class="section-header mt-32 text-center">
                    <p>Get In Touch</p>
                    <h1 class="mb-4">For Any Query</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="flaticon-address"></i>
                                <div class="contact-text">

                                    <h2>Location</h2>
                                    <p >A/22, Shreenath Park, Wonder Point,C.T.M,Ahmedabad-380026. Guj. (INDIA).</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-call"></i>
                                <div class="contact-text">
                                    <h2>Phone</h2>
                                    <p>+91 7874747616</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-send-mail"></i>
                                <div class="contact-text">
                                    <h2>Email</h2>
                                    <p> sales@diamondandcbnwheels.in <br>www.diamondandcbnwheels.in  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" action="{{ route('mail') }}" method="POST" id="contactForm" novalidate="novalidate">
                               @csrf
                                <div class="control-group">

                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                        required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message" required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#back-to-top" id="back-to-top-btn"><i class="fa-solid fa-up-long"></i></a>
    @include('layout.footer')
@endsection
