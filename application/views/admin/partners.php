 <!-- modal tambah product -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah FAQ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
      <?php echo form_open_multipart('admin/add_partners/'); ?>

        <div class="form-group">
          <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
          src="<?php echo base_url('assets/img/df.jpg');?>" alt="your image" /><br><br>
          <label for="gambar" class="col-form-label">Gambar partners</label>
          <input type="file" name="gambar" id="profile-id">
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">deskripsi</label>
           <input type="text" class="form-control"  name="deskripsi" required>
        </div>

         <div class="form-group">
          <label for="isi" class="col-form-label">Link</label>
           <input type="text" class="form-control"  name="link" required>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Tambah partners">
      </div>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>



 <?php if($this->session->flashdata('info')): ?>        
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Info!</h4>
        <?php echo $this->session->flashdata('info'); ?>
      </div>
    <?php endif; ?>

<div class="">
      <div class="box">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah partners</button>
            <div class="box-header">
              <h3 class="box-title">table partners</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>gambar</th>
                    <th>deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                  <tr>
                    <td><?php echo $no++ ;?></td>
                     <td><img src="<?php echo base_url('assets/img/web/'.$row->gambar);?>" height="100" width="100"></td>
                    <td><?php echo $row->deskripsi ;?></td>
                    <td>
                     
                       <a href="<?php echo base_url('admin/del_partners/'.$row->id.'/'.$row->gambar);?>" onclick="javascript: return confirm('Anda yakin hapus ?')"  >
                         <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-trash">Hapus</i>
                          </button>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

</div>
