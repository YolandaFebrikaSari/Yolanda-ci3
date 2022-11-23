            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- pesan eror -->
                        <?= form_error(
                         'menu',
                        '<div class="alert alert-success" role="alert">
                        </div>'
                    ); ?>
                        <?= $this->session->flashdata('message'); ?>
                        <!-- akhir pesan error -->

                        <!-- tombol tambah -->
                        <a href="" class="btn btn-primary mb-3" class="btn btn-primary"
                            data-toggle="modal" data-target="#logoutModal">Add Menu</a>
                        <!-- Tabel -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Active</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $m['menu']; ?></td>
                                        <td>
                                            <a href="<?= base_url('menu/edit'); ?>" class="btn btn-success btn-sm" 
                                            data-toggle="modal" data-target="#exampleModalLabeledit<?= $m['id']; ?>">Edit</a>
                                            <button onclick="hapusMenu('<?= base_url('menu/hapusmenu/') . $m['id'] ?>')"
                                            class="btn btn-danger tombol-hapus btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- akhir table -->


               </div>
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1"
    aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add new Menu</h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>    
        </div>
    </div>
</div>


<!-- Modal Edit -->

<?php foreach ($menu as $m) : ?>

<div class="modal fade" id="exampleModalLabeledit<?= $m['id']; ?>"tabindex="-1" role="dialog"
    aria-labelledby="exampleModaledit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRolModalLabel">Edit Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('menu/editmenu'); ?>" method="post">

                    <input type="hidden" class="form-control" readonly value="<?= $m['id'] ?>" name="menu_id">

                <div class="form-group">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" 
                        name="menu" placeholder="Menu Name" value="<?= $m['menu'] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-fw fa-pencil-alt fa-sm"></i>Edit</button>
                </div>
            </form>  
        </div>  
    </div>
</div>
<?php endforeach; ?>    