<div class="container">

    <!-- outer Row -->
    <div class="row justify-content-center">
        
        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900">Forgot your password?</h1>
                                    <h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth/forgotpassword') ?>">
                                    <div class="form-group">
                                    <input type="teks" class="form-control form-control-user"
                                     id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                     <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>


                                    <button type="submit" class="btn btn-primary btn-user btn-blok">
                                        Reset Password
                                    </button>

                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="email" href="<?= base_url('auth') ?>">Back to login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

    </div>

</div>