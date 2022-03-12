<!-- Modal -->
<div class="modal fade" id="emptyCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Emptied The Card !!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Do you want to empty the cart ?!</p>
            </div>
            <div class="modal-footer">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="hidden" name="total" value="<?php echo $total; ?>">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                    <button type="submit" name="emptyCard" class="btn btn-success">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>