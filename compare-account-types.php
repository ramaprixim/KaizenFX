<?php include("includes/header.php"); ?>

<style>
.inner-box  {
    background: #ededed;
    color: black;
    font-size: larger;
}

.configure {
    text-align:center;
    background: #f2184f;
    color: #ffff;
    padding: 10px;
}
.title{
    background-color: #f2184f;
    width: fit-content;
    padding: 11px;
    color: white;
}
.price-list{
    display: grid;
    justify-content: center;
}
.price-list>li{
    padding: 8px 0px;
}
.price{
    font-size: 30px;
    text-align: center;
}
.configure{
    font-size: 18px;
    background-color: #f2184f;
    display: flex;
    width: 100%;
    justify-content: center;
}
.configure:hover{
    font-size:18px;
    color:white;
    background-color: #d10035;
}
.configure>a{
color:white;
width: 100%;
}


</style>

<section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="images/bg/bg1.jpg" style="background-image: url(&quot;images/bg/bg1.jpg&quot;);">
    <div class="container pt-120 pb-60">

        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-theme-colored2 font-36">Compare Account Type</h2>
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

<section class="package-section">
    	<div class="container">
        	<div class="sec-title centered">
            	<div class="text-center " style="font-size: 25px;"><b>Packages</b></div>
                <h2 class="text-center">Our Pricing Plans</h2>
                <p class="text-center">You register for an online trading account with a stock broker or a firm.</p>
            </div>
            <div class="row clearfix">
            	
                <!--Price Block-->
                <div class="price-block col-lg-3 col-md-4 col-sm-12">
                	<div class="inner-box">
                    	<div class="title">MICRO</div>
                        <h2 class="price" style="font-size: 30px;">$ 100-$ 999</h2>
                        <!-- <div class="price">15 <sup>$</sup><sub>/ Mon</sub></div> -->
                        <!-- <div class="contract">With 12 Months Annual Contract</div> -->
                        <ul class="price-list">
                        	<li>Demo Account</li>
                            <li>Leverage 1: 500</li>
                            <li>Spread</li>
                            <li>Pricing Format - 5 Decimal</li>
                            <li>Bonus - Yes</li>
                            <li>Commission $ 0</li>
                        </ul>
						<div class=""><a class="configure" href="#">Buy</a></div>
                    </div>
                </div>
				
				<!--Price Block-->
                <div class="price-block col-lg-3 col-md-4 col-sm-12">
                	<div class="inner-box">
                    	<div class="title">MINI</div>
                        <h2 class="price" style="font-size: 30px;">$ 1,000-$ 4,999</h2>
                        <ul class="price-list">
                        	<li>Demo Account</li>
                            <li>Leverage 1: 500</li>
                            <li>Regular Spread</li>
                            <li>Pricing Format - 5 Decimal</li>
                            <li>Bonus - Yes</li>
                            <li>Commission $ 0</li>
                        </ul>
						<div class=""><a class="configure" href="#">Buy</a></div>
                    </div>
                </div>
				
				<!--Price Block-->
                <div class="price-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="title">PRIME</div>
                        <h2 class="price" style="font-size: 30px;">$ 5,000-$ 24,999</h2>
                        <ul class="price-list">
                        	<li>Demo Account</li>
                            <li>Leverage 1: 400</li>
                            <li>Tighter Spread</li>
                            <li>Pricing Format - 5 Decimal</li>
                            <li>Bonus - No</li>
                            <li>Commission $ 0</li>
                        </ul>
						<div class=""><a class="configure" href="#">Buy</a></div>
                    </div>
                </div>
				
				<!--Price Block-->
                <div class="price-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="title">LUXURY</div>
                        <h2 class="price" style="font-size: 30px;">$ 25,000</h2>
                        <ul class="price-list">
                        	<li>Demo Account</li>
                            <li>Leverage 1: 200</li>
                            <li>Competitive Spread</li>
                            <li>Pricing Format - 5 Decimal</li>
                            <li>Bonus - Yes</li>
                            <li>Commission $ 0</li>
                        </ul>
						<div class=""><a class="configure" href="#">Buy</a></div>
                    </div>
                </div>
				
            </div>
        </div>
    </section>

<?php include("includes/footer.php"); ?>