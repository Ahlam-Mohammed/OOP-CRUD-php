<?php 

include '../../Models/DataBase.php';
$conn = new Database();
$conn->select('categories', '*');
$result = $conn->sql;

include '../../include/header.php';
?>

    <section>
        <div class="container my-5 text-end">
            <a href="createProduct.php" class="btn btn-secondary">Add New Product</a>
            <a href="create.php" class="btn btn-secondary">Add New Category</a>
            <a href="index.php" class="btn btn-secondary">All Products</a>
            <a href="categories.php" class="btn btn-primary">All Categories</a>
        </div>
    </section>

    <main>
        <div class="container-lg w-50 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th scope'row'>$row[id]</th>";
                                echo "<td>$row[name]</td>";
                                echo '<td>
                                        <a href="edit.php?id='.$row['id'].'" class="btn btn-success mx-3">Update</a>
                                        <a href="delete.php?id='.$row['id'].'" class="btn btn-danger">Delete</a>
                                    </td>';
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

<?php include '../../include/footer.php'; ?>