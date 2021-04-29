<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Oxygen:wght@400;700&family=Work+Sans:wght@500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="web.css">
    
    <title>Samex Web Signup</title>
  </head>

  <body>
    <h1> Welcome.</h1>
    <img class ="img-subject" src="subject.png" alt="person 3d illustration">

    <div class="alert-container">
        <?php require_once 'signup.php';
            if(!empty($errors)){?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <div> <?php echo $error ?></div>
                    <?php endforeach; ?>
                </div>
        <?php } ?>
    </div>

    <div class="container ">
        <div class="card shadow">
            <div class="card-header text-center">
                <h2>Sign Up Form</h2>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="row g-3">
                        <div class="col">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First name" value="<?php echo $first_name?>">
                        </div>
                        <div class="col">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" value="<?php echo $last_name?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $email?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone_num">Phone Number</label>
                        <input type="text" id="phone_num" name="phone_num" class="form-control" id="phone_num" placeholder="Phone Number" value="<?php echo $phone_num?>">
                    </div>
                    <input type="submit" class="btn btn-dark w-100" value="Sign Up" name="">
                </form> 
            </div>

            <div class="card-footer">
                <small>&copy; Mark Nicholas Cagas</small>
            </div>
        </div>
    </div>
</body>
</html>
