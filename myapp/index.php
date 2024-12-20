<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Welcome to my website!</h2>
	<p>This website is created for DevOps WRIT1 assignment to display how DevOps cycles can be applied to an application to streamline development and deployment!</p>
	<img src="https://media.istockphoto.com/id/1367728715/vector/devops-concept-with-infinite-loop-on-abstract-technology-background.jpg?s=612x612&w=0&k=20&c=aadwZ3TQPv31Qxd_RyCwvoNNHBT1kNiaoksHtPdfKAA=" alt"devops image">
	<p>Please navigate to the 'about' page to find information about this website. </p>
	<p>Please navigate to the 'Contact' page to contact us!</p>
</div>

<?php include("includes/footer.php");
echo "hello docker3";
include ("DbConnect.php");
$db= new Dbconnection();
$conn=$db->connect();
$db= new Dbconnection();

$conn=$db->connect();
$stm=$conn->prepare("select * from test");
$stm->execute();
$result=$stm->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
echo"</pre>";?>

</body>
</html>
