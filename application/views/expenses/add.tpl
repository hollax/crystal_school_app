
{if $success}Successfully saved {/if}

<h1>Add Expense</h1>

{form_open()}
<label>Reason</label>
<input name="expenses_reason" type="text">
<label>Amount</label>
<input name="expenses_amount" type="text">


<label>Date</label>
<input name="expenses_datetime" type="date" />
<input type="submit" name="submit" value="Save" />
{form_close()}
