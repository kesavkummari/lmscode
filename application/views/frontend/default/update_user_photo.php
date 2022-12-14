<?php include "profile_menus.php"; ?>

<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="user-dashboard-sidebar box-shadow-5">
                    <div class="user-box">
                        <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="" class="img-fluid">
                        <div class="name">
                            <div class="name"><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?></div>
                        </div>
                    </div>
                    <div class="user-dashboard-menu">
                        <ul>
                            <li class="mb-3"><a href="<?php echo site_url('home/profile/user_profile'); ?>"> <i class="fas fa-user-circle"></i> <?php echo site_phrase('profile'); ?></a></li>
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_credentials'); ?>"> <i class="fas fa-lock"></i> <?php echo site_phrase('account'); ?></a></li>
                            <li class="active mb-3"><a href="<?php echo site_url('home/profile/user_photo'); ?>"> <i class="fas fa-camera-retro"></i> <?php echo site_phrase('photo'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                <form class="w-100 bg-white radius-10 p-4 box-shadow-5" action="<?php echo site_url('home/update_profile/update_photo'); ?>" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-12 border-bottom mb-3 pb-3">
                            <h4><?php echo site_phrase('profile_photo'); ?></h4>
                            <p><?php echo site_phrase('update_your_photo'); ?></p>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="text-dark fw-600" for="email"><?php echo site_phrase('upload_image'); ?></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name = "user_image" id="user_image">
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <button class="btn red px-5 py-2 radius-8"> <i class="fas fa-upload"></i> <?php echo site_phrase('upload'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>