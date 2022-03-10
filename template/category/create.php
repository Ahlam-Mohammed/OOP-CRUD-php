<?php 

include '../../Models/DataBase.php';

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    
    $conn = new Database();
    $conn->insert('categories', ['name' => $name]);
    if ($conn) header('Location: category.php');
}


include '../../include/header.php';
?>

<main>
    <div class="container-lg w-50 card p-2 m-auto">
        <div class="card-header">
            <h3 class="text-primary">Create Category</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-3 needs-validation" novalidate>
                <?php include 'form.php' ?>
            </form>
        </div>
    </div>
</main>

<?php include '../../include/footer.php'; ?>