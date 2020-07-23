<!-- Begin Page Content -->
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.css') ?>" /> -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 style="font-family:'Roboto';font-size:12;">&nbsp;&nbsp; <i> <?= $title; ?> <?= date('Y'); ?></i></h4>
        <a href="<?= base_url('tka'); ?>" class="btn btn-success btn-icon-split " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-angle-left"></i>
            </span>
            <span class="text">Kembali</span>
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

                    </div>
                    <div class="card-body">
                        <div>
                            <form action="<?= base_url('tka/edit/' . $tka->id); ?>" method="post">
                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama TKA</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?= $tka->nama_tka ?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-4">
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="L" <?php if ($tka->jenis_kel == 'L') {
                                                                        echo 'selected';
                                                                    } else {
                                                                        echo '';
                                                                    } ?>>Laki-laki</option>
                                                <option value="P" <?php if ($tka->jenis_kel == 'P') {
                                                                        echo 'selected';
                                                                    } else {
                                                                        echo '';
                                                                    } ?>>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="negara" class="col-sm-3 col-form-label ">Kewarganegaraan </small></label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="negara" placeholder="Masukkan Nama Negara" value="<?= $tka->kewarganegaraan ?>" name="negara">
                                            <?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_perusahaan" class="col-sm-3 col-form-label"> Perusahaan</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nama_perusahaan" placeholder="Masukkan Nama PT/Perusahaan" name="nama_perusahaan" value="<?= $tka->nama_perusahaan ?>">
                                            <?= form_error('nama_perusahaan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="status" id="status" class="form-control">
                                                <option value="P" <?php if ($tka->sektor == 'Pusat') {
                                                                        echo 'selected';
                                                                    } else {
                                                                        echo '';
                                                                    } ?>>Pusat</option>
                                                <option value="C" <?php if ($tka->sektor == 'Cabang') {
                                                                        echo 'selected';
                                                                    } else {
                                                                        echo '';
                                                                    } ?>>Cabang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat *perusahaan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="alamat" placeholder="Jln. No. . . " name="alamat" value="<?= $tka->alamat ?>">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="jabatan" placeholder="" name="jabatan" value="<?= $tka->jabatan ?>">
                                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sektor" class="col-sm-3 col-form-label">Sektor</label>
                                        <div class="col-sm-3">
                                            <select name="sektor" id="sektor" class="form-control">
                                                <option value="Formal" <?php if ($tka->sektor == 'Formal') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>FORMAL</option>
                                                <option value="Informal" <?php if ($tka->sektor == 'Informal') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>INFORMAL</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_rptka" class="col-sm-3 col-form-label">NO. RPTKA / *masa berlaku</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="no_rptka" placeholder="" name="no_rptka" value="<?= $tka->no_rptka ?>">
                                            <?= form_error('no_rptka', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-3">
                                            <input class="form-control" type="date" id="masa_rptka" name="masa_rptka" value="<?= $tka->masa_rptka ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_imta" class="col-sm-3 col-form-label">NO. IMTA / *masa berlaku</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="no_imta" placeholder="" name="no_imta" value="<?= $tka->no_imta ?>">
                                            <?= form_error('no_imta', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-3">
                                            <input class="form-control" type="date" id="masa_imta" name="masa_imta" value="<?= $tka->masa_imta ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Kerja</label>
                                        <div class="col-sm-3">
                                            <select name="lokasi" id="lokasi" class="form-control" aria-describedby="lokasiHelp">
                                                <option value="Bangkalan" <?php if ($tka->lokasi_kerja == 'Bangkalan') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Bangkalan</option>
                                                <option value="Banyuwangi" <?php if ($tka->lokasi_kerja == 'Banyuwangi') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Banyuwangi</option>
                                                <option value="Blitar" <?php if ($tka->lokasi_kerja == 'Blitar') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Blitar</option>
                                                <option value="Bojonegoro" <?php if ($tka->lokasi_kerja == 'Bojonegoro') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Bojonegoro</option>
                                                <option value="Bondowoso" <?php if ($tka->lokasi_kerja == 'Bondowoso') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Bondowoso</option>

                                                <option value="Gresik" <?php if ($tka->lokasi_kerja == 'Gresik') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Gresik</option>
                                                <option value="Jember" <?php if ($tka->lokasi_kerja == 'Jember') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Jember</option>

                                                <option value="Jombang" <?php if ($tka->lokasi_kerja == 'Jombang') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Jombang</option>
                                                <option value="Kediri" <?php if ($tka->lokasi_kerja == 'Kediri') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Kediri</option>

                                                <option value="Kota Batu" <?php if ($tka->lokasi_kerja == 'Kota Batu') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Kota Batu</option>
                                                <option value="Kota Blitar" <?php if ($tka->lokasi_kerja == 'Kota Blitar') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Kota Blitar</option>

                                                <option value="Kota Kediri" <?php if ($tka->lokasi_kerja == 'Kota Kediri') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Kota Kediri</option>
                                                <option value="Kota Madiun" <?php if ($tka->lokasi_kerja == 'Kota Madiun') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Kota Madiun</option>

                                                <option value="Kota Malang" <?php if ($tka->lokasi_kerja == 'Kota Malang') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Kota Malang</option>
                                                <option value="Kota Mojokerto" <?php if ($tka->lokasi_kerja == 'Kota Mojokerto') {
                                                                                    echo 'selected';
                                                                                } else {
                                                                                    echo '';
                                                                                } ?>>Kota Mojokerto</option>

                                                <option value="Kota Pasuruan" <?php if ($tka->lokasi_kerja == 'Kota Pasuruan') {
                                                                                    echo 'selected';
                                                                                } else {
                                                                                    echo '';
                                                                                } ?>>Kota Pasuruan</option>
                                                <option value="Kota Probolinggo" <?php if ($tka->lokasi_kerja == 'Kota Probolinggo') {
                                                                                        echo 'selected';
                                                                                    } else {
                                                                                        echo '';
                                                                                    } ?>>Kota Probolinggo</option>

                                                <option value="Kota Surabaya" <?php if ($tka->lokasi_kerja == 'Kota Surabaya') {
                                                                                    echo 'selected';
                                                                                } else {
                                                                                    echo '';
                                                                                } ?>>Kota Surabaya</option>
                                                <option value="Lamongan" <?php if ($tka->lokasi_kerja == 'Lamongan') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Lamongan</option>

                                                <option value="Lumajang" <?php if ($tka->lokasi_kerja == 'Lumajang') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Lumajang</option>
                                                <option value="Madiun" <?php if ($tka->lokasi_kerja == 'Madiun') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Madiun</option>

                                                <option value="Magetan" <?php if ($tka->lokasi_kerja == 'Magetan') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Magetan</option>
                                                <option value="Malang" <?php if ($tka->lokasi_kerja == 'Malang') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Malang</option>

                                                <option value="Mojokerto" <?php if ($tka->lokasi_kerja == 'Mojokerto') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Mojokerto</option>
                                                <option value="Nganjuk" <?php if ($tka->lokasi_kerja == 'Nganjuk') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Nganjuk</option>

                                                <option value="Ngawi" <?php if ($tka->lokasi_kerja == 'Ngawi') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Ngawi</option>
                                                <option value="Pacitan" <?php if ($tka->lokasi_kerja == 'Pacitan') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Pacitan</option>

                                                <option value="Pamekasan" <?php if ($tka->lokasi_kerja == 'Pamekasan') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Pamekasan</option>
                                                <option value="Pasuruan" <?php if ($tka->lokasi_kerja == 'Pasuruan') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Pasuruan</option>
                                                <option value="Ponorogo" <?php if ($tka->lokasi_kerja == 'Ponorogo') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Ponorogo</option>

                                                <option value="Probolinggo" <?php if ($tka->lokasi_kerja == 'Probolinggo') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Probolinggo</option>
                                                <option value="Sampang" <?php if ($tka->lokasi_kerja == 'Sampang') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Sampang</option>

                                                <option value="Sidoarjo" <?php if ($tka->lokasi_kerja == 'Sidoarjo') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Sidoarjo</option>
                                                <option value="Situbondo" <?php if ($tka->lokasi_kerja == 'Situbondo') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Situbondo</option>

                                                <option value="Sumenep" <?php if ($tka->lokasi_kerja == 'Sumenep') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Sumenep</option>
                                                <option value="Trenggalek" <?php if ($tka->lokasi_kerja == 'Trenggalek') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Trenggalek</option>
                                                <option value="Tuban" <?php if ($tka->lokasi_kerja == 'Tuban') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>>Tuban</option>
                                                <option value="Tulungagung" <?php if ($tka->lokasi_kerja == 'Tulungagung') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>Tulungagung</option>
                                                <option value="Luar Jatim" <?php if ($tka->lokasi_kerja == 'Luar Jatim') {
                                                                                echo 'selected';
                                                                            } else {
                                                                                echo '';
                                                                            } ?>>*Luar Jatim</option>
                                                <!-- <option value="">~ Pilih Lokasi Kerja ~</option>
                                                <?php foreach ($jatim as $j) : ?>
                                                    <option value="<?= $j['id_kabupaten']; ?>"> <?= $j['nama_kabupaten']; ?> </option>
                                                <?php endforeach; ?>
                                                <option value="LUAR JATIM">*LUAR JATIM</option> -->
                                            </select>
                                            <small id="lokasiHelp" class="form-text text-muted"> <i> *lokasi wilayah jawa timur </i></small>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <a href="<?= base_url('tka'); ?>" class="btn btn-light btn-icon-split">
                                        <span class="icon text-gray-600">
                                            <i class="fas fa-window-close"></i>
                                        </span>
                                        <span class="text">Batal</span>
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-save"></i>
                                        </span>
                                        <span class="text">Simpan Data</span>
                                    </button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->