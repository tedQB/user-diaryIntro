<link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://a.alipayobjects.com/arale/calendar/1.0.0/calendar.css">	
<script type="text/javascript" src="https://a.alipayobjects.com/seajs/seajs/2.2.0/sea.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>	
<style type="text/css">	
*{-webkit-user-select: inherit;-khtml-user-select: inherit; user-select: inherit; }
.ribao{-webkit-user-select: none; -khtml-user-select: none; user-select: none; padding:5px;}
.input-group{ margin:5px 0; width:100%; }
.input-group label{ line-height:24px; font-size:12px;  }
.input-group .form-control{ font-size:14px; height:40px; color:#000000; padding-top:1px; padding-bottom: 1px; }
#out{ padding:10px; border:1px solid #999; border-radius:5px; font-size:18px;  margin:10px 0 10px 5px; }
body{ font:12px "黑体","Arial Narrow",HELVETICA;background:#fff;-webkit-text-size-adjust:;}
#control{ margin-top:10px; margin-left: 5px; }

#control2{ font-size:14px; display:block; line-height:30px; -webkit-user-select: none;-khtml-user-select: none; user-select: none;}
#tuiguang{ font-size:14px; color:#333; margin-top:5px; display:none; }
.radio-group{ font-size:14px; color:#333; display:none; }
.radio-group label{ font-weight:normal; display: block; font-size: 12px; margin-bottom: 2px}
.radio-group label span{ display:block; }
.score{ color:red; margin:10px 0 10px 0 }
.result{ margin:0px 0 10px 0}
.ribao{ margin-top:38px;}
.theme .mui-control-item{ border-color:#FF0038; border-left:#FF0038; background: #fff; color:#000;}
.theme .mui-control-item.mui-active{ background-color:#FF0038;}
.theme{ border:2px solid #FF0038; }
.theme .bdr{ border-right:2px solid #FF0038; border-left:2px solid #FF0038;}
.mui-bar-nav{ position: absolute; }
.mui-bar-tab{ position:static; }
#form_datetime{ background: #fff; cursor: pointer;}
</style>

<div class="ribao">
<div>
<?=$args['slug'] ?>
  <div class="input-group">
	<label for="">1.今天我是否接触了黄源(黄色信息，视频，图片，文字)？若接触了？接触多长时间[负能量]？</label>
	<input type="text" class="form-control store" id="one" placeholder="请如实回答并填写自评" style="width:100%" />
  </div>
   <div class="radio-group">
   	<strong style="color:red; ">请务必选择自评分数</strong>
	<label>
	  <input type="radio" name="one-radio" value="10">【优10分】没有接触
	</label>
	<label>
	  <input type="radio" name="one-radio" value="5">【中5分】接触5分钟以内
	 </label>
	<label>
	  <input type="radio" name="one-radio" value="1" checked>【差1分】接触5分钟以上 
	 </label>		   		   
   </div>		  
</div>
<div>
  <div class="input-group">
	<label for="">2.今天是否意淫？意淫了多长时间？性幻想有哪些内容？[负能量]</label>
	<input type="text" class="form-control store" id="two" placeholder="请如实回答并填写自评" />
	
  </div>	
   <div class="radio-group">
   	<strong style="color:red; ">请务必选择自评分数</strong>
	<label>
	  <input type="radio" name="two-radio" value="10">【优10分】没有意淫
	</label>
	<label>
	  <input type="radio" name="two-radio" value="5">【中5分】意淫5分钟以内
	 </label>
	<label>
	  <input type="radio" name="two-radio" value="1" checked>【差1分】意淫5分钟以上 
	 </label>		   		   
   </div>		  
</div>
<div>
  <div class="input-group">
	<label for="">3.今天我是否成功阻止了自己沉沦在黄源里？若成功，用了什么方法？没有成功导致破戒，是什么原因？有没有遵守【2倍法则】</label>
	<input type="text" class="form-control store" id="three" placeholder="【2倍法则】接收了10分钟的负能量；就要做20分钟的正能量的事情，去抵消这个负能量。" />
  </div>		  
   <div class="radio-group">
   	<strong style="color:red; ">请务必选择自评分数</strong>
	<label>
	  <input type="radio" name="three-radio" value="10">【优10分】我一点都没有接触黄源，并且也有学习戒色知识和帮助别人
	</label>
	<label>
	  <input type="radio" name="three-radio" value="5">【中5分】我接触了黄源，但用方法马上止住，并遵守了2倍法则
	 </label>
	<label>
	  <input type="radio" name="three-radio"  value="3">【差3分】我破戒了，总结出了经验，下次会记住并改正，也遵守了2倍法则
	 </label>		   		   
	 <label>
	<input type="radio" name="three-radio" value="-5" checked>【极差-5分】我破戒了 一点没有总结，也没有遵守2倍法则
	 </lable>
   </div>			  
 </div>		
<div>
  <div class="input-group">
	<label for="">4.今天有无特别大的挫折感和困难？是因为什么工作和生活中出现了什么问题？是否有想办法去解决，问题解决的结果如何？</label>
	<input type="text" class="form-control store" id="four" placeholder="生活遇到困难，挫折是好事情，证明你在成长，通过思考和行动解决它就OK" />
  </div>
   <div class="radio-group">
   	<strong style="color:red; ">请务必选择自评分数</strong>
	<label>
	  <input type="radio" name="four-radio" value="10">【优10分】我生活或工作遇到问题了，已经想出办法并解决
	</label>
	<label>
	  <input type="radio" name="four-radio" value="5">【中5分】我生活或工作遇到问题了，但暂时搁置不管，或者我现在不知道该怎么做
	 </label>
	<label>
	  <input type="radio" name="four-radio" value="1" checked>【差1分】风平浪静，逍遥自在，无所事事，比较空虚
	 </label>		   		   
   </div>			  
 </div>		
<div>
  <div class="input-group">
	<label for="">5.我今天是否做了四大锻炼?做了多长时间？</label>
	<input type="text" class="form-control store" id="five" placeholder="身体和心理同时坚固，才能戒的快，恢复的快。" style="width:100%; "/>			
  </div>
   <div class="radio-group">
   	<strong style="color:red; ">请务必选择自评分数</strong>
	<label>
	  <input type="radio" name="five-radio" value="20">【优20分】固肾功,俯卧撑,平板支撑,慢跑任选做了超过30分钟以上
	</label>
	<label>
	  <input type="radio" name="five-radio" value="10">【中10分】固肾功,俯卧撑,平板支撑,慢跑任选只做了一点，没超过30分钟
	 </label>
	<label>
	  <input type="radio" name="five-radio" value="1" checked>【差1分】我什么都没有做
	 </label>		   		   
   </div>			  
 </div>				
<div>
  <div class="input-group">
	<label for="">6.今天有可以分享的戒色/生活/学习/工作感悟吗，或者我今天看到，接触了什么新的事和物让我有心得体会？</label>
	<input type="text" class="form-control store" id="six" placeholder="若没有，你证明你今天过的一点都没有积累，不积跬步，无以至千里。个人思想和经验的积累就从每天的一点一滴开始" />
  </div>		
   <div class="radio-group">
   	<strong style="color:red; ">请务必选择自评分数</strong>
	<label>
	  <input type="radio" name="six-radio" value="20">【优20分】我向小戒发送了140字(微博长度)以上的戒色/生活/学习/工作感悟，能够指导自己以后的生活轨迹。
	</label>			
	<label>
	  <input type="radio" name="six-radio" value="10">【中10分】我向小戒发送了生活感悟，但很少，没超过140字
	 </label>
	<label>
	  <input type="radio" name="six-radio" value="3" checked>【差3分】我什么都没有做，或者我心里知道懒得写
	 </label>		   		   
   </div>			  
</div>
<div>
  <div class="input-group">
	<label for="">7.今天是否想看了戒色文章，是否帮助了别人，为戒色事业做了贡献？是否听闻，接触了正能量的事情，是否展示了自己的正能量？</label>
	<input type="text" class="form-control store" id="theve" placeholder="一切能够推动社会进步，能够照亮人心，让别人主动感恩的的事情都叫正能量" />
  </div>				
   <div class="radio-group">
   	<strong style="color:red; ">请务必选择自评分数</strong>
	<label>
 		  <input type="radio" name="theve-radio" value="20">【优20分】
	  <span>1>我帮助了有困难的人(同事,同学,家人等)，帮助别人解决了难题; </span>
	  <span>2>我今天做的事情，解决问题非常有意义，能够帮助集体(公司，班集体)，社会提升效率，别人都会因此而记住我，感恩我。;</span>
	  <span>3>我今天开动脑筋想出了一个可操作性很高,能帮助别人并帮助自己的戒色方法</span>
	</label>	
	<label>
	  <input type="radio" name="theve-radio" value="10">【中10分】
	  <span>我在戒友vip群里/论坛/贴吧/向小戒分享了好文章，并说出了推荐理由; </span>
	  <span>2>我在戒友vip群里/论坛/贴吧 顶贴/回帖指导了普通戒友戒色;</span>
	 </label>
	<label>
	  <input type="radio" name="theve-radio" value="3" checked>【差3分】我什么都没有做
	 </label>		   		   
   </div>			  
  
</div>			
<div>
	<div class="input-group">
		<label for="">选择日期(如果要补昨天的汇报，请选择前一天)</label>
		<input type="text" value="<?php echo date("Y-m-d")?>" readonly id="form_datetime" class="form-control" >
	</div>

</div>
</div>
<button type="button" class="btn btn-danger" id="control">生成戒色日报</button>
<span id="control2" style="display:none; color:red; ">请手动复制以下日报，然后发微信给小戒就可以。</span>
<div id="out">
	
</div>

<script>

//$(".form_datetime").datetimepicker({format: 'yyyy-mm-dd'});
seajs.config({
alias: {
$: 'https://a.alipayobjects.com/jquery/jquery/1.9.1/jquery.js'
}
});
seajs.use(['$','http://style.aliexpress.com/js/6v/lib/gallery/store/store.js','https://a.alipayobjects.com/arale/calendar/1.0.0/calendar.js','http://style.aliexpress.com/js/6v/lib/arale/position/position.js'], function($,store,Calendar,Position) {
var num=0;
var cal = new Calendar({
    trigger: '#form_datetime',
    range:['<?php echo date("Y/m/d", strtotime("1 days ago"))?>','<?php echo date("Y-m-d")?>'],
 	align: {
        selfXY: ['0%', '100%'],
        baseElement: '#form_datetime',
        baseXY: [0, 0]
    }    
});


$('.store').each(function(i,obj){ 
	var key='key'+(i+1);
	$(obj).val(store.get(key));		
}).focus(function(){
	$(this).parent().next().show()
	$(this).parent().next().find('input:radio').last().attr("checked","checked");
})


$('#control').click(function(){ 
	var score=0; 	
	$('.radio-group').each(function(i,obj){ 
		if($(obj).find("input:radio:checked").val()){ 
			score = score+parseInt($(obj).find("input:radio:checked").val());
		}
		
	});
	score = parseInt(score);
	//console.log($("input[name='one-radio']:checked").val());
	//console.log(<?= base_url('jiesebang/collectData') ?>);
	$.post('http://www.jiese360.cn/jiesebang/collectData.php',{
		time:num,
		id:<?=$args['slug'] ?>,
		one:{ 
			cont:$('#one').val(),
			score:$("input[name='one-radio']:checked").val()
		},
		two:{ 
			cont:$('#two').val(),
			score:$("input[name='two-radio']:checked").val()
		},
		three:{ 
			cont:$('#three').val(),
			score:$("input[name='three-radio']:checked").val()
		},
		four:{ 
			cont:$('#four').val(),
			score:$("input[name='four-radio']:checked").val()
		},
		five:{ 
			cont:$('#five').val(),
			score:$("input[name='five-radio']:checked").val()
		},
		six:{ 
			cont:$('#six').val(),
			score:$("input[name='six-radio']:checked").val()
		},
		theve:{ 
			cont:$('#theve').val(),
			score:$("input[name='theve-radio']:checked").val()
		},										
		date:$('#form_datetime').val()
		
	},function(){ 
		num++;
	
	})
	
	
	
	$("#out").empty();
	$("#control2").show();
	$("#tuiguang").show();
	$('.store').each(function(i,obj){
		var other = $(obj).val();
		var key='key'+(i+1);
		store.set(key,other);
		if(other){
			$("#out").append('<div>'+(i+1)+'.'+other+'</div>');
		}
		else{ 
			$("#out").append('<div>'+(i+1)+'.无'+'</div>');
		}
	});
	var tip='';
	
	if(score==0||score<0){ 
		tip="评估结果:你确定你是来戒色吗？请好好填写自评并对自己负责吧";
	}
	else if(score>0&&score<40){ 
		tip="评估结果：这个分数太低了，你的恶习并未得到一点改善, 你需要调整现在的状态，每天按照日报的内容执行，明天请加油";
	}
	else if(score>=40&&score<60){ 
		tip="评估结果：加油吧，还差一点就到及格线了，请努力改进自己的状态，在帮助别人，解决自身问题上下功夫，每天按照日报的内容执行，明天请加油";
	}	
	else if(score>=60&&score<80){ 
		tip="评估结果：今天这是一份不错的戒色成绩单，希望你每天都能保持这个状态，步步前进，稳扎稳打，恶习戒除成功指日可待";
	}	
	else if(score>=80&&score<100){ 
		tip="评估结果：你真的很棒，如果这个分数能以保持2周以上，你就离戒色成功不远了，小戒以你为荣，你的戒色日记经过审查后会推荐到微信的文章中去";
	}
	else if(score>=100){ 
		tip="评估结果：你简直太棒了，你已经超越了所有人，希望这是你今天真实的戒色成绩，你的戒色日记经过审查后会推荐到微信的文章中去，愿荣誉永远与你同在";
	}			

	$("#out").append("<div class='score'>你"+$('#form_datetime').val()+"的戒色成绩为："+score+" 分</div>");
	$("#out").append("<div class='result'>"+tip+"</div>");
	
	
});

})		
</script>

