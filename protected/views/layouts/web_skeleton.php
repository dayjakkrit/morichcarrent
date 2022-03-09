<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php $title = (isset($title)&&$title)?$title:'Morich Group';?>
	<title><?php echo $title;?></title>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Morich Group">
    <meta name="keyword" content="Morich Group">
    <meta property="og:title" content="<?php echo $title;?>"/>
    <meta property="og:url" content="<?php echo Yii::app()->request->baseUrl; ?>"/>
    <meta property="og:image" content="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/images/mrg-logo.png"/>
    <meta property="og:description" content="Morich Group"/>
    
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/images/favicon.ico">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--jQuery UI-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/plugins/fontawesome-free/css/all.min.css">
    <!--Select2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <!--Fancybox-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>		
    <!--Custom css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">
    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/css/style.css">
    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/css/mrg-custom.css">
    

  <!--Jquery js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!--jQuery UI-->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!--cookie-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <!--Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--fontawesome-->
  <script src="https://kit.fontawesome.com/28b4782788.js" crossorigin="anonymous"></script>
  <!--Owl-Carousel js-->
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/js/owl.carousel.min.js"></script>
  <!--Nice Select js-->
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/js/jquery.nice-select.min.js"></script>
  <!--ClockPicker JS-->
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/js/jquery-clockpicker.min.js"></script>
  <!--Slicknav js-->
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/js/jquery.slicknav.min.js"></script>
  <!--Moment-->
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/plugins/moment/moment.min.js"></script>
  <!--Select2-->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <!--Main js-->
  <script>
	 var getUrl = window.location;
	 var baseUrl = getUrl .protocol+"//"+getUrl.host+"/"+getUrl.pathname.split('/')[1];

	 if (!$("#modal-data").length) 
		$("body").append('<div id="modal-data"></div>');
  </script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/js/main.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/js/mrg-custom.js"></script>
  
  <!-- include bootstrap dialog -->
  <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/plugins/bootstrap/bootstrap.min.css">
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/plugins/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/plugins/bootstrap/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/plugins/bootstrapdialog/css/bootstrap-dialog.min.css">
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes//mrgauto/assets/plugins/bootstrapdialog/js/bootstrap-dialog.min.js"></script>-->
  
    
    <?php 
	  if(isset($css)&&$css)
	  {
		  foreach($css as $item)
			  echo '<link rel="stylesheet" href="'.Yii::app()->request->baseUrl('/themes/mrgauto/assets/css/'.$item).'">';
	  }
	?>
    
    <style type="text/css">
	
		#modal_01 {
		  /*position: relative;*/
		  /*width: 100%;*/
		  /*padding-left:50px;*/
		}
		
		#modal_02 {
		  /*position: relative;*/
		  /*width: 100%;*/
		  /*padding-left:50px;*/
		}
		
	</style>
    
</head>

<body>
   <div class="" id="page">
   
   		<div id="header">
			<!--<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>-->
            
            <!-- Header Top Area Start -->
            <section class="gauto-header-top-area">
               <div class="container">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="header-top-left">
                           <p><i class="fa fa-phone text-dark"></i> Call us: 083-635-3939 | Open everyday : 08:00 AM - 08:00 PM</p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="header-top-right">
                           <?php //if(isset($this->session->userdata['login'])&&($this->session->userdata['login']==1)){?>
                              <!--<div class="dropdown">
                                    <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true"><?php //echo $this->session->userdata['member']->name.' '.$this->session->userdata['member']->lastname;?></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                                       <li><a href="<?php //echo base_url('profile')?>">Profile</a></li>
                                       <li><a href="<?php //echo base_url('sign-out')?>">Logout</a></li>
                                    </ul>
                                 </div>-->
                           <?php //}else{ ?>
                           	  <!-- data-toggle="modal" data-target=".bd-example-modal-lg" -->
                              <a href="#" onClick="javascript:openModal('Sing In','singin');"><i class="fa fa-key"></i> Sing In</a>| <a href="#" onClick="javascript:openModal('Register','register');" class="ml-2"><i class="fa fa-user"></i> Register</a>
                           <?php //}?>
                        </div>
                     </div>
                  </div>
               </div>
               </div>
            </section>
            <!-- Header Top Area End -->
            
            
            <!-- Main Header Area Start -->
            <header class="gauto-main-header-area">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="site-logo">
                           <a href="<?php //echo base_url(); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/images/mrg-logo.png" alt="Morich Group" class="w-75"></a>
                        </div>
                     </div>
                     <div class="col-lg-9 col-sm-9">
                        <div class="mainmenu">
                           <nav>
                              <ul id="gauto_navigation">
                                 <li class="active"><a href="<?php //echo base_url(); ?>">Home</a></li>
                                 <li><a class="car-offer">Cars</a></li>                     
                                 <li><a class="contact">Contact</a></li>
                                 <li class="ml-3"><button id="menu-btn-book-now" class="btn btn-purple"><i class="fa-solid fa-car mr-2"></i>BOOK NOW</button></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <!-- Main Header Area End -->
            
            
		</div><!-- header -->
        
        <div id="mainmenu">
			<?php /*$this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            )); */ ?>
        </div><!-- mainmenu -->
        <?php //if(isset($this->breadcrumbs)):?>
			<?php /*$this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); */ ?><!-- breadcrumbs -->
        <?php //endif?>
        
        <?php echo $content; ?>
        
        <!--<div class="clear"></div>-->
        
        <div id="footer">
            <!--Copyright &copy; <?php //echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved.<br/>-->
            <?php //echo Yii::powered(); ?>
            <!-- /////////////////////////////////////////////////////////////////-->
            <!-- Footer Area Start -->
            <footer class="gauto-footer-area">
               <div class="footer-bottom-area">
                  <div class="container">
                     <div class="row">                  
                        <div class="col-md-8">
                           <div class="copyright text-white">@copyright  <?php echo date('Y'); ?> | morich.asia All Rights Resered</div>
                        </div>
                        <div class="col-md-4 text-right">
                           <a href="https://www.facebook.com/MorichGroup" target="_blank"><i class="fab fa-facebook-square font22 text-white mx-2"></i></a>
                           <a href="http://line.me/ti/p/@Morich" target="_blank"><i class="fab fa-line font22 text-white"></i></a>
                        </div>               
                     </div>
                  </div>
               </div>
            </footer>
            <!-- /////////////////////////////////////////////////////////////////-->    
        </div><!-- footer -->

   </div><!-- page -->
   

  
  <?php 
	if(isset($js)&&$js)
	{
		foreach($js as $item)
			echo '<script src="'.Yii::app()->request->baseUrl('/themes/mrgauto/assets/js/'.$item).'"></script>';
	}
  ?>
  
  
  <!-- javascript function control start -->
  <script>
	$(document).ready(function() {
		//alert("test");
		//$("#m2").addClass( "active" );
		//$("#geninfo1").hide("fast");
		//$('#car_offer_price').html("<img src='<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/images/preloader/preloader-01.gif' height='30' width='30' style='margin-top:10px; margin-left:10px'   /> <br> Loading...");
		$("#car_offer_price").load("<?php echo Yii::app()->createAbsoluteUrl('home/showcarofferprice'); ?>");
		//$('#contact_us').html("<img src='<?php echo Yii::app()->request->baseUrl; ?>/themes/mrgauto/assets/images/preloader/preloader-01.gif' height='30' width='30' style='margin-top:10px; margin-left:10px'   /> <br> Loading...");
		$("#contact_us").load("<?php echo Yii::app()->createAbsoluteUrl('home/showcontactus'); ?>");
		$("#booking").hide();
	});//document function
	
	function showbooking(){
		$("#booking").load("<?php echo Yii::app()->createAbsoluteUrl('home/showbooking'); ?>");
		$("#booking").fadeOut(400);
		$("#booking").fadeIn(800);
		$("#booking").slideDown(1000);
	}//function
	
	function test(){
		alert("test test");
		$("#regis_01").load("<?php echo Yii::app()->createAbsoluteUrl('home/loadregis01'); ?>");		
	}//function
	
	function hidebooking(){
		$("#booking").slideUp(400);
	}//function
	
	function testbootstrapdialog(){
		/*alert("test bootstrapdialog");
		BootstrapDialog.alert("test bootstrapdialog");*/
	}//function
	
	function openModal(hdn,pn){
		var headername = hdn;
		var pagename = pn;
		$("#modal_01").modal();
		$("#hdm_01").html(headername);
		if(pagename=="singin"){
			$("#bdm_01").load("<?php echo Yii::app()->createAbsoluteUrl('home/loadsingin01'); ?>");
		}else if(pagename=="register"){
			$("#bdm_01").load("<?php echo Yii::app()->createAbsoluteUrl('home/loadregis01'); ?>");
		}else if(pagename=="forgotpass"){
			$("#bdm_01").load("<?php echo Yii::app()->createAbsoluteUrl('home/loadforgotpass01'); ?>");
		}
	}//function
	
		
  </script>
   
  <!-- javascript function control start -->
  
</body>
</html>