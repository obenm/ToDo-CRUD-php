<?php 
    include("db.php");
    if(isset($_POST["send"])) {
        $id = $_POST["idUpdate"];
        $task = $_POST["taskUpdate"];
        $sql = "UPDATE task SET description = '$task' WHERE id = '$id'";
        $val = $db -> query($sql);
        if($val) {
            header("location: index.php");
        }
    }
?>