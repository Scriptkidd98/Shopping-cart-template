<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$product = mysqli_query($conn,"SELECT * FROM productstable ORDER BY productid ASC" );
while( $row = mysqli_fetch_array($product))
	$rows[] = $row;
foreach($rows as $row){
?>
	<div class = "product-item">
		<form method="post" action="testcart.php">
		<img src="<?php echo $row["imagelink"]; ?>">
		<div class="product-title"><?php echo $row["productid"]; ?></div>
		<div class="product-title"><?php echo $row["productname"]; ?></div>
		<div class="product-price"><?php echo $row["price"]; ?></div>
		<div class="product-quantity"><input type="" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" onclick="document.forms[0].submit();" /></div>
		</form>
		
	</div>
<?php
	}
?>