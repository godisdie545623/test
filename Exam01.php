<?php
	// 一、物件導向_繼承及介面
	class Motorcycle{
		protected $wheel;
		protected $body;
		protected $size;
		protected $Max_speed;

		function __construct(){
			$this->wheel = 2;
			$this->body = "肉身";
			$this->size = "較小";
			$this->Max_speed = "較慢";
		}

		public function get_wheel(){
			return "輪子的數量= ".$this-> wheel;
		}
		public function get_body(){
			return "外殼= ".$this-> body;
		}
		public function get_size(){
			return "車體大小= ".$this-> size;
		}
		public function get_speed(){
			return "平均最大時速= ".$this-> Max_speed;
		}
		public function throttle(){
			return "油門";
		}
		public function brakes(){
			return "煞車";
		}
		public function Dashboard(){
			return "儀錶板";
		}
		public function rearview(){
			return "後照鏡";
		}
	}

	interface vehicle{
		public function throttle();
		public function brakes();
		public function Dashboard();
		public function rearview();
	}


	// 關鍵字順序至關重要： 'extends' 必須在前面
	class Car extends Motorcycle implements vehicle{
		function __construct(){
			$this->wheel = 4;
			$this->body = "鋼鐵";
			$this->size = "較大";
			$this->Max_speed = "較快";
		}
	}
	
	$A = new Motorcycle;
	$B = new Car;
	echo "機車：<br>".$A->get_wheel()."<br>".$A->get_body()."<br>".$A->get_size()."<br>".$A->get_speed()."<br>";
	echo "汽車：<br>".$B->get_wheel()."<br>".$B->get_body()."<br>".$B->get_size()."<br>".$B->get_speed()."<br>";
	echo "他們都有：<br>".$A -> throttle()."、".$B -> brakes()."、".$A -> Dashboard()."、".$B -> rearview();

?>