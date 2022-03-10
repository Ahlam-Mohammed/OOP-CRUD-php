<form action="" method="POST">
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
        <p class="fs-sm pt-3 mb-0">Don't have an account? 
            <a href="register.php" class="fw-medium" data-view="#modal-signup-view">Sign up</a>
        </p>
    </div>
    <div class="mb-3">
        <button class="w-100 btn btn-lg btn-primary" name="submit" value="submit" type="submit">Sign up</button>
    </div>
</form>