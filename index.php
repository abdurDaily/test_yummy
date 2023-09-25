<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="card shadow">
                        <div class="card-header bg-dark">
                            <h4 class="text-light">Add New Post</h1>
                        </div>
                        <div class="card-body">
                        
                        <?php if(isset($_GET['success'])): ?>
                                <div class="alert alert-primary" role="alert">
                                     <span>
                                        <?php echo $_GET['success']; ?>
                                     </span>
                                  </div>
                        <?php endif; ?>

                            <form action="./controller/add.php" method="GET">
                                <label for="title">Add a title</label>
                                <input type="text" name="title" class="form-control my-2" id="title" placeholder="add a title">

                                
                                <label for="details">Add Post Details</label>
                                <textarea name="details" placeholder="add post details" class="form-control my-2" id="details"></textarea>

                                <button class="btn btn-dark w-100">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>



<?php 
 session_reset();
?>