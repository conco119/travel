<?php
	
	/*
	 * 2/20/2017
	 * pagination
	 */
	class pagination{
		
		//config
		public $config=array(
				'limit'=>0,//khoi tao so phan tu hien thi tren trinh duyet
				'start'=>0,//phan tu bat dau
				'_baseUrl'=>'',//duong dan den trang
				'range'=>4,//so trang hien thi tren pagination
				'min'=>0,//min page
				'max'=>0,//max page
				'total_record'=>1
				);
		
		//construct
		public function __construct($config=array()){
			
			foreach ($config as $key=>$val){
				if(isset($this->config[$key])){
					$this->config[$key]=$val;
				}
			}
		}
		
		/*
		 * check page in url
		 * return int
		 */
		
		public function check_page(){
			if(isset($_GET['page']) && filter_var($_GET['page'],FILTER_VALIDATE_INT,array('min-rage'=>1))){
				$page=$_GET['page'];
				
			}
			else $page=1;
			return $page;
		}
		
		/*
		 * Tim vi tri start
		 * return int
		 */
		
		public function start(){
			$start=($this->check_page()-1)*($this->config['limit']);
			return $start;
		}
		
		/*
		 * ham lay ma html
		 * 
		 */
		public function html(){
			
			$limit=$this->config['limit'];
			$min=$this->config['min'];
			$max=$this->config['max'];
			$range=$this->config['range'];
			$page=$this->check_page();
			$base_Url=$this->config['_baseUrl'];
			$total_page=ceil($this->config['total_record']/$limit);
			
			//tinh so page hien thi tren pagination
			$midle=ceil($range/2);
			
			//totalpage<$range
			if($total_page>$range){
				$min=1;
				$max=$total_page;
			}
			//total_page >$range
			else {
				$min=$page-$midle+1;
				$max=$page+$midle-1;
				
				//min<1
				if($min<1){
					$min=1;
					$max=$range;
				}
				elseif ($max>$total_page){
					$min=$page-$midle+1;
					$max=$total_page;
				}
			}
			
			//total_record > limit
			if($this->config['total_record']>$limit){
				$p="<center><ul class='pagination row' id='pagination'>";
				
				//hien thi cac nut giua min va max
				//hien thi cac nut giua min va max
				for($i=$min;$i<=$max;$i++){
					$p.="<li ";
					if($page==$i) $p.="class='active'";
					$p.=" ><a href='".$base_Url."page=$i'>".$i."</a></li>";
				}
				
				//hien thi nut tiep
				if($page<$total_page){
					$page++;
					$p.="<li><a href='".$base_Url."page=$page'>Next</a></li>";
				}
				$p.="</ul></center>";
				return $p;
			}
			
		}
	}
?>