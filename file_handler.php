<?php
	echo 'File name: ' . $_FILES['filename']['name'] . '<br>';
	echo 'File size: ' . $_FILES['filename']['size'] . 'bytes' . '<br>';
	echo 'File type: ' . $_FILES['filename']['type'] . '<br>';
	echo 'Temporary file name: ' . $_FILES['filename']['tmp_name'] . '<br>';
?>