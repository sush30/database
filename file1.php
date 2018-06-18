<?php
$names=array(array('Name'=>'Mark',
					'Age'=>15,
					'weight'=>68));
foreach($names as $name=>$inner){
	echo $name.'<br>';
	foreach($inner as $item){
		echo $item.'<br>';
	}
}
?>