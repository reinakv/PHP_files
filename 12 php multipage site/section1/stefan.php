<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection = "SECTION1"; ?>
<?php $thisPage = "Stefan Sagmeister"; ?>
    <head>       
        <?php include("../php/meta.php"); ?>
    </head>       

    <body>
        
        <header>
            <?php include("../php/header.php"); ?>
        </header>

        <div class="content-wrap">
        
            <main>
                <h1>Stefan Sagmeister</h1>
                
                <figure>
                    <img src="/images/img3.jpg">
                    <img src="/images/img4.jpg">                        
                    <figcaption><em>From 'sagmeister.com'</em></figcaption>
                </figure>

                <p>Stefan Sagmeister (born August 6, 1962) is an Austrian graphic designer, storyteller, and typographer based in New York City. In 1993, Sagmeister founded his company, Sagmeister Inc., to create designs for the music industry. He has designed album covers for Lou Reed, OK Go, The Rolling Stones, David Byrne, Jay Z, Aerosmith, Talking Heads, Brian Eno and Pat Metheny.</p>
                <p>In 1991, worked with Leo Burnett's Hong Kong Design Group. In 1993, he returned to New York to work with Tibor Kalman's M&Co design company. In 1993, he set up his company Sagmeister Inc in New York. He has since designed branding, graphics, and packaging for clients as diverse as the Rolling Stones, HBO, the Guggenheim Museum and Time Warner.</p>

            </main>
        
            <aside>
            <?php include("../php/nav.php"); ?>
            </aside>
        </div>
        
        <footer>
            <?php include("../php/footer.php"); ?>
        </footer>

    </body>
</html>



<!-- REFERENCE PHP CODE: -->
<!--
Declare variables
<?php $thisSection=""; ?>

Echo function w. if statement
<?php if ($thisPage!="") echo "$thisPage"; ?>

Include function
<?php include("php/something.php"); ?>

Add an ID to an element dynamically
<?php if ($thisPage=="Page One") echo " id=\"currentpage\""; ?>
Add this as an attribute within an element

Date
<?php
date_default_timezone_set('Asia/Kolkata');
echo "" . date("Y") ;
?>
-->