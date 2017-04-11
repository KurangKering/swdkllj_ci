<div class="row">
	<div class="col-lg-12">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Data Lunas SWDKLLJ</h5>
				<div class="ibox-tools">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					
				</div>
			</div>
			<div class="ibox-content">
				<div class="table-responsive">
					<table width="100%" class="table table-striped nowrap pretty" border="0" cellpadding="0" cellspacing="0" id="tableData">
						<thead>
							<tr>
								<th>#</th>
								<th>Samsat</th>
								<th>A</th>
								<th>B</th>
								<th>C1</th>
								<th>C2</th>
								<th>DP</th>
								<th>DU</th>
								<th>EP</th>
								<th>EU</th>
								<th>F</th>
								<th>KD</th>
								<th>SWDKLLJ</th>
								<th>DENDA</th>
								
							</tr>
						</thead>

						<tbody>
							<?php $num = 1; ?>
							<?php foreach ($data as $_data): ?>
								<tr>
									<td contenteditable="false"><?php echo $num ?></td>
									<td contenteditable="false"><?php echo preg_replace('/Samsat/', '', $_data['nama_samsat']); ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['A']; ?>" onBlur="saveInlineEdit(this,'A','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['A']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['B']; ?>" onBlur="saveInlineEdit(this,'B','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['B']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['C1']; ?>" onBlur="saveInlineEdit(this,'C1','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['C1']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['C2']; ?>" onBlur="saveInlineEdit(this,'C2','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['C2']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['DP']; ?>" onBlur="saveInlineEdit(this,'DP','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['DP']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['DU']; ?>" onBlur="saveInlineEdit(this,'DU','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['DU']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['EP']; ?>" onBlur="saveInlineEdit(this,'EP','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['EP']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['EU']; ?>" onBlur="saveInlineEdit(this,'EU','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['EU']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['F']; ?>" onBlur="saveInlineEdit(this,'F','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['F']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['KD']; ?>" onBlur="saveInlineEdit(this,'KD','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['KD']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['SWDKLLJ']; ?>" onBlur="saveInlineEdit(this,'SWDKLLJ','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['SWDKLLJ']; ?></td>
									<td contenteditable="true" data-old_value="<?php echo $_data['DENDA']; ?>" onBlur="saveInlineEdit(this,'DENDA','<?php echo $_data["data_tahun"].','.$_data['data_bulan'].','.$_data['nomor_samsat']; ?>')" onClick="highlightEdit(this);"><?php echo $_data['DENDA']; ?></td>

									<!-- <td><?php echo $_data['A'] ?></td>
									<td><?php echo $_data['B'] ?></td>
									<td><?php echo $_data['C1'] ?></td>
									<td><?php echo $_data['C2'] ?></td>
									<td><?php echo $_data['DP'] ?></td>
									<td><?php echo $_data['DU'] ?></td>
									<td><?php echo $_data['EP'] ?></td>
									<td><?php echo $_data['EU'] ?></td>
									<td><?php echo $_data['F'] ?></td>
									<td><?php echo $_data['KD'] ?></td>
									<td><?php echo $_data['SWDKLLJ'] ?></td>
									<td><?php echo $_data['DENDA'] ?></td> -->

								</tr>
								<?php $num++; ?>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>

<script>
	
	var tableData = $('#tableData').dataTable({
		paging : false,
		filter : false,
			//sort : false,
			fixedHeader: true
		});

	function highlightEdit(editableObj) {
		// $(editableObj).css("background","#FFF");
	} 
	function hexc(colorval) {
		var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
		delete(parts[0]);
		for (var i = 1; i <= 3; ++i) {
			parts[i] = parseInt(parts[i]).toString(16);
			if (parts[i].length == 1) parts[i] = '0' + parts[i];
		}
		color = '#' + parts.join('');
		return color;
	}
	function saveInlineEdit(editableObj,column,id) {
		var x = $(editableObj).css('backgroundColor');
		
	// no change change made then return false
	if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
		return false;
	// send ajax to update value
	$(editableObj).css("background","#FFF url(<?php echo base_url('assets/img/loader.gif'); ?>) no-repeat right");
	
	$.ajax({
		url: "<?php echo base_url('band/update_data'); ?>",
		cache: false,
		data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
		success: function(response)  {
			console.log(response);
			// set updated value as old value
			$(editableObj).attr('data-old_value',editableObj.innerHTML);
			$(editableObj).css("background", x);			
		}          
	});
}
</script>