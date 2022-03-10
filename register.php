<?php include 'components/header.php' ?>

<?php include 'template/user/register.php' ?>

<main>
    <?php if (isset($user->msg)) {?>
        <div class="alert alert-<?php if(array_keys($user->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>" style="position: absolute; bottom: 0; left: 1%;z-index:9" role="alert">
            <?php print_r(array_values($user->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="card rounded w-50">
            <div class="card-header">
                <h4 class="text-primary">Sign-up</h4>
            </div>
            <div class="card-body p-5">
                <?php include 'components/form-sign-up.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php include 'components/footer.php' ?>