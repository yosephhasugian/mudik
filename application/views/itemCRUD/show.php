<meta http-equiv="refresh" content="100" />
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>TTPG</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" />
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $("#mudik").DataTable({
                    responsive: true,
                });
                new $.fn.dataTable.FixedHeader(table);
            });
        </script>
        <style>
            body {
                background-image: url("../assets/img/terminal2.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                height: 100%;
            }

            html {
                height: 100%;
            }

            @media screen and (min-width: 450px) {
                .light_blue,
                .green {
                    width: 50%;
                }
            }

            /*untuk layar device berukuran sedang*/
            @media screen and (min-width: 550px) {
                .red {
                    width: 33%;
                }

                .orange {
                    width: 67%;
                }
            }

            /*untuk layar device berukuran besar*/
            @media screen and (min-width: 800px) {
                .container {
                    width: 800px;
                    margin-left: auto;
                    margin-right: auto;
                }
            }
            h2 {
                color: white;
                }

            div.container {
                position: fixed;
                width: 100%;
                height: 100%;
                left: 0;
                top: 0;
                font-family: tahoma;
                font-size: 20px;
                position: relative;
                clear: both;
                text-align: center;
            }

            th,
            td,
            table {
                border: 1px solid black;
                background-color: #96d4d4;
                border: 3px solid #73ad21;
            }
        </style>
    </head>
<body>
<div class="container">
<div class="col-md-12">
        <div class="row">
        <h2 style="vertical-align : middle;text-align:center">  <img src="<?php echo base_url('./assets/img/avatar/pemda.png');?>" width="50" height="50" > </td><b>TABULASI ANGKUTAN LEBARAN TAHUN 2023 TERMINAL TERPADU PULO GEBANG</b> <img src="<?php echo base_url('./assets/img/avatar/perhubungan.png');?>"  width="50" height="50"></h2>
        </div>
        
</div>

<table id="mudik" class="display nowrap table-striped table-bordered table" style="width: 100% !important;">
    <thead>
        <tr> 
            <th rowspan="2" style="vertical-align : middle;text-align:center" scope="col">Id</th>
            <th rowspan="2" style="vertical-align : middle;text-align:center" scope="col">Tanggal</th>
            <th colspan="2" style="vertical-align : middle;text-align:center" scope="col">Keberangkatan</th>
            <th colspan="2" style="vertical-align : middle;text-align:center" scope="col">Kedatangan</th>
            <th colspan="4" style="vertical-align : middle;text-align:center" scope="col">Rampcheck</th>
            <th colspan="3" style="vertical-align : middle;text-align:center" scope="col">Test Urine</th>
		   
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
            
        </tr>
    <?php } ?>
    </tbody>
</table>

