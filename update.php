<?php 
    include("db.php");
    if(isset($_POST["send"])) {
        $id = (int)$_POST["idUpdate"];
        $task = htmlspecialchars($_POST["taskUpdate"]);
        date_default_timezone_set('America/Mexico_City');
        $datetime = date('Y-m-d H:i:s');
        $sql = "UPDATE task SET description = '$task', datetime = '$datetime' WHERE id = '$id'";
        $val = $db -> query($sql);
        if($val) {
            header("location: index.php");
        }
    }
?>