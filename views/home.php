<?php
	echo "Welcome ".$logged['user_name']."<p>";

	echo "These are the registered users:<br>";
?>
	<table border="1">
		<tr>
			<td>
				<b>No.</b>
			</td>
			<td>
				<b>Name</b>
			</td>
			<td>
				<b>Email</b>
			</td>
		</tr>
		<?php  $n=1; foreach($userlist as $row):?>
		<tr>
			<td>
				<?php echo $n;?>
			</td>
			<td>
				<?php echo "<a href='details/".$row['id']."'>".$row['user_name']."</a>";?>
			</td>
			<td>
				<?php echo $row['user_email'];?>
			</td>
		</tr>
		<?php  $n++; endforeach; ?>
	</table>
