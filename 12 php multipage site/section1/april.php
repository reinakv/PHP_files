<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection = "SECTION1"; ?>
<?php $thisPage = "April Greiman"; ?>
    <head>       
        <?php include("../php/meta.php"); ?>
    </head>       

    <body>
        
        <header>
            <?php include("../php/header.php"); ?>
        </header>

        <div class="content-wrap">
        
            <main>
                <h1>April Greiman</h1>
                
                <figure>
                    <img src="/images/img5.jpg">
                    <img src="/images/img5.jpg">                        
                    <figcaption><em>From 'famousgraphicdesigners.org'</em></figcaption>
                </figure>

                <p>April Greiman (born March 22, 1948) is an American designer widely recognized as one of the first designers to embrace computer technology as a design tool. Greiman is also credited, along with early collaborator Jayme Odgers, with helping to import the European New Wave design style to the US during the late 70s and early 80s."</p>
                <p>After completing her studies at the Kansas City Art Institute, Greiman worked as a freelance designer and worked directly with the curator of design at the Museum of Modern Art in New York City. Greiman moved to Los Angeles in 1976 where she established the multi-disciplinary approach where she "...blends technology, science, word and image with color and space...". She directed her first design studio April Greiman, Inc. from 1978–2004. During the 1970s, she rejected the belief among many contemporary designers that computers and digitalization would compromise the International Typographic Style; instead, she exploited pixelation and other digitization "errors" as integral parts of digital art, a position she has held throughout her career.</p>
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