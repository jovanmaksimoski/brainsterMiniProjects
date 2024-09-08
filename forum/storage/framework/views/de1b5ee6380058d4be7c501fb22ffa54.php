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
    <div class="py-12">
        <div>
            <?php if(session('success')): ?>
            <div class="alert alert-success mx-5 px-5">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-center text-4xl pb-5">Welcome to the Forum</h1>

            <div class="bg-gray-100 sm:rounded-lg">
                <div class="text-gray-900">
                    <?php if(auth()->guard()->check()): ?>
                    <!-- <a href="<?php echo e(route('discussions.create')); ?>" class="btn btn-primary">Add New Discussion</a> -->
                    <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary"
                        onclick="event.preventDefault(); document.getElementById('redirect-form').submit();">
                        Add new discussion
                    </a>

                    <form id="redirect-form" action="<?php echo e(route('login')); ?>" method="GET" style="display: none;">
                        <input type="hidden" name="error" value="You have to be logged in to do that!">
                    </form>
                    <?php endif; ?>

                    <div class="container-fluid pr-5">
                        <?php if(auth()->guard()->check()): ?>
                        <div class="pb-5"> <a href="<?php echo e(route('discussions.create')); ?>"
                                class="btn btn-secondary text-light">Add New Discussion</a>
                        </div>

                        <!-- Approve Discussions Button for Admin -->
                        <?php if(auth()->user()->isAdmin()): ?>
                        <div> <a href="<?php echo e(route('discussions.approve.list')); ?>"
                                class="btn btn-primary text-white">Approve
                                Discussions</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php endif; ?>

    </div>
    <div class="container pt-3">

        <div>
            <?php if($discussions->isNotEmpty()): ?>

            <?php $__currentLoopData = $discussions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discussion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($discussion->is_approved): ?> 

            <div class="media mb-3 shadow-sm h-32 bg-white" style="cursor:pointer">
                <a href="<?php echo e(route('show', $discussion->id)); ?>" class="hover:no-underline hover:text-black">
                    
                    <img src="<?php echo e(asset('images/' . $discussion->picture)); ?>"
                        class="align-self-center mr-3 media-img-size" alt="<?php echo e($discussion->title); ?>"
                        style="width: 150px; height: auto;">

                    <div class="media-body d-flex justify-content-between align-self-center">
                        <div class="left-side">
                            <h3 class="mt-0"><?php echo e($discussion->title); ?></h3>
                            <p><?php echo e($discussion->description); ?></p>
                        </div>
                        <div class="right-side d-flex justify-space-between">
                </a>
                

                <?php if(auth()->check() && (auth()->user()->isAdmin() || auth()->id() == $discussion->user_id)): ?>
                <a href="<?php echo e(route('discussions.edit', $discussion->id)); ?>" class="px-1 mx-1"><i
                        class="fa-solid fa-pen-to-square"></i></a>
                <form action="<?php echo e(route('discussions.delete', $discussion->id)); ?>" method="POST"
                    style="display: inline-block;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Are you sure?')"><i
                            class="fa-solid fa-trash"></i></button>
                </form>
                <?php endif; ?>
                <a href="<?php echo e(route('show', $discussion->id)); ?>" class="hover:no-underline hover:text-black">

                    
                    <p class="text-muted pl-3 pr-3"><?php echo e($discussion->category->name); ?> | <?php echo e($discussion->user->username); ?></p>
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <p class="text-muted text-2xl text-center">Nothing yet! Start a topic!</p>
    <?php endif; ?>
    </div>
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
<?php endif; ?>
<?php /**PATH C:\xampp2\htdocs\brainsterchallenges_jovanmaksimoski-fs15\forum\resources\views/dashboard.blade.php ENDPATH**/ ?>