<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:49:"themes/simpleboot3/shop\user_center\my_order.html";i:1513871870;s:42:"themes/simpleboot3/shop\public\header.html";i:1513863841;s:35:"themes/simpleboot3/public\head.html";i:1513602023;s:39:"themes/simpleboot3/public\function.html";i:1513602023;s:38:"themes/simpleboot3/public\scripts.html";i:1513602023;s:40:"themes/simpleboot3/shop\public\task.html";i:1513602023;s:42:"themes/simpleboot3/shop\public\footer.html";i:1513773612;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>酒仙网</title>
    <link rel="shortcut icon " href="__STATIC__/shop/img/favicon.ico">
    <link rel="stylesheet" href="__STATIC__/shop/css/index.css">
    <script src="__STATIC__/shop/js/jQuery.js"></script>
    <script src="__STATIC__/shop/js/myAutoplay.js"></script>
    <link rel="stylesheet" href="__STATIC__/shop/css/xiangqing.css">
    
<?php 
/*可以加多个方法哟！*/
function _sp_helloworld(){
	echo "hello ThinkCMF!";
}

function _sp_helloworld2(){
	echo "hello ThinkCMF2!";
}


function _sp_helloworld3(){
	echo "hello ThinkCMF3!";
}

 ?>
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
<link rel="icon" href="__TMPL__/public/assets/images/favicon.png" type="image/png">
<link rel="shortcut icon" href="__TMPL__/public/assets/images/favicon.png" type="image/png">
<link href="__TMPL__/public/assets/simpleboot3/themes/simpleboot3/bootstrap.min.css" rel="stylesheet">
<link href="__TMPL__/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css">
<!--[if IE 7]>
<link rel="stylesheet" href="__TMPL__/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
<![endif]-->
<!-- <link href="__TMPL__/public/assets/css/style.css" rel="stylesheet"> -->
<style>
    /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
    #backtotop {
        position: fixed;
        bottom: 50px;
        right: 20px;
        display: none;
        cursor: pointer;
        font-size: 50px;
        z-index: 9999;
    }

    #backtotop:hover {
        color: #333
    }

    #main-menu-user li.user {
        display: none
    }
</style>
<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "__ROOT__/",
        WEB_ROOT: "__WEB_ROOT__/",
        JS_ROOT: "static/js/"
    };
</script>
<script src="__TMPL__/public/assets/js/jquery-1.10.2.min.js"></script>
<script src="__TMPL__/public/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="__STATIC__/js/wind.js"></script>
	
</head>
<?php 
    $cur_user = session('user');
    $shuliang = session('shuliang')
 ?>
<body>
<!-- 最上面 -->
<div class="header-wrap">
    <div id="header">
        <div class="pull-left">
            <ul class="list-unstyled">
                <li class=" pull-left">欢迎来酒仙网！</li>
                <?php if($cur_user): ?>
                    <li class=" pull-left"><a href=""><?php echo $cur_user['mobile']; ?>,你好！</a></li>
                    <li class=" pull-left"><a href="<?php echo url('shop/index/logout'); ?>" class="text-danger">退出登录</a></li>
                    <?php else: ?>
                    <li class=" pull-left"><a href="<?php echo url('shop/login/index'); ?>">请登录</a></li>
                    <li class=" pull-left"><a href="<?php echo url('shop/register/index'); ?>">免费注册</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="pull-right">
            <ul class="list-unstyled">
                <li class=" pull-left header-hover">
                    <a href="">网站导航</a>
                    <div class="header-hover-hide header-hover-hide-sp">
                        <table width="170" cellspacing="0">
                            <th>购物</th>
                            <tr>
                                <td><a href="">白酒</a></td>
                                <td><a href="">葡萄酒</a></td>
                                <td><a href="">洋酒</a></td>
                            </tr>
                            <tr >
                                <td><a href="">啤酒</a></td>
                                <td><a href="">保健酒</a></td>
                                <td><a href="">黄酒</a></td>
                            </tr>
                        </table>
                        <table width="170">
                            <th>活动</th>
                            <tr>
                                <td><a href="">进口馆</a></td>
                                <td><a href="">整箱套装</a></td>
                                <td><a href="">清仓</a></td>
                            </tr>
                            <tr >
                                <td><a href="">闪团</a></td>
                                <td><a href="">新品</a></td>
                                <td><a href="">发现</a></td>
                            </tr>
                        </table>

                    </div>
                </li>

                <li class=" pull-left header-hover" id="chen">
                    <a href="/shop/user_center/index">我的酒仙</a>
                    <div class="header-hover-hide">
                        <p><a href="">我的订单</a></p>
                        <p><a href="">我的优惠券</a></p>
                    </div>
                </li>
                <li class=" pull-left"><a href="<?php echo url('shop/index/gouwuche'); ?>">购物车<span><?php echo $shuliang>0?$shuliang:"0"; ?></span>件</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 最上面结束 -->
<div class="clear"></div>
<!-- 第二层 -->
<div id="guanggao">
    <a href="http://www.google.com" class="guanggao"></a>
</div>
<!-- 第二层结束 -->
<div class="clear"></div>
<!-- search开始-->
<div class="search-wrap">
    <div class="search ct">
        <div class="pull-left logo">
            <a href=""><img src="__STATIC__/shop/img/logo.png" alt=""></a>
            <a href=""><img src="__STATIC__/shop/img/search1.gif" alt=""></a>
        </div>
        <div class="search-input pull-left">
            <div class="input">
                <input type="text">
                <button type="submit">提 交</button>
            </div>
            <div class="input-2">
                <ul>
                    <li><a href="">品质红酒节 </a></li>
                    <li><a href="">结婚季</a></li>
                    <li><a href="">五粮液</a></li>
                    <li><a href="">剑南春</a></li>
                    <li><a href="">汾酒</a></li>
                    <li><a href="">酒鬼酒</a></li>
                    <li><a href="">古井贡</a></li>
                    <li><a href="">拉菲</a></li>
                    <li><a href="" style="color: #c00;">茉莉花</a></li>
                </ul>
            </div>
        </div>
        <div class="pull-right pic">
            <img src="__STATIC__/shop/img/xuebitu.png" alt="">
        </div>
    </div>
</div>
<!-- search结束-->

<div class="clear"></div>

<style>
	#content
	{
		width: 1200px;
		box-sizing: border-box;
		margin:0 auto;
	}
	#left-nav
	{
		width: 20%;
		height: 100%;
		box-sizing: border-box;
		float:left;
		border-right: none;
	}

	#left-nav>li
	{
		height: 20%;

		width: 100%;
		border-bottom: 2px solid black;
	}
	#left-nav>li>a
	{
		display: block;
		width: 100%;
		height: 100%;
		font-size: 16px;
		text-align: center;
		line-height: 100px;
		background: rgb(61, 134, 139);
		color: #fff;

	}
	#left-nav>li>.active{
		background: rgb(80, 105, 139);
		color: #ff341e;
	}
	#right-profile
	{
		width: 80%;
		box-sizing: border-box;
		float:left;
	}
	#right-profile>table{
		width:100%;
	}
	#right-profile>table tr>td{
		padding:4px 0;
		text-align: center;
	}
</style>

<div id="content">
	
		<ul id='left-nav'>
			<li>
			   <a href="/shop/user_center/index" >个人资料</a>
			</li>
			<li>
				<a href="/shop/user_center/collection">收藏夹</a>
			</li>
			<li>
			   <a href="" class="active">我的订单</a>
			</li>
			<li>
				<a href="/shop/user_center/address">收货地址</a>
			</li>
			<li>
				<a href="">网站留言</a>
			</li>
		</ul>
		
		<div id="right-profile">
			<table border="1">
				<tr>
					<td>编号</td>
					<td>名称</td>
					<td>单价</td>
					<td>数量</td>
					<td>总价</td>
					<td>状态</td>
					<td>备注</td>
					<td>收货手机号</td>
					<td>下单时间</td>
					<td>收货地址</td>
				</tr>
				<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr>
						<td width="120"><?php echo $vo['order_no']; ?></td>
						<td width="200">
							<img src="<?php echo $vo['goods']['img_url']; ?>" alt="" width="100" height="100">
							<h4><?php echo $vo['goods']['name']; ?></h4>
						</td>
						<td>
							￥<?php echo $vo['goods']['shj']; ?>
						</td>
						<td>
							<?php echo $vo['goods_count']; ?>
						</td>
						<td>
							￥<?php echo $vo['goods_count']*$vo['goods']['shj']; ?>
						</td>
						<td>
							<?php echo !empty($vo['kuaididanhao'])?"已发货":"待发货"; ?>
						</td>
						<td>
							<?php echo !empty($vo['beizhu'])?$vo['beizhu']:"无"; ?>
						</td>
						<td width="100">
							<?php echo $vo['phone']; ?>
						</td>
						<td width="100">
							<?php echo date("Y年m月d日 H:i:s",$vo['create_time']); ?>
						</td>
						<td width="100">
							<?php echo $vo['address']; ?>
						</td>
					</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>

			</table>
		</div>

		<div class="clear"></div>
</div>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="__TMPL__/public/assets/simpleboot3/bootstrap/js/bootstrap.min.js"></script>
    <script src="__STATIC__/js/frontend.js"></script>
	<script>
	$(function(){
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$("#main-menu a").each(function() {
			if ($(this)[0].href == String(window.location)) {
				$(this).parentsUntil("#main-menu>ul>li").addClass("active");
			}
		});
		
		$.post("<?php echo url('user/index/isLogin'); ?>",{},function(data){
		    console.log(data);
			if(data.code==1){
				if(data.data.user.avatar){
				}

				$("#main-menu-user span.user-nickname").text(data.data.user.user_nickname?data.data.user.user_nickname:data.data.user.user_login);
				$("#main-menu-user li.login").show();
                $("#main-menu-user li.offline").hide();

			}

			if(data.code==0){
                $("#main-menu-user li.login").hide();
				$("#main-menu-user li.offline").show();
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


<style>
    #task
    {
        position: fixed;
        left:0;
        top:0;
        width:100%;
        height:100%;
        background-color:rgba(0,0,0,0.5);
        display: none;

    }
    #task #tips
    {
        width:400px;
        height:200px;
        background: #fff;
        position:absolute;
        top:50%;
        left:50%;
        margin-left:-200px;
        margin-top: -100px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
    }
    .tips-title
    {
        text-align: center;
        height:40px;
        line-height:50px;
        font-size:18px;
    }
    .tips-body
    {
        width:100%;
        height: 100px;
        line-height:100px;
        padding:0 20px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size:24px;
        font-weight: 700;
        text-align:center;
    }
    .tips-footer
    {
        height:60px;
        width:100%;
        padding-top:15px;
    }
    .tips-footer button
    {
        padding:0 15px;
        height:35px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        font-size:16px;
        float: right;
        margin-right:15px;
        cursor:pointer;
        font-weight: 700;
    }

</style>
<div id="task">
    <div id="tips">
        <p class="tips-title">提示</p>
        <div class="tips-body">
            正在确定...
        </div>
        <div class="tips-footer">
            <button class="close-task">关闭</button>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#task').click(function(){
            $(this).hide();
        });
        $('#close-task').click(function(){
            $('#task').hide();
        });
    })
</script>
<div class="clear"></div>
<!-- 底层开始 -->
<div id="footer">
    <div class="footer-center ct">
        <div class="footer-center-top">
            <div class="footer-center-top-phone">400-617-9999</div>
            <div class="footer-center-top-phone-right">客服热线9:00-23:00贴心服务</div>

        </div>
        <div class="clear"></div>
        <hr>
        <div class="footer-center-nav">
            <ul>
                <li>新手入门</li>
                <li>购物保障</li>
                <li>服务协议</li>
                <li>发票说明</li>
            </ul>
            <ul>
                <li>常见问题</li>
                <li>红包使用</li>
                <li>返现使用</li>
                <li>兑换码</li>
            </ul>
            <ul>
                <li>配送说明</li>
                <li>配送时间</li>
                <li>配送费用</li>
                <li>配送范围</li>
            </ul>
            <ul>
                <li>支付方式</li>
                <li>货到付款</li>
                <li>在线支付</li>
                <li>线下支付</li>
            </ul>
            <ul>
                <li>售后服务</li>
                <li>品质保证</li>
                <li>退换货政策</li>
                <li>退换货流程</li>
            </ul>
            <ul>
                <li>特色服务</li>
                <li>会员俱乐部</li>
                <li>企业客户</li>
                <li>酒仙社区</li>
            </ul>
            <div class="footer-center-nav-photo">
                <img src="__STATIC__/shop/img/footer.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="footer-last ct">
    <div class="footer-last-left">
        <div class="footer-last-top">
            <ul>
                <li><a href="">公司简介</a></li>
                <li><a href="">管理团队</a></li>
                <li><a href="">媒体报道</a></li>
                <li><a href="">联系我们</a></li>
                <li><a href="">招贤纳士</a></li>
                <li><a href="">友情链接</a></li>
                <li><a href="">网站地图</a></li>
                <li><a href="">品牌大全</a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <p>酒仙网电子商务股份有限公司  ©  酒仙网   2011  jiuxian.com  All   Rights Reserved   <a href="">京ICP备11007961号-1</a>  京公网安备1101050188221</p>
        <div class="footer-last-top">
            <ul>
                <li><a href="">大麦网</a></li>
                <li><a href="">1折网</a></li>
                <li><a href="">铁血军事</a></li>
                <li><a href="">酒仙网白酒</a></li>
                <li><a href="">酒仙网葡萄酒</a></li>
                <li><a href="">开放平台招商</a></li>
                <li><a href="">购酒论坛</a></li>
                <li><a href="">名鞋库</a></li>
                <li><a href="">酒仙网团购</a></li>
                <li><a href="">更多</a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <p>统一社会信用代码  91110302554833311D   食品流通许可证编号  SP1103021310005747</p>
        <p>地址：北京市北京经济技术开发区经海五路58号院8号楼1至6层</p>
        <img src="__STATIC__/shop/img/footer-last.png" alt="">
        <p class="last-p">购买前请确认达到法定饮酒年龄！酒仙网不销售任何含酒精产品给18岁以下人士！</p>
    </div>
    <img src="__STATIC__/shop/img/last-img.png" alt="">
</div>
<!-- 底层结束 -->

<div id="left">
    <ul>
        <li>1F</li>
        <li>2F</li>
        <li>3F</li>
        <li>4F</li>
        <li>5F</li>
        <li>↑</li>
    </ul>
</div>
</body>
</html>