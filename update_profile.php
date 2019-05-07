<?php include'inc/header2.php';?>

<div class="row">
	<div class="col-lg-12 update_profile">
	<form>
	 <h2 style="color: white;">Update Profile</h2>
		<table style="border-collapse:separate;border-spacing: 10px;">
			<tr>
				<th>First Name:</th>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<th>Last Name:</th>
				<td><input type="text" name="lname"></td>
			</tr>
			<tr>
				<th>Skill:</th>
				<td><input type="text" name="skill"></td>
			</tr>

			<tr>
				<th>Date of birth:</th>
				<td>
					<select>
						<option>Day</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
					</select>
					<select>
						<option>Month</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
					</select>
					<select>
						<option>Year</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Address:</th>
				<td><input type="text" name="addr"></td>
			</tr>
			<tr>
				<th>State:</th>
				<td><input type="text" name="state"></td>
			</tr>
			<tr>
				<th>Country:</th>
				<td>
					<select>
						<option>Select</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
						<option>Bangladesh</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Phone:</th>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<th>Gender:</th>
				<td>
				<input type="radio" name="gender" value="male"> Male
				<input type="radio" name="gender" value="male"> Female<br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>
	</div>
</div>






<?php include'inc/footer.php';?>