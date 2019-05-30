<?php

/**
 * 首页model
 */
class Diary_model extends CI_Model  {

    public function __construct($rules = array())
    {
		$this->load->database();		
		$this->total=0;//总记录
		$this->pagesize=8;//每页显示多少条
		$this->page=0;//当前页码  
		$this->pagenum=0;//总页码 
    }

    public function test(){

    }

    public function auth($slug=FALSE){ 
    	$this->db->select('id');
    	$this->db->where('weixinName',$slug);
		$this->db->where('leftTime < 0');
		$query = $this->db->get('bang');
		if ($query->num_rows() > 0){ 
			return true; 
		}
		else{ 
			return false; 
		}
    }

    public function allowed($slug=FALSE){ 
    	$this->db->select('weixinName');
    	$this->db->where('weixinName',$slug);
    	$query = $this->db->get('bang');
    	if($query->num_rows()>0){ 
    		return false;
    	}else{ 
    		return true; 
    	}

    }   
   
	public function calculateResult($score){ 
	 	$tip = '';
	   	if($score==0||$score<0){ 
			$tip="小戒评估结果:你确定你是来戒色吗？请好好填写自评并对自己负责吧";
		}
		else if($score>0&&$score<40){ 
			$tip="小戒评估结果：这个分数太低了，你的恶习并未得到一点改善, 你需要调整现在的状态，每天按照日报的内容执行，明天请加油";
		}
		else if($score>=40&&$score<60){ 
			$tip="小戒评估结果：加油吧，还差一点就到及格线了，请努力改进自己的状态，在帮助别人，解决自身问题上下功夫，每天按照日报的内容执行，明天请加油";
		}	
		else if($score>=60&&$score<80){ 
			$tip="小戒评估结果：今天这是一份不错的戒色成绩单，希望你每天都能保持这个状态，步步前进，稳扎稳打，恶习戒除成功指日可待";
		}	
		else if($score>=80&&$score<100){ 
			$tip="小戒评估结果：你真的很棒，如果这个分数能以保持2周以上，你就离戒色成功不远了，小戒以你为荣，你的戒色日记经过审查后会推荐到微信的文章中去";
		}
		else if($score>=100){ 
			$tip="小戒评估结果：你简直太棒了，你已经超越了所有人，希望这是你今天真实的戒色成绩，你的戒色日记经过审查后会推荐到微信的文章中去，愿荣誉永远与你同在";
		}			
		return $tip;	
	}
 

	public function getDeclaration($slug=FALSE){ 
		if($slug===FALSE){ 
			return 'no data';
		}else{
			
			$this->db->select('declaration');
			$this->db->where('weixinName',$slug);
			$dec = $this->db->get('bang');
		
			if($dec->num_rows() > 0){ 
				//return $dec->result()[0]->declaration;
				return $dec->row()->declaration;
			}else{ 
				return ''; 
			}
			
		}
	}

	public function getJieseTime($slug=FALSE){ 
		if($slug===FALSE){ 
			return 'no data';
		}else{
			
			$this->db->select('hasTime');
			$this->db->where('weixinName',$slug);
			$dec = $this->db->get('bang');
		
			if($dec->num_rows() > 0){ 
				//return $dec->result()[0]->declaration;
				return $dec->row()->hasTime.'天';
			}else{ 
				return ''; 
			}
			
		}
	}	
 
 	public function getUserName($slug=FALSE){ 
 		if($slug===FALSE){ 
			return 'no data';
		}else{
			
			$this->db->select('nickName');
			$this->db->where('weixinName',$slug);
			$dec = $this->db->get('bang');
		
			if($dec->num_rows() > 0){
				return $dec->row()->nickName;
			}else{ 
				return '';
			}
			
		}
 	}

	public function getAllResultCount($type){ 
		$this->db->select('cont1');	
		if($type == "getRecList"){ 
			$this->db->where("isRec",1);
		}
		$query = $this->db->get('huibao');
		$this->total = $query->num_rows();
		$this->pagenum = ceil($query->num_rows()/$this->pagesize);
		$this->page = 1;
		return $this->pagenum;
	}

	
   	public function getRecentWork($slug=FALSE){
		$this->db->select('cont1,cont2,cont3,cont4,cont5,cont6,cont7,subDate,sum');	
		$this->db->where('weixinName',$slug);
		$this->db->order_by('subDate','desc');
		$this->db->limit(10);
		$query = $this->db->get('huibao');
		if ($query->num_rows() > 0){
			$result = array();
			foreach ($query->result() as $key => $row){
				$result[$key]['cont1'] = $row->cont1;
				$result[$key]['cont2'] = $row->cont2;
				$result[$key]['cont3'] = $row->cont3;
				$result[$key]['cont4'] = $row->cont4;
				$result[$key]['cont5'] = $row->cont5;
				$result[$key]['cont6'] = $row->cont6; 
				$result[$key]['cont7'] = $row->cont7;
				if($row->cont1=="无"||!strlen($row->cont1)){ 
					$result[$key]['cont1'] = "今天没有接触黄源";
				}
				if($row->cont2=="无"||!strlen($row->cont2)){ 
					$result[$key]['cont2'] = "今天没有意淫";
				}						
				if($row->cont3=="无"||!strlen($row->cont3)){ 
					$result[$key]['cont3'] = "今天一切正常";
				}						
				if($row->cont4=="无"||!strlen($row->cont4)){ 
					$result[$key]['cont4'] = "今天没任何挫折感";
				}						
				if($row->cont5=="无"||!strlen($row->cont5)){ 
					$result[$key]['cont5'] = "今天没运动";
				}						
				if($row->cont6=="无"||!strlen($row->cont6)){ 
					$result[$key]['cont6'] = "今天没有总结或者感悟";
				}						
				if($row->cont7=="无"||!strlen($row->cont7)){ 
					$result[$key]['cont7'] = "今天没帮助别人";
				}						
				$result[$key]['subDate'] = substr($row->subDate,0,10);
				$result[$key]['tip'] = $this->calculateResult($row->sum);
				$result[$key]['sum'] = $row->sum;
				//$result[$key]['declaration'] = $row->declaration;
			}
			return $result; 	
		}
		else{
			return 'null';
		}

   	}


   	//随机数据
	public function getRandRecList(){ 
		$sql = "SELECT *
		FROM huibao AS t1
		JOIN (
		SELECT ROUND( RAND( ) * (SELECT MAX( id )FROM huibao) ) AS id
		) AS t2
		WHERE t1.id >= t2.id
		ORDER BY t1.id ASC
		LIMIT 8";
		$query = $this->db->query($sql);

 		if ($query->num_rows() > 0){	
 			$result = array();	
			foreach ($query->result() as $key => $row){
				$result[$key]['id'] = $row->id;
				$result[$key]['cont1'] = $row->cont1;
				$result[$key]['cont2'] = $row->cont2;
				$result[$key]['cont3'] = $row->cont3;
				$result[$key]['cont4'] = $row->cont4;
				$result[$key]['cont5'] = $row->cont5;
				$result[$key]['cont6'] = $row->cont6; 
				$result[$key]['cont7'] = $row->cont7;
				$result[$key]['isRec'] = $row->isRec;
				$result[$key]['praise'] = $row->praise;
				if($row->cont1=="无"||!strlen($row->cont1)){ 
					$result[$key]['cont1'] = "今天没有接触黄源";
				}
				if($row->cont2=="无"||!strlen($row->cont2)){ 
					$result[$key]['cont2'] = "今天没有意淫";
				}						
				if($row->cont3=="无"||!strlen($row->cont3)){ 
					$result[$key]['cont3'] = "今天一切正常";
				}						
				if($row->cont4=="无"||!strlen($row->cont4)){ 
					$result[$key]['cont4'] = "今天没任何挫折感";
				}						
				if($row->cont5=="无"||!strlen($row->cont5)){ 
					$result[$key]['cont5'] = "今天没运动";
				}						
				if($row->cont6=="无"||!strlen($row->cont6)){ 
					$result[$key]['cont6'] = "今天没有总结或者感悟";
				}						
				if($row->cont7=="无"||!strlen($row->cont7)){ 
					$result[$key]['cont7'] = "今天没帮助别人";
				}						
				$result[$key]['subDate'] = substr($row->subDate,0,10);
				$result[$key]['tip'] = $this->calculateResult($row->sum);
				$result[$key]['sum'] = $row->sum; 
				$result[$key]['name'] = $this->getUserName($row->weixinName);
				$result[$key]['hasTime'] = $this->getJieseTime($row->weixinName);
				$result[$key]['declaration'] = $this->getDeclaration($row->weixinName);
				//$result[$key]['declaration'] = $row->declaration;
			}
			return $result;
		}
		else{
			return 'null';
		}	 		

	} 


 	//已推荐日记
   	public function getRecList(){
   		$this->db->select('id,weixinName,cont1,cont2,cont3,cont4,cont5,cont6,cont7,subDate,sum,isRec,praise');	
   		$this->db->where("isRec",1);
   		$this->db->order_by('subDate','desc');
   		$this->db->limit(8);
   		$query = $this->db->get('huibao');

 		if ($query->num_rows() > 0){	
 			$result = array();	
			foreach ($query->result() as $key => $row){
				$result[$key]['id'] = $row->id;
				$result[$key]['cont1'] = $row->cont1;
				$result[$key]['cont2'] = $row->cont2;
				$result[$key]['cont3'] = $row->cont3;
				$result[$key]['cont4'] = $row->cont4;
				$result[$key]['cont5'] = $row->cont5;
				$result[$key]['cont6'] = $row->cont6; 
				$result[$key]['cont7'] = $row->cont7;
				$result[$key]['isRec'] = $row->isRec;
				$result[$key]['praise'] = $row->praise;
				if($row->cont1=="无"||!strlen($row->cont1)){ 
					$result[$key]['cont1'] = "今天没有接触黄源";
				}
				if($row->cont2=="无"||!strlen($row->cont2)){ 
					$result[$key]['cont2'] = "今天没有意淫";
				}						
				if($row->cont3=="无"||!strlen($row->cont3)){ 
					$result[$key]['cont3'] = "今天一切正常";
				}						
				if($row->cont4=="无"||!strlen($row->cont4)){ 
					$result[$key]['cont4'] = "今天没任何挫折感";
				}						
				if($row->cont5=="无"||!strlen($row->cont5)){ 
					$result[$key]['cont5'] = "今天没运动";
				}						
				if($row->cont6=="无"||!strlen($row->cont6)){ 
					$result[$key]['cont6'] = "今天没有总结或者感悟";
				}						
				if($row->cont7=="无"||!strlen($row->cont7)){ 
					$result[$key]['cont7'] = "今天没帮助别人";
				}						
				$result[$key]['subDate'] = substr($row->subDate,0,10);
				$result[$key]['tip'] = $this->calculateResult($row->sum);
				$result[$key]['sum'] = $row->sum; 
				$result[$key]['name'] = $this->getUserName($row->weixinName);
				$result[$key]['hasTime'] = $this->getJieseTime($row->weixinName);
				$result[$key]['declaration'] = $this->getDeclaration($row->weixinName);
				//$result[$key]['declaration'] = $row->declaration;
			}
			return $result;
		}
		else{
			return 'null';
		}	  		
   	}

   	//推荐驳回日记
   	public function getNoList(){ 
   		$this->db->select('id,weixinName,cont1,cont2,cont3,cont4,cont5,cont6,cont7,subDate,sum,isRec');	
   		$where = "isRec = 0";
   		$this->db->where($where);
   		$this->db->order_by('subDate','desc');
   		$this->db->limit(10);
   		$query = $this->db->get('huibao');

 		if ($query->num_rows() > 0){	
 			$result = array();	
			foreach ($query->result() as $key => $row){
				$result[$key]['id'] = $row->id;
				$result[$key]['cont1'] = $row->cont1;
				$result[$key]['cont2'] = $row->cont2;
				$result[$key]['cont3'] = $row->cont3;
				$result[$key]['cont4'] = $row->cont4;
				$result[$key]['cont5'] = $row->cont5;
				$result[$key]['cont6'] = $row->cont6; 
				$result[$key]['cont7'] = $row->cont7;
				$result[$key]['isRec'] = $row->isRec;
				if($row->cont1=="无"||!strlen($row->cont1)){ 
					$result[$key]['cont1'] = "今天没有接触黄源";
				}
				if($row->cont2=="无"||!strlen($row->cont2)){ 
					$result[$key]['cont2'] = "今天没有意淫";
				}						
				if($row->cont3=="无"||!strlen($row->cont3)){ 
					$result[$key]['cont3'] = "今天一切正常";
				}						
				if($row->cont4=="无"||!strlen($row->cont4)){ 
					$result[$key]['cont4'] = "今天没任何挫折感";
				}						
				if($row->cont5=="无"||!strlen($row->cont5)){ 
					$result[$key]['cont5'] = "今天没运动";
				}						
				if($row->cont6=="无"||!strlen($row->cont6)){ 
					$result[$key]['cont6'] = "今天没有总结或者感悟";
				}						
				if($row->cont7=="无"||!strlen($row->cont7)){ 
					$result[$key]['cont7'] = "今天没帮助别人";
				}						
				$result[$key]['subDate'] = substr($row->subDate,0,10);
				$result[$key]['tip'] = $this->calculateResult($row->sum);
				$result[$key]['sum'] = $row->sum; 
				$result[$key]['name'] = $this->getUserName($row->weixinName);
				$result[$key]['hasTime'] = $this->getJieseTime($row->weixinName);
				$result[$key]['declaration'] = $this->getDeclaration($row->weixinName);
				//$result[$key]['declaration'] = $row->declaration;
			}
			return $result;
		}
		else{
			return 'null';
		}	  		

   	}

   	//全部日记待帅选
   	public function getAllList(){
   		$this->db->select('id,weixinName,cont1,cont2,cont3,cont4,cont5,cont6,cont7,subDate,sum,isRec,praise');	
   		$where = "isRec is null OR isRec = 0";
   		$this->db->where($where);
   		$this->db->order_by('subDate','desc');
   		$this->db->limit(10);
   		$query = $this->db->get('huibao');
 		if ($query->num_rows() > 0){	
 			$result = array();	
			foreach ($query->result() as $key => $row){
				$result[$key]['id'] = $row->id;
				$result[$key]['cont1'] = $row->cont1;
				$result[$key]['cont2'] = $row->cont2;
				$result[$key]['cont3'] = $row->cont3;
				$result[$key]['cont4'] = $row->cont4;
				$result[$key]['cont5'] = $row->cont5;
				$result[$key]['cont6'] = $row->cont6; 
				$result[$key]['cont7'] = $row->cont7;
				$result[$key]['isRec'] = $row->isRec;
				$result[$key]['praise'] = $row->praise;
				if($row->cont1=="无"||!strlen($row->cont1)){ 
					$result[$key]['cont1'] = "今天没有接触黄源";
				}
				if($row->cont2=="无"||!strlen($row->cont2)){ 
					$result[$key]['cont2'] = "今天没有意淫";
				}						
				if($row->cont3=="无"||!strlen($row->cont3)){ 
					$result[$key]['cont3'] = "今天一切正常";
				}						
				if($row->cont4=="无"||!strlen($row->cont4)){ 
					$result[$key]['cont4'] = "今天没任何挫折感";
				}						
				if($row->cont5=="无"||!strlen($row->cont5)){ 
					$result[$key]['cont5'] = "今天没运动";
				}						
				if($row->cont6=="无"||!strlen($row->cont6)){ 
					$result[$key]['cont6'] = "今天没有总结或者感悟";
				}						
				if($row->cont7=="无"||!strlen($row->cont7)){ 
					$result[$key]['cont7'] = "今天没帮助别人";
				}						
				$result[$key]['subDate'] = substr($row->subDate,0,10);
				$result[$key]['tip'] = $this->calculateResult($row->sum);
				$result[$key]['sum'] = $row->sum; 
				$result[$key]['name'] = $this->getUserName($row->weixinName);
				$result[$key]['hasTime'] = $this->getJieseTime($row->weixinName);
				$result[$key]['declaration'] = $this->getDeclaration($row->weixinName);
				//$result[$key]['declaration'] = $row->declaration;
			}
			return $result;
		}
		else{
			return 'null';
		}	  		

   	}

   	public function getRandAjaxList($currentPage,$type){ 
   		$cur = $currentPage*8;
		if($type == 'getRecList'){	 
	 		$sql = "SELECT *
			FROM huibao AS t1
			JOIN (
			SELECT ROUND( RAND( ) * (SELECT MAX( id )FROM huibao) ) AS id
			) AS t2
			WHERE t1.id >= t2.id AND isRec = 1
			ORDER BY t1.id ASC
			LIMIT ".$cur.",8";			
		}else{ 
			$sql = "SELECT *
			FROM huibao AS t1
			JOIN (
			SELECT ROUND( RAND( ) * (SELECT MAX( id )FROM huibao) ) AS id
			) AS t2
			WHERE t1.id >= t2.id 
			ORDER BY t1.id ASC
			LIMIT ".$cur.",8";	

		}
		$query = $this->db->query($sql);
		$data = array();
		$data['hasNext'] = true;
		$data['currentPage'] = (int)$currentPage;
		$result = array();

		if ($query->num_rows() > 0){
			foreach ($query->result() as $key => $row){
				$result[$key]['id'] = $row->id;
				$result[$key]['cont1'] = $row->cont1;
				$result[$key]['cont2'] = $row->cont2;
				$result[$key]['cont3'] = $row->cont3;
				$result[$key]['cont4'] = $row->cont4;
				$result[$key]['cont5'] = $row->cont5;
				$result[$key]['cont6'] = $row->cont6; 
				$result[$key]['cont7'] = $row->cont7;
				$result[$key]['isRec'] = $row->isRec;
				$result[$key]['praise'] = $row->praise;
				if($row->cont1=="无"||!strlen($row->cont1)){ 
					$result[$key]['cont1'] = "今天没有接触黄源";
				}
				if($row->cont2=="无"||!strlen($row->cont2)){ 
					$result[$key]['cont2'] = "今天没有意淫";
				}						
				if($row->cont3=="无"||!strlen($row->cont3)){ 
					$result[$key]['cont3'] = "今天一切正常";
				}						
				if($row->cont4=="无"||!strlen($row->cont4)){ 
					$result[$key]['cont4'] = "今天没任何挫折感";
				}						
				if($row->cont5=="无"||!strlen($row->cont5)){ 
					$result[$key]['cont5'] = "今天没运动";
				}						
				if($row->cont6=="无"||!strlen($row->cont6)){ 
					$result[$key]['cont6'] = "今天没有总结或者感悟";
				}						
				if($row->cont7=="无"||!strlen($row->cont7)){ 
					$result[$key]['cont7'] = "今天没帮助别人";
				}						
				$result[$key]['subDate'] = substr($row->subDate,0,10);
				$result[$key]['tip'] = $this->calculateResult($row->sum);
				$result[$key]['sum'] = $row->sum; 
				$result[$key]['name'] = $this->getUserName($row->weixinName);
				if($this->auth($row->weixinName)){ 
					$result[$key]['hasTime'] = '';
				}else{
					$result[$key]['hasTime'] = $this->getJieseTime($row->weixinName);					
				}				
				$result[$key]['declaration'] = $this->getDeclaration($row->weixinName);
				//$result[$key]['declaration'] = $row->declaration;
			}
			$data['result'] = $result;
			return $data; 
			
		}
		else{
			return '';
		}				

   	}

   	public function getAjaxList($currentPage,$type){
   		$this->db->select('id,weixinName,cont1,cont2,cont3,cont4,cont5,cont6,cont7,subDate,sum,isRec,praise');
		$this->db->order_by('subDate','desc');
		if($type == 'getRecList'){ 
			$this->db->where('isRec',1);
		}
		$this->db->limit(8,8*$currentPage);
		$query = $this->db->get('huibao');

		$data = array();
		$data['hasNext'] = true;
		$data['currentPage'] = (int)$currentPage;
		$result = array();

		if ($query->num_rows() > 0){
			foreach ($query->result() as $key => $row){
				$result[$key]['id'] = $row->id;
				$result[$key]['cont1'] = $row->cont1;
				$result[$key]['cont2'] = $row->cont2;
				$result[$key]['cont3'] = $row->cont3;
				$result[$key]['cont4'] = $row->cont4;
				$result[$key]['cont5'] = $row->cont5;
				$result[$key]['cont6'] = $row->cont6; 
				$result[$key]['cont7'] = $row->cont7;
				$result[$key]['isRec'] = $row->isRec;
				$result[$key]['praise'] = $row->praise;
				if($row->cont1=="无"||!strlen($row->cont1)){ 
					$result[$key]['cont1'] = "今天没有接触黄源";
				}
				if($row->cont2=="无"||!strlen($row->cont2)){ 
					$result[$key]['cont2'] = "今天没有意淫";
				}						
				if($row->cont3=="无"||!strlen($row->cont3)){ 
					$result[$key]['cont3'] = "今天一切正常";
				}						
				if($row->cont4=="无"||!strlen($row->cont4)){ 
					$result[$key]['cont4'] = "今天没任何挫折感";
				}						
				if($row->cont5=="无"||!strlen($row->cont5)){ 
					$result[$key]['cont5'] = "今天没运动";
				}						
				if($row->cont6=="无"||!strlen($row->cont6)){ 
					$result[$key]['cont6'] = "今天没有总结或者感悟";
				}						
				if($row->cont7=="无"||!strlen($row->cont7)){ 
					$result[$key]['cont7'] = "今天没帮助别人";
				}						
				$result[$key]['subDate'] = substr($row->subDate,0,10);
				$result[$key]['tip'] = $this->calculateResult($row->sum);
				$result[$key]['sum'] = $row->sum; 
				$result[$key]['name'] = $this->getUserName($row->weixinName);
				$result[$key]['hasTime'] = $this->getJieseTime($row->weixinName);
				$result[$key]['declaration'] = $this->getDeclaration($row->weixinName);
				//$result[$key]['declaration'] = $row->declaration;
			}
			$data['result'] = $result;
			return $data; 
			
		}
		else{
			return '';
		}		
   	}

   	public function changeState($id,$state){ 
   		$data = array(
           'id' => $id,
           'isRec' => $state
        );

   		$this->db->where('id', $id);
		$this->db->update('huibao', $data); 

		if($state==1){ 
			return 1;
  		}else{ 
			return 0;
  		}

   	}

	public function verify_user($email, $password){
		$q = $this
		    ->db
		    ->where('email_address', $email)
		    ->where('password', sha1($password))
		    ->limit(1)
		    ->get('users2');

		if ( $q->num_rows > 0 ) {
		 // person has account with us
		 	return $q->row();
		}
		return false;
	}    

	public function praise($id,$state){
		if($state){ 
			$this->db->set('praise','praise+1',false);
   			$this->db->where('id', $id);
			$this->db->update('huibao'); 
		}
		if($state==1){
			return 1;
  		}else{ 
			return 0;
  		}
	}

	
}