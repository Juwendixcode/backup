@extends('layouts.app')

@section('content')

    <div id="workone" class="page">
        <div class="container">
            <!-- Title Page -->
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title blue">Projects</h2>
                        <h3 class="title-description blue">Check Out Our Projects Here.</h3>
                    </div>
                </div>
            </div>
            <!-- End Title Page -->
            
            <!-- Portfolio Projects -->
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs1">
                            
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 si">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 video">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 other">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 animation">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 logo">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 si">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 logo">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mock Up" href="{{ asset('img/work/popup/image-01-full.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{ asset('img/work/project/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                            </ul>
                        </section>
                        
                    </div>
                </div>

                <div class="span3">
                    <!-- Filter -->
                    <nav id="options" class="work-nav">
                        <ul id="filter" class="option-set" data-option-key="filter">
                            <li class="type-work">Type of Work</li>
                            <li class="filter active">
                                <a href="#filter" data-option-value="*" class="selected">All Categories</a>
                            </li>
                            <li class="filter">
                                <a href="#filter" data-option-value=".si">Information System</a>
                            </li>
                            <li class="filter">
                                <a href="#filter" data-option-value=".web">Website</a>
                            </li>
                            <li class="filter">
                                <a href="#filter" data-option-value=".logo">Logo</a>
                            </li>
                            <li class="filter">
                                <a href="#filter" data-option-value=".animasi">Animation</a>
                            </li>
                            <li class="filter">
                                <a href="#filter" data-option-value=".video">Video</a>
                            </li>
                            <li class="filter">
                                <a href="#filter" data-option-value=".other">Other</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Filter -->
                </div>
            </div>
            <!-- End Portfolio Projects -->
        </div>
    </div>


    <div id="about" class="page-alternate">
        <div class="container">
            <!-- Title Page -->
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title">Team</h2>
                        <h3 class="title-description">Know &amp; Join Our Team Below.</h3>
                    </div>
                </div>
            </div>
            <!-- End Title Page -->

            <!-- People -->
            <div class="row">
                
                <!-- Start Profile -->
                <div class="span3 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">Alif Akbar</span>
                        </div>
                        <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="Alif Akbar">
                    </div>
                    <h3 class="profile-name">Front-End</h3>
                    <p class="profile-description">Today is your future <a href="#">view more</a>.</p>            
                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->
                
                <!-- Start Profile -->
                <div class="span3 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">???</span>
                        </div>
                        <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="???">
                    </div>
                    <h3 class="profile-name">Back-End</h3>
                    <p class="profile-description">Motto Motto Motto <a href="#">view more</a>.</p>
                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->
                
                <!-- Start Profile -->
                <div class="span3 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">???</span>
                        </div>
                        <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="???">
                    </div>
                    <h3 class="profile-name">Designer</h3>
                    <p class="profile-description">Motto Motto Motto <a href="#">view more</a>.</p>

                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->
                
                <!-- Start Profile -->
                <div class="span3 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">???</span>
                        </div>
                        <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="???">
                    </div>
                    <h3 class="profile-name">Multimedia</h3>
                    <p class="profile-description">Motto Motto Motto <a href="#">view more</a>.</p>                     
                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->

            </div>
            <!-- End People -->

            <!-- People -->
            <div class="row">
                
                <!-- Start Profile -->
                <div class="span3 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">???</span>
                        </div>
                        <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="???">
                    </div>
                    <h3 class="profile-name">Project Manager</h3>
                    <p class="profile-description">Motto Motto Motto<a href="#">view more</a>.</p>                     
                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->
                
                <!-- Start Profile -->
                <div class="span3 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">???</span>
                        </div>
                        <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="???">
                    </div>
                    <h3 class="profile-name">Analyst</h3>
                    <p class="profile-description">Motto Motto <a href="#">view more</a>.</p>

                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->
                
                <!-- Start Profile -->
                <div class="span3 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">???</span>
                        </div>
                        <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="???">
                    </div>
                    <h3 class="profile-name">Marketing</h3>
                    <p class="profile-description">Motto Motto Motto <a href="#">view more</a>.</p>
                        
                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->
                
                <!-- Start Profile -->
                <div class="span3 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">???</span>
                        </div>
                        <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="???">
                    </div>
                    <h3 class="profile-name">Public Relation</h3>
                    <p class="profile-description">Motto Motto Motto <a href="#">view more</a>.</p>                     
                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->

            </div>
            <!-- End People -->
        </div>
    </div>


    <div id="contact" class="page">
        <div class="container">
            <!-- Title Page -->
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title blue">Get in Touch</h2>
                        <h3 class="title-description blue">Feel free to ask / order / apply / comment below.</h3>
                    </div>
                </div>
            </div>
            <!-- End Title Page -->
            
            <!-- Contact Form -->
            <div class="row">
                <div class="span3">
                    <div class="contact-details">
                        <h3 class="blue">Contact Details</h3>
                        <ul>
                            <li><a href="#">kuali@gmail.com</a></li>
                            <li>0857-0620-0xxx</li>
                            <li>
                                Housecamp
                                <br>
                                Jl. Bendungan Palasari Kav.39 <br>Sigura-gura Residence.
                                <br>
                                Malang
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="span9">
                
                    <form id="contact-form" class="contact-form" action="#">
                        <p class="contact-name">
                            <input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                        </p>
                        <p class="contact-email">
                            <input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                        </p>
                        <p class="contact-message">
                            <textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                        </p>
                        <p class="contact-submit">
                            <a id="contact-submit" class="submit" href="#">Send Now</a>
                        </p>
                        
                        <div id="response">
                        
                        </div>
                    </form>
                 
                </div>
                
            </div>
            <!-- End Contact Form -->
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p class="credits">&copy;2017 Kuali. <a href="" title="Kuali | Home Portofolio Page">Design</a> by <a href="" title="Team | Web Designer &amp; Front-end Developer">aa.</a>
        </p>
        <p class="social"> Social Media &nbsp; &nbsp;
            <a href="#"><i class="font-icon-social-twitter"></i></a>&nbsp; 
            <a href="#"><i class="font-icon-social-facebook"></i></a>
        </p>
    </footer>
    <!-- End Footer -->

    <!-- Back To Top -->
    <a id="back-to-top" href="#">
        <i class="font-icon-arrow-simple-up"></i>
    </a>
    <!-- End Back to Top -->

@endsection