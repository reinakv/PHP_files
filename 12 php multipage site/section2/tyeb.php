<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection = "SECTION2"; ?>
<?php $thisPage = "Tyeb Mehta"; ?>
    <head>       
        <?php include("../php/meta.php"); ?>
    </head>       

    <body>
        
        <header>
            <?php include("../php/header.php"); ?>
        </header>

        <div class="content-wrap">
        
            <main>
                <h1>Tyeb Mehta</h1>
                
                <figure>
                    <img src="/images/img9.jpg">
                    <img src="/images/img10.jpg">                        
                    <figcaption><em>From 'tyeb-mehta.com'</em></figcaption>
                </figure>

                <p>Tyeb Mehta was born on July 26, 1925 in Kapadwanj, Gujarat who lived to be one of India’s most wellknown Indian artist of his generation. He was associated with the Progressive Artist’s Group and studied painting at the Sir J.J. School of Art. His summer holidays were spent with his maternal grandmother in Calcutta, a circumstance that provided him with at least one of his arresting leitmotifs.</p>
                <p>As a muslim, Tyeb would have felt a cataclysmic violence, epic upheaval and bewilderment of Partition in the most intimate sense possible. Equally, he participated in the anxieties and turbulences of Independence, the unprecedented euphoria of liberation. While still a student, he became associated with the vibrant Progressive Artist’s Group of Bombay. Feeling the need to nourish himself at the fountainheads of the Western art world, Tyeb left for London in 1954; in the meanwhile, he had married Sakina Kagalwala in 1951. On his return from London, where he briefly stayed, he painted his first notable work, ‘Rickshaw Pullers’ and followed it up with the canonical ‘Trussed Bull’.</p>

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