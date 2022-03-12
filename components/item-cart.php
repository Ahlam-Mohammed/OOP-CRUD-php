<?php 
$total = 0;
$product = new Product($conn);
foreach ($_SESSION['cart'] as $key => $value) 
{ 
    $result  = $product->getProductByID($key);

    $row = $result->fetch_assoc();

    $subtotal = $value*$row['price'];
    $total    += $subtotal;

    ?>
    
    <tr>
        <th scope'row'>
            <?php echo $row['id'] ?>
        </th>
        <td>
            <?php echo $row['name'] ?>
        </td>
        <td>
            <?php echo '$'.$row['price'] ?>
        </td>
        <td>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="row w-50">
                        <div class="col-5">
                            <input type="hidden" name="id" value="<?php echo $key?>">
                            <input type="number" value="<?php echo $value ?>" name="quantity" id="quantity" class="form-control form-control-sm">
                        </div>
                        <div class="col-7">
                            <button type="submit" name="updatQuantity" value="submit" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </button>
                            <button type="submit" name="deleteItem" class="btn">
                                delete
                            </button>
                        </div>
                    </div>
                </form>
        </td>
        <td>
            <?php echo '$'.$subtotal ?>
        </td>
    </tr>
<?php $result = $row = ''; } ?>


<?php if (empty($_SESSION['cart'])) { ?>
    <tr>
        <th colspan="5" class="text-center">
            <?php echo 'Your Card is Empty ...' ?>
        </th>
    </tr>
<?php } else {?>
    <tr>
        <th colspan="4">
            <?php echo 'Total : $'.$total ?>
        </th>
        <th colspan="4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Pay
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#emptyCart">
                Empty the cart
            </button>
        </th>
    </tr>
<?php } ?>