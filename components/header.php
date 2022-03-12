<?php

session_start();

include 'include.php';

// print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="cart.php" class="nav-link px-2 text-white">Cart</a></li>
                    <?php if ( !(empty($_SESSION)) && !(empty($_SESSION['userID'])) ) {?>
                        <li>
                            <a href="wallet.php" class="btn btn-outline-secondary position-relative">
                                Wallet
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                <?php echo $balance; ?>
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>
                <div class="text-end">
                    <?php if ( !(empty($_SESSION)) && !(empty($_SESSION['userID'])) ) {?>
                        <button type="button" class="btn btn-outline-light me-2"><?php echo $_SESSION['userName']; ?></button>
                        <form class="d-inline" action="" method="post">
                            <button type="submit" name="logout" class="btn btn-outline-light me-2">Logout</button>
                        </form>
                    <?php } elseif ( empty($_SESSION) || empty($_SESSION['userID']) ) { ?>
                        <a href="login.php" class="btn btn-outline-light me-2">Login</a>
                        <a href="register.php" class="btn btn-warning">Sign-up</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>