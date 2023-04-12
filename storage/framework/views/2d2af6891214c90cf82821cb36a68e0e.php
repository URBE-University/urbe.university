<div>
    <div class="h-12">
        <div class="w-full h-full px-4 sm:px-6 lg:px-8 flex items-center">
            <ul class="text-sm flex items-center space-x-1">
                <li><a href="/">Home</a></li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </li>
                <?php $__empty_1 = true; $__currentLoopData = $path; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crumb => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($loop->last): ?>
                        <li><?php echo e(Str::ucfirst(str_replace('-', ' ', $data))); ?></li>
                    <?php else: ?>
                        <li><a href="<?php $dataPath = ''; for($i = 1; $i <= $crumb; $i++) {  $dataPath .= '/' . $path[$i]; } echo $dataPath; ?>"><?php echo e(Str::ucfirst(str_replace('-', ' ', $data))); ?></a></li>
                    <?php endif; ?>
                    <?php if(!$loop->last): ?>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/website/breadcrumbs.blade.php ENDPATH**/ ?>