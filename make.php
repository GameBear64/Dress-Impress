<?php 

    include "incl/header.php";

    function here() {
        echo "Making your own dress!";
    }

?>

    <section>
        <h1> Welcome to the making room!</h1>
        <p>Here you can make your own dress by chosing your own color!</p>
    </section>

    <form method="post">
        <p>Hex Code?</p>
        <input type="text" name="hex" placeholder="#00bfff">
        <br>
        <input type="submit">
    </form>

<?php
    if (isset($_POST["hex"])) {
        $hex = trim($_POST["hex"]," ");

        if (ctype_xdigit(trim($hex,"#")) && strlen($hex) == 7) {
            echo "<p style='margin: 5% 0 1% 0'>Your dress would look like this!</p>";
            echo "<img src='dress.png' style='background-color:$hex; width:20%;'>";
            
        } elseif (ctype_xdigit($hex) && strlen($hex) == 6) {
            echo "<p style='margin: 5% 0 1% 0'>Your dress would look like this!</p>";
            echo "<img src='dress.png' style='background-color:#$hex; width:20%;'>";
    
        } else {
            echo "<p>Please enter a regular hex code</p>";
        }
    } else {
    }

    include "incl/footer.php";

?>