

<?php $__env->startSection('container'); ?>


<main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5"><?php echo e($service->name); ?></h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="<?php echo e(route('index')); ?>">Home d</a></li>
              <li> <a href=""><?php echo e($service->name); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section">
        <div class="banner-image-service wow fadeInUp"></div>
        <div class="box-form-service-single">
          <div class="box-search-ride box-search-ride-style-2 wow fadeInUp"> 
            <div class="box-search-tabs">
              <div class="head-tabs"> 
                <ul class="nav nav-tabs nav-tabs-search" role="tablist">
                  <li><a class="active" href="#tab-distance" data-bs-toggle="tab" role="tab" aria-controls="tab-distance" aria-selected="true">Distance</a></li>
                  <li><a href="#tab-hourly" data-bs-toggle="tab" role="tab" aria-controls="tab-hourly" aria-selected="false">Hourly</a></li>
                  <li><a href="#tab-rate" data-bs-toggle="tab" role="tab" aria-controls="tab-rate" aria-selected="false">Flat Rate</a></li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-distance" role="tabpanel" aria-labelledby="tab-distance">
                  <div class="box-form-search">
                    <div class="search-item search-date"> 
                      <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Date</label>
                        <input class="search-input datepicker-2" type="text" placeholder="" value="Thu, Oct 06, 2022">
                      </div>
                    </div>
                    <div class="search-item search-time"> 
                      <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Time</label>
                        <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                      </div>
                    </div>
                    <div class="search-item search-from"> 
                      <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">From</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-to"> 
                      <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">To</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-button mb-0"> 
                      <button class="btn btn-search" type="submit"> <img src="assets/imgs/template/icons/search.svg" alt="luxride">Search</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-hourly" role="tabpanel" aria-labelledby="tab-hourly">
                  <div class="box-form-search">
                    <div class="search-item search-time"> 
                      <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Time</label>
                        <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                      </div>
                    </div>
                    <div class="search-item search-date"> 
                      <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Date</label>
                        <input class="search-input datepicker" type="text" placeholder="" value="Thu, Oct 06, 2022">
                      </div>
                    </div>
                    <div class="search-item search-from"> 
                      <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">From</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-to"> 
                      <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">To</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-button mb-0"> 
                      <button class="btn btn-search" type="submit"> <img src="assets/imgs/template/icons/search.svg" alt="luxride">Search</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-rate" role="tabpanel" aria-labelledby="tab-rate">
                  <div class="box-form-search">
                    <div class="search-item search-date"> 
                      <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Date</label>
                        <input class="search-input datepicker" type="text" placeholder="" value="Thu, Oct 06, 2022">
                      </div>
                    </div>
                    <div class="search-item search-time"> 
                      <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Time</label>
                        <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                      </div>
                    </div>
                    <div class="search-item search-from"> 
                      <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">From</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-to"> 
                      <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">To</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-button mb-0"> 
                      <button class="btn btn-search" type="submit"> <img src="assets/imgs/template/icons/search.svg" alt="luxride">Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-90">
        <div class="container-sub"> 
          <div class="row cardIconTitleDescLeft"> 


          <?php $__currentLoopData = $service->attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="/public/<?php echo e($item->image); ?>" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text"><?php echo e($item->key); ?></h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text"><?php echo e($item->value); ?></p>
                </div>
              </div>
            </div>
                 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </section>
      <section class="section">
        <div class="container-sub"> 
          <div class="mt-120"> 
            <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp"><?php echo e($service->name); ?></h2>
            <div class="content-single wow fadeInUp"> 
              <?php echo $service->desc; ?>

            </div>
          </div>
        
        </div>
      </section>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\htdocs\arter2\resources\views/front/pages/service_single.blade.php ENDPATH**/ ?>