<!DOCTYPE html>

<?php 
    include("db.php");

    $page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);
    $perPage = (isset($_GET['per-page']) && (int)$_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 8);
    $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
    
    $sql = "SELECT * FROM task LIMIT $start, $perPage"; 
    $total = $db -> query("SELECT * FROM task ORDER BY datetime DESC") -> num_rows;
    $pages = ceil($total / $perPage);

    $rows = $db -> query($sql);
?>

<html lang="en"> 
    <head>
        <title>To Do List - CRUD with PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 header"><center><h1>To Do List - CRUD with PHP</h1></center></div>

                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-striped table-hover">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addTask-Modal" onClick="prepareAdd();">Add Task</button>
                        <button type="button" class="btn btn-default pull-right" onclick="print()">Print</button>
                        <hr>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $rows -> fetch_assoc()):?>
                            <tr>
                                <td class="col-md-2"><?php echo $row["datetime"]; ?></td>
                                <td class="col-md-8"><?php echo $row["description"]; ?></td>
                                <td><button type="button" data-toggle="modal" data-target="#updateTask-Modal" class="btn btn-warning" onClick="prepareUpdate('<?php echo $row['id'] ?>', '<?php echo $row['description'] ?>');" >Edit</button></td>
                                <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</button></td>                             
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>

                    <center>
                        <ul class="pagination">
                            <?php for($i = 1; $i <= $pages; $i++): ?>
                                <li><a href="?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </center>
                </div>
            </div>

            <script>
                function prepareAdd() {
                    document.getElementsByName('task')[0].focus();
                }
            </script>

            <div id="addTask-Modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add a Task</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="add.php">
                                <div class="form-group">
                                    <label for="Task description:"></label>
                                    <input type="text" required name="task" class="form-control">
                                </div>
                                    <input type="submit" name="send" value="Add Task" class="btn btn-success">                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function prepareUpdate(id, description) {
                    document.getElementsByName('taskUpdate')[0].focus();
                    document.getElementsByName('idUpdate')[0].value = id;
                    document.getElementsByName('taskUpdate')[0].value = description;
                }
            </script>

            <div id="updateTask-Modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit a Task</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="update.php">
                                <div class="form-group">
                                    <label for="Task description:"></label>
                                    <input type="text" required name="idUpdate" class="form-control" style="display: none;">
                                    <input type="text" required name="taskUpdate" class="form-control">
                                </div>
                                    <input type="submit" name="send" value="Update Task" class="btn btn-success">                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>