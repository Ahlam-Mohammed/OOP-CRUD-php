<form action="" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Amount:</label>
        <input type="number" name="amount" id="formGroupExampleInput2" placeholder="Your Email" class="form-control <?php echo (!empty($deposit->amount_err)) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $deposit->amount_err;?></span>
    </div>
    <div class="mb-3">
        <button class="w-100 btn btn-lg btn-primary" name="submit" value="submit" type="submit">Save</button>
    </div>
</form>