<nav>
    <p>POSTS:</p>
    <!-- section 1 menu-->
    <a class="sectiontitle" <?php if ($thisSection=="SECTION1") echo "id=\"currentsection\""; ?>>
        Section 1
    </a>
    <ul>
        <li>
            <a href="../section1/artem.php" <?php if ($thisPage=="Artem Kostyukevich") echo "id=\"currentpage\""; ?>>
                Artem Kostyukevich
            </a>
        </li>
        <li>
            <a href="../section1/stefan.php" <?php if ($thisPage=="Stefan Sagmeister") echo "id=\"currentpage\""; ?>>
                Stefan Sagmeister
            </a>
        </li>
        <li>
            <a href="../section1/april.php" <?php if ($thisPage=="April Greiman") echo "id=\"currentpage\""; ?>>
                April Greiman
            </a>
        </li>

    </ul>
                    
    <!-- section 2 menu-->
    <a class="sectiontitle" <?php if ($thisSection=="SECTION2") echo "id=\"currentsection\""; ?>>
        Section 2
    </a>
    <ul>
        <li>
            <a href="../section2/remb.php" <?php if ($thisPage=="Rembrandt Harmenszoon van Rijn") echo "id=\"currentpage\""; ?>>
                Rembrandt Harmenszoon van Rijn
            </a>
        </li>
        <li>
            <a href="../section2/tyeb.php" <?php if ($thisPage=="Tyeb Mehta") echo "id=\"currentpage\""; ?>>
                Tyeb Mehta
            </a>
        </li>
        <li>
            <a href="../section2/frida.php" <?php if ($thisPage=="Frida Kahlo") echo "id=\"currentpage\""; ?>>
                Frida Kahlo
            </a>
        </li>
    </ul>         

    <a href="">About</a>

</nav>
<br>
<hr>
<p class="s">(This is an extra paragraph in the aside element)</p>