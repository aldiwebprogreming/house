<?php 
foreach ($kab as $data) {
	?>
	<option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
	<?php } ?>