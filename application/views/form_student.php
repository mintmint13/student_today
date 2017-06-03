<?php echo form_open('student/set_student_profile');?>

<label>name</label>
<input type="text" name="name">

<label>lastname</label>
<input type="text" name="lastname">

<label>age</label>
<input type="text" name="age">

<button type="submit">save</button>

<?php echo form_close();?>

<hr>
<?php //echo '<pre>', print_r($student_list); ?>
<table border="1" > 
	<tr>
		<th>name</th>
		<th>lastname</th>
		<th>age</th>
		<th>delete</th>
	</tr>
	<?php 
		foreach ($student_list as $key => $value) {
			?>
			<tr> 
				<td><?php echo $value['name'];?></td>
				<td><?php echo $value['lastname'];?></td>
				<td><?php echo $value['age'];?></td>
				<td><a href="<?php echo site_url('student/delete_student_profile/'.$value['id']);?>">delete data</td>

			</tr>
			<?php 
		}
	?>
</table>




