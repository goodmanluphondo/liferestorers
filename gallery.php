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

    <div id="about" class="content">
        <div class="container">
            <div class="col col-6">
                <h2>Gallery</h2>
            </div><!-- end of .col -->
        </div><!-- end of .container -->
        <div class="container">
            <div class="col col-6">
                <div class="container">
                    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                    <img id="expandedImg" style="width:100%">
                    <div id="imgtext"></div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="assets/gallery/100768958_554845561883232_7497249368064393216_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/100900287_2663996870552111_3393636089305497600_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/100918566_268876094470406_5448123593584017408_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/100922784_652238672291177_6498940200712929280_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="assets/gallery/100991422_293090675184644_7482741509704384512_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/100994770_175562337198511_250761910390095872_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/101111803_272994847414251_3377737529124978688_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/101289341_252227389397674_3814427706175520768_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="assets/gallery/101424791_651770682069058_1243348446136500224_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/101571740_543782489634279_7789663832636391424_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/101796495_252113852563047_4373623591892156416_n.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="assets/gallery/image001.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div><!-- end of .col -->
        </div><!-- end of .container -->
    </div><!-- end of .content -->
<?php
include("includes/footer.php");