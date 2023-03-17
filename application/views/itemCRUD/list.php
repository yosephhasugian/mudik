<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>TTPG</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<style>
div.container {
        width: 100%;
        font-family: tahoma;
    font-size: 20px;
    position: relative;
    clear: both;
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

<table id="mudik" class="table table-sm table-striped  table-bordered table-hover " style="width: 100% !important;">
    <thead>
        <tr> 
            <th rowspan="2" style="vertical-align : middle;text-align:center" scope="col">Id</th>
            <th rowspan="2" style="vertical-align : middle;text-align:center" scope="col">Tanggal</th>
            <th colspan="2" style="vertical-align : middle;text-align:center" scope="col">Keberangkatan</th>
            <th colspan="2" style="vertical-align : middle;text-align:center" scope="col">Kedatangan</th>
            <th colspan="4" style="vertical-align : middle;text-align:center" scope="col">Rampcheck</th>
            <th colspan="3" style="vertical-align : middle;text-align:center" scope="col">Test Urine</th>
		    <th rowspan="2" style="vertical-align : middle;text-align:center" scope="col">Action</th>
		</tr>
            <tr>
				<td style="vertical-align : middle;text-align:center"> BUS</td>
				<td style="vertical-align : middle;text-align:center"> PNP</td>
				<td style="vertical-align : middle;text-align:center"> BUS</td>
				<td style="vertical-align : middle;text-align:center" > PNP</td>
				<td style="vertical-align : middle;text-align:center"> Laik</td>
				<td style="vertical-align : middle;text-align:center"> Laik dengan Catatan</td>
				<td style="vertical-align : middle;text-align:center"> Tidak Laik</td>
				<td style="vertical-align : middle;text-align:center"> Jumlah</td>
                <td style="vertical-align : middle;text-align:center"> Positive</td>
				<td style="vertical-align : middle;text-align:center"> Negative</td>
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
            <td><?php echo $item->catatan; ?></td>
            <td><?php echo $item->tidak_laik; ?></td>
            <td><?php echo $item->jumlah_rampcheck; ?></td>
            <td><?php echo $item->positive; ?></td>
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