<?php include 'components/header.php' ?>

<main class="p-5">
    <?php if (isset($cart->msg)) {?>
        <div class="alert alert-<?php if(array_keys($cart->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>"  role="alert">
            <?php print_r(array_values($cart->msg)[0]) ?>
        </div>
    <?php } ?>
    <?php if (isset($Withdraw->msg)) {?>
        <div class="alert alert-<?php if(array_keys($Withdraw->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>"  role="alert">
            <?php print_r(array_values($Withdraw->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container-lg table-responsive">
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Details</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                    <!-- <th scope="col">.</th> -->
                </tr>
            </thead>
            <tbody>
                <?php include 'components/products.php' ?>
            </tbody>
        </table>
    </div>
</main>


<?php include 'components/footer.php' ?>