<?php

/**
 * 首页model
 */
class Bang_model extends CI_Model {

    public function __construct($rules = array())
    {
		$this->load->database();		
    }

    public function test(){


    }

    public function getUserType($slug=FALSE){ 
    	if($slug===FALSE){
		 	return "no data";			
		}else{
	    	$this->db->select('jieseTime');
	    	$this->db->where('weixinName',$slug);
	    	$query = $this->db->get('bang');

	    	if ($query->num_rows() > 0){ 
	    		$day = (int)$query->row()->jieseTime;
	    		if($day<=30){ 	
	    			return 'nohave';
	    		}
	    		else if($day<=120&&$day>30){ 
	    			return '年year';
	    		}
	    		else if($day<=365&&$day>120){ 
	    			return '1年year';
	    		}
	    		else if($day>365&&$day<=730){ 
	    			return '2年year';
	    		}
	    		else if($day>730){ 
	    			return '3年year';
	    		}
	    	}	
    	}
    }
    /* 

	30天  		本周   本月 
	30<x<120天  本周   本月   年
	120<x<=1年  本周   本月   1年
	1年<x<3年   本周   本月	  2年
	
	年的数据，数据从加入时一致到今天，把数据全部展示
	
    */

    public function getPrevWeekData($slug=FALSE){
    	if($slug===FALSE){
		 	return "no data";			
		}
		else{ 
			$this->db->select('jieseTime');
			$this->db->where('weixinName',$slug);
			$this->db->where($where);
			$query = $this->db->get('huibao');
			$result=array();
			$finalArray = array();

			if ($query->num_rows() > 0){
				foreach ($query->result() as $row){ 
					//echo substr($row->subDate,0,10);
					$result[substr($row->subDate,0,10)] = (int)$row->sum;

				}
				foreach ($weekArray as $value) { 
						
						if(!empty($result[$value])){ 
							$finalArray[] = $result[$value];
						}else{ 
							$finalArray[] = null;	
						}
									
				}
				return $finalArray;
			}
			else{ 
				return 'null';
			}

		}

    }
	
	
}