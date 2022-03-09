<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() 
    {       
		parent::__construct();		
		
		$this->mobile = $this->agent->is_mobile();

		if($this->mobile)
		{
			$this->data['js'] = array('custom.js','calendar.js','mobile/calendar/duDatepicker.min.js');
			$this->data['css'] = array('mobile/calendar/duDatepicker.min.css','mobile/calendar/duDatepicker-theme.css','mobile/home-mobile.css','mobile/custom-mobile.css');
		}
		else
		{
			$this->data['js'] = array('home.js','custom.js');
			$this->data['css'] = array('home.css');
		}
		
		$this->period = 2;
		header('Access-Control-Allow-Origin: *');
    }

	public function index()
	{		
		$banner = $this->get_banner(1);
		$arr_slideshow = array();
		$arr_promotion = array();
		foreach ($banner as $key => $item) 
		{
			//slideshow
			if($item->display_menu==1)
				$arr_slideshow[$item->banner_order]['banner_path'] = $item->banner_path;
		}

		$banner = $this->get_banner(2);
		foreach ($banner as $key => $item) 
		{
			//promotion
			if($item->display_menu==2)
			{				
				$arr_promotion[$key]['banner_first'] = $item->banner_first;
				$arr_promotion[$key]['banner_path'] = $item->banner_path;
			}
		}


		$car_model_api = 'http://luvdrive.com/api/car/car_model/?id_branch=1';
		$car_model = json_decode(file_get_contents($car_model_api));

		if(isset($car_model)&&$car_model)
		{
			foreach($car_model->data as $key_brand => $item)
			{						
				if(isset($item->price->$key_brand)&&$item->price->$key_brand)
				{	
					foreach($item->price->$key_brand as $price => $car_generation)
					{
						if(count($car_generation)>1)
						{
							ksort($car_generation);
							$first_car_generation = reset($car_generation);
							$last_car_generation = end($car_generation);
							$text_car_generation = ($first_car_generation==$last_car_generation)?$first_car_generation:$first_car_generation.'-'.$last_car_generation;
						}
						else
							$text_car_generation = reset($car_generation);									

						$arr_car_models[$item->info->id_car_model][$text_car_generation]['price'] = $price;
						$arr_car_models[$item->info->id_car_model][$text_car_generation]['info'] = $item->info;
						$arr_car_models[$item->info->id_car_model][$text_car_generation]['car_other_info'] = $item->car_other_info;
						$arr_car_models[$item->info->id_car_model][$text_car_generation]['car_generation'] = $text_car_generation;
						$arr_car_models[$item->info->id_car_model][$text_car_generation]['is_booking'] = $item->is_booking;
					}
				}

				if(isset($item->price_member)&&$item->price_member)
				{	
					foreach($item->price_member->$key_brand as $price => $car_generation)
					{
						if(count($car_generation)>1)
						{
							ksort($car_generation);
							$first_car_generation = reset($car_generation);
							$last_car_generation = end($car_generation);
							$text_car_generation = ($first_car_generation==$last_car_generation)?$first_car_generation:$first_car_generation.'-'.$last_car_generation;
						}
						else
							$text_car_generation = reset($car_generation);							

						$arr_car_models[$item->info->id_car_model][$text_car_generation]['is_member'] = $item->is_member;
						$arr_car_models[$item->info->id_car_model][$text_car_generation]['price_member'] = $price;
					}
				}
			}

			$random_all_car = $this->shuffle_assoc($arr_car_models);
			$random_car = array();
			foreach($random_all_car as $brand => $item)
			{			
				$randomElement = $item[array_rand($item, 1)];
				if(count($random_car)<6)
					$random_car[$brand] = $randomElement;
				else
					break;
			}
		}

		$get_cat_location = $this->get_cat_location();
		
		foreach ($get_cat_location as $item)
		{
			$arr_location[$item->id_province]['province'] = array(
				'id_province' => $item->id_province,
				'province_name' => $item->province_name
			);
			$arr_location[$item->id_province]['location'][] = $item;
		}	

		$this->data['location'] = $arr_location;
		$this->data['car_location'] = $this->get_cat_location();
		$this->data['slideshow'] = $arr_slideshow;
		$this->data['promotion'] = $arr_promotion;
 		$this->data['brand'] = $this->get_brand();
		$this->data['car_model'] = $car_model->data;
		$this->data['random_car'] = $random_car;

		if($this->mobile)
		 	$this->load->view('home/mobile/home', $this->data);
		else
			$this->load->view('home/home',$this->data);
	}
	
	public function modal_popup()
	{
		$banner = $this->get_banner(2);
		foreach ($banner as $key => $item) 
		{
			//promotion
			if($item->display_menu==2)
			{	
				if($item->banner_first==0)
				{
					if($key==0)
					{				
						$arr_promotion[$key]['banner_first'] = 1;
						$arr_promotion[$key]['banner_path'] = $item->banner_path;
					}
					else
					{				
						$arr_promotion[$key]['banner_first'] = 0;
						$arr_promotion[$key]['banner_path'] = $item->banner_path;
					}
				}
				else
				{
					$arr_promotion[$key]['banner_first'] = $item->banner_first;
					$arr_promotion[$key]['banner_path'] = $item->banner_path;
				}		
			}
		}

		if(isset($arr_promotion)&&$arr_promotion)
		{
			$this->data['arr_promotion'] = $arr_promotion;
			$this->load->view('home/modal-popup',$this->data);
		}
		else
			echo '';
	}

	public function modal_login()
	{
		$this->load->view('includes/mobile/modal-login');
	}

	private function get_banner($banner_type)
	{
		return $this->db->query('select * from app_banner 
			where now() >= banner_startdatetime
			and now() <= banner_enddatetime
			and display_menu = '.$banner_type.'
			and banner_published = 1
			order by id_banner desc')
			->result();
	}

	private function shuffle_assoc($list) 
	{ 
		if (!is_array($list)) return $list; 

		$keys = array_keys($list); 
		shuffle($keys); 
		$random = array(); 
		foreach ($keys as $key)
			$random[$key] = $list[$key]; 

	  return $random; 
	}

	private function get_cat_location()
	{
		if(isset($_SESSION['test'])&&($_SESSION['test']==1))
		{
			return $this->db->query('select a.*,b.id_province,b.province_name
			from app_car_location a
			join app_province b on a.id_province=b.id_province			
			order by b.province_name asc,a.car_location_title asc')
			->result();
		}
		else
		{
		return $this->db->query('select a.*,b.province_name
			from app_car_location a
			join app_province b on a.id_province=b.id_province
			where a.car_location_published=1 
			order by b.province_name asc,a.car_order asc')
			->result();
		}
	}
	
	private function get_brand()
	{
		return $this->db->query('select * from app_brand where id_branch=1 order by car_title asc')
			->result();
	}	
}
