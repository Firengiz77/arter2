

<?php $__env->startSection('container'); ?>


<main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">Blog</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="<?php echo e(route('index')); ?>">Home</a></li>
              <li> <a href="">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section pt-60 bg-white latest-new-white">
        <div class="container-sub"> 
          <div class="row mt-50"> 

          <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
            <div class="col-lg-4"> 
              <div class="cardNews wow fadeInUp"><a href="<?php echo e(route(app()->getLocale().'.blog_single',$item->slug)); ?>">
                  <div class="cardImage">
                    <div class="datePost">
                      <div class="heading-52-medium color-white"><?php echo e(date('d', strtotime($item->created_at))); ?>.</div>
                      <p class="text-14 color-white"><?php echo e(date('Y,m', strtotime($item->created_at))); ?></p>
                    </div><img src="/public/<?php echo e($item->image); ?>" alt="luxride">
                  </div></a>
                <div class="cardInfo">
                  <div class="tags mb-10">
                    <?php $__currentLoopData = $item->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#"><?php echo e($tag->title); ?></a> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                    
                </div><a class="color-white" href="<?php echo e(route(app()->getLocale().'.blog_single',$item->slug)); ?>">
                    <h3 class="text-20-medium color-white mb-20"><?php echo e($item->title); ?></h3></a><a class="cardLink btn btn-arrow-up" href="<?php echo e(route(app()->getLocale().'.blog_single',$item->slug)); ?>">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>



          <div class="text-center mt-40 mb-120 wow fadeInUp">
            <nav class="box-pagination">
              <ul class="pagination">

              <?php echo e($blogs->links('vendor.pagination.customBlog')); ?>


              </ul>
            </nav>
          </div>



        </div>
      </section>
    </main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\htdocs\arter2\resources\views/front/pages/blogs.blade.php ENDPATH**/ ?>