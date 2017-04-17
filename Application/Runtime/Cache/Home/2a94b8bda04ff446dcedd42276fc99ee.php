<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html{width: 100%;height: 100%; margin:0;font-family:"微软雅黑";}
        #allmap{width:100%;height:500px;}
        p{margin-left:5px; font-size:14px;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=j5Z5SovpW0uBFNOHBougUc7cC1xb88FV"></script>
    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <title>西安旅游系统</title>
    <style>
        table{
            margin-top: 50px;
        }

        h3{
            padding-top: 30px;
        }
        tr{
            height: 50px;
        }
        .tiaojian{
            margin-left:30px;
            float: left;
            color: #0f0f0f;
        }
        .sousuo{
            margin-bottom: 40px;
        }
    </style>
    <!-- Bootstrap -->
    <link href="/www/Object/Public/Style/boots/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><b class="text-important">西安旅游系统</b></a>
    </div>
    <div>
        <ul class="nav navbar-nav">
            <li><a href="#">查看更多</a></li>
        </ul>
        <ul class="pull-right nav navbar-nav">
            <?php if(empty($name)): ?><li class=""><a href="#">亲爱的您还没有登录</a></li>
            <?php else: ?>
                <li class=""><a href="#">西安旅游系统欢迎您：<?php echo ($name); ?></a></li><?php endif; ?>
         </ul>
    </div>
    </div>
</nav>
 <div class="row">
        <div class="col-md-9">
            <dl class="dl-horizontal sousuo">
                <dt>景点类型</dt>
                <dd class="attractions_type">

                    <a class="tiaojian text-info"  href="#">全部</a>
                    <a class="tiaojian" href="#">自然景观</a>
                    <a class="tiaojian"  href="#">人文景观</a>
                    <a class="tiaojian"  href="#">公园</a>
                    <a class="tiaojian"  href="#">展馆</a>
                    <a class="tiaojian"  href="#">其他</a>
                </dd>
            </dl>
            <dl class="dl-horizontal sousuo">
                <dt>游玩时间</dt>
                <dd class="attractions_suggest">
                    <a class="tiaojian text-info">全部</a>
                    <a class="tiaojian"  href="#">2小时以内</a>
                    <a class="tiaojian"  href="#">2-4小时</a>
                    <a class="tiaojian"  href="#">半天到1天</a>
                    <a class="tiaojian"  href="#">2-4天</a>
                    <a class="tiaojian"  href="#">4天以上</a>
                </dd>
            </dl>
            <dl class="dl-horizontal sousuo">
                <dt>适应季节</dt>
                <dd>
                    <a class="tiaojian text-info"  href="#">全部</a>
                    <a class="tiaojian"  href="#">春季</a>
                    <a class="tiaojian"  href="#">夏季</a>
                    <a class="tiaojian"  href="#">秋季</a>
                    <a class="tiaojian"  href="#">冬季</a>
                    <a class="tiaojian"  href="#">四季皆宜</a>
                </dd>
            </dl>
        </div>
        <div class="col-md-3">
            <center>
                <h3>用户登录</h3>
                <table width="">
                    <form action="/www/Object/index.php/Home/Index/doLogin" method="post">
                        <tr>
                            <td width="" align="center"> <input type="text" name="name" value="" style="width:220px;"></td>
                        </tr>
                        <tr>
                            <td width="" align="center"><input type="password" name="passWord" value="" style="width:220px;"></td>
                        </tr>
                        <tr>
                            <td align="center"><input type="submit" value="立即登录" style="width:120px;background-color:dodgerblue"></td>
                        </tr>
                        <tr>
                            <td align="center">还不是会员？ &nbsp &nbsp  &nbsp  &nbsp<a href="/www/Object/index.php/Home/Index/register">免费注册</a></td>
                        </tr>
                    </form>
                </table>
            </center>
        </div>
     <div id="allmap"></div>
    </div>
    <h2>景点列表</h2>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="height:150px;" src="/www/Object/Public/Image/20170328115433.png" alt="...">
                <div class="caption">
                    <h3>景点名字</h3>
                    <p><a href="#">查看详情</a></p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="height:150px;" src="/www/Object/Public/Image/20170328115433.png" alt="...">
                <div class="caption">
                    <h3>景点名字</h3>
                    <p><a href="#">查看详情</a></p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="height:150px;" src="/www/Object/Public/Image/20170328115433.png" alt="...">
                <div class="caption">
                    <h3>景点名字</h3>
                    <p><a href="#">查看详情</a></p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="height:150px;" src="/www/Object/Public/Image/20170328115433.png" alt="...">
                <div class="caption">
                    <h3>景点名字</h3>
                    <p><a href="#">查看详情</a></p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/www/Object/Public/Style/boots/js/bootstrap.min.js"></script>
</body>
</html>
<script type="text/javascript">
    /*为所有class为tiaojian的标签添加点击事件，并且打印出他们的标签内容，这里的this指的是你点击的标签的本身*/
    $(".tiaojian").click(function(){
        var value =$(this).html();
        var key = $(this).parent().attr('class');
        $.ajax({
            url:"/www/Object/index.php/Home/index/findAttractions",
            type:"get",
            dataType:"json",
            async:true,
            data: {key:key,value:value},
            success:function(json){
               list(json);
            },
            error:function(){
            }
        });
    });

    function findoPsition() {
        $.ajax({
            url:"/www/Object/index.php/Home/index/attractions_info",
            type:"get",
            dataType:"json",
            async:true,
            data:"jsonText",
            success:function(json){
                // 百度地图API功能
                list(json);
            },
            error:function(){
            }
        });
    };
    getattractions();
    function getattractions() {
        $.ajax({
            url:"/www/Object/index.php/Home/index/attractions_info",
            type:"get",
            dataType:"json",
            async:true,
            data:"jsonText",
            success:function(json){
                // 百度地图API功能
                list(json);
            },
            error:function(){
            }
        });
    };
    //百度接口封装的api
    function list(json) {
        map = new BMap.Map("allmap");
        map.centerAndZoom(new BMap.Point(108.941707,34.349582), 11);
        var data_info = json;
        var opts = {
            width : 350,     // 信息窗口宽度
            height: 100,     // 信息窗口高度
            title : "" , // 信息窗口标题
            enableMessage:true//设置允许信息窗发送短息
        };
        for(var i=0;i<data_info.length;i++){
            var marker = new BMap.Marker(new BMap.Point(data_info[i][0],data_info[i][1]));  // 创建标注
            var content = data_info[i][2];
            map.addOverlay(marker);               // 将标注添加到地图中
            addClickHandler(content,marker);
        }
        function addClickHandler(content,marker){
            marker.addEventListener("click",function(e){
                openInfo(content,e)}
            );
        }
        function openInfo(content,e){
            var p = e.target;
            var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
            var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象
            map.openInfoWindow(infoWindow,point); //开启信息窗口
        }
    }
</script>