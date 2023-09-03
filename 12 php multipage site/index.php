<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection = "Home"; ?>
<?php $thisPage = "Home"; ?>
            
    <head>       
        <?php include("/php/meta.php"); ?>
    </head>       

    <body>
        
        <header>
            <?php include("/php/header.php"); ?>
        </header>

        <div class="content-wrap">
        
            <main>
                <h1>This is the home page</h1>

            </main>
        
            <aside>
                <?php include("/php/nav.php"); ?>
            </aside>
        </div>
        
        <footer>
            <?php include("/php/footer.php"); ?>
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