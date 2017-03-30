<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html{width: 100%;height: 100%; margin:0;font-family:"微软雅黑";}
        #l-map{height:300px;width:100%;}
        #r-result{width:100%;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=j5Z5SovpW0uBFNOHBougUc7cC1xb88FV"></script>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
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
    </style>
    <!-- Bootstrap -->
    <link href="/Object/Public/Style/boots/css/bootstrap.min.css" rel="stylesheet">

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
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/Object/Public/Image/QQ20170330110306.png" alt="...">
                        <div class="carousel-caption">
                            西安古城墙
                        </div>
                    </div>
                    <div class="item">
                        <img src="/Object/Public/Image/QQ20170330110522.png" alt="...">
                        <div class="carousel-caption">
                            兵马俑
                        </div>
                    </div>
                    <div class="item">
                        <img src="/Object/Public/Image/QQ20170330110619.png" alt="...">
                        <div class="carousel-caption">
                            老城
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <center>
                <h3>用户登录</h3>
                <table width="">
                    <form action="/Object/index.php/Home/Index/doLogin" method="post">
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
                            <td align="center">还不是会员？ &nbsp &nbsp  &nbsp  &nbsp<a href="/Object/index.php/Home/Index/register">免费注册</a></td>
                        </tr>
                    </form>
                </table>
            </center>
        </div>
        <div id="l-map"></div>
    </div>
    <h2>景点列表</h2>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="height:150px;" src="/Object/Public/Image/20170328115433.png" alt="...">
                <div class="caption">
                    <h3>景点名字</h3>
                    <p><a href="#">查看详情</a></p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="height:150px;" src="/Object/Public/Image/20170328115433.png" alt="...">
                <div class="caption">
                    <h3>景点名字</h3>
                    <p><a href="#">查看详情</a></p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="height:150px;" src="/Object/Public/Image/20170328115433.png" alt="...">
                <div class="caption">
                    <h3>景点名字</h3>
                    <p><a href="#">查看详情</a></p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="height:150px;" src="/Object/Public/Image/20170328115433.png" alt="...">
                <div class="caption">
                    <h3>景点名字</h3>
                    <p><a href="#">查看详情</a></p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div>
    <h3>用户评论</h3>
    <?php if(is_array($pingLun)): foreach($pingLun as $key=>$vo): ?><div class="media">
        <div class="media-left">
            <a href="#">
                <h4 class="media-heading"><?php echo ($vo["name"]); ?>:</h4>
            </a>
        </div>
        <div class="media-body">

            <div class="alert alert-info">
            <?php echo ($vo["content"]); ?>
                <span class="pull-right">
                     <a href="/Object/index.php/Home/Index/delPingLun?user=<?php echo ($vo["user_id"]); ?>&pl=<?php echo ($vo["luntan_id"]); ?>" class="text-danger">删除</a>
                </span>
            </div>
        </div>
    </div><?php endforeach; endif; ?>
    <?php echo ($page); ?>
    <h3>我要评论</h3>
    <form action="/Object/index.php/Home/Index/pingLun" method="post">
        <textarea name="content" rows="10" cols="100" name=""></textarea><br/>
        <input type="submit" class="btn btn-primary" value="确认提交" />
    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/Object/Public/Style/boots/js/bootstrap.min.js"></script>
</body>
</html>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("l-map");            // 创建Map实例
    map.centerAndZoom(new BMap.Point(108.932597,34.265473), 11);
    var local = new BMap.LocalSearch(map, {
        renderOptions: {map: map, panel: "r-result"}
    });
    local.search("景点");
</script>