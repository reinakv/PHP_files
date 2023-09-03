<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection = "SECTION2"; ?>
<?php $thisPage = "Frida Kahlo"; ?>
    <head>       
        <?php include("../php/meta.php"); ?>
    </head>       

    <body>
        
        <header>
            <?php include("../php/header.php"); ?>
        </header>

        <div class="content-wrap">
        
            <main>
                <h1>Frida Kahlo</h1>
                
                <figure>
                    <img src="/images/img11.jpg">
                    <img src="/images/img12.jpg">                        
                    <figcaption><em>From 'FridaKahlo.org'</em></figcaption>
                </figure>

                <p>Kahlo was born to a German father of Hungarian descent and a Mexican mother of Spanish and Native American descent. Later, during her artistic career, Kahlo explored her identity by frequently depicting her ancestry as binary opposites: the colonial European side and the indigenous Mexican side. Although Kahlo took some drawing classes, she was more interested in science, and in 1922 she entered the National Preparatory School in Mexico City with an interest in eventually studying medicine. While there she met Rivera, who was working on a mural for the school’s auditorium.</p>
                <p>By the mid-1930s numerous extramarital affairs—notably that of Rivera with Kahlo’s younger sister and those of Kahlo with several men and women—had undermined their marriage, and the two divorced in 1939. That same year Kahlo painted some of her most famous works, including The Two Fridas. The unusually large canvas (5.69 × 5.68 feet [1.74 × 1.73 metres]) shows twin figures holding hands, each figure representing an opposing side of Kahlo. The figure to the left, dressed in a European-style wedding dress, is the side that Rivera purportedly rejected, and the figure to the right, dressed in Tehuana attire, is the side Rivera loved best. </p>

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