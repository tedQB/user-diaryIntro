<style>
*{-webkit-user-select: inherit;-khtml-user-select: inherit; user-select: inherit; }
	.ms-panel {
    /*position: absolute;*/
    position: fixed;
    overflow: hidden;
    height: 100%;
    width: 100%;
    top: 100%; left: 0;
    background-color: #ffffff;
    visibility: hidden;
    display: none;
    z-index: 100;
    -webkit-transform: translateZ(0px);
}
/*
.mui-content{ -webkit-user-select: none; -khtml-user-select: none; user-select: none; }
.mui-content *{ -webkit-user-select: none; -khtml-user-select: none; user-select: none; }
*/
.ms-panel.horizontal {
    left: 100%; top: 0;
}
.ms-panel .ms-panel-header {
    height: 36px;
    border-bottom: 1px solid #ddd;
    text-align: center;
    font-size: 15px;
    line-height: 36px;
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    background-color: #ffffff;
    z-index: 2;
}
.ms-panel .ms-panel-bodyer {
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    -webkit-transform: translateZ(0px);
    height: 100%;
    position: relative;
    z-index: 1;
    padding:40px 5px 0;
}
.ms-panel .ms-panel-cancel {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeBAMAAADJHrORAAAAG1BMVEUAAABmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZ8aTmeAAAACHRSTlMAb0X2VldYYZ26vlYAAACMSURBVBjTRdEhDsJQEEXR16QEX4VEsIIqloAsCiRLwJDgCTDLhk5u3vtucq6YyZcm5V2k4bX3uKm7djV7vtb3P68BXB8NVbO5bkowrqwEp2YCM4GZAHYAOzg0Jzg2J4AT1KK8sXwFq7GkmcB8JoDfvWR44QqzCGCuCBOECWAHcIKnWf03WzN/91DepB+/ckpiQmNfgQAAAABJRU5ErkJggg==) no-repeat 0 center;
    width: 15px; height: 100%;
    position: absolute;
    right: 12px; top: 0;
    display: block;
    background-size: 100% auto;
}
.ms-panel.horizontal .ms-panel-cancel {
    background: none;
    width: 25px; height: 100%;
    position: absolute;
    left: 6px; top: 0;
    right: auto;
    display: block;
    background-size: 100% auto;
    /*position*/
}
.ms-panel.horizontal .ms-panel-cancel .ms-icon{
    font-size: 25px;
    font-weight: bold;
    color: #858585;
    top: 2px;
}
.ms-panel.panel-show {
    visibility: visible;
    display: block;
}
.mui-table-view .clipped{ 
	overflow: hidden;
	margin-top:5px; 
	height:30px;

}
.ms-panel-bodyer{ 
	line-height: 20px;
}
.ms-panel-bodyer dd{ 
	margin-left:0px; 
	text-indent: 20px; 
    position: relative;
    padding:5px 0;
    overflow: hidden;
    background-color: inherit;
    -webkit-touch-callout: none	
}
.ms-panel-bodyer dd:after {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 15px;
    height: 1px;
    content: '';
    border-bottom:1px dashed #000;
    -webkit-transform: scaleY(.5);
    transform: scaleY(.5);
}
#diary{ margin-top:26px; margin-bottom: 36px; }
.cont dd{ margin-left:0px;}
.ms-panel-bodyer dd.fr:after{ background: none;}
.ms-panel-bodyer dd.fr{ text-align: right; }
.ms-panel-bodyer dd.fd:after{ background: none; border-bottom:0px; }
.ms-panel-bodyer dd.fd{ text-align: right; color:#C8D1D5; }
.mui-bar-nav~.mui-content{ padding-top:10px;}
.mg-bottom{ margin-bottom:34px;}
.hidden{ overflow: hidden;}
.paper{ color:#C8D1D5; }
.ms-panel .ms-panel-bodyer{ -webkit-user-select: inherit;-khtml-user-select: inherit; user-select: inherit; }
.ms-panel .ms-panel-bodyer *{ -webkit-user-select: inherit;-khtml-user-select: inherit; user-select: inherit; }
.ms-panel .ms-panel-bodyer .break{ height:0px; font-size:0px; padding:1px;}
.ms-panel .ms-panel-bodyer dd.break:after{background: none; border-bottom:0px; }
.recommenbtn{ height:24px; line-height: 24px; padding-top:0px; padding-bottom: 0px; }
.btn-info{ background: red;color:#fff; }
.none{ display:none; }
#diary .cont dd{ margin-left:0px; font-size:12px; line-height: 20px}
#diary .cont dd.break{ font-size: 10px; line-height: 12px; }
.evaluate,.evaluate-mine,.evaluated {
    display: inline-block;
    cursor: pointer;
    color: #e54020;
    font-size: 12px;
    background: #fff url(http://cdn.iknow.bdimg.com/static/question/widget/value-comment/img/i-evaluate-good-new_fdad6e5.png) no-repeat;
    background-position: 10px center;
}
.evaluate b,.evaluate-mine b,.evaluated b {
    font-weight: 400;
    display: inline-block;
    text-align: center;
    padding: 4px 22px 4px 26px;
    *vertical-align: middle
}
.evaluate .evaluate-tip{ 
	padding-left:5px;
}
.evaluate .evaluate-num{ 
	padding-right:6px;
}
.-mob-share-ui-button{ width:40px; height:28px; position: fixed; bottom: 98px; right: 1px; z-index: 999; }
.bill{ width:40px; height:28px; position: fixed; bottom: 64px; right: 1px;
z-index: 999; 
	display: block;
    padding: .6em;
    text-align: center;
    cursor: pointer;
    background: #FF7200;
    color: #fff;
    font-weight: 700;
}
.bill a{ color:#fff;}
#diary  .cont{ margin:0px; }
@-moz-keyframes circle {
    0% {-moz-transform: rotate(0deg);}
    100% {-moz-transform: rotate(359deg);}
}
@-webkit-keyframes circle {
    0% {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(359deg);}
}
@-o-keyframes circle {
    0% {-o-transform: rotate(0deg);}
    100% {-o-transform: rotate(359deg);}
}
@-ms-keyframes circle {
    0% { -ms-transform: rotate(0deg);}
    100% { -ms-transform: rotate(359deg);}
}
@keyframes circle {
    0% {transform: rotate(0deg);}
    100% { transform: rotate(359deg);}
}
#photo-wall-loading {
    text-align: center;
    padding: 8px;
}
.loading-s:after {
    width: 20px;
    height: 20px;
    -moz-animation: circle 1s infinite linear;
    -o-animation: circle 1s infinite linear;
    -webkit-animation: circle 1s infinite linear;
    animation: circle 1s infinite linear;
    display: inline-block;
    content: '';
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAZlBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABwbJTWAAAAIXRSTlMA5RCM17iS8gmbq8rESXqK/QGfW6ZuG2dCgzazU9Mt3b836IuZAAABrklEQVQ4y7XS23KCMBSF4U0gEA5JDOF80PL+L9llkMZKpvbG/4oZPxNnIZ2TWSbpP2XbltEfMaWYe9iQexDDIAKQb1tlnqHpte4DcEP2GV41CsAGn0fCQ6HgbAB2FwDlodSIUaDxLroDslHrODyTiCCaYx6L80bxe5c5qztCdkPH4PcDJ/dxH7fCQXXBEQrPpsJC9AjbtAbXyDhNU7nD7QIaWeM3p7uQgsw0gh2Q8c3RL3b61W3qwtUus9xAsc0rlI6Nk/FfVRloEMZS/J47z3jg6rhn9LGGJHMlAwW66tylrwT3kCEItxe/gbGHx9Vr+Oq4dsVX+lhdeqvPg6u8ZS+v4BZFUfsKl6Jp6sW/QiNLsCAsQNPjT8GKyNWcrmZj4ajaD20dKxdDrO/ZD7KWkRlyRxe614MlLb5k6iTJD6g517hS2AZyh6y+pR0hmSRrSTTNxUQ0cz4Pbo92v9onvgBHkLIqiBTnvAYI1MKVOLosqwoHzZA2OPkK2NMByQIWXQBqOC48FA2kCsA1WVdJHtIAWARgnqy5eYYGC41nd6ztITa0gv7IzfO+x+CnvgGv8CGIVAWdtAAAAABJRU5ErkJggg==) no-repeat;
    background-size: 100% 100%;
}
.recbt{ 
	position: fixed; 
	top:2px;
	right:5px;
	z-index: 100; 
	font-size:12px;
}
.empty:after{ 
	content:none;
}
.empty:before{ 
	content:none;
}
</style>
<link rel="stylesheet" type="text/css" href="http://style.aliunicorn.com/mobile/ae/common/iconfont/1.0.0/iconfont.css">
<div class="mui-content">
	<button class="recbt norsx mui-btn mui-btn-royal mui-btn-outlined">随机阅</button>
	<ul class="mui-table-view" id="diary">	
		<?php if($args['getAllList']!='null'){
			foreach ($args['getAllList'] as $key => $value) { ?>
				<li class="mui-table-view-cell">
					<p class="clipped">
						<?=$value['name'] ?>
						<?=$value['hasTime'] ?>
					</p>
					<dl class="cont">
						<dd><?=$value['cont1'] ?></dd>
						<dd class="break">----------------------</dd>
						<dd><?=$value['cont2'] ?></dd>
						<dd class="break">----------------------</dd>
						<dd><?=$value['cont3'] ?></dd>
						<dd class="break">----------------------</dd>
						<dd><?=$value['cont4'] ?></dd>
						<dd class="break">----------------------</dd>
						<dd><?=$value['cont5'] ?></dd>
						<dd class="break">----------------------</dd>
						<dd><?=$value['cont6'] ?></dd>
						<dd class="break">----------------------</dd>
						<dd><?=$value['cont7'] ?></dd>
						<dd class="break">----------------------</dd>
						<dd>日期:<?=$value['subDate'] ?> 日报成绩<?=$value['sum']?>分。<!--<?=$value['tip']?>--></dd>
						<dd class="break">----------------------</dd>
						<!--<dd class="fr">日期:<?=$value['subDate'] ?></dd>
						<dd class="break">----------------------</dd>-->
						<?php 
							if(strlen($value['declaration'])){
								echo "<dd>";
								echo "我立下的誓言:".$value['declaration'];
								echo "</dd><dd class='break'>----------------------</dd>";
							}
						?>
						<!--<dd class="fd"><span class="paper">来自www.jiese360.com会员日记</span></dd>-->
					</dl>
					<span class="evaluate evaluate-32 evaluated" data-id="<?=$value['id'] ?>"><b class="evaluate-num evaluate-num-fixed" style="display: inline-block;"><?=$value['praise'] ?></b><b class="evaluate-tip" style="display: none;">已赞</b></span>						
				</li>
			<?php } ?>
		<?php } ?>
	</ul>
</div>
<div class="bill">
	<a href="http://mp.weixin.qq.com/s?__biz=MjM5ODMyMTI2MA==&mid=10000194&idx=1&sn=12d4e637d78058f5cccc2b69c06c50ec&scene=18#rd">想写</a>
</div>
<!--MOB SHARE BEGIN-->
<div class="-mob-share-ui-button -mob-share-open">分享</div>
<div class="-mob-share-ui" style="display: none">
    <ul class="-mob-share-list">
        <li class="-mob-share-weibo"><p>新浪微博</p></li>
        <li class="-mob-share-tencentweibo"><p>腾讯微博</p></li>
        <li class="-mob-share-qzone"><p>QQ空间</p></li>
        <li class="-mob-share-qq"><p>QQ好友</p></li>
        <li class="-mob-share-weixin"><p>微信</p></li>
        <li class="-mob-share-douban"><p>豆瓣</p></li>
        <li class="-mob-share-facebook"><p>Facebook</p></li>
        <li class="-mob-share-twitter"><p>Twitter</p></li>
        <li class="-mob-share-youdao"><p>有道云笔记</p></li>
    </ul>
    <div class="-mob-share-close">取消</div>
</div>
<div class="-mob-share-ui-bg"></div>	
<script id="-mob-share" src="http://f1.webshare.mob.com/code/mob-share.js?appkey=b173f4bf9341"></script>	
<script type="text/javascript">
	mobShare.config( {
	    params: {
	        url: 'http://www.jiese360.cn', // 分享链接
	        title: '会员推荐日记精选,微信id:jiese360 一个小众但有意义的微信公众账号', // 分享标题
	    }
	} );	

</script>

<script id="list-li" type="text/x-handlebars-template">
	{{#each arr}}
	<li class="mui-table-view-cell">
		<p class="clipped">
			{{name}}
			{{hasTime}}
		</p>
		<dl class="cont">
			<dd>{{cont1}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont2}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont3}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont4}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont5}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont6}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont7}}</dd>
			<dd class="break">----------------------</dd>
			<dd>日期:{{subDate}} 日报成绩为{{sum}}分。</dd>
			<dd class="break">----------------------</dd>
			<dd>我立下的誓言:{{declaration}}</dd>
			<dd class="break">----------------------</dd>
			<!--<dd class="fd"><span class="paper">来自www.jiese360.com会员日记</span></dd>-->
		</dl>	
		<span class="evaluate evaluate-32 evaluated" data-id="{{id}}"><b class="evaluate-num evaluate-num-fixed" style="display: inline-block;">{{praise}}</b><b class="evaluate-tip" style="display: none;">已赞</b></span>						
	</li>
	{{/each}}
</script>

<script>
  seajs.use(['http://style.aliunicorn.com/mobile/ae/common/panel/1.0.1/panel.js', 'http://style.aliunicorn.com/js/6v/lib/gallery/jquery/jquery.js','http://style.aliunicorn.com/js/6v/lib/gallery/handlebars/handlebars.js'], function(panel, $ ,Handlebars) {
	//判断是否在微信里的打开
		function is_wechat_client(){  
	      var ua = navigator.userAgent.toLowerCase();  
	      if(ua.match(/MicroMessenger/i)=="micromessenger"){  
	          return true;  
	      }else{  
	          return false;  
	      }  
	  }  

	  if(is_wechat_client()){ 
	  		document.title = '会员推荐日记精选,微信id:jiese360 一个小众但有意义的微信公众账号';
	  }
  		function recommenClick(){
			$('.evaluate').each(function(index,obj){

				$(obj).die().live('click',function(){ 
					var elem=$(this);
					var num = elem.find(".evaluate-num");
					$.post("<?=base_url('diary/praise')?>",{
						id:elem.attr('data-id'),
						state:1
					},function(data){
						if(data==1){ 
							elem.unbind();
							num.html(parseInt(num.html(),10)+1);
							elem.find('.evaluate-tip').show();	
							
						}
						
					});				

				});

			})
		}
		recommenClick();

  		/*滚动加载日记内容*/
	    var _config = {
	        api:"<?=base_url('diary/getAjaxList')?>",
	        randApi:"<?=base_url('diary/getRandAjaxList')?>",
	        productContion:$('#diary'),
			//当前请求的页数
	        loadingHtml: '<div class="loading-layout" id="photo-wall-loading"><span class="loading-s"></span></div>',
			pageSize:<?=$args['getAllResultCount'] ?>,
			source:$("#list-li").html(),
			screenHeight:window.innerHeight - window.innerHeight / 5
	    };

	    var _cache = {
	        isAddLoading: false,
	        curPage:0,//当前页书
	        hasNext: true,
            isAjax: false,
            pageRand:0
	    };

	    var template = Handlebars.compile(_config.source);
		function _bindEvent(conf){

	        $(window).scroll(function() {
				var bodyHeight = $(document.body).height();
	            var scrollHeight = window.innerHeight + $(window).scrollTop() + _config.screenHeight;       
	             //加载数据
	          	if (_cache.hasNext) {	
		            if(scrollHeight >= bodyHeight && bodyHeight != window.innerHeight) {
		            	if(!_cache.pageRand){
		                	_ajaxPostList(conf,_cache.curPage+1);
		            	}
		            	else{ 
		            		_ajaxRandPostList(conf,_cache.curPage+1);
		            	}
		            }
	        	}
        		$('#diary').removeClass('empty');

	        });

	        $('.recbt').click(function(){ 
	        	$('#diary').empty().addClass('empty');
	        	_cache.isAjax = false;
	        	_cache.curPage = 0;
	        	var dem = $(this);
	        	if(dem.hasClass('norsx')){ 
	        		_ajaxRandPostList(conf,_cache.curPage+1);
	        		_cache.pageRand = 1;
	        		$(this).removeClass("norsx");
	        		$(this).addClass("randsx");
	        		$(this).html("顺序阅");
	        	}else if(dem.hasClass('randsx')){ 
	        		_cache.pageRand = 0;
	        		$(this).removeClass("randsx");
	        		$(this).addClass("norsx");
	        		_ajaxPostList(conf,_cache.curPage+1);
	        		$(this).html("随机阅");
	        	}
	        	
	        });

    	}
		function _showLoading(){
			_config.productContion.parent().append(_config.loadingHtml);
	        $('#error-wall-tips').remove();
			_cache.isAddLoading = true;
		}
		function _closeLoading(){
			$('#photo-wall-loading').remove();
			_cache.isAddLoading = false;
			_cache.isComposing = false;
		}

		function _ajaxPostList(conf,curPage){

	        if (_cache.isAjax) return;
            _cache.isAjax = true;
            _showLoading();
			$.ajax({
				url: conf.api,
				type: 'POST',
				data:{ //ajax处理data的方式
					cur_page:curPage,
					type:"getRecList"
				},	
				dataType:'json',			
				timeout:3000,
				success:function(data){
					_cache.isAjax = false;
					if(!data){
						$('#diary').addClass('mg-bottom');
						_cache.isAjax = true;
						_closeLoading();
						return ; 
					}
                    _cache.hasNext = data.hasNext;
                    _cache.curPage = data.currentPage;		
					_buildPostHtml(data);	
					_closeLoading();				
				},
				error:function(){ 
					_closeLoading();
				//_showFailInfo();
				}
			})
		}

		function _ajaxRandPostList(conf,curPage){

	        if (_cache.isAjax) return;
            _cache.isAjax = true;
            _showLoading();

			$.ajax({
				url: conf.randApi,
				type: 'POST',
				data:{ //ajax处理data的方式
					cur_page:curPage,
					type:"getRecList"
				},	
				dataType:'json',			
				timeout:3000,
				success:function(data){
					_cache.isAjax = false;
					if(!data){
						$('#diary').addClass('mg-bottom');
						_cache.isAjax = true;
						_closeLoading();
						return ; 
					}
                    _cache.hasNext = data.hasNext;
                    _cache.curPage = data.currentPage;		
					_buildPostHtml(data);	
					_closeLoading();				
				},
				error:function(){ 
					_closeLoading();
					//_showFailInfo();
				}
			})
		}

		function _buildPostHtml(data){
			
			var content = template({ 
				'arr':data['result']
			});
			_config.productContion.append(content);
			recommenClick();
			_cache.isComposing = false;
			
		}	

		_bindEvent(_config);
				


	})

</script>

