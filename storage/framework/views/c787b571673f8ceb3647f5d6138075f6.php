

<?php $__env->startSection('container'); ?>


<main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5"><?php echo e($blog->title); ?></h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="<?php echo e(route('index')); ?>">Home</a></li>
              <li> <a href=""><?php echo e($blog->title); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section pt-60 bg-white latest-new-white">
        <div class="container-sub"> 
          <div class="box-frature-image mb-60 wow fadeInUp"> 
            <div class="cardImage"> 
              <div class="datePost"> 
                <div class="heading-52-medium color-white"><?php echo e(date('d', strtotime($blog->created_at))); ?>.</div>
                <p class="text-14 color-white"><?php echo e(date('Y,m', strtotime($blog->created_at))); ?></p>
              </div><img src="/public/<?php echo e($blog->image); ?>" alt="luxride">
            </div>
          </div>
          <h2 class="heading-44-medium mb-30 wow fadeInUp"><?php echo e($blog->title); ?></h2>
          <div class="content-single wow fadeInUp"> 
         <?php echo $blog->desc; ?>   
        </div>
          <div class="box-share-tags mt-50 wow fadeInUp"> 
            <div class="row align-items-center"> 
              <div class="col-lg-6 mb-30 text-lg-start text-center"> <span class="text-16-medium color-text mr-15">Share</span>
                <div class="d-inline-block social-single"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
              </div>
              <div class="col-lg-6 text-lg-end mb-30 text-center">
              <?php $__currentLoopData = $blog->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#"  class="btn btn-tag mr-10 mb-10"><?php echo e($tag->title); ?></a> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
                </div>
            </div>
          </div>
          <!-- <div class="border-bottom mb-30 mt-60"></div>
          <div class="author-box wow fadeInUp"> 
            <div class="item-author"> 
              <div class="item-author-image"> <img src="assets/imgs/page/blog2/author.png" alt="luxride"></div>
              <div class="item-author-info"> 
                <h6 class="text-18-medium">Esther Howard</h6>
                <p class="text-14 color-grey">Marketing Coordinator</p>
                <p class="text-16 color-text">Etiam vitae leo et diam pellentesque porta. Sed eleifend ultricies risus, vel rutrum erat commodo ut. Praesent finibus congue euismod. Nullam scelerisque massa vel augue placerat, a tempor sem egestas. Curabitur placerat finibus lacus.</p>
              </div>
            </div>
          </div>
          <div class="border-bottom mb-30 mt-60"></div>
          <div class="box-pagination-single wow fadeInUp">
            <div class="row align-items-center"> 
              <div class="col-lg-5 col-sm-5 col-5">
                <div class="box-pager-inner"> <a class="prev-page text-18-medium" href="#">Prev
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                    </svg></a>
                  <p class="pl-40 text-16 color-text d-none d-sm-block">The most efficient airlines and airports globally</p>
                </div>
              </div>
              <div class="col-lg-2 text-center col-sm-2 col-2"><a href="#"><img src="assets/imgs/page/blog2/grid.png" alt="luxride"></a></div>
              <div class="col-lg-5 col-sm-5 col-5">
                <div class="box-pager-inner text-end"> <a class="next-page text-18-medium" href="#">Next
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg></a>
                  <p class="pr-40 text-16 color-text d-none d-sm-block">The most efficient airlines and airports globally</p>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="border-bottom mb-50 mt-25"></div>
          <div class="box-reviews wow fadeInUp"> 
            <h5 class="text-20-medium color-text mb-30">Reviews</h5>
            <div class="item-reviews"> 
              <div class="item-author-info"> 
                <div class="item-avatar">
                   A.T</div>
                <div class="item-info"> 
                  <h6 class="text-16-medium">Bessie Cooper</h6>
                  <p class="text-14 color-grey">March 2022</p>
                </div>
              </div>
              <div class="item-desc"> 
                <p class="color-text text-16">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
              </div>
              <div class="buttons-like"> <a class="btn btn-like mr-30" href="#">Helpful</a><a class="btn btn-dislike" href="#">Not helpful</a></div>
            </div>
            <div class="item-reviews"> 
              <div class="item-author-info"> 
                <div class="item-avatar">
                   A.T</div>
                <div class="item-info"> 
                  <h6 class="text-16-medium">Wade Warren</h6>
                  <p class="text-14 color-grey">March 2022</p>
                </div>
              </div>
              <div class="item-desc"> 
                <p class="color-text text-16">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
              </div>
              <div class="buttons-like"> <a class="btn btn-like mr-30" href="#">Helpful</a><a class="btn btn-dislike" href="#">Not helpful</a></div>
            </div>
          </div> -->
          <!-- <div class="border-bottom mb-50 mt-60"></div>
          <div class="box-form-comment wow fadeInUp"> 
            <h5 class="text-20-medium mb-30">Leave a Comment</h5>
            <p class="text-14 color-text mb-30">Your email address will not be published.</p>
            <div class="form-comment"> 
              <form action="#">
                <div class="row"> 
                  <div class="col-lg-6">
                    <div class="form-group"> 
                      <label class="form-label" for="fullname">Your Name</label>
                      <input class="form-control" id="fullname" type="text" value="Test">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group"> 
                      <label class="form-label" for="email">Email</label>
                      <input class="form-control" id="email" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"> 
                      <label class="form-label" for="comment">Write Your Comment</label>
                      <textarea class="form-control" id="comment"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <button class="btn btn-primary" type="submit">Post Review
                      <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div> -->
        </div>
      </section>
      <section class="section pt-120 bg-white latest-new-white mb-90">
        <div class="container-sub"> 
          <h2 class="heading-44-medium color-text mb-60 wow fadeInUp">Related Posts</h2>
          <div class="row">

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
        </div>
      </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\htdocs\arter2\resources\views/front/pages/blog_single.blade.php ENDPATH**/ ?>