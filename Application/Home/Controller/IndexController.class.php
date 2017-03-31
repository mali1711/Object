<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $pl = M('luntan');
        $count      = $pl->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,4);
        $show       = $Page->show();
        $pingLun = $pl->join('users ON users.id = luntan.user_id')->order('luntan_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $name =  $_SESSION['users']['info']['name'];
        $city = $this->attractions_info();
        $this->assign('name',$name);
        $this->assign('pingLun',$pingLun);
        $this->assign('page',$show);
        $this->assign('info',$city);
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

    /*
     * 评论
     * */
    public function pingLun()
    {
        if($_SESSION['users']['info']){
            $User = M("luntan");
            $data['user_id'] = $_SESSION['users']['info']['id'];
            $data['content'] = $_POST['content'];
            $data['addTime'] = time();
            $res = $User->data($data)->add();
            if($res){
                $this->success('评论成功');
            }else{
                $this->error('评论失败');
            }
        }else{
            $this->error('登录后才可以评论的');
        }

    }

    /*
     * 删除评论
     * */
    public function delPingLun()
    {
        $luntan = M('luntan');
        $user = $_GET['user'];
        $pingLunId = $_GET['pl'];
        if($_SESSION['users']['info']['id']==$user){
            $res = $luntan->delete($pingLunId);
            if($res){
                $this->success('删除成功');
            }else{
                $this->success('操作失败，请再来一次');
            }
        }else{
            $this->error('这个不是您评论的，您没有权限这么做，白痴');
        }
    }


public function attractions_info()
{


    $attractions = M('attractions');
    $list = $attractions->select();
    foreach($list as $k=>$v){
        $data[$k][] =  floatval($v['attractions_longitude']);
        $data[$k][] =  floatval($v['attractions_latitude']);
        $data[$k][] =  "<div style='color:red'>秦始皇陵兵马俑</div><a href=\"index/JingDian/show?x={$v['attractions_longitude']}&y={$v['attractions_latitude']}\">详情</a><br/>地址：{$v['attractions_address']}";
    };
    return json_encode($data);
    }
}