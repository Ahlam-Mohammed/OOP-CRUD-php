<?php 

include '../../Models/DataBase.php';

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    
    $conn = new Database();
    $conn->insert('categories', ['name' => $name]);
    if ($conn) header('Location: category.php');
}


include '../include/header.php';
?>

<main>
    <div class="container-lg w-50 card p-2 m-auto">
        <div class="card-header">
            <h3 class="text-primary">Create Category</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Name</label>
                    <input type="text" name="name" id="validationCustom01" class="form-control">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" name="submit"  type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include '../include/footer.php'; ?>