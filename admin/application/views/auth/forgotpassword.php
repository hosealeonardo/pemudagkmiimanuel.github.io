<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <H1><span><b>GKMI <span></b>Imanuel</H1>
                            <h1 class="h4 text-gray-900 mb-4">Forgot Your Password ?</h1>
                        </div>

                        <?= $this->session->flashdata('message'); ?>

                        <form class="user" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address " value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Forgot Password
                            </button>

                            <HR>
                            <div class="text-center">
                                <a class="small mt-4" href="<?= base_url('auth'); ?>">Back to Login</a>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>