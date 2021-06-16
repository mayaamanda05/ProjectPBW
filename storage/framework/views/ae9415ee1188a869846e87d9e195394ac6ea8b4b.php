

<?php $__env->startSection('title', 'Detail Surat'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-6">    
                <h1 class="mt-3">Daftar Surat Masuk</h1>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-text"><?php echo e($suratmasuk->no_surat); ?></h5>
                        <h6 class="card-text"><?php echo e($suratmasuk->judul); ?></h6>
                        <p class="card-text"><?php echo e($suratmasuk->pengirim); ?></p>
                        <p class="card-text"><?php echo e($suratmasuk->tanggal_masuk); ?></p>

                        <a href="<?php echo e($suratmasuk->id); ?>/edit" class="btn btn-primary">Edit</a>
                        <form action="/surat_masuk/<?php echo e($suratmasuk->id); ?>" method="post" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger" style="margin-left: 10px;">Delete</button>
                        </form>
                        <a href="/surat_masuk" class="card-link" style="letter-spacing: 2px; margin-left: 10px;">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectPBW\resources\views/surat_masuk/detail.blade.php ENDPATH**/ ?>