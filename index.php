<?php 

    include "incl/header.php";

    function here() {
        echo "Welcome!";
    }

?>

    <section>
        <h1> Hello and welcome! </h1>

        <article>
            <p> It would appear that you are here for a dress. Thats absoluteley great!</p>
            <p> Chose one of the options below.</p>
        </article>
        <article>
            <a href="./chose.php">Choise From Stock</a>
            <span style="margin: 10%"> </span>
            <a href="./make.php"> Make your own!</a>
        </article>
    </section>

<?php
    include "incl/footer.php";
?>