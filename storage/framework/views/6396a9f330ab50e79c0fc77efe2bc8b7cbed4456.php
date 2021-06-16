

<?php $__env->startSection('title', 'Detail Barang'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-6">    
                <h1 class="mt-3">Daftar Surat Masuk</h1>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-text"><?php echo e($barang->nama); ?></h5>
                        <h6 class="card-text"><?php echo e($barang->jenis); ?></h6>
                        <p class="card-text"><?php echo e($barang->harga); ?></p>

                        <a href="<?php echo e($barang->id); ?>/edit" class="btn btn-primary">Edit</a>
                        <form action="/barang/<?php echo e($barang->id); ?>" method="post" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger" style="margin-left: 10px;">Delete</button>
                        </form>
                        <a href="/barang" class="card-link" style="letter-spacing: 2px; margin-left: 10px;">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas4\resources\views/barang/detail.blade.php ENDPATH**/ ?>