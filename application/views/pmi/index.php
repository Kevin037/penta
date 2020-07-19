<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 style="font-family:'Roboto';font-size:15;"><?= $title; ?> </h3>
        <!-- <a href="#" class="btn btn-primary btn-icon-split " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahPMI"> -->
        <a href="<?= base_url('pmi/tambah/'); ?>" class="btn btn-primary btn-icon-split " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah</span>
        </a>

        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Print </a> -->
    </div>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <div class="card shadow mb-0">
                <div class="card-header py-3 ">
                    <div class="d-sm-flex align-items-center justify-content-between mb-0">
                        <div class="d-sm-flex align-items-center justify-content-between mb-0">
                            <a href="#" class="btn btn-success btn-icon-split " class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-filter"></i>
                                </span>
                                <span class="text">Filter</span>
                            </a>
                            <div>
                                <div class="container">
                                    Rentang Awal: <input id="startDate" width="276" />
                                    Rentang Akhir: <input id="endDate" width="276" />
                                </div>
                            </div>
                        </div>
                        <div class="dropdown mb-0">
                            <a href="#" class="btn btn-info btn-icon-split " class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="text">Import</span>
                            </a>
                            <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon text-white-50">
                                    <i class="fas fa-print"></i>
                                </span>
                                <span class="text">Eksport</span>
                            </button>
                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url('exportimport/'); ?>">Excel</a>
                                <a class="dropdown-item" href="<?= base_url('exportimport/'); ?>">PDF</a>
                            </div>
                            </>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="4%"> No</th>
                                        <th width="10%">Tanggal</th>
                                        <th width="19%">Nama</th>
                                        <th width="38%">Alamat <small> (Desa,Kecamatan,Kabupaten)</small></th>
                                        <th width="15%">Negara Bekerja</th>
                                        <th width="17%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pmi as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <!-- <td><img src="<?= base_url('assets/img/pmi/') . $p['image']; ?>" alt="" width="60" height="60"></td> -->
                                            <td> <small><?= $p['date_created']; ?></small></td>
                                            <td><?= $p['nama']; ?></td>
                                            <td> <small> <?= $p['nama_kelurahan']; ?> , <?= $p['nama_kecamatan']; ?>, <?= $p['nama_kabupaten']; ?></small></td>
                                            <td><?= $p['negara_bekerja']; ?></td>
                                            <td>
                                                <a href="<?= base_url('pmi/edit/') . $p['id']; ?>" class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i></a>
                                                <button type="button" data-toggle="modal" data-target="#modalUnduh" class="btn btn-sm btn-success"> <i class="fas fa-file-download"></i></i></button>
                                                <button type="button" data-toggle="modal" data-target="#modalHapus<?= $p['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
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
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- batas akhir -->

<?php foreach ($pmi as $p) : ?>
    <!-- modalhapus -->
    <div class="modal fade" id="modalHapus<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapus" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapus">Apakah kamu yakin ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('pmi/deletePmi/' . $p['id']); ?>">
                    <div class="modal-body">Data&nbsp; <b>
                            <font color="red"><?= $p['nama']; ?></font>
                        </b> akan dihapus secara permanen </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" value=<?= $p['id']; ?>>
                        <button class="btn btn-secondary" type="button" id="btn-ok" data-dismiss="modal">Batal</button>
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- end main -->