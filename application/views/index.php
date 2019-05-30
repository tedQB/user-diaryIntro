<?php
header("location:http://www.jiese360.cn/diaryIntro/diary/recList");
?>
<!doctype html>
<html lang="en">
<head>
<title>会员推荐日记</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://dcloudio.github.io/mui/favicon.ico">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
 <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
</head>
<body>
	
<style type="text/css">
body{ padding:0px; margin: 0px; font-size: 12px; -webkit-user-select:none; border:1px solid red; } 
.-mob-share-ui-button{ position: fixed; bottom: 98px; right: 0px; z-index: 999; }
.bill{ position: fixed; bottom: 64px; right: 0px;
z-index: 999; 
	display: block;
    padding: .6em;
    text-align: center;
    cursor: pointer;
    background: #FF7200;
    color: #fff;
    font-weight: 700;
    text-decoration: none; 
}
.bill a{ color:#fff; }
</style>
<div style="width:300px;height:300px;-webkit-overflow-scrolling:touch; overflow: scroll;" id="myMask">
<iframe src="http://www.jiese360.cn/diaryIntro/diary/recList" height="90%" width="100%"  id="iframepage"/>
</iframe>
</div>
<script type="text/javascript">
    var toScrollFrame = function(iFrame, mask) {  
        if (!navigator.userAgent.match(/iPad|iPhone/i))  
            return false;  
        //do nothing if not iOS devie  

        var mouseY = 0;  
        var mouseX = 0;  
        jQuery(iFrame).ready(function() {//wait for iFrame to load  
            //remeber initial drag motition  
            jQuery(iFrame).contents()[0].body.addEventListener('touchstart', function(e) {   
                mouseY = e.targetTouches[0].pageY;  
                mouseX = e.targetTouches[0].pageX;  
            });  

            //update scroll position based on initial drag position  
            jQuery(iFrame).contents()[0].body.addEventListener('touchmove', function(e) {  
                e.preventDefault();  
                //prevent whole page dragging  

                var box = jQuery(mask);  
                box.scrollLeft(box.scrollLeft() + mouseX - e.targetTouches[0].pageX);  
                box.scrollTop(box.scrollTop() + mouseY - e.targetTouches[0].pageY);  
                //mouseX and mouseY don't need periodic updating, because the current position  
                //of the mouse relative to th iFrame changes as the mask scrolls it.  
            });  
        });  

        return true;  
    };  

    $(function(){ 
       // $('#iframepage').css('height', $(window).height()-5);
       // $('#iframepage').parent().css('height', $(window).height()-10);
        toScrollFrame('#iframepage', '#myMask');  

    })
                





</script> 

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
</body>
</html>