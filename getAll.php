<?php
    $jsonurl = "http://localhost:8080/concurs";
    $json = file_get_contents($jsonurl);
    $array = json_decode($json, true);
    echo "<table style=\"margin-left:auto; margin-right:auto;\">";
    echo "<tr>
            <th>ID</th>
            <th>Nume</th>
            <th>Distanta</th>
            <th>Capacitate</th>
            <th>Numar</th>
            <th>Stergere</th>
            </tr>";
    for($i = 0; $i < count($array); $i++) {
        echo "<tr>
                <th>".$array[$i]["id"]."</th>
                <th>".$array[$i]["nume"]."</th>
                <th>".$array[$i]["distanta"]."</th>
                <th>".$array[$i]["capacitate"]."</th>
                <th>".$array[$i]["numar"]."</th>
                <th><button type=\"button\" onclick='del(".$array[$i]["id"].")'>Sterge</button></th>
                </tr>";
    }
    echo "<tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th><button type=\"button\" onclick='del(1)'>Sterge</button></th>
            </tr>";
    echo "</table>";
?>