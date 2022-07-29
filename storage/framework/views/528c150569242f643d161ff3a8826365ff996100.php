

<?php $__env->startSection('title', 'Blog Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-6">
                <div class="card mb-4">
                    <?php if(session('product_add')): ?>
                        <h6 class="alert alert-success"> <?php echo e(session('product_add')); ?> </h6>
                    <?php endif; ?>
                    <div class="card-body fw-bold">Add Product</div>


                    <form action="<?php echo e(route('store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <input type="text" class="form-control" name="product_name" placeholder="Product Name"
                            value="<?php echo e(old('product_name')); ?>"><br>

                        <textarea name="product_desc" id="product_desc" cols="5" rows="5" class="form-control"
                            value="<?php echo e(old('product_desc')); ?>" placeholder="Product Description"></textarea><br>

                        <input type="text" class="form-control" name="price" placeholder="Product Price"
                            value="<?php echo e(old('price')); ?>"><br>

                        <input type="file" class="form-control" name="image" placeholder="Product Price"
                            value="<?php echo e(old('image')); ?>"><br>

                        <button type="submit" class="btn btn-success">Create</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_app\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>