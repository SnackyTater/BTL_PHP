<?php 
	print '<pre>';
		#print_r($products);
	print '</pre>';
	print '<table border="1">';
	foreach($products as $product) {
		print '<tr>';
			print '<td>';
				print $product->productid;
			print '</td>';
			print '<td>';
				print $product->title;
			print '</td>';
			print '<td>';
				print $product->price;
			print '</td>';
			print '<td>';
				print $product->description;
			print '</td>';
			print '<td>';
				print $product->thuoctinh1;
			print '</td>';
			print '<td>';
				print $product->thuoctinh2;
			print '</td>';
		print '</tr>';
	}
	print '</table>';
?>