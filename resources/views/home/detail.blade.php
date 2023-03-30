

@extends('layouts.master')

@section('content')

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Course Detail</h6>
                            <h1 class="display-4">Web design & development courses for beginners</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="img/header.jpg" alt="Image">
                        <p>
                            MEIRAS provides various range of courses. Each course is mainly divided in form of
                            topics and their questions. Each course will have several topics which will be described
                            on each page. The sidebar of the course page will contain the name of each topic of the
                            specific course. This sidebar navigation provides a user-friendly approach for mapping progress
                            topic by topic throughout the course.
                        </p>

                        <p>
                            There will be a question with an expected answer field for
                            each topic of a course. It is placed at the end of the topic as the question is based on the same topic.
                            Students can submit an answer to that question and the result according to the answer will be shown.
                            These results will be documented at the end of the course completion to the student profile.
                        </p>
                    </div>

                    <h2 class="mb-3">Related Courses</h2>
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="img/courses-1.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Programming with C courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        {{-- <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span> --}}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="img/courses-2.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Application design & development courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        {{-- <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span> --}}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        {{-- <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span> --}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

@endsection
