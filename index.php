<?php include 'components/header.php' ?>

<?php include 'template/product/getAll.php' ?>

<main class="p-5">
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
                    <th scope="col">.</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'components/products.php' ?>
            </tbody>
        </table>
    </div>
</main>


<?php include 'components/footer.php' ?>