<?php
$filename = 'config.php';

if (file_exists($filename)) {
    echo "The file $filename exists";
	header("location:web/index.php");
} else {
    echo "The file $filename does not exist. Click setup button";
	
}

?>
<form action="setup_action.php">
<input type="submit" value ="Click me to Setup"/>
</form>