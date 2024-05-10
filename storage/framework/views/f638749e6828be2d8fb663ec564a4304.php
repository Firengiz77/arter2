<?php
    $storagesetting = App\Models\Utility::StorageSettings();
    if($storagesetting['storage_setting'] == 'wasabi' || $storagesetting['storage_setting'] == 's3'){
        $logo = \App\Models\Utility::get_file('uploads/logo');
    }else{
        $logo = \App\Models\Utility::get_file('uploads/logo/');
    }

    $logo_img = \App\Models\Utility::getValByName('company_logo');
    $logo_light = \App\Models\Utility::getValByName('company_logo_light');

        $contact_image1 = \App\Models\Utility::getValByName('contact_image1');
         $contact_image2 = \App\Models\Utility::getValByName('contact_image2');
    $s_logo = \App\Models\Utility::get_file('uploads/store_logo/');
    $company_favicon = \App\Models\Utility::getValByName('company_favicon');
    $lang = \App\Models\Utility::getValByName('default_language');
    $company_logo = \App\Models\Utility::GetLogo();
    $metaimage = Utility::get_file('uploads/metaImage/');
    if (Auth::user()->type !== 1) {
        $store_lang = $store_settings->lang;
    }

    // storage setting
    $file_type = config('files_types');
    $setting = App\Models\Utility::settings();

    $local_storage_validation = $setting['local_storage_validation'];
    $local_storage_validations = explode(',', $local_storage_validation);

    $s3_storage_validation = $setting['s3_storage_validation'];
    $s3_storage_validations = explode(',', $s3_storage_validation);

    $wasabi_storage_validation = $setting['wasabi_storage_validation'];
    $wasabi_storage_validations = explode(',', $wasabi_storage_validation);

    $setting_color = App\Models\Utility::colorset();

    $color = 'theme-3';
    if (!empty($setting_color['color'])) {
        $color = $setting_color['color'];
    }
    $flag = (!empty($setting['color_flag'])) ? $setting['color_flag'] : 'false';
    $chatgpt = \App\Models\Utility::settings();

    $languages = \App\Models\Utility::languages();
?>
<?php $__env->startSection('page-title'); ?>
    <?php if(Auth::user()->type == 1): ?>
        <?php echo e(__('Settings')); ?>

    <?php else: ?>
        <?php echo e(__('Store Settings')); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <div class="d-inline-block">
        <?php if(Auth::user()->type == 1): ?>
            <h5 class="h4 d-inline-block font-weight-bold mb-0 text-white"><?php echo e(__('Settings')); ?></h5>
        <?php else: ?>
            <h5 class="h4 d-inline-block font-weight-bold mb-0 text-white"><?php echo e(__('Store Setting')); ?></h5>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
<li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Settings')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('action-btn'); ?>
    <ul class="nav nav-pills cust-nav   rounded  mb-3" id="pills-tab" role="tablist">
        <?php if(Auth::user()->type == 1): ?>
            <li class="nav-item">
                <a class="nav-link active" id="company_setting_tab" data-bs-toggle="pill" href="#pills-company-setting"
                   role="tab" aria-controls="pills-company-setting" aria-selected="true"><?php echo e(__('Company Settings')); ?></a>
            </li>
      

            <li class="nav-item">
                <a class="nav-link" id="site_setting_tab" data-bs-toggle="pill" href="#pills-brand-setting"
                    role="tab" aria-controls="pills-brand-setting" aria-selected="false"><?php echo e(__('Web Settings')); ?></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-email-settings_tab" data-bs-toggle="pill" href="#pills-email-settings"
                    role="tab" aria-controls="pills-email-settings"
                    aria-selected="false"><?php echo e(__('Email Settings')); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="recaptcha-settings_tab" data-bs-toggle="pill" href="#pills-recaptcha-settings"
                    role="tab" aria-controls="pills-recaptcha-settings-tab"
                    aria-selected="false"><?php echo e(__('ReCaptcha Settings')); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="storage_settings_tab" data-bs-toggle="pill" href="#storage_settings"
                    role="tab" aria-controls="pills-storage_settings-tab"
                    aria-selected="false"><?php echo e(__('Storage Settings')); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-cache_settings-tab" data-bs-toggle="pill" href="#pills-cache-settings"
                    role="tab" aria-controls="pills-cache_settings-tab"
                    aria-selected="false"><?php echo e(__('Cache Settings')); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-cookie_settings-tab" data-bs-toggle="pill" href="#pills-cookie-settings"
                    role="tab" aria-controls="pills-cookie_settings-tab"
                    aria-selected="false"><?php echo e(__('Cookie Settings')); ?></a>
            </li>


        <?php endif; ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('filter'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-page'); ?>
    <script src="<?php echo e(asset('custom/libs/summernote/summernote-bs4.js')); ?>"></script>

    <script>
        function check_theme(color_val) {
            $('.theme-color').prop('checked', false);
            $('input[value="' + color_val + '"]').prop('checked', true);
        }
    </script>
    <script>
        $(document).on('change', '[name=storage_setting]', function() {
            if ($(this).val() == 's3') {
                $('.s3-setting').removeClass('d-none');
                $('.wasabi-setting').addClass('d-none');
                $('.local-setting').addClass('d-none');
            } else if ($(this).val() == 'wasabi') {
                $('.s3-setting').addClass('d-none');
                $('.wasabi-setting').removeClass('d-none');
                $('.local-setting').addClass('d-none');
            } else {
                $('.s3-setting').addClass('d-none');
                $('.wasabi-setting').addClass('d-none');
                $('.local-setting').removeClass('d-none');
            }
        });
    </script>
    <script>
        var multipleCancelButton = new Choices(
            '#choices-multiple-remove-button', {
                removeItemButton: true,
            }
        );
        var multipleCancelButton = new Choices(
            '#choices-multiple-remove-button1', {
                removeItemButton: true,
            }
        );
        var multipleCancelButton = new Choices(
            '#choices-multiple-remove-button2', {
                removeItemButton: true,
            }
        );
    </script>


<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <?php if(Auth::user()->type == 1): ?>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-company-setting" role="tabpanel" aria-labelledby="pills-company_setting-tab">
                        <?php echo e(Form::model($settings, ['route' => 'business.setting', 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><?php echo e(__('Company Settings')); ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-md-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5><?php echo e(__('Contact Image 1')); ?></h5>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class=" setting-card">
                                                                <div class="mt-4">  
                                                                    
                                                                    <a href="/public/<?php echo e($contact_image1); ?>" target="_blank">
                                                                        <img id="logoDark" alt="your image" src="/public/<?php echo e($contact_image1); ?>" height="300px" class="img_setting">
                                                                    </a>
                                                                </div>
                                                                <div class="choose-files mt-5">
                                                                    <label for="contact_image1">
                                                                        <div class=" bg-primary full_logo"> <i
                                                                                class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                                        </div>
                                                                        <input type="file" name="contact_image1"
                                                                            id="contact_image1" class="form-control file"
                                                                            data-filename="contact_image1"
                                                                            onchange="document.getElementById('contact_image1').src = window.URL.createObjectURL(this.files[0])">
                                                                    </label>
                                                                </div>
                                                                <?php $__errorArgs = ['logo_dark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="row">
                                                                        <span class="invalid-logo" role="alert">
                                                                            <strong
                                                                                class="text-danger"><?php echo e($message); ?></strong>
                                                                        </span>
                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-md-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5><?php echo e(__('Contact Image 1')); ?></h5>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class=" setting-card">
                                                                <div class="mt-4">  
                                                                    

                                                                    <a href="/public/<?php echo e($contact_image2); ?>" target="_blank">
                                                                        <img id="logoDark" alt="your image" src="/public/<?php echo e($contact_image2); ?>" height="300px" class="img_setting">
                                                                    </a>
                                                                </div>
                                                                <div class="choose-files mt-5">
                                                                    <label for="contact_image2">
                                                                        <div class=" bg-primary"> <i
                                                                                class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                                        </div>
                                                                        <input type="file" class="form-control file"
                                                                            name="contact_image2" id="contact_image2"
                                                                            data-filename="contact_image2"
                                                                            onchange="document.getElementById('contact_image2').src = window.URL.createObjectURL(this.files[0])">
                                                                    </label>
                                                                </div>
                                                                <?php $__errorArgs = ['contact_image2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="row">
                                                                        <span class="invalid-logo" role="alert">
                                                                            <strong
                                                                                class="text-danger"><?php echo e($message); ?></strong>
                                                                        </span>
                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <?php echo e(Form::label('map', __('map'), ['class' => 'form-label'])); ?>

                                                    <?php echo e(Form::text('map', null, ['class' => 'form-control', 'placeholder' => __('map')])); ?>

                                                    <?php $__errorArgs = ['social_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-title_text" role="alert">
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <?php echo e(Form::label('social_text', __('Footer Social Text'), ['class' => 'form-label'])); ?>

                                                    <?php echo e(Form::text('social_text', null, ['class' => 'form-control', 'placeholder' => __('Footer Social Text')])); ?>

                                                    <?php $__errorArgs = ['social_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-title_text" role="alert">
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <?php echo e(Form::label('email_text', __('Footer Email Text'), ['class' => 'form-label'])); ?>

                                                    <?php echo e(Form::text('email_text', null, ['class' => 'form-control', 'placeholder' => __('Footer Email Text')])); ?>

                                                    <?php $__errorArgs = ['email_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-footer_text" role="alert">
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <?php echo e(Form::label('contact_text', __('Footer Contact Text'), ['class' => 'form-label'])); ?>

                                                    <?php echo e(Form::text('contact_text', null, ['class' => 'form-control', 'placeholder' => __('Footer Contact Text')])); ?>

                                                    <?php $__errorArgs = ['contact_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-title_text" role="alert">
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <?php echo e(Form::label('phone', __('phone'), ['class' => 'form-label'])); ?>

                                                    <?php echo e(Form::text('phone', null, ['class' => 'form-control', 'placeholder' => __('phone')])); ?>

                                                    <?php $__errorArgs = ['contact_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-title_text" role="alert">
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <?php echo e(Form::label('email', __('email'), ['class' => 'form-label'])); ?>

                                                    <?php echo e(Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('email')])); ?>

                                                    <?php $__errorArgs = ['contact_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-title_text" role="alert">
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>




                                                <div class="card-footer p-0">
                                                    <div class="col-sm-12 mt-3 px-2">
                                                        <div class="text-end">
                                                            <?php echo e(Form::submit(__('Save Changes'), ['class' => 'btn btn-xs btn-primary'])); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>

                    </div>


                    <div class="tab-pane fade " id="pills-brand-setting" role="tabpanel" aria-labelledby="pills-brand_setting-tab">
                        <?php echo e(Form::model($settings, ['route' => 'business.setting', 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5><?php echo e(__('Brand Settings')); ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5><?php echo e(__('Logo dark')); ?></h5>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class=" setting-card">
                                                            <div class="mt-4">
                                                                <a href="<?php echo e($logo. '/' . (isset($logo_img) && !empty($logo_img)? $logo_img:'logo-dark.png')); ?>" target="_blank">
                                                                    <img id="logoDark" alt="your image" src="<?php echo e($logo. '/' . (isset($logo_img) && !empty($logo_img)? $logo_img:'logo-dark.png') . '?timestamp='. time()); ?>  " width="150px" class="img_setting fix-logo">
                                                                </a>
                                                            </div>
                                                            <div class="choose-files mt-5">
                                                                <label for="logo_dark">
                                                                    <div class=" bg-primary full_logo"> <i
                                                                            class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                                    </div>
                                                                    <input type="file" name="logo_dark"
                                                                           id="logo_dark" class="form-control file"
                                                                           data-filename="logo_dark"
                                                                           onchange="document.getElementById('logoDark').src = window.URL.createObjectURL(this.files[0])">
                                                                </label>
                                                            </div>
                                                            <?php $__errorArgs = ['logo_dark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="row">
                                                                        <span class="invalid-logo" role="alert">
                                                                            <strong
                                                                                class="text-danger"><?php echo e($message); ?></strong>
                                                                        </span>
                                                            </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5><?php echo e(__('Logo Light')); ?></h5>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class=" setting-card">
                                                            <div class="mt-4">  
                                                                

                                                                <a href="<?php echo e($logo. '/' . 'logo-light.png'); ?>" target="_blank">
                                                                    <img id="adminLogoLight" alt="your image" src="<?php echo e($logo. '/' . 'logo-light.png' . '?timestamp='. time()); ?>" width="170px" class="img_setting fix-logo">
                                                                </a>
                                                            </div>
                                                            <div class="choose-files mt-5">
                                                                <label for="logo_light">
                                                                    <div class=" bg-primary"> <i
                                                                            class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                                    </div>
                                                                    <input type="file" class="form-control file"
                                                                           name="logo_light" id="logo_light"
                                                                           data-filename="logo_light"
                                                                           onchange="document.getElementById('adminLogoLight').src = window.URL.createObjectURL(this.files[0])">
                                                                </label>
                                                            </div>
                                                            <?php $__errorArgs = ['logo_light'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="row">
                                                                        <span class="invalid-logo" role="alert">
                                                                            <strong
                                                                                class="text-danger"><?php echo e($message); ?></strong>
                                                                        </span>
                                                            </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5><?php echo e(__('Favicon')); ?></h5>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class=" setting-card">
                                                            <div class="logo-content mt-3">
                                                                <a href="<?php echo e($logo . '/' . 'favicon.png'); ?>"
                                                                   target="_blank">
                                                                    <img src="<?php echo e($logo . '/' . 'favicon.png' . '?timestamp='. time()); ?>"
                                                                         
                                                                         width="50px" height="50px"
                                                                         class="img_setting favicon" id="adminfavicon">
                                                                </a>
                                                            </div>
                                                            
                                                            <div class="choose-files mt-5">
                                                                <label for="favicon">
                                                                    <div class=" bg-primary favicon_update"> <i
                                                                            class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                                    </div>
                                                                    <input type="file" class="form-control file"
                                                                           id="favicon" name="favicon"
                                                                           data-filename="favicon_update"
                                                                           onchange="document.getElementById('adminfavicon').src = window.URL.createObjectURL(this.files[0])">
                                                                </label>
                                                            </div>
                                                            <?php $__errorArgs = ['favicon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="row">
                                                                        <span class="invalid-logo" role="alert">
                                                                            <strong
                                                                                class="text-danger"><?php echo e($message); ?></strong>
                                                                        </span>
                                                            </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group col-md-4">
                                                <?php echo e(Form::label('default_language', __('Default Language'), ['class' => 'form-label'])); ?>

                                                <div class="changeLanguage">
                                                    <select name="default_language" id="default_language"
                                                            class="form-control" data-toggle="select">
                                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if($lang == $code): ?> selected <?php endif; ?>
                                                            value="<?php echo e($code); ?>">
                                                                <?php echo e(ucFirst($language)); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="form-group col-6 col-md-3">
                                                <div class="custom-control form-switch p-0">
                                                    <label class="form-check-label"
                                                           for="signup_button"><?php echo e(__('Enable Sign-Up Page')); ?></label><br>
                                                    <input type="checkbox" name="signup_button"
                                                           class="form-check-input" id="signup_button"
                                                           data-toggle="switchbutton"
                                                           <?php echo e(Utility::getValByName('signup_button') == 'on' ? 'checked="checked"' : ''); ?>

                                                           data-onstyle="primary">
                                                </div>
                                            </div>
                                            <div class="form-group col-6 col-md-3">
                                                <div class="custom-control form-switch p-0">
                                                    <label class="form-check-label"
                                                           for="email_verification"><?php echo e(__('Enable Email Verification')); ?></label><br>
                                                    <input type="checkbox" name="email_verification"
                                                           class="form-check-input" id="email_verification"
                                                           data-toggle="switchbutton"
                                                           <?php echo e(Utility::getValByName('email_verification') == 'on' ? 'checked="checked"' : ''); ?>

                                                           data-onstyle="primary">
                                                </div>
                                            </div>
                                            <div class="form-group col-6 col-md-3">
                                                <div class="custom-control form-switch p-0">
                                                    <label class="form-check-label"
                                                           for="blog_notifications"><?php echo e(__('Enable Blog Notifications')); ?></label><br>
                                                    <input type="checkbox" name="blog_notifications"
                                                           class="form-check-input" id="blog_notifications"
                                                           data-toggle="switchbutton"
                                                           <?php echo e(Utility::getValByName('blog_notifications') == 'on' ? 'checked="checked"' : ''); ?>

                                                           data-onstyle="primary">
                                                </div>
                                            </div>
                                            <div class="setting-card setting-logo-box p-3">
                                                <div class="row">
                                                    <h5><?php echo e(__('Theme Customizer')); ?></h5>
                                                    <div class="col-md-4 my-auto">
                                                        <h6 class="mt-2">
                                                            <i data-feather="credit-card"
                                                               class="me-2"></i><?php echo e(__('Primary Color Settings')); ?>

                                                        </h6>
                                                        <hr class="my-2" />
                                                        <div class="color-wrp">
                                                            <div class="theme-color themes-color">
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-1' ? 'active_color' : ''); ?>" data-value="theme-1"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-1"<?php echo e($color == 'theme-1' ? 'checked' : ''); ?>>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-2' ? 'active_color' : ''); ?>" data-value="theme-2"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-2"<?php echo e($color == 'theme-2' ? 'checked' : ''); ?>>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-3' ? 'active_color' : ''); ?>" data-value="theme-3"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-3"<?php echo e($color == 'theme-3' ? 'checked' : ''); ?>>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-4' ? 'active_color' : ''); ?>" data-value="theme-4"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-4"<?php echo e($color == 'theme-4' ? 'checked' : ''); ?>>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-5' ? 'active_color' : ''); ?>" data-value="theme-5"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-5"<?php echo e($color == 'theme-5' ? 'checked' : ''); ?>>
                                                                <br>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-6' ? 'active_color' : ''); ?>" data-value="theme-6"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-6"<?php echo e($color == 'theme-6' ? 'checked' : ''); ?>>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-7' ? 'active_color' : ''); ?>" data-value="theme-7"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-7"<?php echo e($color == 'theme-7' ? 'checked' : ''); ?>>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-8' ? 'active_color' : ''); ?>" data-value="theme-8"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-8"<?php echo e($color == 'theme-8' ? 'checked' : ''); ?>>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-9' ? 'active_color' : ''); ?>" data-value="theme-9"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-9"<?php echo e($color == 'theme-9' ? 'checked' : ''); ?>>
                                                                <a href="#!" class="themes-color-change <?php echo e($color == 'theme-10' ? 'active_color' : ''); ?>" data-value="theme-10"></a>
                                                                <input type="radio" class="theme_color d-none" name="color" value="theme-10"<?php echo e($color == 'theme-10' ? 'checked' : ''); ?>>
                                                            </div>
                                                            <div class="color-picker-wrp ">
                                                                <input type="color" value="<?php echo e($color ? $color : ''); ?>" class="colorPicker <?php echo e(isset($flag) && $flag == 'true' ? 'active_color' : ''); ?>" name="custom_color" id="color-picker">
                                                                <input type='hidden' name="color_flag" value = <?php echo e(isset($flag) && $flag == 'true' ? 'true' : 'false'); ?>>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 my-auto mt-2">
                                                        <h6 class="">
                                                            <i data-feather="layout"
                                                               class="me-2"></i><?php echo e(__('Sidebar Settings')); ?>

                                                        </h6>
                                                        <hr class="my-2" />
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="cust-theme-bg" name="cust_theme_bg"
                                                                <?php echo e(Utility::getValByName('cust_theme_bg') == 'on' ? 'checked' : ''); ?> />
                                                            <label class="form-check-label f-w-600 pl-1"
                                                                   for="cust-theme-bg"><?php echo e(__('Transparent layout')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 my-auto mt-2">
                                                        <h6 class="">
                                                            <i data-feather="sun"
                                                               class="me-2"></i><?php echo e(__('Layout Settings')); ?>

                                                        </h6>
                                                        <hr class="my-2" />
                                                        <div class="form-check form-switch mt-2">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="cust-darklayout" name="cust_darklayout"
                                                                <?php echo e(Utility::getValByName('cust_darklayout') == 'on' ? 'checked' : ''); ?> />
                                                            <label class="form-check-label f-w-600 pl-1"
                                                                   for="cust-darklayout"><?php echo e(__('Dark Layout')); ?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer p-0">
                                                <div class="col-sm-12 mt-3 px-2">
                                                    <div class="text-end">
                                                        <?php echo e(Form::submit(__('Save Changes'), ['class' => 'btn btn-xs btn-primary'])); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>




                    <div class="tab-pane fade" id="pills-email-settings" role="tabpanel" aria-labelledby="pills-brand_setting-tab">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="">
                                        <?php echo e(__('Email Settings')); ?>

                                    </h5>
                                </div>
                                <div class="card-body p-4">
                                    <?php echo e(Form::open(['route' => 'email.setting', 'method' => 'post'])); ?>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                                            <?php echo e(Form::label('mail_driver', __('Mail Driver'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('mail_driver', isset($settings['mail_driver']) ? $settings['mail_driver'] : '', ['class' => 'form-control', 'id' => 'mail_driver', 'placeholder' => __('Enter Mail Driver')])); ?>

                                            <?php $__errorArgs = ['mail_driver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_driver" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                                            <?php echo e(Form::label('mail_host', __('Mail Host'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('mail_host', isset($settings['mail_host']) ? $settings['mail_host'] : '', ['class' => 'form-control ', 'id' => 'mail_host', 'placeholder' => __('Enter Mail Driver')])); ?>

                                            <?php $__errorArgs = ['mail_host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_driver" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                                            <?php echo e(Form::label('mail_port', __('Mail Port'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('mail_port', isset($settings['mail_port']) ? $settings['mail_port'] : '', ['class' => 'form-control', 'id' => 'mail_port', 'placeholder' => __('Enter Mail Port')])); ?>

                                            <?php $__errorArgs = ['mail_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_port" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                                            <?php echo e(Form::label('mail_username', __('Mail Username'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('mail_username', isset($settings['mail_username']) ? $settings['mail_username'] : '', ['class' => 'form-control', 'id' => 'mail_username', 'placeholder' => __('Enter Mail Username')])); ?>

                                            <?php $__errorArgs = ['mail_username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_username" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                                            <?php echo e(Form::label('mail_password', __('Mail Password'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('mail_password', isset($settings['mail_password']) ? $settings['mail_password'] : '', ['class' => 'form-control', 'id' => 'mail_password', 'placeholder' => __('Enter Mail Password')])); ?>

                                            <?php $__errorArgs = ['mail_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_password" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                                            <?php echo e(Form::label('mail_encryption', __('Mail Encryption'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('mail_encryption', isset($settings['mail_encryption']) ? $settings['mail_encryption'] : '', ['class' => 'form-control', 'id' => 'mail_encryption', 'placeholder' => __('Enter Mail Encryption')])); ?>

                                            <?php $__errorArgs = ['mail_encryption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_encryption" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                                            <?php echo e(Form::label('mail_from_address', __('Mail From Address'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('mail_from_address', isset($settings['mail_from_address']) ? $settings['mail_from_address'] : '', ['class' => 'form-control', 'id' => 'mail_from_address', 'placeholder' => __('Enter Mail From Address')])); ?>

                                            <?php $__errorArgs = ['mail_from_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_from_address" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                                            <?php echo e(Form::label('mail_from_name', __('Mail From Name'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('mail_from_name', isset($settings['mail_from_name']) ? $settings['mail_from_name'] : '', ['class' => 'form-control', 'id' => 'mail_from_name', 'placeholder' => __('Enter Mail Encryption')])); ?>

                                            <?php $__errorArgs = ['mail_from_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_from_name" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="row">
                                            <div class=" text-end">
                                                <div class="card-footer p-0">
                                                    <div class="col-sm-12 mt-3 px-2">
                                                        <div class="d-flex justify-content-between gap-2 flex-column flex-sm-row">
                                                            <a href="#"
                                                                data-size="md" data-url="<?php echo e(route('test.mail')); ?>"
                                                                data-title="<?php echo e(__('Send Test Mail')); ?>"
                                                                class="btn btn-xs  btn-primary send_email">
                                                                <?php echo e(__('Send Test Mail')); ?>

                                                            </a>
                                                            <?php echo e(Form::submit(__('Save Changes'), ['class' => 'btn btn-xs btn-primary'])); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo e(Form::close()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-recaptcha-settings" role="tabpanel" aria-labelledby="pills-brand_setting-tab">
                        <form method="POST" action="<?php echo e(route('recaptcha.settings.store')); ?>" accept-charset="UTF-8">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row gy-2">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <h5 class=""><?php echo e(__('ReCaptcha Settings')); ?></h5><small
                                                    class="text-secondary font-weight-bold"><a
                                                        href="https://phppot.com/php/how-to-get-google-recaptcha-site-and-secret-key/"
                                                        target="_blank" class="text-blue">
                                                        <small>(<?php echo e(__('How to Get Google reCaptcha Site and Secret key')); ?>)</small>
                                                    </a></small>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 text-sm-end">
                                                <div class="col switch-width">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" data-toggle="switchbutton"
                                                            data-onstyle="primary" class="" value="yes"
                                                            name="recaptcha_module" id="recaptcha_module"
                                                            <?php echo e(!empty($settings['RECAPTCHA_MODULE']) && $settings['RECAPTCHA_MODULE'] == 'yes' ? 'checked="checked"' : ''); ?>>
                                                        <label class="custom-control-label form-control-label px-2"
                                                            for="recaptcha_module "></label><br>
                                                        <a href="https://phppot.com/php/how-to-get-google-recaptcha-site-and-secret-key/"
                                                            target="_blank" class="text-blue">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <?php echo csrf_field(); ?>
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                                <label for="google_recaptcha_key"
                                                    class="form-label"><?php echo e(__('Google Recaptcha Key')); ?></label>
                                                <input class="form-control"
                                                    placeholder="<?php echo e(__('Enter Google Recaptcha Key')); ?>"
                                                    name="google_recaptcha_key" type="text"
                                                    value="<?php echo e(isset($settings['NOCAPTCHA_SITEKEY']) ? $settings['NOCAPTCHA_SITEKEY'] : ''); ?>" id="google_recaptcha_key">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                                <label for="google_recaptcha_secret"
                                                    class="form-label"><?php echo e(__('Google Recaptcha Secret')); ?></label>
                                                <input class="form-control "
                                                    placeholder="<?php echo e(__('Enter Google Recaptcha Secret')); ?>"
                                                    name="google_recaptcha_secret" type="text"
                                                    value="<?php echo e(isset($settings['NOCAPTCHA_SECRET']) ? $settings['NOCAPTCHA_SECRET'] : ''); ?>"
                                                    id="google_recaptcha_secret">
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="col-sm-12 mt-3 px-2">
                                                <div class="text-end">
                                                    <?php echo e(Form::submit(__('Save Changes'), ['class' => 'btn btn-xs btn-primary'])); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="storage_settings" role="tabpanel" aria-labelledby="pills-brand_setting-tab">
                        <?php echo e(Form::open(array('route' => 'storage.setting.store', 'enctype' => "multipart/form-data"))); ?>

                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                            <h5 class=""><?php echo e(__('Storage Settings')); ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="pe-2">
                                            <input type="radio" class="btn-check" name="storage_setting" id="local-outlined" autocomplete="off" <?php echo e($settings['storage_setting'] == 'local'?'checked':''); ?> value="local" checked>
                                            <label class="btn btn-outline-primary" for="local-outlined"><?php echo e(__('Local')); ?></label>
                                        </div>
                                        <div  class="pe-2">
                                            <input type="radio" class="btn-check" name="storage_setting" id="s3-outlined" autocomplete="off" <?php echo e($settings['storage_setting']=='s3'?'checked':''); ?>  value="s3">
                                            <label class="btn btn-outline-primary" for="s3-outlined"> <?php echo e(__('AWS S3')); ?></label>
                                        </div>

                                        <div  class="pe-2">
                                            <input type="radio" class="btn-check" name="storage_setting" id="wasabi-outlined" autocomplete="off" <?php echo e($settings['storage_setting']=='wasabi'?'checked':''); ?> value="wasabi">
                                            <label class="btn btn-outline-primary" for="wasabi-outlined"><?php echo e(__('Wasabi')); ?></label>
                                        </div>
                                    </div>
                                    <div  class="mt-2">
                                    <div class="local-setting row <?php echo e($settings['storage_setting']=='local'?' ':'d-none'); ?>">
                                        
                                        <div class="col-lg-6 col-md-11 col-sm-12">
                                            <?php echo e(Form::label('local_storage_validation',__('Only Upload Files'),array('class'=>' form-label'))); ?>

                                            <select name="local_storage_validation[]" class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button" placeholder="This is a placeholder" multiple>
                                                <?php $__currentLoopData = $file_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if(in_array($f, $local_storage_validations)): ?> selected <?php endif; ?>><?php echo e($f); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-label" for="local_storage_max_upload_size"><?php echo e(__('Max upload size ( In KB)')); ?></label>
                                                <input type="number" name="local_storage_max_upload_size" class="form-control" value="<?php echo e((!isset($settings['local_storage_max_upload_size']) || is_null($settings['local_storage_max_upload_size'])) ? '' : $settings['local_storage_max_upload_size']); ?>" placeholder="<?php echo e(__('Max upload size')); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="s3-setting row <?php echo e($settings['storage_setting']=='s3'?' ':'d-none'); ?>">

                                        <div class=" row ">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_key"><?php echo e(__('S3 Key')); ?></label>
                                                    <input type="text" name="s3_key" class="form-control" value="<?php echo e((!isset($settings['s3_key']) || is_null($settings['s3_key'])) ? '' : $settings['s3_key']); ?>" placeholder="<?php echo e(__('S3 Key')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_secret"><?php echo e(__('S3 Secret')); ?></label>
                                                    <input type="text" name="s3_secret" class="form-control" value="<?php echo e((!isset($settings['s3_secret']) || is_null($settings['s3_secret'])) ? '' : $settings['s3_secret']); ?>" placeholder="<?php echo e(__('S3 Secret')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_region"><?php echo e(__('S3 Region')); ?></label>
                                                    <input type="text" name="s3_region" class="form-control" value="<?php echo e((!isset($settings['s3_region']) || is_null($settings['s3_region'])) ? '' : $settings['s3_region']); ?>" placeholder="<?php echo e(__('S3 Region')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_bucket"><?php echo e(__('S3 Bucket')); ?></label>
                                                    <input type="text" name="s3_bucket" class="form-control" value="<?php echo e((!isset($settings['s3_bucket']) || is_null($settings['s3_bucket'])) ? '' : $settings['s3_bucket']); ?>" placeholder="<?php echo e(__('S3 Bucket')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_url"><?php echo e(__('S3 URL')); ?></label>
                                                    <input type="text" name="s3_url" class="form-control" value="<?php echo e((!isset($settings['s3_url']) || is_null($settings['s3_url'])) ? '' : $settings['s3_url']); ?>" placeholder="<?php echo e(__('S3 URL')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_endpoint"><?php echo e(__('S3 Endpoint')); ?></label>
                                                    <input type="text" name="s3_endpoint" class="form-control" value="<?php echo e((!isset($settings['s3_endpoint']) || is_null($settings['s3_endpoint'])) ? '' : $settings['s3_endpoint']); ?>" placeholder="<?php echo e(__('S3 Endpoint')); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group col-8 switch-width">
                                                <?php echo e(Form::label('s3_storage_validation',__('Only Upload Files'),array('class'=>' form-label'))); ?>

                                                    <select name="s3_storage_validation[]"  class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button1" placeholder="This is a placeholder" multiple>
                                                        <?php $__currentLoopData = $file_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if(in_array($f, $s3_storage_validations)): ?> selected <?php endif; ?>><?php echo e($f); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_max_upload_size"><?php echo e(__('Max upload size (In KB)')); ?></label>
                                                    <input type="number" name="s3_max_upload_size" class="form-control" value="<?php echo e((!isset($settings['s3_max_upload_size']) || is_null($settings['s3_max_upload_size'])) ? '' : $settings['s3_max_upload_size']); ?>" placeholder="<?php echo e(__('Max upload size')); ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="wasabi-setting row <?php echo e($settings['storage_setting']=='wasabi'?' ':'d-none'); ?>">
                                        <div class=" row ">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_key"><?php echo e(__('Wasabi Key')); ?></label>
                                                    <input type="text" name="wasabi_key" class="form-control" value="<?php echo e((!isset($settings['wasabi_key']) || is_null($settings['wasabi_key'])) ? '' : $settings['wasabi_key']); ?>" placeholder="<?php echo e(__('Wasabi Key')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_secret"><?php echo e(__('Wasabi Secret')); ?></label>
                                                    <input type="text" name="wasabi_secret" class="form-control" value="<?php echo e((!isset($settings['wasabi_secret']) || is_null($settings['wasabi_secret'])) ? '' : $settings['wasabi_secret']); ?>" placeholder="<?php echo e(__('Wasabi Secret')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="s3_region"><?php echo e(__('Wasabi Region')); ?></label>
                                                    <input type="text" name="wasabi_region" class="form-control" value="<?php echo e((!isset($settings['wasabi_region']) || is_null($settings['wasabi_region'])) ? '' : $settings['wasabi_region']); ?>" placeholder="<?php echo e(__('Wasabi Region')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="wasabi_bucket"><?php echo e(__('Wasabi Bucket')); ?></label>
                                                    <input type="text" name="wasabi_bucket" class="form-control" value="<?php echo e((!isset($settings['wasabi_bucket']) || is_null($settings['wasabi_bucket'])) ? '' : $settings['wasabi_bucket']); ?>" placeholder="<?php echo e(__('Wasabi Bucket')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="wasabi_url"><?php echo e(__('Wasabi URL')); ?></label>
                                                    <input type="text" name="wasabi_url" class="form-control" value="<?php echo e((!isset($settings['wasabi_url']) || is_null($settings['wasabi_url'])) ? '' : $settings['wasabi_url']); ?>" placeholder="<?php echo e(__('Wasabi URL')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="wasabi_root"><?php echo e(__('Wasabi Root')); ?></label>
                                                    <input type="text" name="wasabi_root" class="form-control" value="<?php echo e((!isset($settings['wasabi_root']) || is_null($settings['wasabi_root'])) ? '' : $settings['wasabi_root']); ?>" placeholder="<?php echo e(__('Wasabi Root')); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group col-8 switch-width">
                                                <?php echo e(Form::label('wasabi_storage_validation',__('Only Upload Files'),array('class'=>'form-label'))); ?>


                                                <select name="wasabi_storage_validation[]" class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button2" placeholder="This is a placeholder" multiple>
                                                    <?php $__currentLoopData = $file_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option <?php if(in_array($f, $wasabi_storage_validations)): ?> selected <?php endif; ?>><?php echo e($f); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="wasabi_root"><?php echo e(__('Max upload size ( In KB)')); ?></label>
                                                    <input type="number" name="wasabi_max_upload_size" class="form-control" value="<?php echo e((!isset($settings['wasabi_max_upload_size']) || is_null($settings['wasabi_max_upload_size'])) ? '' : $settings['wasabi_max_upload_size']); ?>" placeholder="<?php echo e(__('Max upload size')); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <input class="btn btn-print-invoice  btn-primary m-r-10" type="submit" value="<?php echo e(__('Save Changes')); ?>">
                                </div>
                            </div>
                        <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-cache-settings" role="tabpanel" aria-labelledby="pills-cache_settings-tab">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="h6 md-0"><?php echo e(__('Cache Settings')); ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <p><?php echo e(__('This is a page meant for more advanced users, simply ignore it if you do not
                                                understand what cache is.')); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group search-form">
                                            <input type="text" value="<?php echo e(Utility::GetCacheSize()); ?>" class="form-control" disabled>
                                            <span class="input-group-text bg-transparent"><?php echo e(__('MB')); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <a href = "<?php echo e(url('config-cache')); ?>" class="btn btn-m btn-primary m-r-10 "><?php echo e(__('Clear Cache')); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-cookie-settings" role="tabpanel" aria-labelledby="pills-cookie_settings-tab">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">

                                <?php echo e(Form::model($settings,array('route'=>'cookie.setting','method'=>'post'))); ?>

                                    <div class="card-header flex-column flex-lg-row  d-flex align-items-lg-center gap-2 justify-content-between">
                                        <h5><?php echo e(__('Cookie Settings')); ?></h5>
                                        <div class="d-flex align-items-center">
                                            <?php echo e(Form::label('enable_cookie', __('Enable cookie'), ['class' => 'col-form-label p-0 fw-bold me-3'])); ?>

                                            <div class="custom-control custom-switch"  onclick="enablecookie()">
                                                <input type="checkbox" data-toggle="switchbutton" data-onstyle="primary" name="enable_cookie" class="form-check-input input-primary "
                                                    id="enable_cookie" <?php echo e($settings['enable_cookie'] == 'on' ? ' checked ' : ''); ?> >
                                                <label class="custom-control-label mb-1" for="enable_cookie"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body cookieDiv <?php echo e($settings['enable_cookie'] == 'off' ? 'disabledCookie ' : ''); ?>">
                                        <?php if(!empty($chatgpt['chatgpt_key']) && $settings['enable_cookie'] == 'on'): ?>
                                            <div class="d-flex justify-content-end">
                                                <a href="#" class="btn btn-primary btn-sm" data-size="xl" data-ajax-popup-over="true" data-url="<?php echo e(route('generate',['cookie'])); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e(__('Generate')); ?>" data-title="<?php echo e(__('Generate Content With AI')); ?>">
                                                    <i class="fas fa-robot"></i> <?php echo e(__('Generate with AI')); ?>

                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="form-check form-switch custom-switch-v1" id="cookie_log">
                                                    <input type="checkbox" name="cookie_logging" class="form-check-input input-primary cookie_setting"
                                                        id="cookie_logging"<?php echo e($settings['cookie_logging'] == 'on' ? ' checked ' : ''); ?>>
                                                    <label class="form-check-label" for="cookie_logging"><?php echo e(__('Enable logging')); ?></label>
                                                </div>
                                                <div class="form-group" >
                                                    <?php echo e(Form::label('cookie_title', __('Cookie Title'), ['class' => 'col-form-label' ])); ?>

                                                    <?php echo e(Form::text('cookie_title', null, ['class' => 'form-control cookie_setting'] )); ?>

                                                </div>
                                                <div class="form-group ">
                                                    <?php echo e(Form::label('cookie_description', __('Cookie Description'), ['class' => ' form-label'])); ?>

                                                    <?php echo Form::textarea('cookie_description', null, ['class' => 'form-control cookie_setting', 'rows' => '3']); ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch custom-switch-v1 ">
                                                    <input type="checkbox" name="necessary_cookies" class="form-check-input input-primary"
                                                        id="necessary_cookies" checked onclick="return false">
                                                    <label class="form-check-label" for="necessary_cookies"><?php echo e(__('Strictly necessary cookies')); ?></label>
                                                </div>
                                                <div class="form-group ">
                                                    <?php echo e(Form::label('strictly_cookie_title', __(' Strictly Cookie Title'), ['class' => 'col-form-label'])); ?>

                                                    <?php echo e(Form::text('strictly_cookie_title', null, ['class' => 'form-control cookie_setting'])); ?>

                                                </div>
                                                <div class="form-group ">
                                                    <?php echo e(Form::label('strictly_cookie_description', __('Strictly Cookie Description'), ['class' => ' form-label'])); ?>

                                                    <?php echo Form::textarea('strictly_cookie_description', null, ['class' => 'form-control cookie_setting ', 'rows' => '3']); ?>

                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <h5><?php echo e(__('More Information')); ?></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <?php echo e(Form::label('more_information_description', __('Contact Us Description'), ['class' => 'col-form-label'])); ?>

                                                    <?php echo e(Form::text('more_information_description', null, ['class' => 'form-control cookie_setting'])); ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <?php echo e(Form::label('contactus_url', __('Contact Us URL'), ['class' => 'col-form-label'])); ?>

                                                    <?php echo e(Form::text('contactus_url', null, ['class' => 'form-control cookie_setting'])); ?>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center gap-2 flex-sm-column flex-lg-row justify-content-between" >
                                        <div>
                                            <?php if(isset($settings['cookie_logging']) && $settings['cookie_logging'] == 'on'): ?>
                                            <label for="file" class="form-label"><?php echo e(__('Download cookie accepted data')); ?></label>
                                                <a href="<?php echo e(asset(Storage::url('uploads/sample')) . '/data.csv'); ?>" class="btn btn-primary mr-2 ">
                                                    <i class="ti ti-download"></i>
                                                </a>
                                                <?php endif; ?>
                                        </div>
                                        <input type="submit" value="<?php echo e(__('Save')); ?>" class="btn btn-primary">
                                    </div>
                                <?php echo e(Form::close()); ?>

                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
        </div>
        <!-- [ sample-page ] end -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-page'); ?>
    <script src="<?php echo e(asset('custom/libs/jquery-mask-plugin/dist/jquery.mask.min.js')); ?>"></script>
    <script>
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            show_toastr('Success', "<?php echo e(__('Link copied')); ?>", 'success');
        }

        $(document).ready(function() {
            setTimeout(function(e) {
                var checked = $("input[type=radio][name='theme_color']:checked");
                $('#themefile').val(checked.attr('data-theme'));
                $('.' + checked.attr('data-theme') + '_img').attr('src', checked.attr('data-imgpath'));
            }, 300);

            if ($('.enable_pwa_store').is(':checked')) {

                $('.pwa_is_enable').removeClass('disabledPWA');
            } else {

                $('.pwa_is_enable').addClass('disabledPWA');
            }

            $('#pwa_store').on('change', function() {
                if ($('.enable_pwa_store').is(':checked')) {

                    $('.pwa_is_enable').removeClass('disabledPWA');
                } else {

                    $('.pwa_is_enable').addClass('disabledPWA');
                }
            });
        });

        $(".color1").click(function() {
            var dataId = $(this).attr("data-id");
            $('#' + dataId).trigger('click');
            var first_check = $('#' + dataId).find('.color-0').trigger("click");
        });
    </script>

    <script type="text/javascript">
        $(document).on("click", '.send_email', function(e) {
            e.preventDefault();
            var title = $(this).attr('data-title');
            var size = 'md';
            var url = $(this).attr('data-url');

            if (typeof url != 'undefined') {
                $("#commonModal .modal-title").html(title);
                $("#commonModal .modal-dialog").addClass('modal-' + size);
                $("#commonModal").modal('show');

                $.post(url, {

                    _token: '<?php echo e(csrf_token()); ?>',
                    mail_driver: $("#mail_driver").val(),
                    mail_host: $("#mail_host").val(),
                    mail_port: $("#mail_port").val(),
                    mail_username: $("#mail_username").val(),
                    mail_password: $("#mail_password").val(),
                    mail_encryption: $("#mail_encryption").val(),
                    mail_from_address: $("#mail_from_address").val(),
                    mail_from_name: $("#mail_from_name").val(),
                }, function(data) {
                    $('#commonModal .modal-body').html(data);
                });
            }
        });

        $(document).on('submit', '#test_email', function(e) {
            e.preventDefault();
            $("#email_sending").show();
            var post = $(this).serialize();
            var url = $(this).attr('action');
            $.ajax({
                type: "post",
                url: url,
                data: post,
                cache: false,
                beforeSend: function() {
                    $('#test_email .btn-create').attr('disabled', 'disabled');
                },
                success: function(data) {
                    if (data.is_success) {
                        show_toastr('Success', data.message, 'success');
                    } else {
                        show_toastr('Error', data.message, 'error');
                    }
                    $("#email_sending").hide();
                    $('#commonModal').modal('hide');
                },
                complete: function() {
                    $('#test_email .btn-create').removeAttr('disabled');
                },
            });
        });
    </script>
    <script type="text/javascript">
        function enablecookie() {
            const element = $('#enable_cookie').is(':checked');
            $('.cookieDiv').addClass('disabledCookie');
            if (element==true) {
                $('.cookieDiv').removeClass('disabledCookie');
                $("#cookie_logging").attr('checked', true);
            } else {
                $('.cookieDiv').addClass('disabledCookie');
                $("#cookie_logging").attr('checked', false);
            }
        }
    </script>
    <script>
        var themescolors = document.querySelectorAll(".themes-color > a");
        for (var h = 0; h < themescolors.length; h++) {
            var c = themescolors[h];

            c.addEventListener("click", function(event) {
                var targetElement = event.target;
                if (targetElement.tagName == "SPAN") {
                    targetElement = targetElement.parentNode;
                }
                var temp = targetElement.getAttribute("data-value");
                removeClassByPrefix(document.querySelector("body"), "theme-");
                document.querySelector("body").classList.add(temp);
            });
        }
        var custthemebg = document.querySelector("#cust-theme-bg");
        custthemebg.addEventListener("click", function() {
            if (custthemebg.checked) {
                document.querySelector(".dash-sidebar").classList.add("transprent-bg");
                document
                    .querySelector(".dash-header:not(.dash-mob-header)")
                    .classList.add("transprent-bg");
            } else {
                document.querySelector(".dash-sidebar").classList.remove("transprent-bg");
                document
                    .querySelector(".dash-header:not(.dash-mob-header)")
                    .classList.remove("transprent-bg");
            }
        });

        var custdarklayout = document.querySelector("#cust-darklayout");
        custdarklayout.addEventListener("click", function() {
            if (custdarklayout.checked) {
                document
                    .querySelector(".m-header > .b-brand > .logo-lg")
                    .setAttribute("src","<?php echo e(asset('/storage/uploads/logo/logo-light.png')); ?>");
                document
                    .querySelector("#main-style-link")
                    .setAttribute("href","<?php echo e(asset('assets/css/style-dark.css')); ?>");
            } else {
                document
                    .querySelector(".m-header > .b-brand > .logo-lg")
                    .setAttribute("src", "<?php echo e(asset('/storage/uploads/logo/logo-dark.png')); ?>");
                document
                    .querySelector("#main-style-link")
                    .setAttribute("href", "<?php echo e(asset('assets/css/style.css')); ?>");
            }
        });

        function removeClassByPrefix(node, prefix) {
            for (let i = 0; i < node.classList.length; i++) {
                let value = node.classList[i];
                if (value.startsWith(prefix)) {
                    node.classList.remove(value);
                }
            }
        }
    </script>

<script>
    $('.colorPicker').on('click', function(e) {
               $('body').removeClass('custom-color');
               if (/^theme-\d+$/) {
                   $('body').removeClassRegex(/^theme-\d+$/);
               }
               $('body').addClass('custom-color');
               $('.themes-color-change').removeClass('active_color');
               $(this).addClass('active_color');
               const input = document.getElementById("color-picker");
               setColor();
               input.addEventListener("input", setColor);
               function setColor() {
                document.documentElement.style.setProperty('--color-customColor', input.value);
                }
               $(`input[name='color_flag`).val('true');
           });

           $('.themes-color-change').on('click', function() {

           $(`input[name='color_flag`).val('false');

               var color_val = $(this).data('value');
               $('body').removeClass('custom-color');
               if(/^theme-\d+$/)
               {
                   $('body').removeClassRegex(/^theme-\d+$/);
               }
               $('body').addClass(color_val);
               $('.theme-color').prop('checked', false);
               $('.themes-color-change').removeClass('active_color');
               $('.colorPicker').removeClass('active_color');
               $(this).addClass('active_color');
               $(`input[value=${color_val}]`).prop('checked', true);
           });

           $.fn.removeClassRegex = function(regex) {
       return $(this).removeClass(function(index, classes) {
           return classes.split(/\s+/).filter(function(c) {
               return regex.test(c);
           }).join(' ');
       });
   };
   </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\htdocs\arter2\resources\views/settings/index.blade.php ENDPATH**/ ?>