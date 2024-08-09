
<div class="container">
    <br>
    <h3 class="text-center">Students Data</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary mb-3">
                        Add New Student
                    </a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-student">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Std</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX">
                                    <td><?php echo e($student->name); ?></td>
                                    <td><?php echo e($student->gender); ?></td>
                                    <td><?php echo e($student->std); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StudentCRUD\resources\views/students/index.blade.php ENDPATH**/ ?>