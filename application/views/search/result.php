<div class="card-body">
<h2>Results for <?php echo $id; ?></h2>

<p>Sorry, but we didn't find any past QSOs with <?php echo $id; ?></p>

<h3>Callbook Search for <?php echo $id; ?></h3>
<?php if(isset($callsign['callsign'])) { ?>
<table>

<tr>
	<td align="left">Callsign</td>
   <td style="padding: 0.3em 0 0.3em 0.5em;" align="left"><?php echo str_replace("0","&Oslash;",strtoupper($callsign['callsign'])); ?> <a target="_blank" href="https://www.qrz.com/db/<?php echo strtoupper($callsign['callsign']); ?>"><img style="vertical-align: baseline" width="16" height="16" src="<?php echo base_url(); ?>images/icons/qrz.png" alt="Lookup <?php echo strtoupper($callsign['callsign']); ?> on QRZ.com"></a> <a target="_blank" href="https://www.hamqth.com/<?php echo strtoupper($callsign['callsign']); ?>"><img style="vertical-align: baseline" width="16" height="16" src="<?php echo base_url(); ?>images/icons/hamqth.png" alt="Lookup <?php echo strtoupper($callsign['callsign']); ?> on HamQTH"></a></td>
</tr>

<tr>
	<td style="padding: 0 0.3em 0 0;" align="left">Name</td>
	<td style="padding: 0.3em 0 0.3em 0.5em;" align="left"><?php echo $callsign['name']; ?></td>
</tr>

<tr>
	<td style="padding: 0 0.3em 0 0;" align="left">City</td>
	<td style="padding: 0.3em 0 0.3em 0.5em;" align="left"><?php echo $callsign['city']; ?></td>
</tr>

<?php if(isset($callsign['dxcc_name'])) { ?>
<tr>
	<td style="padding: 0 0.3em 0 0;" align="left">DXCC</td>
	<td style="padding: 0.3em 0 0.3em 0.5em;" align="left"><?php echo $callsign['dxcc_name']; ?></td>
</tr>
<?php } ?>

<tr>
	<td style="padding: 0 0.3em 0 0;" align="left">Gridsquare</td>
	<td style="padding: 0.3em 0 0.3em 0.5em;" align="left">
	<?php
		if ($grid_worked != 0) {
			echo " <span data-bs-toggle=\"tooltip\" title=\"Worked\" class=\"badge text-bg-success\" style=\"padding-left: 0.2em; padding-right: 0.2em;\">".strtoupper($callsign['gridsquare'])."</span>";
		} else {
			echo " <span data-bs-toggle=\"tooltip\" title=\"Not Worked\" class=\"badge text-bg-danger\" style=\"padding-left: 0.2em; padding-right: 0.2em;\">".strtoupper($callsign['gridsquare'])."</span>";
		}
	?>
	</td>
</tr>

<tr>
	<td style="padding: 0 0.3em 0 0;" align="left">LoTW User</td>
	<td style="padding: 0.3em 0 0.3em 0.5em;" align="left">
   <?php
		if (isset($lotw_lastupload) && $lotw_lastupload != '') {
			$lotw_hint = '';
			if ($lotw_lastupload > 365) {
				$lotw_hint = ' lotw_info_red';
			} elseif ($lotw_lastupload > 30) {
				$lotw_hint = ' lotw_info_orange';
			} elseif ($lotw_lastupload > 7) {
				$lotw_hint = ' lotw_info_yellow';
			}
			echo '<a id="lotw_badge" href="https://lotw.arrl.org/lotwuser/act?act='.$callsign['callsign'].'" target="_blank"><small id="lotw_info" class="badge text-bg-success'.$lotw_hint.'" data-bs-toggle="tooltip" title="LoTW User">Yes</small></a> <a id="lotw_badge" href="https://lotw.arrl.org/lotwuser/act?act='.$callsign['callsign'].'" target="_blank"> last upload</a> '.$lotw_lastupload.' days ago';
		} else {
			echo "<span data-bs-toggle=\"tooltip\" title=\"No LoTW User\" class=\"badge text-bg-danger\" style=\"padding-left: 0.2em; padding-right: 0.2em;\">No</span>";
		}
	?>
	</td>
</tr>

</table>

<?php } else { ?>

<p><?php echo $error; ?></p>

<?php } ?>
</div>
