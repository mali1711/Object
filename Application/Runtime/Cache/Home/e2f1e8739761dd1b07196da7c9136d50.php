<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <style>
        tr{
            height: 30px;
        }
    </style>
</head>
<body>
<center>
    <h3>用户注册</h3>
    <table>
        <form action="/Object/index.php/Home/Index/doRegister" method="post">
            <tr>
                <td>用户名</td>
                <td width="200px" align="left"> <input placeholder="用户名" type="text" name="name" value="" style="width:220px;"></td>
            </tr>
            <tr>
                <td>密码</td>
                <td width="200px" align="left"><input placeholder="密码" type="password" name="passWord" value="" style="width:220px;"></td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td width="200px" align="center"><input placeholder="确认密码" type="password" name="passWordAgin" value="" style="width:220px;"></td>
            </tr>
            <tr>
                <td></td>
                <td align="center"><input type="submit" value="注册" style="width:120px;background-color:dodgerblue"></td>
            </tr>
        </form>
    </table>
</center>
</body>
</html>