<?php 
	print '<pre>';
		#print_r($products);
	print '</pre>';
	print '<table border="1">';
	foreach($products as $product) {
		print '<tr>';
			print '<td>';
				print $product->bookID;
			print '</td>';
			print '<td>';
				print $product->name;
			print '</td>';
		print '</tr>';
	}
	print '</table>';
?>