<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Data Per Shift</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Back</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('itemCRUD/update/'.$item->id);?>">
    <?php
    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal:</strong>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $item->tanggal; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bus Berangkat:</strong>
                <input type="text" name="bus_berangkat" class="form-control"  value="<?php echo $item->bus_berangkat; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pnp Berangkat:</strong>
                <input type="text" name="pnp_berangkat" class="form-control" value="<?php echo $item->pnp_berangkat; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bus Datang:</strong>
                <input type="text" name="bus_datang" class="form-control" value=" <?php echo $item->bus_datang; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pnp Datang:</strong>
                <input type="text" name="pnp_datang" class="form-control" value="<?php echo $item->pnp_datang; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bus Laik:</strong>
                <input type="text" name="laik" class="form-control" value="<?php echo $item->laik; ?>">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bus Tidak Laik:</strong>
                <input type="text" name="tidak_laik" class="form-control" value="<?php echo $item->tidak_laik; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Rampcheck:</strong>
                <input type="text" name="jumlah_rampcheck" class="form-control" value="<?php echo $item->jumlah_rampcheck; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Laik Test</strong>
                <input type="text" name="positive" class="form-control" value="<?php echo $item->positive; ?>">
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tidak Laik Test</strong>
                <input type="text" name="negative" class="form-control" value="<?php echo $item->negative; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Test Pengemudi</strong>
                <input type="text" name="self_jumlah" class="form-control" value="<?php echo $item->self_jumlah; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>