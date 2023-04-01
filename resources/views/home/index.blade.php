@extends('layouts.master')

@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
            <h1 class="text-white display-1 mb-5">Education Courses</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <form action="{{route('course')}}" method="get">
                <div class="input-group">
                    {{-- <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div> --}}
                    <input type="text" name="q" class="form-control border-light" style="padding: 30px 25px;" placeholder="Search Course ..">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
       <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                        <h1 class="display-4">Online Education Anywhere</h1>
                    </div>
                    <p>
                        MEIRAS is a web-based platform that is flexible, accessible, and personalized.
                        Students can learn at their own pace, from anywhere with an internet connection.
                        The software offers a range of courses that are designed to help students develop
                        a variety of skills, from programming and graphic design to leadership and public
                        speaking. It provides a comprehensive learning experience for students who are seeking
                        to acquire new skills and knowledge. The platform also provides tools for tracking progress
                        and achievement, allowing students to build a personalized learning portfolio that they can
                        showcase to potential employers or educational institutions. Overall, MEIRAS offers a modern
                        and convenient solution to the limitations of traditional classroom-based learning.
                    </p>
                    <div class="row pt-3 mx-0">
                        <div class="col-4 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">5</h1>
                                <h6 class="text-uppercase text-white">Online<span class="d-block">Courses</span></h6>
                            </div>
                        </div>
                        <div class="col-4 px-0">
                            <div class="bg-secondary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">3</h1>
                                <h6 class="text-uppercase text-white">Skilled<span class="d-block">Instructors</span></h6>
                            </div>
                        </div>
                        <div class="col-4 px-0">
                            <div class="bg-warning text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">6</h1>
                                <h6 class="text-uppercase text-white">Happy<span class="d-block">Users</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6>
                        <h1 class="display-4">Why You Should Start Learning with Us?</h1>
                    </div>
                    <p class="mb-4 pb-2">
                        With MEIRAS, students can access a wide range of courses that are developed by industry
                        and professionals. The platform provides an interactive and engaging learning experience
                        that includes quizzes, assessments, and projects. Upon completion of the courses, students
                        will earn certificates that can be added to their profiles and shared with potential employers.
                        Students can also submit their feedback which is heavily considered for the upcoming update.
                    </p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Free Courses</h4>
                            <p>
                                MEIRAS provides numerous free courses of various genres.
                                All the courses are in the palm of your hand.
                                So grab this opportunity to enhance your skill to a different level.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-pen-nib text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Self Test</h4>
                            <p>
                                MEIRAS provides you with the opportunity to test yourself.
                                This feature allows you to take small quizzes about the topic
                                and courses which will be used for the assessment of your accomplishments.
                                Challenge yourself with these questions
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-user text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Create profile</h4>
                            <p class="m-0">
                                MEIRAS contains a profile of each student. This profile holds the accomplishments
                                of a student by denoting the number of courses completed successfully and
                                the corresponding results. It acts as a document for all of your achievements
                                which can be used for future life. So start developing your profile today.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- Courses Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Courses</h6>
                        <h1 class="display-4">Checkout New Releases Of Our Courses</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-3 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="{{}}">
                        <img class="img-fluid" src="{{asset('image/'.$course->image)}}" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">{{$course->name}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </div>
</div> --}}
    <!-- Courses End -->

     <!-- Courses Start -->
     <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Courses</h6>
                    <h1 class="display-4">Checkout New Releases Of Our Courses</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-1.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Programming with C for beginners</h4>
                    <div class="border-top w-100 mt-3">

                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="/course">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-2.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Programming with JAVA</h4>
                    <div class="border-top w-100 mt-3">

                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="/course">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-3.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Learning English</h4>
                    <div class="border-top w-100 mt-3">

                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="/course">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-4.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">General Knowledge</h4>
                    <div class="border-top w-100 mt-3">

                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="/course">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-5.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Application Design & Development courses for beginners</h4>
                    <div class="border-top w-100 mt-3">

                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="/course">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-6.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                    <div class="border-top w-100 mt-3">
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="/course">Course Detail</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Courses End -->



    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
                <h1 class="display-4">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/irfan.png" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Irfan Khan</h5>
                        <p class="mb-2">Software Engineer</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/asmina.png" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Asmina Airin</h5>
                        <p class="mb-2">Web Designer</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/mehedi.png" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Mehedi Hasan</h5>
                        <p class="mb-2">Software Developer</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="section-title position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                            <h1 class="display-4">What Say About Our MEIRAS</h1>
                        </div>
                        <p class="m-0">
                            Users can willingly provide their feedback about the course or any other specific topic.
                            The user comment section can provide valuable feedback and insights into the user experience
                            of the MEIRAS platform. Users can share their opinions, suggestions, and concerns about the
                            platform, which can be used to improve the platform and make it more user-friendly.
                            This feedback can also help to identify any issues or bugs that may be affecting the platform's functionality,
                            allowing for prompt resolution.
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="bg-white p-5">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                                <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                    <img class="img-fluid mr-4" src="img/samsulsir.jpg" alt="">
                                    <div>
                                        <h5>Md Shamsul Islam</h5>
                                        <span>Assistant Professor,FEC</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-5">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                                <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                    <img class="img-fluid mr-4" src="img/sumonsir.jpg" alt="">
                                    <div>
                                        <h5>Md Suman Reza</h5>
                                        <span>Lecturer, FEC</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Start -->


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

