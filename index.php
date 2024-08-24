<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <?php include './partials/navbar.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                    
                    <?php 
                        if(isset($_GET['success'])){
                            echo "<p class='text-success'>" . $_GET['success'] . "</p>";
                        }
                    ?>

                    <form action="./includes/apply-register.php" method="POST" class="my-3">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name...">
                        </div>

                        <div class="mb-3">
                            <label for="roll" class="form-label">Roll</label>
                            <input type="number" class="form-control" name="roll" placeholder="Roll...">
                        </div>

                        <div class="mb-3">
                            <label for="roll" class="form-label">Department</label>
                            <select class="form-control" name="department">
                                <option value="">Choose one</option>
                                <option value="eee">EEE</option>
                                <option value="cse">CSE</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" name="phone" placeholder="Phone...">
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label> <br/>

                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                        </div>


                        <div class="col-12">
                            <button type="submit" name="register-submit" class="btn btn-primary btn-block w-100">Sign in</button>
                        </div>

                        </form>

                 
                </div>
            </div>

               
            


            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
