<?php $this->pageTitle=Yii::app()->name; ?>

<section class="d-none d-sm-none d-md-block gauto-slider-area fix border-top-purple">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  	<div class="carousel-inner">
		    <div class="carousel-item active">
		      	<img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/images/home-banner.jpg" class="d-block w-100" alt="...">
		    </div>
	  	</div>
	 	<button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
	    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</button>
	  	<button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</button>
	</div>
	<?php //$this->load->view('includes/search-box');?>
    
    <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
    <!-- search-box start -->
    <div class="container search-box-container p-3">
        <form id="frm-search">
        <?php
        $begin = new DateTime("06:00");
        $end = new DateTime("24:00");
        $interval = DateInterval::createFromDateString('30 min');
        $times = new DatePeriod($begin, $interval, $end);	
        $current_time = date('H:i');
        $timestamp = time() + 60*60*2;
        $time_twohours = (date('i')>='30')?date('H:00',$timestamp):date('H:30',$timestamp);
        ?>
            <div class="row justify-content-center">
                <div class="col-md-12 mb-3"><h4>Find your car</h4></div>
                <div class="col-md-4">
                    <div id="pick-up-location-container">
                        <div class="input-group">
                            <select class="form-control">
                                <option>Pick-up Location</option>
                            </select>
                            <div class="input-group-append"><span class="input-group-text"><i class="fa-solid fa-location-dot text-purple"></i></div>
                        </div>
                    </div>
                    <div id="drop-off-location-container" class="mt-3">
                        <div class="input-group">
                            <select class="form-control">
                                <option>Drop-off Location</option>
                            </select>
                            <div class="input-group-append"><span class="input-group-text"><i class="fa-solid fa-location-dot text-purple"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="pick-up-date-container">
                        <div class="input-group date">
                            <input type="text" id="pick-up-date" class="input-sm form-control" name="pick-up-date" placeholder="Pick-up Date">
                            <div class="input-group-append"><span class="input-group-text"><i class="far fa-calendar-alt text-purple"></i></span></div>
                        </div>									
                    </div>
                    <div id="drop-off-date-container" class="mt-3">
                        <div class="input-group date">
                            <input type="text" id="drop-off-date" class="input-sm form-control" name="drop-off-date" placeholder="Drop-off Date">
                            <div class="input-group-append"><span class="input-group-text"><i class="far fa-calendar-alt text-purple"></i></span></div>
                        </div>									
                    </div>
                </div>
                <div class="col-md-2">
                    <div id="pick-up-time-container">
                        <div class="input-group">
                            <select class="form-control">
                                <option>Pick-up Time</option>
                            </select>
                            <div class="input-group-append"><span class="input-group-text"><i class="fa-solid fa-clock text-purple"></i></div>
                        </div>
                    </div>
                    <div id="drop-off-time-container" class="mt-3">
                        <div class="input-group">
                            <select class="form-control">
                                <option>Drop-off Time</option>
                            </select>
                            <div class="input-group-append"><span class="input-group-text"><i class="fa-solid fa-clock text-purple"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 align-self-center">
                    <button type="button" class="btn btn-green btn-block text-shadow-214603 btn-find-car" onclick="javascipt:showbooking();"><i class="fa-solid fa-magnifying-glass mr-2"></i>FIND CAR</button>
                </div>
            </div>
        </form>
    </div>
    <!-- search-box end -->
    <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
      
</section>

<!--<button id="tbsd_btn" onclick="javascript:testbootstrapdialog();">Test Bootstrapdialog</button>-->

<div id="booking"></div>
<div id="car_offer_price"></div>
<div id="contact_us"></div>

<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>-->
<div id="modal_01" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-purple text-white">
        <h4 class="modal-title"  id="hdm_01">Sing In</h4>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p><div id="bdm_01">Sing In Form Detail.</div></p>
      </div>
      <!--<div class="modal-footer">-->
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>