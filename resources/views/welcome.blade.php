@extends('layouts.app')

@section('content')<br>
<div class="row ">
    <div class="col-sm-6">

    </div>
    <div class="col-sm-6">
        <button class="btn btn-warning btn-lg">Post your add</button>
    </div>
</div>
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
                                <div class="card" style=" padding-bottom: 9px;">
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
            <h1 style="color: #0f7864">Featured Products</h1>
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
    <br>
    <div class="container carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-img  h-200">
                        <img   class="img-fluid" src="Images/toolsBackground.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 align="center">
                            <a href>Dewalt Dril Bits</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-img h-100">
                        <img  class="img-fluid" src="/Images/welcomePageImages/latheMill.jpg" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                         <h6 align="center">
                            <a href>Smithy Lathe Mill </a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div  class="card-img  h-100">
                        <img  class="img-fluid" src="/Images/welcomePageImages/jcb.jpg" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                         <h6 align="center">
                            <a href>JCB 3C3fj</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-img h-100">
                        <img  class="img-fluid" src="/Images/welcomePageImages/concreteMix.png" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                         <h6 align="center">
                            <a href>Electric Concrete mix</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-img  h-200">
                        <img   class="img-fluid" src="Images/toolsBackground.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 align="center">
                            <a href>Dewalt Dril Bits</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-img h-100">
                        <img  class="img-fluid" src="/Images/welcomePageImages/latheMill.jpg" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 align="center">
                            <a href>Smithy Lathe Mill </a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div  class="card-img  h-100">
                        <img  class="img-fluid" src="/Images/welcomePageImages/jcb.jpg" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 align="center">
                            <a href>JCB 3C3fj</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-img h-100">
                        <img  class="img-fluid" src="/Images/welcomePageImages/concreteMix.png" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 align="center">
                            <a href>Electric Concrete mix</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<div class="container">
    <h1 style="color: #0f7864">Quick Search</h1><br>
    <div class="row">

        <div class="col-sm-3"><button style="height: 200px" class="btn btn-primary btn-block">
                <img src="Images/best-value.png" height="150" width="150" />
            </button></div>
        <div class="col-sm-3"><button style="height: 200px" class="btn btn-success btn-block">
                <img src="Images/Moneyback.png" height="150" width="150" />
            </button></div>
        <div class="col-sm-3"><button style="height: 200px" class="btn btn-info btn-block">
                <img src="Images/hotDeal.png" height="170" width="170" />
            </button></div>
        <div class="col-sm-3"><button style="height: 200px" class="btn btn-warning btn-block">
                <img src="Images/special-offer.png" height="150" width="150" />
            </button></div>
     </div>

</div>
<br>
<div class="container">
    <h1 style="color: #0f7864">About Us</h1><br>

    <div class="row " >
        <div class="col-sm-4">
            <div class="card h-100"  >
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
            <div class="card h-100" >
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
            <div class="card h-100"  >
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

</div>
<br>
<br>

<footer>
    <section id="contactFooter">

        <div class="contact-section">
            <div class="container" >

                <form><br>
                    <div class="row" >




                        <div class="col-sm-4" style="color: black;text-align: right "><br>
                            <h2>UltraHub Solutions</h2>
                            <address style="text-align: center">
                                <strong>
                                 Old Keels Building,<br>
                                Negombo Road,<br>
                                Colombo.<br></strong>

                                <abbr title="Phone"> <i class="fa fa-mobile-phone fa-lg">&nbsp;</i> </abbr> 01234 567 890
                            </address>
                        </div>
                        <div class="col-sm-4">
                             <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.208291519546!2d79.84328981431977!3d7.217065794789885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2eebdf1ee3447%3A0x7e8d81e014c42b6!2sUltraHub+Solutions!5e0!3m2!1sen!2slk!4v1513270598470" ></iframe>
                        </div>

                        <div class="col-sm-4">
                            <div class="card h-100" >
                                <div class="card-header">
                                    Contact Us
                                </div>
                                <div class="card-body">
                                    <div class="form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder=" Enter Name">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                                        </div>
                                        <br>
                                        <div>

                                            <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </section>

</footer>


<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/popper.min.js"></script>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/scripts.js"></script>

@endsection