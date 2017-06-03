
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

            <table id="data_sw" class="table table-striped">
                <thead>
                    <tr>

                        <th>#</th>
                        <th>Samsat</th>
                        <th>A</th>
                        <th>B </th>
                        <th>C1 </th>
                        <th>C2 </th>
                        <th>DP</th>
                        <th>DU</th>
                        <th>EP</th>
                        <th>EU</th>
                        <th>F</th>
                        <th>JLH</th>
                        <th>KD</th>
                        <th>SWDKLLJ</th>
                        <th>DENDA</th>
                        <th>JUMLAH</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; $abjad = 'A'; $num = 1 ; foreach ($contents as $key => $value): $urut = 1;?>
                    <tr>
                        <td><?php echo $num++ ?></td>
                        <td><?php echo $value['nama_samsat'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['A'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['B'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['C1'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['C2'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['DP'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['DU'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['EP'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['EU'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['F'] ?></td>
                        <td class="priceFormat" data-formula="SUM(<?php echo $abjad.'1';?>:<?php echo $abjad.'9'?>)"></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['KD'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['SWDKLLJ'] ?></td>
                        <td data-cell="<?php echo $abjad . $nomor++ ?>"><?php echo $value['DENDA'] ?></td>
                        <td class="priceFormat" data-formula="SUM(<?php echo $abjad.'10';?>:<?php echo $abjad.'12'?>)"></td>
                    </tr>

                    <?php $nomor = 1; $abjad++; endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<script>

    $('#data_sw').calx();
 
    $('#data_sw').Tabledit({
        deleteButton: false,
        url : '<?php echo base_url('data_sw/update_delete/'.$bulan . '/'. $tahun); ?>',
        columns : {
            identifier : [0, 'no_samsat'],
            editable: [[2, 'A'], 
            [3, 'B'], 
            [4, 'C1'], 
            [5, 'C2'], 
            [6, 'DP'], 
            [7, 'DU'], 
            [8, 'EP'], 
            [9, 'EU'], 
            [10, 'F'], 
            [12, 'KD'],
            [13, 'SWDKLLJ'],
            [14, 'DENDA']]
        },

        onSuccess : function(data, textStatus, jqXHR) { 


        },
        onFail : function(data, textStatus, jqXHR){
         

       }



   });

    




priceFormat();


    function setDataCell()
    {
        var y = 'A';
        var x = $('#data_sw tr').each(function(index, el) {

            $(this).find('td:lt(11):gt(2)').find('span').attr('data-cell', y + index)
            y++;
        });
    }


    function priceFormat()
    {
        $('.tabledit-span, .priceFormat').priceFormat({
            centsLimit: 0,
            prefix: '',
            clearPrefix: true,
            thousandsSeparator: '.',
            allowNegative: false,

        });
    }


</script>
