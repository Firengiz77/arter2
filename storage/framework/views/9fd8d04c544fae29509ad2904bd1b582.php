<?php if($paginator->hasPages()): ?>

    <nav>
        <ul class="pagination">
            
            <?php if($paginator->onFirstPage()): ?>
                <li  class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.prev'); ?>">
                  <a href="" class="prev page-numbers page-link page-prev">
                  <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                    </svg>
                  </a>
                </li>
            <?php else: ?>
                <li class="page-item"  aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.prev'); ?>">
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class="prev page-numbers page-link page-prev">
                  <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                    </svg>
                  </a>


                </li>
            <?php endif; ?>


            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                <li class="page-item"><a class="page-link page-numbers disabled"   aria-disabled="true" href="#"><?php echo e($element); ?></a></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active current"><a class="page-link active current" href="#"><?php echo e($page); ?></a></li>
                        <?php else: ?>
                        <li class="page-item"><a class="page-link page-numbers" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
           
            <li class="page-item"><a class="page-link page-next" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg></a></li>

            <?php else: ?>

            <li class="page-item disabled"><a class="page-link page-next next page-numbers" href="">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg></a></li>

            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH C:\htdocs\arter2\resources\views/vendor/pagination/customBlog.blade.php ENDPATH**/ ?>