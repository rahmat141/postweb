<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Materi</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="h5 m-0 font-weight-bold text-primary">Materi</span>
            <button class="btn btn-primary float-right" id="add-form-materi" data-toggle="modal" data-target="#formMateri">
                <i class="far fa-plus-square">
                </i> Materi
            </button>
        </div>
        <div class="card-body materi-data">
            <div class="table-responsive">
                <table class="table table-bordered" id="materi-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Deskripsi</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allMateri as $key => $materi) { ?>
                            <tr>
                                <td scope="row"><?= $key + 1 ?></td>
                                <td><?= $materi['nama'] ?></td>
                                <td><?= $materi['deskripsi'] ?></td>
                                <td class="text-center"><img src="storage/image/<?= $materi['image'] ?>" width="250px"></td>
                                <td>
                                    <button class="btn btn-warning m-1" id="editMateri" data-id="<?= $materi['id'] ?>">Ubah</button>
                                    <button class="btn btn-danger m-1" id="deleteMateri" data-id="<?= $materi['id'] ?>" data-nama="<?= $materi['nama'] ?>" data-img="<?= $materi['image'] ?>">Hapus</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formMateri" tabindex="-1" aria-labelledby="formMateriLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formMateriLabel">Form Materi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" id="form-materi" action="<?= base_url('admin/addMateri') ?>" method="post" enctype='multipart/form-data'>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama-materi">Nama Materi</label>
                            <input type="text" class="form-control" id="nama-materi" name="nama-materi" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi-materi">Deskripsi Materi</label>
                            <textarea class="form-control" id="deskripsi-materi" name="deskripsi-materi" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="img-materi" accept="image/*" class="file-materi">
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary" id="browse">Browse...</button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <img id="frame" src="" class="img-fluid preview-materi" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="close-form-materi">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-delete" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Materi?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus <b><span id="nama-materi-delete"></span></b> ?</p>
                    <input type="text" id="idMateri" hidden>
                    <input type="text" id="img-name" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->