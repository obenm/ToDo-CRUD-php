<?php
    $db = new Mysqli();
    $db -> connect("localhost", "root", "", "phpcrud");
    if($db) {
        // Connected to DB
    }
    else{
        // Not Connected to DB
    }
?>