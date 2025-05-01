@extends('base')

@section('first')

<section class="breadcrumb_area">
    <div class="breadcrumb_top">
        <div class="container">
            <div class="row">
                <div class="breadcrumb_title section-padding">
                    <!-- <h2>Courses</h2> -->
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb_bottom">
        <div class="container">
            <div class="row">
                <div class="breadcrumb_nav">
                    <div class="col-md-10 col-sm-5">
                        <h2>Our Courses</h2>
                    </div>
                    <!-- <div class="col-sm-7">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Courses</li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_courses_area section-padding course-page">
    <div class="container">
        <div class="row all_our_courses">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="img/politac.jpg" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <h2>Political Science</h2>
                        <p>Political science is the study of politics and power, including the institutions, policies,
                            and behaviors that shape society. It can be studied at the local, state, national, and
                            international levels. </p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="img/bba.jpg" alt="" width="356px">
                    </div>
                    <div class="sing_course_txt">
                        <h2>BBA</h2>
                        <p>A Bachelor of Business Administration (BBA) is an undergraduate degree in business
                            administration awarded by colleges and universities after completion of four years.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row all_our_courses">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single_our_course">
                        <div class="sing_course_thumb">
                            <img src="img/math.jpg" alt="" width="356px">
                        </div>
                        <div class="sing_course_txt">
                            <h2>advance mathematics</h2>
                            <p>Advanced math is a branch of mathematics that includes topics like functions, geometry,
                                and trigonometry. It's used in many fields, including science, economics, and
                                engineering. </p>
                            <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="img/miro.jpg" alt="" width="356px">
                    </div>
                    <div class="sing_course_txt">
                        <h2>Micro biology</h2>
                        <p>Microbiology is the study of microorganisms, which are organisms that are too small to be
                            seen without a microscope.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="img/global.jpg" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <h2>global economic</h2>
                        <p>The world economy or global economy is the economy of all humans in the world, referring to
                            the global economic system, which includes all economic activities conducted both within and
                            between nations, including production, consumption, economic management, work in general,
                            financial transactions and trade of goods and services.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="img/bca.jpg" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <!-- <img src="img/icon_course_6.png" alt="" class="course_icon"> -->
                        <h2>computer science</h2>
                        <p>BCA is a three-year undergraduate degree program that focuses on computer applications
                            and
                            software development. It's a good choice for students who want to work in the IT
                            (Information and Technology) field. </p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="view_all_course">
                <a href="#" class="rm_btn">view all courses</a>
            </div>
        </div>
        <div class="row">
            <div class="call_to_action2">
                <div class="col-md-offset-1 col-md-2 col-sm-2">
                    <div class="call2action2_photo">
                        <img src="img/call2action2_photo.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="call2action_apply">
                        <h2>Applying to our university</h2>
                        <p>Access all the information you need.</p>
                        <h3><a href="#">Check out your options</a></h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 fix_p_r">
                    <div class="call2action_help">
                        <h2>Need Help ?</h2>
                        <p>Our student advisors are
                            here to help you</p>
                        <a href="tel:+01-234-568-669">+01 234 568 669</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>

@endsection