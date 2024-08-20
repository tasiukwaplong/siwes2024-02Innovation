<?php
require 'backend.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do app with PHP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">TO-DO App Using PHP</h1>
            </div>

            <!-- colunmn for form to add todo -->
            <div class="col-md-6">
                <form action="backend.php" method="POST">
                    <textarea name="item" id="" cols="20" rows="10" class="form-control"></textarea>
                    <button type="submit" class="btn btn-primary btn-block">Add <i class="fa fa-plus"></i></button>
                    <button type="cancel" class="btn btn-danger">Clear <i class="fa fa-trash"></i> </button>
                </form>
            </div>
            
            <!-- colunmn for content of todo -->
            <div class="col-md-6">
                <div class="row">

                    <?php
                        $todos = readTodo();
                        if(count($todos) == 0){
                            echo '<div class="text-center alert alert-warning">No to-do added yet</div>';
                        }
                        for ($index = 0; $index < count($todos); $index++): ?>
                            <!-- loop starts here -->
                            <div class="col-md-10 p-3 border border-4">
                            <?php echo $todos[$index];?>
                                <p class="float-end mt-3">
                                    <small>
                                        <strong>Status: </strong> Not done
                                    </small>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-sm btn-danger" type="button">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                    <a class="btn btn-sm btn-secondary" href="<?php echo $index;?>">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- stops here -->
                        <?php endfor;?>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>