<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>AgriHelp Portal</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="js/speech.js"></script>
</head>
<body>


<!-- Modal Coding Start-->

<div class="modadl" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    Login/Register to Explore more..
                    <i class="fa fa-times ml-auto" data-dismiss="modal" style="font-size: 30px; color: red; cursor: pointer;"></i>
                </div>
                <div class="modal-body">
                        <div class="container-fluid">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a href="#login" class="nav-link active" data-toggle="tab">Login</a></li>
                                    <li class="nav-item"><a href="#register" class="nav-link" data-toggle="tab">Register</a></li>
                                </ul>
                    
                                <div class="tab-content">
                                    
                                    <div id="login" class="container tab-pane active mt-3">
                                       
                                        <form>
                                        <div class="input-group  my-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user" style="font-size: 30px;"></i>
                                                </span>
                                             </div>
                                            <input type="text" name="username" class="form-control" placeholder="Username or Email" required="required">
                                        </div>
                    
                                        <div class="input-group my-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-key" style="font-size: 30px;"></i>
                                                    </span>
                                                 </div>
                                                <input type="password" name="username" class="form-control" placeholder="Password" required="required">
                                            </div>
                                            
                                             <input type="submit" value="Login" class="form-control mb-4" style="width: 35%; float: right;">
                                    </form>
                                    </div>
                    
                                    <div id="register" class="container tab-pane pb-4">
                                            <form>
                                            <div class="input-group  my-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user" style="font-size: 30px;"></i>
                                                        </span>
                                                     </div>
                                                    <input type="text" id="username" class="form-control" placeholder="Full Name" required="required">
                                                </div>

                                                <div class="input-group my-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-envelope" style="font-size: 30px;"></i>
                                                            </span>
                                                         </div>
                                                        <input type="email" name="useremail" id="usermailid" class="form-control" placeholder="Email" required="required">
                                                        <span id="checkspan">a</span>
                                                </div>

                                                <div class="input-group my-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-phone" style="font-size: 30px;"></i>
                                                            </span>
                                                         </div>
                                                        <input type="number" name="usermobile" class="form-control" placeholder="Mobile Number" required="required">
                                                </div>

                                                <div class="input-group my-4">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-user" style="font-size: 30px;"></i>
                                                                </span>
                                                        </div>
                                                    <span class="mx-4 py-2 radio-input-span form-control"><input type="radio" name="usergender">&nbsp;&nbsp;Male</span>
                                                    <span class="mx-4 py-2 radio-input-span form-control"><input type="radio" name="usergender">&nbsp;&nbsp;Female</span>
                                            
                                                   </div>
                                                

                                                <div class="input-group my-4">
                                                        
                                                        <select class="form-control">
                                                            <option disabled>State</option>
                                                            <option>Rajasthan</option>
                                                            <option>Uttar Pradesh</option>
                                                            <option>Delhi</option>
                                                            <option>Karnatka</option>
                                                        </select>

                                                        <select class="form-control">
                                                                <option>District</option>
                                                                <option>Ghaziabad</option>
                                                                <option>Saharnpur</option>
                                                                <option>Aligarh</option>
                                                                <option>Hapur</option>
                                                            </select>
                                                        
                                                </div>
                            
                                                <div class="input-group my-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-key" style="font-size: 30px;"></i>
                                                            </span>
                                                         </div>
                                                        <input type="password" name="userpass" class="form-control" placeholder="Password" required="required">
                                                </div>

                                                <div class="input-group my-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-key" style="font-size: 30px;"></i>
                                                            </span>
                                                         </div>
                                                        <input type="password" id="userconfirmpass" class="form-control" placeholder=" Confirm Password" required="required">
                                                </div>
                                                    
                    
                                                        <input type="submit" value="Register" class="form-control mb-4" style="width: 35%; float: right;">
                                            </form>
                                    </div>
                    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Coding End-->




<!-- Nav bar Coding Start-->
<div class="container-fluid top-menu p-0" style="position: fixed; top: 0; z-index: 5; background-color: whitesmoke;">

        <nav class="navbar navbar-expand-md">

            <div class="float-left">
                <a href="#" class="google-black-font ml-lg-5">Agri-Help</a>
            </div>
            
            <i class="fa fa-bars navbar-toggler text-primary ml-auto float-right" data-toggle="collapse" data-target="#open-menu" style="font-size:60px"></i>

            <div class="collapse navbar-collapse justify-content-end mr-lg-5" id="open-menu"> 
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#aboutus" class="nav-link">About us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="#mymodal" data-toggle="modal" class="nav-link">Login/Signup</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contact us</a>
                        <div class="dropdown-menu">
                                <ul class="list-inline mx-3">
                                        <li><a href="#">Phone</a></li>
                                        <li><a href="#">E-mail us</a></li>
                                        <li><a href="#">Location</a></li>
                                </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
</div>
<!-- Nav bar Coding End-->



<!-- Section Coding Start-->
<div class="row mx-2" style="margin-top: 90px;" id="home">

    <div class="col-lg-8">
        <div class="container text-center border">
            <div id="slider" class="carousel slide" data-ride="carousel" data-interval="2000">
                <ol class="carousel-indicators slider-ol-res">
                    <li data-target="#slider active" data-slide-to="0"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="#slider" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner" width="58">
                    <div class="carousel-item active">
                        <img src="images/a.jpg" class="slider-img-res">
                    </div>
                    <div class="carousel-item">
                        <img src="images/b.jpg" class="slider-img-res">
                    </div>
                    <div class="carousel-item">
                        <img src="images/c.jpg" class="slider-img-res">
                    </div>
                    <div class="carousel-item">
                        <img src="images/d.jpg" class="slider-img-res">
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-lg-4 bg-light">
            <h3 class="text-center m-3 google-black-font exp-more">Explore More By...</h3>

            
        </div>
    </div>

</div>
<!-- Section Coding End-->




<!-- About Us Coding Start-->

<div class="text-center about-us-bg-div my-5" id="aboutus">
<h2>About Us</h2>
<div class="media px-3 flex-column flex-lg-row">
    <img src="images/e.jpg" class="align-self-center rounded border about-img my-2">
    <div class="media-body text-center mt-2">
        <p class="text-justify mx-4">The Ministry of Agriculture in partnership with Startup India launched the Agriculture Grand Challenge. The ministry identified 12 problem statements and sought out solutions from the startup ecosystem. With over 1000 + applications from across India, after several months of mentorship workshops with over 400 Agritech startups, multiple screenings and interviews, 20 innovations were finalized. These solutions have been handpicked by senior scientists and commissioners from the Ministry of Agriculture. The purpose of the blog post is to understand these innovations and the nature of problems that they seek to resolve.</p>
        <p class="text-justify mx-4">National Agriculture Market is a virtual market with a physical market (mandi) at the back end. Electronic National Agricultural market (e-NAM) networks the existing mandis to create a unified national market for agricultural commodities for pan-India electronic trading.
            An important objective behind the eNAM portal is to establish quality assaying and grading systems for quality assurance. It is only once you have quality assurance, can virtual bidding of produce be a reality. Why is the online trading of foods and vegetables essential at mandis? It ensures the farmer gets the best price for their produce. Currently, farmers are at the mercy of a trader.</p>
    </div>
</div>
</div>

<!-- About Us Coding End-->



<!-- COntact Us Coding Start-->

<div class="text-center about-us-bg-div my-5" id="contactus">
     <h2>Contact Us</h2>
     <div class="row m-0 p-0">
             <div class="col-md-2 mb-2">
                    <i class="fa fa-phone" style="font-size:120px;color:#311a1a;"></i>
             </div>
             <div class="col-md-5 mb-2 text-justify">
                    <ul style="list-style: none; color: black;" class="p-0">
                            <li><b>Office of Joint Secretary (Sanitation)</b></li>
                            <li>Ministry of Drinking Water and Sanitation,</li>
                            <li>Government of India,</li>
                            <li>4th Floor, Pt. Deendayal Antyodaya Bhawan</li>
                            <li>CGO Complex, Lodhi Road,</li>
                            <li>New Delhi - 110003.</li>
                        </ul>
             </div>
             <div class="col-md-5 mb-2 text-justify">
                    <ul style="list-style: none; color:black;" class="p-0">
                            <li><b>Office of Director (Sanitation)</b></li>
                            <li>Ministry of Agriculture,</li>
                            <li>Government of India,</li>
                            <li>12th Floor, Pt. Deendayal Antyodaya Bhawan</li>
                            <li>CGO Complex, Lodhi Road,</li>
                            <li>New Delhi - 110003.</li>
                        </ul>
             </div>

     </div>
        
</div>


<!-- Contact Us Coding End-->



<!-- Footer Coding Start-->

<footer class="jumbotron bg-primary mb-0 rounded-0 mt-2 pb-2">

    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-4">
                        <ul style="list-style: none; color: white;">
                                <li id="li-heading">Mission</li>
                                <li>Cleanliness</li>
                                <li>Clean India, Green India</li>
                                <li>Garbage Solution</li>
                                <li>Public Involvement</li>
                                <li>Swachh Bharat Mission</li>
                            </ul>
                </div>
                <div class="col-md-4">
                        <ul style="list-style: none; color: white;">
                                <li id="li-heading">Features Websites</li>
                                <li><a href="#" class="anchor">pmindia.gov.in</a></li>
                                <li><a href="#" class="anchor">swachhbharatmission.gov.in</a></li>
                                <li><a href="#" class="anchor">swachhbharaturban.gov.in</a></li>
                            </ul>
                </div>
                <div class="col-md-4">
                        <ul style="list-style: none; color: white;">
                                <li id="li-heading">Services</li>
                                <li>Waste Management</li>
                                <li>Dustbins Overflow</li>
                                <li>Campaining</li>
                            </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
                <div class="row">
                    
                    <div class="col-12 p-1">
                            <div class="mapouter mx-auto" style="border: 5px solid black;"><div class="gmap_canvas"><iframe width="310" height="190" id="gmap_canvas" src="https://maps.google.com/maps?q=ajay%20kumar%20garg%20eng&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:200px;width:320px;}.gmap_canvas {overflow:hidden;background:none!important;height:190px;width:310px;}</style></div>

                    </div>
                </div>
            </div>
    </div>
    
    <div class="text-center mt-3">
            <span class="mt-4 mt-lg-0" style=" color: white;">&copy;2020 Copyright : Agri-Help Web Portal</span>
    </div>

</footer>

<!-- Footer Coding End-->




<script>
$(document).ready(function(){
    $("#usermailid").on("change", function(){
        var mailcheck = $("#usermailid").val();
        $.ajax({
            type : "POST",
            url : "php/checkuser.php",
            data : {
                    checkemail : mailcheck
                    },
            success : function(event){
                         $("#checkspan").html(event);
                    }
        });
    });
});



$(document).ready(function(){
    $("#usermailid").on("submit", function(){
        var mailcheck = $("#username").val();
        var mailcheck = $("#usermailid").val();
        var mailcheck = $("#usermailid").val();
        var mailcheck = $("#usermailid").val();
        var mailcheck = $("#usermailid").val();
        $.ajax({
            type : "POST",
            url : "php/checkuser.php",
            data : {
                    checkemail : mailcheck
                    },
            success : function(event){
                         $("#checkspan").html(event);
                    }
        });
    });
});


</script>

</body>
</html>
