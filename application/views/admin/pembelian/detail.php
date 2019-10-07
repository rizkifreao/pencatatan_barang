<div class="card ">
  <div class="card-header card-header-rose card-header-icon">
    <div class="card-icon">
      <i class="material-icons">
        assignment
      </i>
    </div>
    <h4 class="card-title">
      Detail Pembelian Material
    </h4>
    <br>
    
  </div>
  <div class="card-body ">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group bmd-form-group">
          <label for="inputProduk" class="bmd-label-static">Nomor Faktur.</label>
          <input type="text" class="form-control" id="nofaktur" name="nofaktur" value="<?=$pembelian->nofaktur ?>" required="true" aria-required="true" aria-invalid="true">
        </div>
        <div class="form-group bmd-form-group">
          <label for="inputProduk" class="bmd-label-static">Tanggal.</label>
          <input type="text" class="form-control datepicker" name="tanggal" placeholder="yyyy-mm-dd" value="<?=$pembelian->tanggal ?>" required="true" aria-required="true" aria-invalid="true">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group bmd-form-group">
          <label for="inputProduk" class="bmd-label-static">Suplier.</label>
          <input type="text" class="form-control" id="suplier" name="suplier" required="true" value="<?=$pembelian->suplier ?>" aria-required="true" aria-invalid="true">
        </div>
        <div class="form-group bmd-form-group">
          <label for="inputProduk" class="bmd-label-static">Keterangan.</label>
          <textarea type="text" class="form-control" id="keterangan" name="keterangan"><?=$pembelian->keterangan ?></textarea>
        </div>
      </div>
    </div>

    <br>
    <hr>
    <div class="material-datatables">
      <table id="tabel_material" class="table table-striped table-no-bordered table-hover custom-table" cellspacing="0" width="100%"
      style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Kode Material</th>
            <th>Label</th>
            <th>Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($det_pembelian as $key ):?>
          <tr>
            <td><?=$no++?></td>
            <td><?=$key->materialid?></td>
            <td><?=$this->M_Material->getDetail($key->materialid)->label?></td>
            <td><?=$key->jumlah?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>