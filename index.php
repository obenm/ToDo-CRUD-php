<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>To Do List - CRUD with PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <center><h1>ToDo List - CRUD with PHP</h1></center>

                <div class="col-md-10 col-md-offset-1">
                    <table class="table">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addTask-Modal">Add Task</button>
                        <button type="button" class="btn btn-default pull-right">Print</button>
                        <hr>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-2">07/27/34</td>
                                <td class="col-md-8">Go to school</td>
                                <td><button type="button" class="btn btn-warning">Edit</button></td>
                                <td><button type="button" class="btn btn-danger">Delete</button></td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="addTask-Modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Task</h4>
                        </div>
                        <div class="modal-body">
                            <form action="">
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>