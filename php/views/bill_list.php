<style>
<?php
 include 'css/bill_list.css';
?>
</style>
<?php
	print '<div class="view-bill">';
	foreach($bills as $bill) {
		print '<div class="bill-info">';
			print '<p> Name: ';
			print $bill->customerName;
			print '</a>';
			print '</p>';
			print '<p>';
			print 'Address: ';
			print $bill->customerAddress;
			print '</p>';
			print '<p>';
			print 'Total: ';
			print $bill->total;
			print 'đ</p>';
		print '</div>';

	}
	print '</div>';
	print '</div>';
	
?>