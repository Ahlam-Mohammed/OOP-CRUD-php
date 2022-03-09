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

include '../include/header.php';
?>

<main>
    <div class="container-lg card p-2 m-auto">
        <div class="card-header">
            <h3 class="text-primary">Update category</h3>
        </div>
        <div class="card-body">
            <form action="update.php" method="POST"  class="row g-3 needs-validation" novalidate>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $row['name']; ?>" id="validationCustom01" class="form-control">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" name="submit" value="submit" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include '../include/footer.php'; ?>