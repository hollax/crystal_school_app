{* school/edit_arm.tpl *} 
<form method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="expensestype_name" class="form-control" id="name" value="{$expense_type->expensestype_name}">
    </div>
    <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
</form>
