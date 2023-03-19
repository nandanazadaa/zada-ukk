<div class="page-wrapper" style="background-color:#BA9868;">
    <!-- PAGE CONTAINER-->
    <div class="page-container" style="background-color:#BA9868;">
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Penganduan</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard v1</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-dark">Profile</h3>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('profile') ?>
                    <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $get['nama'] ?></p>
                    <p>Username &nbsp;&nbsp;: <?= $get['username'] ?></p>
                    <p>NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $get['nik'] ?></p>
                    <p>Telepon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $get['no_telp'] ?></p>

                    <hr>
                    <button class="btn" data-target="#edit<?= $get['id'] ?>" data-toggle="modal" style="background-color:#2697df; color:white;"><i class="fa fa-edit"></i> Edit Profil</button>
                </div>
            </div>
        </div>
                        </div>
                    </div>
                </section>
                <!-- edit user Modal-->
                <div class="modal fade" id="edit<?= $get['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edit">Edit data user</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('Masyarakat/edit_profile/') . $get['nik'] ?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>NIK</label>
                                            <input type="number" name="nik" id="nik" class="form-control" disabled placeholder="<?= $get['nik'] ?>">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Username</label>
                                            <input type="text" name="username" id="username" class="form-control" value="<?= $get['username'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mt-3 col-lg-6">
                                            <label>Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $get['nama'] ?>">
                                        </div>
                                        <div class="mt-3 col-lg-6">
                                            <label>Telepon</label>
                                            <input type="number" name="no_telp" id="telp" class="form-control" value="<?= $get['no_telp'] ?>">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                

                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © Nandana Zada Abiproya. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>