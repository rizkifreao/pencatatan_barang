<div class="card">
  <div class="card-header card-header-rose card-header-icon">
    <a href="#" class="card-icon" onclick="window.location.href = '<?=base_url()?>pembelian/create'">
      <i class="material-icons text-light">add</i>
    </a>
    <h4 class="card-title">Tabel Pembelian Material</h4>
  </div>
  <div class="card-body">
    <div class="toolbar">
    </div>
    <div class="material-datatables">
      <table id="tabel_material" class="table  table-striped table-no-bordered table-hover custom-table" cellspacing="0" width="100%"
        style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Kode Material</th>
            <th>Label</th>
            <th>Qty</th>
            <th class="disabled-sorting text-right">Actions</th>
          </tr>
        </thead>
          <tr>
            <td>1</td>
            <td>asd</td>
            <td>asd</td>
            <td>2</td>
            <td class="disabled-sorting text-right">
            asd
            </td>
          </tr>
        <tbody>
          
        </tbody>
      </table>
    </div>
  </div>
  <!-- end content-->
</div>
<div id="createModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?=form_open("material/add","class='form-horizontal' autocomplete='off'"); ?>
        <div class="modal-body">
          
          <div class="form-group">
            <label for="inputProduk">Nama Material.</label>
            <input type="text" class="form-control" id="nama_material" name="nama_material" required="true" aria-required="true" aria-invalid="true">
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      <?=form_close();?>
    </div>
  </div>
</div>

<div id="editModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?=form_open("material/add","class='form-horizontal' autocomplete='off'"); ?>
        <input type="hidden" id="id_material" name="id_material" value="">
        <div class="modal-body">
          
          <div class="form-group">
            <label for="inputProduk">Nama Produk.</label>
            <input type="text" class="form-control" id="nama_material" name="nama_material" required="true" aria-required="true" aria-invalid="true">
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      <?=form_close();?>
    </div>
  </div>
</div>