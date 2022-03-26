<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Nav breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
        </ol>
    </nav>
    <!-- Endd Nav breadcrumb -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>



    <!-- Button Tambah Data -->
    <a href="" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addAnggotaModal">Tambah Anggota</a>
    <!-- End Button Tambah Data -->

    <!-- Table -->
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nomer Telpon</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php foreach ($name as $n) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $n['name']; ?></td>
                                    <td><?= $n['email']; ?></td>
                                    <td><?= $n['no_telpon']; ?></td>
                                    <td><?= $n['status']; ?></td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Table -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<form action="<?= base_url('anggota/tambahAnggota'); ?>" method="post">
    <div class="modal fade" id="addAnggotaModal" tabinTambah Anggotale="dialog" aria-labelledby="addAnggotaModalLabel" Tambah Anggota="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAnggotaModalLabel">Tambah Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="name" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="name">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="name">Nomer Telepon</label>
                            <input type="text" class="form-control" id="no_telpon" name="no_telpon">
                        </div>
                        <div class="form-group">
                            <label for="name">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="name">Foto</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" aria-describedby="inputGroupFileAddon01" name="foto">
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Anggota</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End modal -->