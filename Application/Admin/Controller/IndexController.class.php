<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $this->display('index/index');
    }

    public function addJing()
    {
        $this->display("index/addJing");
    }

    public function doAddJing()
    {
        $info = $this->upload();
        $_POST['attractions_pic'] = $info['attractions_pic']['savename'];
        $User = M("attractions"); // 实例化User对象
        // 根据表单提交的POST数据创建数据对象
        if($User->create()){
            $result = $User->add(); // 写入数据到数据库
            if($result){
                $this->success('信息添加成功');
            }
        }
    }
    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
        $upload->autoSub = true;
        $upload->saveName = time;
        $upload->subName = 'Jingdian';
        $info   =   $upload->upload();
        if(!$info) {
            $this->error($upload->getError());
        } else{
           return $info;
        }
    }
}