

<?php $__env->startSection('container'); ?>


<main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5"><?php echo e(__('About Us')); ?></h1>
          <div class="box-breadcrumb">
            <ul>
              <li> <a href="<?php echo e(route('index')); ?>"><?php echo e(__('Home')); ?></a></li>
              <li> <a href=""><?php echo e(__('About')); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="section wow fadeInUp"><img src="/public/<?php echo e($about->image); ?>" alt="luxride"></div>
      <section class="section">
        <div class="container-sub"> 
          <div class="mt-60"> 
           <?php echo $about->desc; ?>

          </div>
        </div>
      </section>
      <section class="section mb-30 mt-80 box-showcase">
        <div class="bg-showcase pt-100 pb-70">
          <div class="container-sub"> 
            <div class="row align-items-center"> 
              <div class="col-lg-6 mb-30"> 
                <h2 class="heading-44-medium color-white wow fadeInUp">Showcase some impressive numbers.</h2>
              </div>
              <div class="col-lg-6">
                <div class="row align-items-center">


                <?php $__currentLoopData = $counter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
              
                  <div class="col-4 mb-30 wow fadeInUp">
                    <div class="box-number"> 
                      <h2 class="heading-44-medium color-white"><?php echo e($item->number); ?></h2>
                      <p class="text-20 color-white"><?php echo e($item->title); ?></p>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-110"> 
        <div class="container-sub"> 
          <div class="text-center">
            <h2 class="heading-44-medium color-text wow fadeInUp">Make Your Trip Your Way With Us</h2>
          </div>
          <div class="row mt-50 cardIconStyleCircle"> 


          <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
         
            <div class="col-lg-4">
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="/public/<?php echo e($item->image); ?>" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text"><?php echo e($item->title); ?></h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text"><?php echo e($item->desc); ?></p>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>
        </div>
      </section>
      <div class="mb-90"></div>
      <section class="section pt-120 pb-20 bg-primary bg-how-it-works"> 
        <div class="container-sub"> 
          <h2 class="heading-44-medium color-white mb-60 wow fadeInUp">How It Works</h2>
          <div class="row"> 
            <div class="col-lg-6 order-lg-last">
              <div class="box-main-slider"> 
                <div class="detail-gallery wow fadeInUp">
                  <div class="main-image-slider">
                    <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <figure><img src="/public/<?php echo e($item->image); ?>" alt="luxride"></figure>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-first justify-content-between position-z3 wow fadeInUp">
              <ul class="slider-nav-thumbnails list-how"> 
                <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <span class="line-white"></span>
                  <h4 class="text-20-medium mb-20"><?php echo e($item->title); ?></h4>
                  <p class="text-16"> <?php echo e($item->desc); ?> </p>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section pt-130 pb-100 bg-2 box-testimonials">
        <div class="container-sub"> 
          <div class="row"> 
            <div class="col-lg-5 col-md-6 mb-30">
              <div class="box-swiper"> 
                <div class="swiper-container swiper-group-testimonials pb-50">
                  <div class="swiper-wrapper">


                  <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                    <div class="swiper-slide"> 
                      <div class="cardQuote wow fadeInUp">
                        <div class="box-quote"> 
                          <div class="icon-quote bg-secondary"> </div>
                          <div class="info-quote" style="color: #fff;"> 
                            <h5 class=" text-18-medium" style="color: #fff;"><?php echo e($item->name); ?></h5>
                            <p class=" text-14"><?php echo e($item->profession); ?></p>
                          </div>
                        </div>
                        <div class="content-quote" style="color: #fff;">
                        <?php echo e($item->desc); ?>

                    </div>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                  </div>
                  <div class="box-pagination-testimonials mt-40 swiper-pagination-grey"> <span class="firstNumber"></span><span class="lastNumber"></span>
                    <div class="swiper-pagination swiper-pagination-testimonials"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6 mb-30 text-lg-end text-center d-none d-md-block">
              <div class="box-video wow fadeInUp"><img src="/public/front/assets/imgs/page/about/img1.png" alt="Arter"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section pt-65 pb-35 border-bottom"> 
        <div class="container-sub"> 
          <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4 mb-30"> 
              <h3 class="color-primary wow fadeInUp">The partners who sell<br class="d-none d-lg-block">our products</h3>
            </div>
            <div class="col-xl-9 col-lg-8 mb-30">
              <ul class="list-logos d-flex align-item-center wow fadeInUp"> 
                <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><img src="/public/<?php echo e($item->image); ?>" alt="<?php echo e($item->name); ?>"></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section pt-80 mb-30">
        <div class="container-sub">
          <div class="box-faqs">
            <div class="text-center"> 
              <h2 class="color-brand-1 mb-20 wow fadeInUp">Frequently Asked Questions</h2>
            </div>
            <div class="mt-60 mb-40">
              <div class="accordion wow fadeInUp" id="accordionFAQ">


              <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
            
                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingOne">
                    <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapse_<?php echo e(++$key); ?>"
                     aria-expanded="true" aria-controls="collapse_<?php echo e($key); ?>"><?php echo e($item->question); ?></button>
                  </h5>
                  <div <?php if($key == 1): ?> class="accordion-collapse collapse show" <?php else: ?> class="accordion-collapse collapse" <?php endif; ?> id="collapse_<?php echo e($key); ?>" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body"><?php echo e($item->answer); ?></div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\htdocs\arter2\resources\views/front/pages/about.blade.php ENDPATH**/ ?>