<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <style>
        tr{
            height: 30px;
        }
    </style>
</head>
<body>
<center>
    <h3>用户登录</h3>
    <table width="800">
        <form action="/Object/index.php/Home/Index/doLogin" method="post">
            <tr>
                <td width="200px" align="center"> <input type="text" name="name" value="" style="width:220px;"></td>
            </tr>
            <tr>
                <td width="200px" align="center"><input type="password" name="passWord" value="" style="width:220px;"></td>
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
</body>
</html>