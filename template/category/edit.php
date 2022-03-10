<?php 

include '../../Models/DataBase.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $conn = new Database();
    $conn->select('categories','*', "id='$id'");

    $result = $conn->sql;

    $row = mysqli_fetch_assoc($result);
}

include '../../include/header.php';
?>

<main>
    <div class="container-lg card p-2 m-auto">
        <div class="card-header">
            <h3 class="text-primary">Update category</h3>
        </div>
        <div class="card-body">
            <form action="update.php" method="POST"  class="row g-3 needs-validation" novalidate>
                <?php include 'form.php' ?>
            </form>
        </div>
    </div>
</main>

<?php include '../../include/footer.php'; ?>