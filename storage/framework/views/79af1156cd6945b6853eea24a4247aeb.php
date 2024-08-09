

<?php $__env->startSection('content'); ?>
<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Add New Student</h2>
        </div>
        <div class="pull-right">
            <br>
            <a class="btn btn-primary" href="<?php echo e(route('students.index')); ?>"> Back</a>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('students.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong><br>
                <div class="form-check">
                    <input type="radio" id="male" name="gender" value="Male" class="form-check-input" <?php echo e(old('gender') == 'Male' ? 'checked' : ''); ?>>
                    <label for="male" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="female" name="gender" value="Female" class="form-check-input" <?php echo e(old('gender') == 'Female' ? 'checked' : ''); ?>>
                    <label for="female" class="form-check-label">Female</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Std:</strong>
                <input type="text" name="std" class="form-control" placeholder="Std" autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StudentCRUD\resources\views/students/create.blade.php ENDPATH**/ ?>