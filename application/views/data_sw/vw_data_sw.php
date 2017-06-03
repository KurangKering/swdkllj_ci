<link href="<?php echo base_url('assets/'); ?>css/myStyle.css" rel="stylesheet">
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
           <div class="ibox-title">
            <span class="label label-primary pull-right">NEW</span>
            <br>
            <h3 class="text-center">Data SWDKLLJ</h3>
            <h4 class="text-center"><?php echo display_month_name($bulan) . ' - ' . $tahun ?></h4>

        </div>
        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table table-striped nowrap pretty " border="0" cellpadding="0" cellspacing="0" id="tableData">
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
                            <th>JLH </th>
                            <th>KD</th>
                            <th>SWDKLLJ</th>
                            <th>DENDA</th>
                            <th>JUMLAH</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $num = 1; ?>
                        <?php $abjad = 'A'; $urutan = 1; foreach ($data as $_data): ?>
                        <tr>
                            <td contenteditable="false"><?php echo $num ?></td>
                            <td contenteditable="false"><?php echo preg_replace('/Samsat/', '', $_data['nama_samsat']); ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['A']; ?>" onBlur="saveInlineEdit(this,'A','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['A']; ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['B']; ?>" onBlur="saveInlineEdit(this,'B','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['B']; ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['C1']; ?>" onBlur="saveInlineEdit(this,'C1','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['C1']; ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['C2']; ?>" onBlur="saveInlineEdit(this,'C2','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['C2']; ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['DP']; ?>" onBlur="saveInlineEdit(this,'DP','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['DP']; ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['DU']; ?>" onBlur="saveInlineEdit(this,'DU','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['DU']; ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['EP']; ?>" onBlur="saveInlineEdit(this,'EP','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['EP']; ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['EU']; ?>" onBlur="saveInlineEdit(this,'EU','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['EU']; ?></td>
                            <td class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['F']; ?>" onBlur="saveInlineEdit(this,'F','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['F']; ?></td>
                            <td data-formula="SUM(<?php echo $abjad . '1:'.$abjad.'9' ?>)" class="priceFormat" contenteditable="false"></td>

                            <td  class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>" contenteditable="true" data-old_value="<?php echo $_data['KD']; ?>" onBlur="saveInlineEdit(this,'KD','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['KD']; ?></td>
                            <td  class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>" contenteditable="true" data-old_value="<?php echo $_data['SWDKLLJ']; ?>" onBlur="saveInlineEdit(this,'SWDKLLJ','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['SWDKLLJ']; ?></td>
                            <td  class="inputs" data-cell="<?php echo $abjad . $urutan++ ?>"  contenteditable="true" data-old_value="<?php echo $_data['DENDA']; ?>" onBlur="saveInlineEdit(this,'DENDA','<?php echo $tahun.','.$bulan.','.$num; ?>')" onClick="highlightEdit(this);"><?php echo $_data['DENDA']; ?></td>
                            <td data-formula="SUM(<?php echo $abjad ?>10:<?php echo $abjad ?>12)" class="priceFormat" contenteditable="false"></td>
                                </tr>
                                <?php $num++; $abjad++; $urutan = 1;  ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<script>



    $('#tableData').calx();     
    priceFormat();
    function priceFormat()
    {
        $('.priceFormat').priceFormat({
            centsLimit: 0,
            prefix: '',
            clearPrefix: true,
            thousandsSeparator: ',',
            allowNegative: false,

        });
    }

   //  $('.inputs').keydown(function (e) {
   //     if (e.which === 9) {
   //         var index = $('.inputs').index(this) + 1;
   //         $('.inputs').eq(index).select();
   //     }
   // });


   //  function highlightEdit(editableObj) {
   //     $(editableObj).css("background","#FFF");
   // } 
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
        url: "<?php echo base_url('data_sw/update_data'); ?>",
        cache: false,
        data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
        success: function(response)  {
            console.log(response);
            // set updated value as old value
            $(editableObj).attr('data-old_value',editableObj.innerHTML);
            $(editableObj).css("background", x);       
            $('#tableData').calx();  
            priceFormat();

        }          
    });
}
</script>