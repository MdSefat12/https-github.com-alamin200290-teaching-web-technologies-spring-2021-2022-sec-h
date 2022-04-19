<?php 



		$conn = new mysqli('localhost', 'root', '', 'sefat');
		if(!$conn)
		{
			die(mysqli_error($conn));
		}

	?>