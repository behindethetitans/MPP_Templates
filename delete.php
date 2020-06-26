<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (array_key_exists("deleteID", $_POST)) {
            $id = $_POST["deleteID"];
            $ch = curl_init('http://localhost:8080/concurs/'.$id);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
            curl_exec($ch);
        }
    }
?>