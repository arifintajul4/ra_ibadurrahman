<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-header" style="padding-bottom: 10px;">
                        <h4>Data Tagihan</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#tagihanModal">Tambah Data Tagihan</button>
                        <div class="mt-2">
                            <table id="dataTable" class="table table-bordered table-stripped"> 
                                <thead> 
                                    <tr>  
                                       <th>No</th>
                                       <th>Tahun Ajaran</th>
                                       <th>Jenis Tagihan</th>
                                       <th>Nominal</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->

<!-- Modal -->
<div class="modal fade" id="tagihanModal" tabindex="-1" role="dialog" aria-labelledby="tagihanModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tagihanModalLabel">Tambah Data Tagihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="tahun">Tahun Ajaran</label>
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="2017/1">
          </div>
          <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-control" id="jenis" name="jenis">
              <option></option>
              <option value="spp">SPP</option>
              <option value="Kegitan Tahunan">Kegiatan Tahunan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="text" class="form-control" id="nominal" name="nominal">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>
</div>