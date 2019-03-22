<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if(!empty($_POST["quantity"])) {
	$productbyid = mysqli_query($conn,"SELECT * FROM productstable WHERE productid = '" . $_GET["productid"] . "'" );
	?>
<div><?php echo $_GET["productid"];?></div>

<?php
}
?>