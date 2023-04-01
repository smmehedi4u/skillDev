@extends('layouts.master')

@section('content')

        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                            <div class="d-flex align-items-center mb-5">
                                <div class="btn-icon bg-primary mr-4">
                                    <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="mt-n1">
                                    <h4>Our Location</h4>
                                    <p class="m-0">Dr Kazi Mutaher Hossen Road, Kamolapur, Faridpur</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div class="btn-icon bg-secondary mr-4">
                                    <i class="fa fa-2x fa-phone-alt text-white"></i>
                                </div>
                                <div class="mt-n1">
                                    <h4>Call Us</h4>
                                    <p class="m-0">+01405-715961</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="btn-icon bg-warning mr-4">
                                    <i class="fa fa-2x fa-envelope text-white"></i>
                                </div>
                                <div class="mt-n1">
                                    <h4>Email Us</h4>
                                    <p class="m-0">meiras@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                            <h1 class="display-4">Send Us A Message</h1>
                        </div>
                        <div class="contact-form">
                            @if (session()->has('successInbox'))
                                <div class="alert alert-success">{{session('successInbox')}}</div>
                            @endif
                            <form method="post" action="{{route('inbox.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name"  required="required">
                                            @error("name")
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required="required">
                                        @error("email")
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" value="{{old('subject')}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required="required">
                                    @error("subject")
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea name="message" value="{{old('message')}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required="required"></textarea>
                                    @error("message")
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div>
                                    <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


@endsection
