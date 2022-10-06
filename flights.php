<?php 
include 'admin/db_connect.php'; 
if($_SERVER['REQUEST_METHOD'] == "POST"){
	foreach($_POST as $k => $v){
		$$k = $v;
	}
}

?>
    </script>