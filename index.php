<?php
/**
 * 
 * A simple website for Life Restorers
 * 
 * @author: Que Brand Media
 * 
 */

/** Load Configurations */
require_once("config.php");

include("includes/header.php");
?>

    <div id="home" class="main-content">
        <div id="slideshow" class="slideshow">
            <div class="slide fade">
                <img src="assets/orphan.jpg"/>
                <div class="caption">Social Development</div>
            </div><!-- end of .slideshow -->
            <div class="slide fade">
                <img src="assets/education.jpg"/>
                <div class="caption">Education</div>
            </div><!-- end of .slideshow -->
            <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
            <a class="next" onclick="moveSlide(1)">&#10095;</a>
        </div><!-- end of #banner -->
        <div id="controls" style="text-align:center;">
            <span class="circle" onclick="currentSlide(1)"></span>
            <span class="circle" onclick="currentSlide(2)"></span>
        </div><!-- end of # -->
        <script src="src/slideshow.js"></script>
    </div><!-- end of .main-content -->
    <div id="our-work" class="content">
        <div class="container">
            <div id="" class="col col-4">
                <h2>Our Work</h2>
            </div><!-- end of .col -->
            <div id="" class="col col-8">
                <p>Life Restorers is a Non-Government Organization (NGO) established and founded on a principle of emancipation and empowerment of the nation. This includes, ensuring building and access to resources and employment, education for the youth and old, quality training on skills that empower for employment and job creation. Capacitating and providing business support to SMMEs, NPOs and NGOs. Fundamentally, also creating an ecosystem of social & economic development, and giving back to the community in unity.</p>
            </div><!-- end of .col -->
        </div><!-- end of .container -->
    </div><!-- end of #our-work -->
    <div id="services" class="content">
        <div class="container">
            <div class="col col-2">
                <h4>Skills Development</h4>
                <p>Skills development to empower people for employment, entrepreneurship and job creation. Access to employment, learnerships and internships. <a href="#">Learn more</a></p>
            </div><!-- end of .col -->
            <div class="col col-2">
                <h4>Education</h4>
                <p>Access to quality education that complements the education system in the country and the world. <a href="services.php">Learn more</a></p>
            </div><!-- end of .col -->
            <div class="col col-2">
                <h4>Social Developer</h4>
                <p>Establishment of environments that allow for recreation, support, giving back and empowerment. <a href="services.php">Learn more</a></p>
            </div><!-- end of .col -->
            <div class="col col-2">
                <h4>Access to Resources</h4>
                <p>Ensure people, youth and old have access to essential resources for self-development and succes. <a href="services.php">Learn more</a></p>
            </div><!-- end of .col -->
            <div class="col col-2">
                <h4>Economic Development</h4>
                <p>Capacitate and empower SMMEs, NPOs, NGOs and Entrepreneurs through necessary support required for succes. <a href="services.php">Learn more</a></p>
            </div><!-- end of .col -->
        </div><!-- end of .container -->
    </div><!-- end of #services -->
    <div id="affiliates">
        <div class="container">
            <div class="col col-12">
                <div id="sponsors">
                    <img src="assets/seda.jpg"/>
                    <img src="assets/inseta.png"/>
                </div><!-- end of #sponsors -->
            </div><!-- end of .col -->
        </div><!-- end of .container -->
    </div><!-- end of affiliates -->
<?php
include("includes/footer.php");