@extends('layouts.app')

@section('content')<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">Rent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                           aria-controls="contact" aria-selected="false">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                           aria-controls="contact" aria-selected="false">Hire</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card" style=" padding-bottom: 6px;">
                                    <img class="card-img-top" src="{{asset('Images/Machinery.png')}}"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">We offer you the highest quality range of tools, machinery,
                                            equipment and property for the cheapest price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div style="padding-top:3px; " class="card">
                                    <h5 style="color:#1b4f72;text-align: center  " class="card-title">Search more
                                        on:</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-10 offset-sm-1">
                                                <div class="form-group">

                                                    <a style="background-color: #3b5998 ;text-align: center;  "
                                                       id="tools" type="button" class="btn btn-lg  btn-block"
                                                       name="tools"><img style="height: 25px;float: left"
                                                                         src="{{asset('Images/tools.png')}}"> <span
                                                                style="font-size: medium"> Tools</span> </a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 offset-sm-1">
                                                <div class="form-group">

                                                    <a style="background-color: #3b5998 ; " id="machine" type="button"
                                                       class="btn btn-lg  btn-block" name="machine"><img
                                                                style="height: 25px;float: left"
                                                                src="{{asset('Images/machine.png')}}"> &nbsp;<span
                                                                style="font-size: medium ;"> Machinery</span></a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 offset-sm-1">
                                                <div class="form-group">

                                                    <a style="background-color: #3b5998 ; " id="equipment" type="button"
                                                       class="btn btn-lg  btn-block" name="equipment"><img
                                                                style="height: 25px;float: left"
                                                                src="{{asset('Images/equipment.png')}}"> &nbsp;<span
                                                                style="font-size: medium"> Equipment</span></a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 offset-sm-1">
                                                <div class="form-group">

                                                    <a style="background-color: #3b5998 ; " id="property" type="button"
                                                       class="btn btn-lg  btn-block" name="property"><img
                                                                style="height: 25px; float: left"
                                                                src="{{asset('Images/property.png')}}"> <span
                                                                style="font-size: medium"> Property</span></a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card" style=" padding-bottom: 9px;">
                                    <img height="210 px" width="304px" class="card-img-top"
                                         src="{{asset('Images/homeRent.png')}}"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Rent range of tools, machinery,
                                            equipment and property for the cheapest price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div style="padding-top:3px; " class="card">
                                    <h5 style="color:#1b4f72;text-align: center  " class="card-title">Search more
                                        on:</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-10 offset-sm-1">
                                                <div class="form-group">

                                                    <a style="background-color: #3b5998 ;text-align: center;  "
                                                       id="tools" type="button" class="btn btn-lg  btn-block"
                                                       name="tools"><img style="height: 25px;float: left"
                                                                         src="{{asset('Images/tools.png')}}"> <span
                                                                style="font-size: medium"> Tools</span> </a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 offset-sm-1">
                                                <div class="form-group">

                                                    <a style="background-color: #3b5998 ; " id="machine" type="button"
                                                       class="btn btn-lg  btn-block" name="machine"><img
                                                                style="height: 25px;float: left"
                                                                src="{{asset('Images/machine.png')}}"> &nbsp;<span
                                                                style="font-size: medium ;"> Machinery</span></a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 offset-sm-1">
                                                <div class="form-group">

                                                    <a style="background-color: #3b5998 ; " id="equipment" type="button"
                                                       class="btn btn-lg  btn-block" name="equipment"><img
                                                                style="height: 25px;float: left"
                                                                src="{{asset('Images/equipment.png')}}"> &nbsp;<span
                                                                style="font-size: medium"> Equipment</span></a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 offset-sm-1">
                                                <div class="form-group">

                                                    <a style="background-color: #3b5998 ; " id="property" type="button"
                                                       class="btn btn-lg  btn-block" name="property"><img
                                                                style="height: 25px; float: left"
                                                                src="{{asset('Images/property.png')}}"> <span
                                                                style="font-size: medium"> Property</span></a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">

            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="homeVideo" width="560" height="315"
                                src="https://www.youtube.com/embed/2uPvotSJCfY?autoplay=0&controls=0&loop=1&mute=1&playlist=2uPvotSJCfY&amp;showinfo=0"
                                width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen
                                allowfullscreen></iframe>
                    </div>

                </div><!-- card image -->

                <div class="card-content">
                    <span class="card-title"> </span>

                </div><!-- card content -->


            </div>
        </div>

    </div>
    <br>

</div>

<section class="container p-t-3">
    <div class="row">
        <div class="col-sm-12">
            <h1>Bootstrap 4 Card Slider</h1>
        </div>
    </div>
</section>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-md-right lead">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i
                            class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/EW5FgJM.png" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Insight</h6>
                        <h2>
                            <a href>Why Stuff Happens Every Year.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/Hw7sWGU.png" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Development</h6>
                        <h2>
                            <a href>How to Make Every Line Count.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/g27lAMl.png" alt="Carousel 3">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Design</h6>
                        <h2>
                            <a href>Responsive is Essential.</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/office-student-work-study.jpg"
                             alt="Carousel 4">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Another</h6>
                        <h2>
                            <a href>Tagline or Call-to-action.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/working-woman-technology-computer.jpg"
                             alt="Carousel 5">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2"><span class="pull-xs-right">12.04</span> Category 1</h6>
                        <h2>
                            <a href>This is a Blog Title.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/people-office-team-collaboration.jpg"
                             alt="Carousel 6">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Category 3</h6>
                        <h2>
                            <a href>Catchy Title of a Blog Post.</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div class="row " style="margin-left:8%;margin-right:8%;">
    <div class="col-sm-4">
        <div class="card" style=" height: 200px;">
            <div style="text-align: center;background-color: darkgray" class="card-header">
                What's Ultrahub?
            </div>
            <div class="card-body">
                 <p class="card-text"> Its a E-commerce web based application for supporting both the Customers and
                     Sellers in the Machinery Industry.</p>

            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style=" height: 200px; ">
            <div style="text-align: center;background-color: darkgray" class="card-header">
                Purpose
            </div>            <div class="card-body">
                  <p class="card-text">How many times has it happened with you that the property,machinery that you are looking for is not available for renting or
                      buying?  This is why we brought you UltraHub.com, your one stop shop for buying and renting all the
                     machinery and accessories.</p>

            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style=" height: 200px;">
            <div style="text-align: center;background-color: darkgray" class="card-header">
                What do we offer?
            </div>
            <div class="card-body">

                 <p class="card-text"> We have taken care to bring you the widest collection of machinery, property, works.
                     We offer a wide range of machinery, property etc. so that bost customer and supplier to have wide range of
                     comparisons.</p>

            </div>
        </div>
    </div>
</div>
<br>
<section id="contact">

    <div class="contact-section">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-4 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Your name</label>
                            <input type="text" class="form-control" id="" placeholder=" Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Mobile No.</label>
                            <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                        </div>
                        <div class="form-group">
                            <label for ="description"> Message</label>
                            <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div>

                            <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                        </div>
                    </div>
                    <div class="col-md-4">


                    </div>
                    <div class="col-sm-4">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                    </div>

                </div>


            </form>
        </div>
</section>

<div class="container">
    <div class="row">

        <div class="col-sm-6">
            <h2>Snail mail</h2>
            <address>
                <strong>Hythe Window Cleaning</strong><br>
                15 Springfield Way<br>
                Hythe<br>
                Kent<br>
                United Kingdon<br>
                CT21 5SH<br>
                <abbr title="Phone">P:</abbr> 01234 567 890
            </address>
        </div>
    </div>
</div>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/popper.min.js"></script>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/scripts.js"></script>

@endsection