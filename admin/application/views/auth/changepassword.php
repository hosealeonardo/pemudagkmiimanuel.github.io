<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <H1><span><b>GKMI <span></b>Imanuel</H1>
                            <h1 class="h4 text-gray-900 ">Change Your Password for </h1>
                            <h5 class="mb-4"><?= $this->session->userdata('reset_email') ?></h5>
                        </div>

                        <?= $this->session->flashdata('message'); ?>

                        <form class="user mt-2" method="post" action="<?= base_url('auth/changepassword'); ?>">
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Enter New Password " >
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat New Password " >
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <button type="submit" class="btn btn-success btn-user btn-block">
                                change Password
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>