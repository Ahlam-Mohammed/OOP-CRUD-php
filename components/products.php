<?php 
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) { ?>
    <tr>
        <th scope'row'>
            <?php echo $row['id'] ?>
        </th>
        <th>
            <?php echo $row['name'] ?>
        </th>
        <th>
            <?php echo $row['price'] ?>
        </th>
        <th>
            <?php echo $row['details'] ?>
        </th>
        <th>
            <?php echo $row['category_id'] ?>
        </th>
        <th>
            <a href="" class="btn btn-success mx-3">Update</a>
            <a href="" class="btn btn-danger">Delete</a>
        </th>
        <th>
            <form action="">
                <div class="row w-50">
                    <div class="col-5">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <input type="number" name="quantity" id="quantity" class="form-control form-control-sm">
                    </div>
                    <div class="col-7">
                        <button type="submit" name="submit" value="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </th>
    </tr>
    
<?php }} ?>