<?php include("includes/header.php"); ?>


<style>
  .roadmap-section {
    --color: rgba(30, 30, 30);
    --bgColor: rgb(255, 255, 255);
    min-height: 100vh;
    display: grid;
    align-content: center;
    gap: 2rem;
    padding: 2rem;
    font-family: Poppins, sans-serif;
    color: var(--color);
    background: var(--bgColor)
}

.roadmap-ul {
    --col-gap: 2rem;
    --row-gap: 2rem;
    --line-w: 0.25rem;
    display: grid;
    grid-template-columns: var(--line-w) 1fr;
    grid-auto-columns: max-content;
    column-gap: var(--col-gap);
    list-style: none;
    width: min(60rem, 90%);
    margin-inline: auto
}

.roadmap-ul::before {
    content: "";
    grid-column: 1;
    grid-row: 1/span 20;
    background: #e1e1e1;
    border-radius: calc(var(--line-w)/ 2)
}

.roadmap-ul li:not(:last-child) {
    margin-bottom: var(--row-gap)
}

.roadmap-ul li {
    grid-column: 2;
    --inlineP: 1.5rem;
    margin-inline: var(--inlineP);
    grid-row: span 2;
    display: grid;
    grid-template-rows: min-content min-content min-content
}

.roadmap-ul li .date {
    --dateH: 3rem;
    height: var(--dateH);
    margin-inline: calc(var(--inlineP) * -1);
    text-align: center;
    background-color: var(--accent-color);
    color: #fff;
    font-size: 1.25rem;
    font-weight: 700;
    display: grid;
    place-content: center;
    position: relative;
    border-radius: calc(var(--dateH)/ 2) 0 0 calc(var(--dateH)/ 2)
}
.roadmap-ul li .date1::before {
    content: "";
    width: var(--inlineP);
    aspect-ratio: 1;
    background: var(--accent-color);
    background-image: linear-gradient(rgba(0, 0, 0, .2) 100%, transparent);
    position: absolute;
    top: 100%;
    clip-path: polygon(0 0, 100% 0, 0 100%);
    left: 0;
}
.roadmap-ul li .date::before {
    content: "";
    width: var(--inlineP);
    aspect-ratio: 1;
    background: var(--accent-color);
    background-image: linear-gradient(rgba(0, 0, 0, .2) 100%, transparent);
    position: absolute;
    top: 100%;
    clip-path: polygon(0 0, 100% 0, 0 100%);
    right: 0
}

.roadmap-ul li .date::after {
    content: "";
    position: absolute;
    width: 2rem;
    aspect-ratio: 1;
    background: var(--bgColor);
    border: .3rem solid var(--accent-color);
    border-radius: 50%;
    top: 50%;
    transform: translate(50%, -50%);
    right: calc(100% + var(--col-gap) + var(--line-w)/ 2)
}

.roadmap-ul li .title,
ul li .descr {
    background: var(--bgColor);
    position: relative;
    padding-inline: 1.5rem
}

.roadmap-ul li .title {
    overflow: hidden;
    padding-block-start: 1.5rem;
    padding-block-end: 1rem;
    font-weight: 500
}

.roadmap-ul li .descr {
    padding-block-end: 1.5rem;
    font-weight: 300
}

.roadmap-ul li .descr::before,
.roadmap-ulli .title::before {
    content: "";
    position: absolute;
    width: 90%;
    height: .5rem;
    background: rgba(0, 0, 0, .5);
    left: 50%;
    border-radius: 50%;
    filter: blur(4px);
    transform: translate(-50%, 50%)
}

.roadmap-ul li .title::before {
    bottom: calc(100% + .125rem)
}

.roadmap-ul li .descr::before {
    z-index: -1;
    bottom: .25rem
}

@media (min-width:40rem) {
    .roadmap-ul {
        grid-template-columns: 1fr var(--line-w) 1fr
    }

    .roadmap-ul::before {
        grid-column: 2
    }

    .roadmap-ul li:nth-child(odd) {
        grid-column: 1
    }

    .roadmap-ul li:nth-child(even) {
        grid-column: 3
    }

    .roadmap-ul li:nth-child(2) {
        grid-row: 2/4
    }

    .roadmap-ulli:nth-child(odd) .date::before {
        clip-path: polygon(0 0, 100% 0, 100% 100%);
        left: 0
    }

    .roadmap-ul li:nth-child(odd) .date::after {
        transform: translate(-50%, -50%);
        left: calc(100% + var(--col-gap) + var(--line-w)/ 2)
    }

    .roadmap-ul li:nth-child(odd) .date {
        border-radius: 0 calc(var(--dateH)/ 2) calc(var(--dateH)/ 2) 0
    }
}

.credits {
    margin-top: 1rem;
    text-align: right
}

.credits a {
    color: var(--color)
}

@media only screen and (max-width:639px){
    .roadmap-ul li .date1::before {
        content: "";
        width: var(--inlineP);
        aspect-ratio: 1;
        background: var(--accent-color);
        background-image: linear-gradient(rgba(0, 0, 0, .2) 100%, transparent);
        position: absolute;
        top: 100%;
        clip-path: polygon(0 0, 100% 0, 0 100%);
        right: 0 !important;
        left: auto;
    }
}
</style> 


<script>
    //Scroll reveal
window.sr = ScrollReveal();
sr.reveal('.reveal', { duration: 1000 });
</script>


<section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="images/bg/bg1.jpg"
    style="background-image: url(&quot;images/bg/bg1.jpg&quot;);">
    <div class="container pt-120 pb-60">

        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-theme-colored2 font-36">Expert Advisors</h2>
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








<section id="service">
    <div class="container pb-40 pb-sm-10">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-uppercase title">Expert

                        <span class="text-theme-colored2">Advisor</span>
                    </h2>
                    <div class="line-bottom-double-line-centered"></div>
                    <p>An Expert Advisor (EA) in trading is an automated software program designed to analyze markets
                        and execute trades on behalf of traders. It follows predefined rules and algorithms to make
                        trading decisions, aiming to eliminate emotional bias and enhance efficiency in the trading
                        process. EAs are commonly used in the forex market but can be applied to various financial
                        instruments.
                    </p>
                    <br><br>
                    <h4>How To install EA in MetaTrader 5

                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="roadmap-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <!-- <h2 >Outsourcing Excellence: <br>
               <span class="bold-text-title"> A Strategic Blueprint for your Brokerage Success</span>
            </h2> -->
                <ul class="roadmap-ul">
                    <li style="--accent-color:#F2184F">
                        <div class="date date1">1.Download the EA</div>
                        <div class="title"></div>  
                       <div class="descr"> <!-- <p>Enlist and articulate your <b style="font-weight: 600;">Project Needs and Requirements</b> for a tailored and precise development approach.</p> --> <p> Obtain the EA file from a reputable source or your trading strategy provider. The file typically has a ".ex4" or ".mq4" extension.
                    </p> </div>
                    </li>
                    <li style="--accent-color:#1a2431">
                        <div class="date">2.Locate MetaTrader Folder</div>
                        <div class="title"></div>
                        <div class="descr">Open MetaTrader and locate the "Experts" folder. You can find this folder by going to File -> Open Data Folder.</div>
                    </li>
                    <li style="--accent-color:#F2184F">
                        <div class="date date1">3.Copy EA File</div>
                        <div class="title"></div>
                        <div class="descr">Copy the downloaded EA file. If it's in a compressed format (ZIP), extract it first.
                        </div>
                    </li>
                    <li style="--accent-color:#1a2431">
                        <div class="date">4.Paste in Experts Folder</div>
                        <div class="title"></div>
                        <div class="descr">Paste the EA file into the "Experts" folder. This is where MetaTrader looks for automated trading scripts.
                        </div>
                    </li>
                    <li style="--accent-color:#F2184F">
                        <div class="date date1">5.Restart MetaTrader</div>
                        <div class="title"></div>
                        <div class="descr">Close and restart MetaTrader. This step ensures that MetaTrader recognizes the newly added EA.
                        </div>
                    </li>
                    <li style="--accent-color:#1a2431">
                        <div class="date">6.Enable EA and Autotrading</div>
                        <div class="title"></div>
                        <div class="descr">In MetaTrader, make sure the "Expert Advisors" button is activated (it should be green). Also, ensure that "AutoTrading" is enabled (a smiley face should appear in the top toolbar).

                        </div>
                    </li>
                    <li style="--accent-color:#F2184F">
                        <div class="date date1">7.Drag EA onto Chart</div>
                        <div class="title"></div>
                        <div class="descr">Drag the EA from the Navigator window onto the chart where you want it to operate. A pop-up window may appear for you to set parameters.
                        </div>
                    </li>
                    <li style="--accent-color:#1a2431">
                        <div class="date">8.Check Journal for Errors</div>
                        <div class="title"></div>
                        <div class="descr">Open the "Journal" tab at the bottom of MetaTrader to check for any error messages related to the EA. Address any issues if necessary.

                        </div>
                    </li>
                    <li style="--accent-color:#F2184F">
                        <div class="date date1">9.Monitor EA Activity</div>
                        <div class="title"></div>
                        <div class="descr">Monitor the Experts and Journal tabs for information about the EA's activity. Ensure it's functioning as expected.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



  <section id="service">
    <div class="container pb-40 pb-sm-10">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- <h2 class="text-uppercase title">Expert

                        <span class="text-theme-colored2">Advisor</span>
                    </h2> -->
                    <div class="line-bottom-double-line-centered"></div>
                    <p>Remember, the exact steps might vary slightly depending on the version of MetaTrader you're using. Always refer to the instructions provided with the EA, and be cautious when using EAs from unknown sources.


                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("includes/footer.php"); ?>