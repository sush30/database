<?php
include 'post.php';

$query="SELECT * FROM `owner_info`";
if($run=mysqli_query($database,$query)){
	echo "query executed<br>";
	while($execute=mysqli_fetch_array($run))
	{
		echo $execute['Name'];
	}
}
else
{
	echo "query not executed";
}

?>