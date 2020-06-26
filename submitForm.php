<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (array_key_exists("submit", $_POST)) {
            $id = $_POST["id"];
            $nume = $_POST["nume"];
            $distanta = $_POST["distanta"];
            $capacitate = $_POST["capacitate"];
            $numar = $_POST["numar"];
            
            $jsonurl = "http://localhost:8080/concurs";
            $json = file_get_contents($jsonurl);
            $array = json_decode($json, true);
            $exista = false;
            for($i = 0; $i < count($array); $i++) {
                if ($array[$i]["id"] == $id) {
                    $exista = true;
                    break;
                }
            }
            if ($exista == false){
                $method = "POST";
                $url = "localhost:8080/concurs";
            }
            else{
                $method = "PUT"
                $url = "localhost:8080/concurs/".$id;
            }

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS =>"{\r\n    \"id\": $id,\r\n    \"nume\": \"$nume\",\r\n    \"distanta\": $distanta,\r\n    \"capacitate\": $capacitate,\r\n    \"numar\": $numar\r\n}",
                CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
                ),
            ));
            
            curl_exec($curl);
            curl_close($curl);
        }
    }
?>