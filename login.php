<?php include 'components/header.php' ?>

<?php include 'template/user/login.php' ?>

<main>
    <?php if (isset($userLogin->msg)) {?>
        <div class="alert alert-<?php if(array_keys($userLogin->msg)[0] == 'success') echo 'success'; else echo '' ?>" role="alert">
            <?php if(array_keys($userLogin->msg) [0] == 'success') print_r(array_values($userLogin->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="card rounded w-50">
            <div class="card-header">
                <h4 class="text-primary">Sign-in</h4>
            </div>
            <div class="card-body p-5">
                <?php include 'components/form-sign-in.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php include 'components/footer.php' ?>