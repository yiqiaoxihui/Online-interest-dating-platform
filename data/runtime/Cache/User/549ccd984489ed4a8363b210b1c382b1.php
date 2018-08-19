<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
<meta name="author" content="ThinkCMF">
<!--  head-->
	<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
<?php $portal_index_lastnews=2; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX1.6.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX1.6.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX1.6.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
<meta name="author" content="ThinkCMF">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

	<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<!-- HTML5 shim for IE8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="icon" href="/thinkcmfx/tpl/test/Public/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/thinkcmfx/tpl/test/Public/images/favicon.ico" type="image/x-icon">
<!-- <link href="/thinkcmfx/tpl/test/Public/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="/thinkcmfx/tpl/test/Public/simpleboot/themes/cmf/theme.min.css" rel="stylesheet">
<link href="/thinkcmfx/tpl/test/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/thinkcmfx/tpl/test/Public/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
<!--[if IE 7]>
<link rel="stylesheet" href="/thinkcmfx/tpl/test/Public/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="/thinkcmfx/tpl/test/Public/css/style.css" rel="stylesheet">
<style>
	/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
#backtotop:hover{color:#333}
#main-menu-user li.user{display: none}
.creator{
font-weight: bold;
font-size: 15px;
color: red;
}
.introduction{
height: 40px;
}
</style>
<!-- head -->
	<link href="/thinkcmfx/tpl/test/Public/css/stcss/likest.css" rel="stylesheet">
</head>

<body class="body-white" id="top">
	<?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#">
				<img src="/thinkcmfx/tpl/test/Public/images/logo.png"/>
			</a>
			<div class="nav-collapse collapse" id="main-menu">
				<!--  /*<?php
 $effected_id=""; $filetpl="<a href='\$href' target='\$target'>\$label</a>
			"; $foldertpl="
			<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>
				\$label <b class='caret'></b>
			</a>
			"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>*/ -->
			<ul class="nav">
				<li class>
					<a href="#">欢迎访问上社团</a>
				</li>
			</ul>
			<ul class="nav pull-right" id="main-menu-user">
				<li class="dropdown user login">
					<a class="dropdown-toggle user" data-toggle="dropdown" href="#">
						<img src="/thinkcmfx/tpl/test//Public/images/headicon.png" class="headicon"/>
						<span class="user-nicename"></span> <b class="caret"></b>
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="<?php echo u('user/center/index');?>"> <i class="fa fa-user"></i>
								&nbsp;个人中心
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="<?php echo u('user/index/logout');?>"> <i class="fa fa-sign-out"></i>
								&nbsp;退出
							</a>
						</li>
					</ul>
				</li>
				<li class="dropdown user offline">
					<a class="dropdown-toggle user" data-toggle="dropdown" href="#">
						<img src="/thinkcmfx/tpl/test//Public/images/headicon.png" class="headicon"/>
						登录
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="<?php echo U('api/oauth/login',array('type'=> 'sina'));?>">
								<i class="fa fa-weibo"></i>
								&nbsp;微博登录
							</a>
						</li>
						<li>
							<a href="<?php echo U('api/oauth/login',array('type'=> 'qq'));?>">
								<i class="fa fa-qq"></i>
								&nbsp;QQ登录
							</a>
						</li>
						<li>
							<a href="<?php echo u('user/login/index');?>">
								<i class="fa fa-sign-in"></i>
								&nbsp;登录
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="<?php echo u('user/register/index');?>">
								<i class="fa fa-user"></i>
								&nbsp;注册
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="pull-right">
				<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
					<input type="text" class="" placeholder="站内搜索" name="keyword" value="<?php echo I('get.keyword');?>"/>
					<input type="submit" class="btn btn-info" value="Go" style="margin:0"/>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

	<div class="container tc-main">
		<div class="row">
			<div class="span3">
				<div class="list-group">
	<a class="list-group-item" href="<?php echo u('user/profile/edit');?>"><i class="fa fa-list-alt"></i> 修改资料</a>
	<a class="list-group-item" href="<?php echo u('user/profile/password');?>"><i class="fa fa-lock"></i> 修改密码</a>
	<a class="list-group-item" href="<?php echo u('user/profile/avatar');?>"><i class="fa fa-user"></i> 编辑头像</a>
	<a class="list-group-item" href="<?php echo u('user/profile/bang');?>"><i class="fa fa-exchange"></i> 绑定账号</a>
	<!-- <a class="list-group-item" href="<?php echo u('user/st/myst');?>"><i class="fa fa-star-o"></i> 我创建的社团</a> -->
	<a class="list-group-item" href="<?php echo u('user/st/joinst');?>"><i class="fa fa-plus"></i> 发现身边的兴趣圈</a>
	<a class="list-group-item" href="<?php echo u('user/st/likest');?>"><i class="fa fa-star-o"></i> 我关注的社团</a>
	<a class="list-group-item" href="<?php echo u('user/favorite/index');?>"><i class="fa fa-star-o"></i> 我的收藏</a>
	<a class="list-group-item" href="<?php echo u('comment/comment/index');?>"><i class="fa fa-comments-o"></i> 我的评论</a>
</div>
			</div>
			<div class="span9">
				<div class="tabs">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#one" data-toggle="tab"> <i class="fa fa-star"></i>
								我加入的社团
							</a>
						</li>
						<li  id="createSt">
							<a href="<?php echo U('organization/organization/create');?>">创建社团</a>
						</li>

					</ul>
					<div>
				<?php if(is_array($likeStList)): foreach($likeStList as $key=>$v): ?><div class="span3" >
			<div class="thumbnail">
			
				<div class="stlogo" >
				<a href="<?php echo U('Portal/Index/index',array('stid'=>$v['stid']));?>" title="<?php echo ($v['name']); ?>" target="_blank" >
					<?php if(empty($v['logo'])): ?><img class="lazy" src="<?php echo sp_get_asset_upload_path('orglogo/default.jpg');?>">
					<?php else: ?>
						<img class="lazy" src="<?php echo sp_get_asset_upload_path($v['logo']);?>"><?php endif; ?>
						</a>
				</div>
				
					<div class="caption">
						<div class="orgname">
							<!-- <a style="margin-top:10px" href="<?php echo U('Portal/Index/index',array('stid'=>$v['stid']));?>" title="<?php echo ($v['introduction']); ?>" target="_blank"></a> -->
							<span ><a href="<?php echo U('Portal/Index/index',array('stid'=>$v['stid']));?>" title="<?php echo ($v['name']); ?>" target="_blank" ><?php echo (msubstr($v['name'],0,10,'utf-8',false)); ?></a></span>
							
						</div>
						<div class="introduction">
							<p title="<?php echo ($v['introduction']); ?>"><?php echo (msubstr($v['introduction'],0,30)); ?></p>
						</div>
						<div>
							<a href="<?php echo U('user/index/index',array('id'=>$v['creator']));?>">Create By <span class="creator"><?php echo ($v['user_login']); ?></span></a>
						</div>
						

						<div class="time">
							<span class="icon-time" title="创建日期"></span>
							<?php echo (date("Y-m-d H:i:s",$v['create_time'])); ?>
							<span class="pull-right">
							<!-- 	<span class="icon-favorites" title="收藏人数"></span>
							169 <b>|</b> -->
							<span class="icon-user" title="组织人数"></span>
								<?php echo ($v['mem_num']); ?>
							</span>
						</div>
				</div>
			</div>
		</div><?php endforeach; endif; ?>
				
				<!--end-->

				</div>
			</div>
		</div>
	</div>

	<html>
<head>
<style type="text/css">
.myhook{

}
</style>
<br><br><br>
<!-- Footer
      ================================================== -->



    </head>
    <body>
      <hr>
<?php echo hook('footer');?>

<div class="myhook">
  
</div>
      <div id="footer">
        <div class="links">
        <?php $links=sp_getlinks(); ?>
        <?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
        </div>
        <p>
        Made by <a href="http://www.thinkcmf.com">ThinkCMF</a>
        Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.<br/>
        Based on <a href="http://getbootstrap.com/2.3.2/" target="_blank">Bootstrap</a>.  Icons from <a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
        </p>
      </div>
      <div id="backtotop"><i class="fa fa-arrow-circle-up"></i></div>
      <?php echo ($site_tongji); ?>

</body>
</html>

</div>
<!-- /container -->

<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/thinkcmfx/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/thinkcmfx/statics/js/jquery.js"></script>
<script src="/thinkcmfx/statics/js/wind.js"></script>
<script src="/thinkcmfx/tpl/test/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<script src="/thinkcmfx/statics/js/frontend.js"></script>

<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login',array('orgid'=>$_GET['stid']));?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/thinkcmfx/data/upload/avatar/"+data.user.avatar);
				}
/*				if(data.isadmin==1){
					//alert("asdf");
					//$("#main-menu-user li.user.offline").show();
					$("#isorgadmin").show();
				}*/
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.user.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.user.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>

</body>
</html>