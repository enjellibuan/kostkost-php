<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $kos->id_kos ?>">
	<i class="fa fa-trash-o"></i> HAPUS
</button>

<div class="modal modal-danger fade" id="delete-<?php echo $kos->id_kos ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">HAPUS kos</h4>
      </div>
      <div class="modal-body">
	      <div class="callout callout-danger">
	        <h4>Reminder!</h4>
	        Yakin ingin menghapus ? Data yang telah dihapus tidak dapat dikembalikan
	      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
        <a href="<?php echo base_url('admin/kos/delete/'.$kos->id_kos) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>Hapus</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->