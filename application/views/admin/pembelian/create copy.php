<form action="<?php echo base_url().uri_string() ?>" method="post" autocomplete="off" id="TypeValidation" novalidate="novalidate">
  
  <!-- <input type="hidden" name="status" value="{{ URL::previous() === route('item.out') ? 2 : 1 }}"> -->
  <div class="card ">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <i class="material-icons">
          assignment
        </i>
      </div>
      <h4 class="card-title">
        Form Pembelian Material
      </h4>
      <br>
      <div class="row">
        <div class="col text-center">
          <button type="submit" class="btn btn-rose">Selesai</button>
          <button class="btn btn-default" onclick="window.location.href=''">Batal</button>
        </div>
      </div>
      
    </div>
    <div class="card-body ">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group bmd-form-group">
            <label for="inputProduk" class="bmd-label-static">Nomor Faktur.</label>
            <input type="text" class="form-control" id="nofaktur" name="nofaktur" required="true" aria-required="true" aria-invalid="true">
          </div>
          <div class="form-group bmd-form-group">
            <label for="inputProduk" class="bmd-label-static">Tanggal.</label>
            <input type="text" class="form-control datepicker" name="tanggal" placeholder="yyyy-mm-dd" required="true" aria-required="true" aria-invalid="true">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group bmd-form-group">
            <label for="inputProduk" class="bmd-label-static">Suplier.</label>
            <input type="text" class="form-control" id="suplier" name="suplier" required="true" aria-required="true" aria-invalid="true">
          </div>
          <div class="form-group bmd-form-group">
            <label for="inputProduk" class="bmd-label-static">Keterangan.</label>
            <textarea type="text" class="form-control" id="keterangan" name="keterangan"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer text-right">
      <div class="form-check mr-auto">
      </div>
      
    </div>
  </div>
</form>

<div class="card">
  <div class="card-header card-header-primary card-header-icon">
    <a href="#" class="card-icon text-white" id="btn-tambah" data-toggle="modal" data-target="#createModal" onclick="clearForm()">
      <i class="material-icons text-light">add</i> Tambah Material
    </a>
    <h4 class="card-title">Tabel Pembelian Material</h4>
  </div>
  <div class="card-body">
    <div class="toolbar">
    </div>

    <div class="tabel">
      <?php $this->load->view('admin/pembelian/tabel',array('det_material' => $det_material)) ?>
    </div>
  </div>
  <!-- end content-->
</div>

<div id="createModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pilih Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?=form_open("pembelian/addMaterial","class='form-horizontal' autocomplete='off' id='ValidationModal' novalidate='novalidate'"); ?>

        <input type="hidden" name="pembelianid" id="pembelianid" value="<?=$this->uri->segment(3,0)?>">
        <div class="modal-body">
          <div class="row">
            <label for="inputState" class="col-md-3 col-form-label">Material</label>
            <div class="col-md-9">
              <div class="form-group">
                <select id="Material" name="materialid" class="form-control select2" style="width:100%" required="true" aria-required="true" aria-invalid="true">
                  <option value="">Pilih Material...</option>
                  <?php foreach ($material as $key):?>
                  <option value="<?=$key->id_material ?>"><?=$key->label ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <label for="inputProduk" class="col-md-3 col-form-label">Jumlah.</label>
            <div class="col-md-9">
              <div class="form-group bmd-form-group">
                <input type="number" min="1" class="form-control" name="jumlah" required="true" aria-required="true" aria-invalid="true">
              </div>
            </div>
          </div>
      
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
      <?=form_open("pembelian/addMaterial","class='form-horizontal' autocomplete='off' id='ValidationModal2' novalidate='novalidate'"); ?>
        <input type="hidden" name="pembelianid" id="pembelianid" value="<?=$this->uri->segment(3,0)?>">
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="materialid" id="materialid">
        <div class="modal-body">

          <div class="row">
            <label for="inputProduk" class="col-md-3 col-form-label">Label.</label>
            <div class="col-md-9">
              <div class="form-group bmd-form-group">
                <input type="text" class="form-control" id="label" disabled>
              </div>
            </div>
          </div>
          
          <div class="row">
            <label for="inputProduk" class="col-md-3 col-form-label">Jumlah.</label>
            <div class="col-md-9">
              <div class="form-group bmd-form-group">
                <input type="number" min="1" class="form-control" id="jumlah" name="jumlah" required="true" aria-required="true" aria-invalid="true">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      <?=form_close();?>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {

    $("#Material").select2({
        tags: true,
        dropdownParent: $("#createModal")
    });
  });

  function getDetail(ini) {
    clearForm();
    var id = $(ini).attr('data-id');
    $.ajax({
      type: 'GET',
      url: "<?=base_url('');?>pembelian/detailPembelianJson/"+id,
      success: function (data) {
        //Do stuff with the JSON data
          console.log(data);
         $('#editModal #id').val(id).hide();
         $('#editModal #label').val(data.label).focus();
         $('#editModal #jumlah').val(data.jumlah).focus();
         $('#editModal #materialid').val(data.materialid).hide();
        }
    });
  }

  function clearForm() {
    document.getElementById("Material").selectedIndex = "0";   
    //  $('#Material').val(0);
     $('#jumlah').val("");
    // document.getElementById("#ValidationModal").reset();
  }

</script>