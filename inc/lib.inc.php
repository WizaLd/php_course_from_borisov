<?php
/**
 * Created by PhpStorm.
 * User: macmini
 * Date: 13.08.2018
 * Time: 14:16
 */
function drawMenu($menu, $vertical=true) {

    $style = "";

    if(!$vertical) {
        $style = " style='display:inline;margin-right:15px'";
    }
    echo "<ul>";
    foreach($menu as $item) {
        echo "<li$style>";
        echo "<a href={$item['href']}>{$item['link']}</a>";
        echo "</li>";
    }
    echo "</ul>";
}

function drawTable($cols, $rows, $color = "#CCCCCC") {

    echo "<table border='1'>";
    for($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for($td = 1; $td <= $cols; $td++) {
            if($td === 1 || $tr === 1) {
                echo "<th style='background:$color'>" . $td * $tr . "</th>";
            } else {
                echo "<td>" . $td * $tr . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}