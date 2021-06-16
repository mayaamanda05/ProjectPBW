

<?php $__env->startSection('title', 'Daftar Surat Masuk'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-6">    
                <h2 class="mt-3">Arsip Surat Masuk</h1>

                <a href="/surat_masuk/create" class="btn btn-primary my-2">Add</a>

                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                
                <ul class="list-group">
                    <?php $__currentLoopData = $suratmasuks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suratmasuk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo e($suratmasuk->judul); ?>

                        <a href="/surat_masuk/<?php echo e($suratmasuk->id); ?>" class="btn btn-primary">View</a>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectPBW\resources\views/surat_masuk/index.blade.php ENDPATH**/ ?>