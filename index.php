<?php
	require 'Product.php';
	require 'Book.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"> 
	<title></title>
</head>
<body>
	<?php

		$p = new Product(); //create object
		$p->productID = 1;
		$p->productName = 'PHP OOP';
		$p->productPrice = 100.75;
		echo $p->getInfo();
		$p->showPrice();

		echo '<hr>';
		$p2 = new Product(); //create object
		$p2->productID = 2;
		$p2->productName = 'PHP Basic';
		$p2->productPrice = 50;
		echo $p2->getInfo();
		$p2->showPrice();

		echo "<hr>";
		// การเรียกแบบ private ต้องเรียกผ่าน constructor เท่านั้น

		$b = new Book('1234','PHP','john');
		$b->showBook();





	?>
</body>
</html>