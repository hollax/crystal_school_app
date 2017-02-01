{* school/edit_arm.tpl *} 
<form method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{$arm->name}">
    </div>
    <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
</form>