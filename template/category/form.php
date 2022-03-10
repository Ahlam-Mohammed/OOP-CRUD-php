<input type="hidden" name="id" value="<?php if(isset($row)) { echo $row['id']; } ?>" >
<div class="col-md-12">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" name="name" value="<?php if(isset($row)) { echo $row['name']; } ?>" id="validationCustom01" class="form-control">
</div>
<div class="col-12">
    <button class="btn btn-primary" name="submit" value="submit" type="submit">Save</button>
</div>