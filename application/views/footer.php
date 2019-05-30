  <style type="text/css">
	.mui-bar-tab span.badge2{
	  position: absolute;
	  top: -26px;
	  left: 92%;
	  padding: 1px 5px;
	  margin-left: -10px;
	  font-size: 10px;
	  line-height: 1.4;
	  color: #fff;
	  background: #007aff;
	  -webkit-user-select: none; 
	  -khtml-user-select: none;
	  user-select: none;
	}
	.relat{ position: relative; }
  </style>
		<nav class="mui-bar mui-bar-tab">
		  <a class="mui-tab-item <?php if($args['current']==1) echo 'mui-active'; ?>" 
			<?php if($args['current']!=1){ echo 'href='.base_url('diary/getAllList'); } ?>>
				<span class="cate cate1"></span>
				<span class="mui-tab-label relat fz">待筛选</span>
			</a>
			<a class="mui-tab-item <?php if($args['current']==2) echo 'mui-active'; ?>"
			<?php if($args['current']!=2){ echo 'href='.base_url('diary/getRecList'); } ?>>
				<span class="cate cate2"></span>
				<span class="mui-tab-label relat fz">已推荐<span class="mui-badge badge2">更新</span></span>
			</a>
			<a class="mui-tab-item <?php if($args['current']==4) echo 'mui-active'; ?>" <?php if($args['current']!=4){ echo 'href='.base_url('diary/recList'); } ?>>
				<span class="cate cate4"></span>
				<span class="mui-tab-label fz">用户页</span>
			</a>
		</nav>
	</div>

</body>
</html>