<?php 

    include "incl/header.php";

    function here() {
        echo "Chose a dress from our gallery!";
    }

    function getHex($number) {
        $arr = [];
        //do this $number of times
        for ($i=0; $i < $number; $i++) { 
            //make color
            $color = "#".dechex(rand(16, 255)).dechex(rand(16, 255)).dechex(rand(16, 255));
            //store color
            array_push($arr, $color);
        }
        return $arr;
    }

    function sortColor($array, $color) {
        //defining a new arr
        $arr = [];
        //for each hex in the array
        foreach ($array as $hex) {
            //get indiviual colors for /// in array
            $colors = str_split(trim($hex,"#"), 2);
            //ichecking where is the superior color
            switch ($color) {
                case 'red':
                    if ($colors[1] < $colors[0] && $colors[2] < $colors[0]) {
                        array_push($arr, $hex);
                    }
                    break;
                case 'green':
                    //if red < green && blue < green - print out the color
                    if ($colors[0] < $colors[1] && $colors[2] < $colors[1]) {
                        array_push($arr, $hex);
                    }
                    break;
                case 'blue':
                    if ($colors[0] < $colors[2] && $colors[1] < $colors[2]) {
                        array_push($arr, $hex);
                    }
                    break;
            }
        }
        return $arr;
    }
?>

    <section>
        <h1> Welcome to the storage room! </h1>
        <p>Here you can chose a color and we will select the finest dresses from our collection!</p>
        <article>

            <h3>Currently avalable dresses: </h3>

            <form method="post">
                <input type="submit" name="Red" value="Red">

                <input type="submit" name="Green" value="Green">

                <input type="submit" name="Blue" value="Blue">

                <input type="submit" name="All" value="All">
            </form>

        </article>
        <article>

            <?php 
                //setting the variables
                //collection can be an array, right now its a randomized array
                $collection = getHex(20);
                $sorted;


                //figure out what button was pressed
                if (isset($_POST)){
                    switch (current($_POST)) {
                        case 'Red':
                            $sorted = sortColor($collection, "red");
                            break;
                        case 'Green':
                            $sorted = sortColor($collection, "green");
                            break;
                        case 'Blue':
                            $sorted = sortColor($collection, "blue");
                            break;
                        case 'All':
                            $sorted = $collection;
                            break;
                    }
                }

                if (isset($sorted)) {
                    echo "<div class='flex'>";
                    foreach ($sorted as $hex) {
                        echo "<div>";
                        echo "<p> $hex</p>";
                        echo "<img src='dress.png' style='background-color:$hex;'>";
                        echo "</div>";
                    }
                    echo "</div>";
                }

            ?>
        </article>
    </section>


<?php

    include "incl/footer.php";

?>