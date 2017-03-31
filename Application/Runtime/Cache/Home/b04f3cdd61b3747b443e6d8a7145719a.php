<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

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
<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <h3><a>返回首页</a> <b><?php echo ($list["attractions_name"]); ?></b></h3>
        </div><!-- /.container-fluid -->
    </nav>
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <img src="/Object/Public/Uploads/Jingdian/<?php echo ($list["attractions_pic"]); ?>" alt="秦始皇陵兵马俑" class="img-rounded ">
        </div>
        <div class="col-xs-6 col-md-6">
            <dl class="dl-horizontal">
                <dt>热度</dt>
                <dd>5星</dd>
                <dt>景点类型</dt>
                <dd><?php echo ($list["attractions_type"]); ?></dd>
                <dt>最佳季节</dt>
                <dd>四季皆可</dd>
                <dt>建议游玩</dt>
                <dd><?php echo ($list["attractions_suggest"]); ?></dd>
                <dt>开放时间</dt>
                <dd><?php echo ($list["attractions_time"]); ?></dd>
                <dt>地址</dt>
                <dd><?php echo ($list["attractions_address"]); ?></dd>
                <dt>电话</dt>
                <dd><?php echo ($list["attractions_phone"]); ?></dd>
                <dt>门票</dt>
                <dd><?php echo ($list["attractions_price"]); ?></dd>
                <dt>路线</dt>
                <dd><?php echo ($list["attractions_route"]); ?></dd>
            </dl>
        </div>
    </div>
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <h3>走进<?php echo ($list["attractions_name"]); ?></h3>
        <p class="thumbnail"><?php echo ($list["attractions_content"]); ?></p>
    </div>
</div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/Object/Public/Style/boots/js/bootstrap.min.js"></script>

</body>
</html>