<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container pt-5">

    <h1 class="text-center text-4xl pb-5">Welcome to the Forum</h1>

        <div class="pb-5">
            <?php if(auth()->guard()->check()): ?>
            <div class="pb-2 pl-5"> <a href="<?php echo e(route('discussions.create')); ?>" class="btn btn-secondary text-light">Add
                    New Discussion</a>
            </div>

            <!-- Approve Discussions Button for Admin -->
            <?php if(auth()->user()->isAdmin()): ?>
            <!-- Replace isAdmin() with your method to check if the user is an admin -->
            <div class="pl-5"> <a href="<?php echo e(route('discussions.approve.list')); ?>"
                    class="btn btn-primary text-dark">Approve
                    Discussions</a>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="container pt-4">


            
            <?php if($discussions->isNotEmpty()): ?>
            <?php $__currentLoopData = $discussions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discussion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="media mb-3 shadow-sm bg-white h-32">
                
                <img src="<?php echo e(asset('images/' . $discussion->picture)); ?>" class="align-self-center mr-3 media-img-size"
                    alt="<?php echo e($discussion->title); ?>" style="width: 100px;">

                <div class="media-body d-flex justify-content-between pt-5">
                    <div class="left-side">
                        
                        <h3 class="mt-0"><?php echo e($discussion->title); ?></h3>
                        <p><?php echo e($discussion->description); ?></p>
                    </div>
                    <div class="right-side d-flex justify-space-around">

                        <div class="left-side mr-3">
                            
                            <div class="mt-2">
                                <form action="<?php echo e(route('discussions.approve.single', $discussion->id)); ?>" method="POST"
                                    style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                    <button type="submit"><i class="fa-solid fa-check"></i></button>
                                </form>
                                <a href="<?php echo e(route('discussions.edit', $discussion->id)); ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="<?php echo e(route('discussions.delete', $discussion->id)); ?>" method="POST"
                                    style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" onclick="return confirm('Are you sure?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="right-side mr-2">
                            
                            <p class="text-muted"><?php echo e($discussion->category->name); ?> | <?php echo e($discussion->user->username); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <p>No discussions pending approval.</p>
            <?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp2\htdocs\brainsterchallenges_jovanmaksimoski-fs15\forum\resources\views/approve_discussions.blade.php ENDPATH**/ ?>