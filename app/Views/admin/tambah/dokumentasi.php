<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dokumentasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/tambah_dokumentasi') ?>">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <select name="id_kegiatan" id="id_kegiatan" class="form-control">
                            <option value="">--pilih kegiatan--</option>
                            <?php foreach ($kegiatan as $kgt) : ?>
                                <option value="<?= $kgt['id_kegiatan']; ?>"><?= $kgt['nama_kegiatan']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" id="file_upload" class="custom" name="file_upload" onchange="previewimg()">
                        <img src="<?= base_url('img/avatar.svg') ?>" width="100" alt="" class="mb-3 mt-2 img-preview">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>