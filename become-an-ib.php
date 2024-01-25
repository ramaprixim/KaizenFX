<?php include("includes/header.php"); ?>

<section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="images/bg/bg1.jpg" style="background-image: url(&quot;images/bg/bg1.jpg&quot;);">
    <div class="container pt-120 pb-60">

        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-theme-colored2 font-36">Become </h2>
                    <ol class="breadcrumb text-left mt-10 white">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Current Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>







<section class="default-form-section">
    	<div class="auto-container" style="border: solid 0.5px #c5bcbc; padding: 20px 15px 15px 20px;">
        	<!--Title Box-->
        	<div class="title-box" style="margin-bottom: 30px;">
            	<div class="title"></div>
                <h2 class="text-center">Join IB broker program now!</h2>
                <div class="text"></div>
            </div>

            <!--Default Form-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="default-form style-two contact-form">
                            <form method="post" action="become-ib.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-control" type="text" name="firstname" value="" placeholder="First name *" id="firstname" required="required">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-control" type="text" name="lastname" value="" placeholder="Last name *" id="lastname" required="required">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-control" type="email" name="email" value="" placeholder="Your Email *" id="email" required="required">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-control" id="phone" name="phone" type="text" placeholder="Phone Number *" required="required" class="form-control required">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-control" type="text" name="referals" value="" placeholder="Number of Referals" id="referals" required="required">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-control" type="text" name="amount" value="" id="amount" placeholder="Enter Amount Size" required="required">
                                    </div>
                                    
                                    <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Your Massage"></textarea>
                                    </div> -->
            
                                    <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                                        <button class="btn btn-danger" type="submit" class="theme-btn message-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                    </div>
            </div>

            
        </div>
    </section>










<?php include("includes/footer.php"); ?>