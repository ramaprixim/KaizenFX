<?php include("includes/header.php"); ?>

<section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="images/bg/bg1.jpg" style="background-image: url(&quot;images/bg/bg1.jpg&quot;);">
    <div class="container pt-120 pb-60">

        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-theme-colored2 font-36">Economic Calender</h2>
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


<!-- TradingView Widget BEGIN -->
<h2 class="mt-4" style="text-align:center">Economic Calculator</h2>
<div class="container">
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
  {
  "colorTheme": "light",
  "isTransparent": false,
  "width": "100%",
  "height": "600",
  "locale": "in",
  "importanceFilter": "-1,0,1",
  "countryFilter": "ar,au,br,ca,cn,fr,de,in,id,it,jp,kr,mx,ru,sa,za,tr,gb,us,eu"
}
  </script>
</div>
</div>
<!-- TradingView Widget END -->

<?php include("includes/footer.php"); ?>