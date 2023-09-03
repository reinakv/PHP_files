<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection = "SECTION2"; ?>
<?php $thisPage = "Rembrandt Harmenszoon van Rijn"; ?>
    <head>       
        <?php include("../php/meta.php"); ?>
    </head>       

    <body>
        
        <header>
            <?php include("../php/header.php"); ?>
        </header>

        <div class="content-wrap">
        
            <main>
                <h1>Rembrandt Harmenszoon van Rijn</h1>
                
                <figure>
                    <img src="/images/img7.jpg">
                    <img src="/images/img8.jpg">                        
                    <figcaption><em>From 'metmuseum.org'</em></figcaption>
                </figure>

                <p>A prolific painter, draftsman, and etcher, Rembrandt van Rijn is usually regarded as the greatest artist of Holland’s “Golden Age.” He worked first in his native Leiden and, from 1632 onward, in Amsterdam, where he had studied briefly (ca. 1624) with the influential history painter Pieter Lastman. Rembrandt never went abroad, but he voraciously surveyed the work of Northern artists who had lived in Italy, like Lastman, the Utrecht painter Gerrit van Honthorst (Rembrandt’s main link to Caravaggio), Anthony van Dyck, and—mostly through prints—Adam Elsheimer and Peter Paul Rubens.</p>
                <p>The artist became highly successful in the 1630s, when he had several pupils and assistants, started his own art collection, and lived the life of a cultivated gentleman, especially in the impressive residence he purchased in 1639 (now the Rembrandt House Museum). Rembrandt exudes confidence and urbanity in his Self-Portrait of 1640 (National Gallery, London), which was modeled upon courtly portraits by Raphael and Titian. These artists probably also inspired his Amsterdam signature, “Rembrandt” (dropping “Van Rijn”).</p>

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