@extends('front.layout')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Every child yearns to learn</h5>
                            <h1>Making Your Childs
                                World Better</h1>
                            <p>Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales
                                his void unto last session for bite. Set have great you'll male grass yielding yielding
                                man</p>
                            <a href="#" class="btn_1">View Course </a>
                            <a href="#" class="btn_2">Get Started </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $courses_count }}</span>
                        <h4>All Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $trainers_count }}</span>
                        <h4> All Trainers</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $students_count }}</span>
                        <h4>Students</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-sm-6 col-lg-4  my-4">
                        <div class="single_special_cource">
                            <img src="{{ asset("storage/courses/$course->image") }}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="course-details.html" class="btn_4">{{ $course->category->name }}</a>
                                <h4>${{ $course->price }}</h4>
                                <a href="course-details.html">
                                    <h3>{{ $course->name }}</h3>
                                </a>
                                <p>{{ $course->small_desc }}</p>
                                <div class="author_info">
                                    <div class="author_img">
                                        <img src="{{ asset('storage/trainers') . '/' . $course->trainer->image }}" alt="">
                                        <div class="author_info_text">
                                            <p>Conduct by:</p>
                                            <h5><a href="#">{{ $course->trainer->name }}</a></h5>
                                        </div>
                                    </div>
                                    {{-- <div class="author_rating">
                                <div class="rating">
                                    <a href="#"><img src="{{asset("front/img")}}/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset("front/img")}}/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset("front/img")}}/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset("front/img")}}/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset("front/img")}}/icon/star.svg" alt=""></a>
                                </div>
                                <p>3.8 Ratings</p>
                            </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>TESTIMONIALS</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach ($tests as $test)
                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p>{{ $test->desc }}</p>
                                            <h4>{{ $test->name }}</h4>
                                            <h5> {{ $test->spec }}</h5>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-xl-2 col-sm-4">
                                        <div class="testimonial_slider_img">
                                            <img src="{{ asset("storage/tests/$test->image") }}" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->
@endsection
