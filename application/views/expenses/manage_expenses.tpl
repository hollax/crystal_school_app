<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Reason</th>
                        <th>Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach $expenses as $manage}
                    <tr>
                        <td>{$manage->expenses_reason}</td>
                        <td>{$manage->expenses_amount}</td>
                        <td>
                            <a href="{site_url("expenses/edit_expenses/{$manage->expenses_id}")}"
                               class="btn-form-modal btn btn-default"
                               data-url="{site_url("expenses/edit_type/{$manage->expenses_id}")}"

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
                <label for="name">reasons:</label>
                <input type="text" name="expenses_reason" class="form-control" id="manageexpenses_reason">
            </div>
              <div class="form-group">
                <label for="expenses_amount">Amount:</label>
                <input type="text" name="expenses_amount" class="form-control" id="manageexpenses_amount">
            </div>
            <div>
            <label>Select Expenses Type</label>
                <select name="expensestype_id">
                    <option>select</option>
                    {foreach $expense_types as $expense}
                        <option value="{$expense->expensestype_id}">{$expense->expensestype_name}</option>
                    {/foreach}
                </select>
            </div>
             <div class="form-group">
                <label for="expenses_datetime">Amount:</label>
                <input type="date" name="expenses_datetime" class="form-control" id="expenses_datetime">
            </div>
            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
