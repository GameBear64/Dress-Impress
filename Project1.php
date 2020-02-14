<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Some vars</title>
        <style>
            table {
                border-collapse: collapse;
            }

            table td, table th {
                border: 1px solid #ddd;
            }
            
            table td {
                text-align: left;
                width: 100px;

            }

            table th {
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>

    <?php 
    
    function findGreen($array) {
        $arr = [];
        foreach ($array as $hex) {
            $colors = str_split(trim($hex,"#"), 2);
            if ($colors[0] < $colors[1] && $colors[2] < $colors[1]) {
                array_push($arr, array_search($hex, $array));
            }
        }
        return json_encode($arr);
    }

    function display($array) {
        $str = '[';
        foreach ($array as $hex) {
            if (array_search($hex, $array) + 1 == count($array)) {
                $str = $str . '"' . $hex . '"';
            } else {
                $str = $str . '"' . $hex . '", <br>';
            }
        }
        $str = $str . "]";
        return $str;
    }
    
    ?>

    <body>
    <table>
        <tbody>
            <tr>
                <th>Test No</th>
                <th>Input</th>
                <th>Output</th>
            </tr>
            <tr>
                <td>1</td>
                <?php
                    $colors = ["A0FC77", "90CACA"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>2</td>
                <?php
                    $colors = ["000000","101110", "F01AC3","0FFEF4"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>3</td>
                <?php
                    $colors = ["FFFFFF"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>4</td>
                <?php
                    $colors = ["A086C8","3D6D80","98C23A","9BB210"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>5</td>
                <?php
                    $colors = ["8192B9","5EA2E1","482787","F6D634", "A4A9CC"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>6</td>
                <?php
                    $colors = ["5679EA","A072B9","C11432","B464AD","EF0DAF","99DAD2","278EBE"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>7</td>
                <?php
                    $colors = ["E3F5B7","600B4A","9DB75A","44AFA7", "E065C0","37665B", "89B0F8", "37210D"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>8</td>
                <?php
                    $colors = ["49BF8D", "5C0014","DCDC0B","0F3307","1F0E59","F8F8BD","9E5F02","A9825D","E6FB9D", "8247D7"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>9</td>
                <?php
                    $colors = ["CAE2CB","A6F14B", "C2127B", "7E93EF", "8D0C66", "F33EDB", "0FD2AA", "862E30", "6F4B1D", "CBBD4C", "827D8B", "9D9794", "B8EDEF", "D37A0E","89BBB9", "C666CD"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>10</td>
                <?php
                    $colors = ["A85A4E", "65CECE","775B37","AD8340","B4A38E", "E68502","521030", "FA9434", "699918","D3ACE6", "5F6313", "99440C", "A2B52B", "BFA789","369B85","7A466E"];                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>
            <tr>
                <td>11</td>
                <?php
                    $colors = ["F36600", "5D0C00","7CC900","BCCE00","12ED00","289700","A2FE00","F4C900","AFF700","D86500","9E1A00","D96B00", "15AA00","E21C00","837D00","7A2200"] ;                   
                ?>
                <td> Colors: <?= display($colors) ?></td>
                <td><?= findGreen($colors)? findGreen($colors) : "[]"  ?></td>
            </tr>

            </tbody>
        </table>
    </body>

</html>