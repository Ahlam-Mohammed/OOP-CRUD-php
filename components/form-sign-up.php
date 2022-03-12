<form action="" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name:</label>
        <input type="text" name="name" id="formGroupExampleInput" placeholder="Your Name" class="form-control <?php echo (!empty($user->name_err)) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $user->name_err;?></span>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email:</label>
        <input type="email" name="email" id="formGroupExampleInput2" placeholder="Your Email" class="form-control <?php echo (!empty($user->email_err)) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $user->email_err;?></span>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password:</label>
        <input type="password" name="password" id="formGroupExampleInput2" placeholder="Your Password" class="form-control <?php echo (!empty($user->password_err)) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $user->password_err;?></span>
    </div>
    <div class="mb-3">
        <p class="fs-sm pt-3 mb-0">Already have an account? 
            <a href="login.php" class="fw-medium" data-view="#modal-signup-view">Sign in</a>
        </p>
    </div>
    <div class="mb-3">
        <button class="w-100 btn btn-lg btn-primary" name="register" type="submit">Sign up</button>
    </div>
</form>