                          <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb- 3 text-gray-800"><?= $title; ?></h1>

                    <!-- kartu My Profile -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>"
                                class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $user['name']; ?></h5>
                                    <p class="card-text"><?= $user['email']; ?></p>
                                    <p class="card-text"><small class="text-muted">member since
                                        <?= date('d f y', $user['date_created']); ?></small></p>
                                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            