<?php 
    include("db.php");
    if(isset($_POST["send"])) {
        $task = $_POST["task"];
        $sql = "INSERT INTO task (description) values ('$task')";
        $val = $db -> query($sql);
        if($val) {
            header("location: index.php");
        }
    }
?>