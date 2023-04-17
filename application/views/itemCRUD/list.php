<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table edit</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="tab-mod.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js" type="text/javascript"></script>
    
</head>

<style>
div.container {
    width: 100%;
    font-family: tahoma;
    font-size: 20px;
    position: relative;
    clear: both;
    margin: 0;
    padding: 0;
    text-align: center;
    }

</style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tabulasi Mudik 2023 Terminal Terpadu Pulo Gebang</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create') ?>"> Tambah</a>
            <a class="btn btn-success" href="<?php echo base_url('itemCRUD/show') ?>"> Piss</a>
        </div>
    </div>
</div>
<body>
    <table id="mudik" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
    <thead>
        <tr> 
            <th rowspan="2" style="vertical-align : middle;text-align:center" scope="col">Id</th>
            <th rowspan="2" style="vertical-align : middle;text-align:center" scope="col">Tanggal</th>
            <th colspan="2" style="vertical-align : middle;text-align:center" scope="col">Keberangkatan</th>
            <th colspan="2" style="vertical-align : middle;text-align:center" scope="col">Kedatangan</th>
            <th colspan="3" style="vertical-align : middle;text-align:center" scope="col">Rampcheck</th>
            <th colspan="4" style="vertical-align : middle;text-align:center" scope="col">Test Pengemudi</th>
            <th rowspan="2" style="vertical-align : middle;text-align:center" scope="col">Action</th>
		   
		</tr>
            <tr>
				<td style="vertical-align : middle;text-align:center"> BUS</td>
				<td style="vertical-align : middle;text-align:center"> PNP</td>
				<td style="vertical-align : middle;text-align:center"> BUS</td>
				<td style="vertical-align : middle;text-align:center" > PNP</td>
				<td style="vertical-align : middle;text-align:center"> Laik</td>
				<td style="vertical-align : middle;text-align:center"> Tidak Laik</td>
				<td style="vertical-align : middle;text-align:center"> Jumlah</td>
                <td style="vertical-align : middle;text-align:center"> Layak</td>
				<td style="vertical-align : middle;text-align:center"> Layak Dengan Catatan</td>
                <td style="vertical-align : middle;text-align:center"> Tidak Layak</td>
				<td style="vertical-align : middle;text-align:center"> Jumlah</td>
           </tr>
         </thead>
    <tbody>
    <?php foreach ($data as $item) { ?>
        <tr>
            <td><?php echo $item->id; ?></td>
            <td><?php echo $item->tanggal; ?></td>
            <td><?php echo $item->bus_berangkat; ?></td>
            <td><?php echo $item->pnp_berangkat; ?></td>
            <td><?php echo $item->bus_datang; ?></td>
            <td><?php echo $item->pnp_datang; ?></td>
            <td><?php echo $item->laik; ?></td>
            <td><?php echo $item->tidak_laik; ?></td>
            <td><?php echo $item->jumlah_rampcheck; ?></td>
            <td><?php echo $item->positive; ?></td>
            <td><?php echo $item->l_catatan; ?></td>
            <td><?php echo $item->negative; ?></td>
           
            <td><?php echo $item->self_jumlah; ?></td>
            <td>
                <form method="DELETE" action="<?php echo base_url('itemCRUD/delete/'.$item->id);?>">
                  
                    <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/edit/'.$item->id) ?>"> Edit</a>
                    <button type="submit" class="btn btn-danger"> Delete</button>
                </form>
            </td>
        </tr>

    <?php } ?>
    
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#mudik').DataTable( {
            responsive: true
        } );
     
        new $.fn.dataTable.FixedHeader( table );
    });
</script>