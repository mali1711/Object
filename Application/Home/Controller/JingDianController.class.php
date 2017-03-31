<?php
namespace Home\Controller;
use Think\Controller;
class JingDianController extends Controller {


    /*
     *
     * 点击地图，显示对应的信息
     *
     * */
    public function show()
    {
        $attractions = M('attractions');
        $where['attractions_longitude'] =$_GET['x'];
        $where['attractions_latitude'] =$_GET['y'];
        $list = $attractions->where($where)->find();
        dump($list);
        if($list){
            $this->assign('list',$list);
            $this->display('Index/JingDian');
        }else{
            echo "<script>alert('数据暂时没有添加');</script>'";
        }

    }


    
}