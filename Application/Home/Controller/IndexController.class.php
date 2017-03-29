<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $this->display('Index/index');
    }

    /*
     * 跳转登录页面
     * */
    public function login()
    {
        $this->display('Index/login');
    }

    /*
     * 执行登录动作
     * */
    public function doLogin()
    {
        $User = M("users");
        //初始化form表单获取的信息
        $name = $_POST['name'];
        $pass = $_POST['passWord'];
        $res = $User->where("name='$name' AND passWord='$pass'")->find();//判断用户名和密码是否在数据库中
        if($res){
            $_SESSION['users']['info'] = $res;
            $this->success('登录成功，跳转到首页',U('Index/index'));
        }else{
            $this->error('输入有误');
        }
    }
/*
 * 跳转注册页面
 * */
    public function register()
    {
        $this->display('Index/register');
    }

    /*
     * 执行提交
     * */
    public function doRegister()
    {
        $User = M("users");
        if($User->create()){
            $result = $User->add();
            if($result){
                $this->success('新用户注册成功,马上登录',U('index/login'));
            }
        }
    }
}