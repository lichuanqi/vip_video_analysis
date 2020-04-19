<?php
header("Content-Type: text/html; charset=UTF-8");
include "./config.php";
//作者：一艘大轮船
//网址：www.dlc618.com
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=100%, initial-scale=1"/>
  <title><?php echo $config['title']?></title>
  <meta name="keywords" content="<?php echo $config['keywords']?>" />
  <meta name="description" content="<?php echo $config['description']?>" />
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="css/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>
  </head>
<body style="background: url("<?php echo $config['beijing']?>");">

<!-- 头部 -->
<nav class="navbar navbar-default">
    <div class="container">  
      <div id="navbar" class="collapse navbar-collapse">
       <ul class="nav navbar-nav navbar-left">
         <?php echo $config['head_left']?>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <?php echo $config['head_right']?>
       </ul>
      </div>
   </div>
</nav>

<!-- 以下是主要内容 -->
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 center-block" style="float: none;">
  <h2 class="text-muted" style="color:black" align="center"><strong><?php echo $config['title']?></strong></h2>

<!-- 以下是广告 -->
<thead>
<ggkj><div class="alert alert-success alert-dismissible" role="alert">
  <strong><?php echo $config['notice_up_1']?></strong>
  </div>
</ggkj>
<thead>
<ggkj><div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
  <strong><?php echo $config['notice_up_2']?></strong>
  </div>
</ggkj>
<hr>
  
<!-- 以下是解析按钮和接口选择按钮 -->
<td>
    <table bgcolor="#87CEEB">
    <div class="col-md-14 column">
    <form method="get" >
	<div class="col-md-5 column" style="margin-top: 2px;">
    <div class="input-group" style="width: 100%;">
	<span class="input-group-addon input-lg" style="width: 80px; ">接口</span>
    <select class="form-control input-lg" id="jk">
	<option value="http://api.47ks.com/webcloud/?v="  style="color:red">1号通用接口</option>
	<option value="http://vip.72du.com/api/?url=" style="color:red">2号通用接口</option>
	<option value="http://qtzr.net/s/?qt=">3号通用接口</option>
	<option value="http://000o.cc/jx/ty.php?url=">4号通用接口</option>
	<?php echo $config['jiekou']?>
	<option value="http:// ">更多接口待添加...</option></select>
    </div>
	</div>
    <div class="col-md-5" style="margin-top: 2px;">
    <div class="input-group" style="width: 100%;">
    <input class="form-control input-lg" type="search" placeholder="输入需要会员的视频链接" id="url" autocomplete="off">
    </div></div>
    <div class="col-md-2" style="margin-top: 2px;">
    <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">播放</button>
    </div>
    </form>
    </div>
	</table> 
   </td> 
  
<!-- 以下是视频播放框 -->
<tbody>    
<div class="col-md-14 column">
    <div class="panel panel-default" style="border-color:#d4d4d4;margin:-15px 0 0 0;border-radius:5px;">
    <div id="kj" class="panel-body" >
    <iframe src="<?php echo $config['default']?>" id="player" width="100%" height="450px" style="margin: 15px 0 0 0;background-color: #d3d0d066;border-radius: 5px;" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
    </div>
    </div>
</div>
</tbody>

<hr>
<!-- 以下是广告 -->
<thead>
<ggkj><div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
  <strong><?php echo $config['notice_down_2']?></strong>
  </div>
</ggkj>
  
</thead>
<!-- 以下是紧急公告 -->
<jjgg>
  <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
  <strong><?php echo $config['notice_down_2']?></strong>
  </div>
</jjgg>

<!-- 底部 -->
<footer class="footer" style="background: #f8f8f8;margin-top: 30px;" >
	<div class="panel-body" style="text-align: center;">
	<div class="container-fluid">
	<b>友情链接：</b> <?php echo $config['youlian']?>
	<hr>
    <p>本站提供的电影和电视剧均收集于各大视频网站,不提供影片资源存储,也不参与录制、上传。</p>
    <p>若本站收录的节目无意侵犯了贵司版权，请来信,我们会及时处理和回复。</p>
    <p>管理员邮箱：lc@dlc618.com</p>
	<span class="copyright">Copyright 2020 <a href="http://www.dlc618.com" title="一艘大轮船" target="_blank">一艘大轮船</a>版权所有</span>
	</div>
	</div>
</footer>
<?php echo $config['tongji']?>

</body>
</html>

