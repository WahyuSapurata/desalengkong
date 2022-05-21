<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/tambah_artikel') ?>">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Isi Artikel</label>
                        <textarea type="text" name="isi" id="ckeditor" class="ckeditor" required style="width: auto;"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" id="file_upload" class="custom" name="file_upload" onchange="previewimg()">
                    </div>
                    <img src="<?= base_url('img/avatar.svg') ?>" width="100" alt="" class="mb-3 img-preview">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .modal-dialog {
        min-width: min-content;
    }
</style>