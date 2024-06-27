<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SASANDO | akun - create</title>
    <!-- CSS files -->
    <link href="<?php echo e(asset('template')); ?>/dist/css/tabler.min.css?1668287865" rel="stylesheet" />
    
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
    </style>
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                
            </div>
            <form class="card card-md" action="/auths-store" method="post" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Buat Akun</h2>

                    <div class="mb-3">
                        <label class="form-label" for="name">Username</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            placeholder="Masukkan Username" autocomplete="off" name="name"
                            value="<?php echo e(old('name')); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                                <a href="#" id="show_password">Tampilkan Password</a>
                            </span>
                        </label>

                        <input type="password" id="password"
                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Masukkan Password"
                            autocomplete="off" name="password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <div>
                        <label class="form-label">
                            Konfirmasi Password
                            
                        </label>

                        <input type="password" id="password_c"
                            class="form-control <?php $__errorArgs = ['password_c'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            placeholder="Masukkan Konfirmasi Password" autocomplete="off" name="password_c">
                        <?php $__errorArgs = ['password_c'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Buat Akun</button>
                        </div>
                    </div>
            </form>
        </div>
        <div class="text-center text-muted mt-3">
            Sudah mempunyai akun? <a href="/auths" tabindex="-1">Login</a>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    
    

    <!-- Jquery JS -->
    <script type="text/javascript" src="<?php echo e(asset('/library')); ?>/jquery361.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?php echo e(asset('/plugin')); ?>/sweetAlert2/sweetalert2.all.min.js"></script>
    <script>
        <?php if(Session::has('errMessage')): ?>
            Swal.fire({
                icon: 'error',
                title: '<?php echo e(Session::get('errMessage')); ?>'
                // timer: 3000
            })
        <?php elseif(Session::has('succMessage')): ?>
            Swal.fire({
                icon: 'success',
                title: '<?php echo e(Session::get('succMessage')); ?>'
                // timer: 3000
            })
        <?php endif; ?>

        $('#show_password').click(function() {
            var passwordInput = $('#password');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
            } else {
                passwordInput.attr('type', 'password');
            }
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\WorkPermit\templatesafetypermit\resources\views/auths/create.blade.php ENDPATH**/ ?>