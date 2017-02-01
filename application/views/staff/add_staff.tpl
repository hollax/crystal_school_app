

<form>
	<div class="container col-md-12">

	<div class="form-group ">
		<label>First Name:</label>
		<input type="text" name="staff_fname" class="form-control">
	</div>

	<div class="form-group">
		<label>Middle Name:</label>
		<input type="text" name="staff_mname" class="form-control">
	</div>

	<div class="form-group">
		<label>Surname:</label>
		<input type="text" name="staff_sname" class="form-control">
	</div>

	<div class="form-group">
		<label >Sex:</label>
		<br>
		<input type="radio" name="staff_dept" value="male" >Male
		<input type="radio" name="staff_dept" value="female" >Female
	</div>

	<div class="form-group">
		<label>Department:</label>
		<select name="staff_dept" class="form-control">
			<option value="" class="form-control">Select</option>
		      {foreach $departments as $dept}
                    <option value="{$dept->id}">{$dept->name}</option>
             {/foreach}
		</select>
	</div>

	<div class="form-group">
		<label>Telephone Number:</label>
		<input type="text" name="staff_tel" class="form-control">
	</div>

	<div class="form-group">
		<label>Date of Birth:</label>
		<input type="date" name="staff_dob" class="form-control">
	</div>

	<div class="form-group">
		<label>State:</label>
		<select name="staff_state" class="form-control">
		<option value="" class="form-control">state</option>
		{foreach $states as $state}
                    <option value="{$state}">{$state}</option>
             {/foreach}
		</select>
	</div>

	<div class="form-group">
		<label>Local Government:</label>
		<input type="text" name="staff_lga" class="form-control">
	</div>

	<div class="form-group">
		<label>Nationality:</label>
		<input type="text" name="staff_nationality" class="form-control">
	</div>

	<div class="form-group">
		<label>Image:</label>
		<input type="file" name="staff_image" class="form-control">
	</div>

	<div class="form-group">
		<label>Email:</label>
		<input type="email" name="staff_email" class="form-control">
	</div>

	<div class="form-group">
		<label>Address:</label>
		<textarea name="Staff_address" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<label>Best Food:</label>
		<input type="text" name="best_food" class="form-control">
	</div>

	<div class="form-group">
		<label>Hobbies:</label>
		<input type="text" name="hobby" class="form-control">
	</div>

	<div class="form-group">
		<label>University Certificate:</label>
		<input type="text" name="university_certificate" class="form-control">
	</div>

	<div class="form-group">
		<label>Staff Salary:</label>
		<input type="text" name="staff_salary" class="form-control">
	</div>

	<div class="form-group">
		<label>Year Joined:</label>
		<input type="date" name="staff_Year_Joined_Establishment" class="form-control">
	</div>

	<div class="form-group">
		<label>Bank Id:</label>
		<input type="text" name="bank_id" class="form-control">
	</div>

	<div class="form-group">
		<label>Staff Bank No:</label>
		<input type="text" name="staff_bankno" class="form-control">
	</div>

	<div class="form-group">
		<label>Staff bank Name:</label>
		<input type="text" name="staff_bankname" class="form-control">
	</div>
	</div>
</form>
