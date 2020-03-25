<?php
	$db = mysqli_connect('localhost', 'root', '', 'guest_book');

	 if (!empty($_POST['name'] && !empty($_POST['body']))) {
 	
		 $name = $_POST["name"];
		 $body = $_POST["body"];
		 $time = date('Y.m.d H:i:s');

		$query = "INSERT INTO guest_book (dtime, name, body)" .
		"VALUES('$time', '$name','$body')";
		 mysqli_query($db, $query);
	 } 

	$sql = "SELECT * FROM guest_book ORDER BY dtime DESC LIMIT 5";
	$guestBookData = $db->query($sql);

	?>

	
	<?while ($curRecord = $guestBookData->fetch_assoc()) :?>
		<div class="container">
			 	<p><span><?=$curRecord['name']?></span> <?=date("d.m.Y", strtotime($curRecord['dtime']))?></p>
			 	<p><?=$curRecord['body']?></p>
			 </div>
	<?endwhile?>
