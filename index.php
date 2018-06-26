<?php
include("config.php");

if(isset($_GET['q']) && !empty($_GET['q']))
{
	if(strpos($_GET['q'], "'") !== false) die("Not Acceptable");
	if(strpos($_GET['q'], '"') !== false) die("Not Acceptable");
	$query = "SELECT * FROM `search` WHERE CONCAT(`title`,`author`,`desc`) LIKE '%".$_GET['q']."%' OR `title` = '".$_GET['q']."' OR `desc` = '".$_GET['q']."' OR `author` = '".$_GET['q']."';";
	$sql = mysqli_query($db, $query);
	
	while($result = mysqli_fetch_array($sql))
	{
		echo $result['title'];
	}

}

$query1 = "SELECT * FROM `search`";
$sql1 = mysqli_query($db, $query1);
$result1 = mysqli_fetch_array($sql1);

if($result1)
{
	echo "<br>".htmlentities($result1['title']). "<br>";
	echo htmlentities($result1['desc']). "<br>";
	echo htmlentities($result1['author']);
}
?>
