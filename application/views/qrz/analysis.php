<div class="container">
<h2><?php echo $page_title; ?></h2>

<?php 
if (isset ($qrz_table_headers)) {
	echo $qrz_table_headers;
} else {
	echo 'No data imported. please check selected date. Must be in the past!';
}
?>
<?php if (isset ($qrz_table)) {echo $qrz_table;} ?>

</div>
