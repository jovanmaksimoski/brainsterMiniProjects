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
<h1 class="text-center text-4xl pb-5 pt-3">Welcome to the Forum</h1>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="text-end">
                        <p class="card-text p-3"><small class="text-muted"><?php echo e($discussion->category->name); ?> | <?php echo e($discussion->user->username); ?></small></p>
                    </div>
                    <div>
                        <img src="<?php echo e(asset('images/' . $discussion->picture)); ?>" class="card-img-top custom-img-size"
                            alt="<?php echo e($discussion->title); ?>">

                        <div class="pl-5 pt-5 pb-5"> 
                            <h5 class="ml-5 card-title text-lg font-bold"><?php echo e($discussion->title); ?></h5>
                            <p class="ml-5 card-text text-gray-600"><?php echo e($discussion->description); ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row">
            <div class="col-8 offset-2">
                <h5 class="card-title text-2xl py-1">Comments:</h5>


                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('comments.create', ['discussion' => $discussion->id])); ?>" class="btn btn-primary">Add
                    Comment</a>

                <?php endif; ?>
                <?php $__currentLoopData = $discussion->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="media border border-gray-300 p-3 mt-3 bg-white">
                    <div class="media-body d-flex justify-content-between">
                        <div class="left">
                            <p><?php echo e($comment->user->username); ?> says:</p>
                            <p style="display: inline-block"><?php echo e($comment->content); ?></p><span> <?php if(auth()->id() ==
                                $comment->user_id): ?>
                                <a href="<?php echo e(route('comments.edit', $comment->id)); ?>" class="hover:text-black"><i
                                        class="fa-solid fa-pen-to-square"></i></a>

                                <form action="<?php echo e(route('comments.destroy', $comment->id)); ?>" method="POST"
                                    style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" onclick="return confirm('Are you sure?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form><?php endif; ?>
                            </span>
                        </div>

                        <div>
                            <small class="text-right"><?php echo e($comment->created_at->format('Y-m-d H:i:s')); ?></small>
                        </div>
                        
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
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
<?php endif; ?><?php /**PATH C:\xampp2\htdocs\brainsterchallenges_jovanmaksimoski-fs15\forum\resources\views/show.blade.php ENDPATH**/ ?>