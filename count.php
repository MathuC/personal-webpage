<?php
$index="index";
$result = mysqli_query($conn, "SELECT count FROM count WHERE name='$index'");
$data =array();
if($result->num_rows != 0){
	while ($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
	$count= intval($data[0]["count"]);
}
echo $count;
?>