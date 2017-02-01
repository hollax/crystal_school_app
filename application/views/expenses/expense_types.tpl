<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach $expense_types as $ex_type}
                    <tr>
                        <td>{$ex_type->expensestype_name}</td>
                        <td>
                            <a href="{site_url("expenses/edit_type/{$ex_type->expensestype_id}")}"
                               class="btn-form-modal btn btn-default"
                               data-url="{site_url("expenses/edit_type/{$ex_type->expensestype_id}")}"

                               >Edit</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="expensestype_name" class="form-control" id="expensestype_name">
            </div>
            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
