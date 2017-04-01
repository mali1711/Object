<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/www/Object/Public/Style/boots/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .input-group{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<center>
<div style="padding: 100px 100px 10px;">
    <h2>添加景区</h2>
    <form action="/www/Object/index.php/Admin/Index/doAddJing" method="post" style="width: 700px;" class="bs-example bs-example-form" role="form" enctype="multipart/form-data">
            <input name="attractions_pic" type="file">
        <div class="input-group">
            <span class="input-group-addon " >名字</span>
            <input name="attractions_name" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">印象</span>
            <input  name="attractions_thought" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">类型</span>
            <input name="attractions_type" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">建议</span>
            <input name="attractions_suggest" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">门票</span>
            <input name="attractions_price" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">时间</span>
            <input name="attractions_time" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">地址</span>
            <input name="attractions_address" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon" style="width: 80px;">经度</span>
            <input name="attractions_longitude" type="text" class="form-control">
            <span class="input-group-addon " style="width: 80px;padding-right: 40px;">纬度</span>
            <input name="attractions_latitude" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">公交</span>
            <input name="attractions_route" type="text" class="form-control">
        </div>
        <div class="input-group">
        <span class="input-group-addon">电话</span>
            <input name="attractions_phone" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">详情</span>
            <textarea name="attractions_content"  class="form-control" rows="8"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-addon">提交</span>
            <input type="submit"  class="form-control" value="提交">
        </div>
    </form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/www/Object/Public/Style/boots/js/bootstrap.min.js"></script>
</center>
</body>
</html>