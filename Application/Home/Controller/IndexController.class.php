<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize () {
		$this->user = session('user');
		if (!$this->user) {
			redirect('/login');
		}
	}
    public function index () {
    	$id = I('id');
    	$this->edit_account = M('Account')->where(array('id' => $id, 'uid' => $this->user['id']))->find();
    	$this->account = M('Account')->where(array('uid' => $this->user['id']))->select();
    	
    	// var_dump(M("Account")->getLastSql());die;
        $this->display();
    }

    public function add_account () {
    	$id = I('post.id');
    	$data['title'] = I('title');
    	$data['money'] = I('money');
    	$data['subscript'] = I('subscript');
    	$data['uid'] = $this->user['id'];
    	$data['create_time'] = date('Y-m-d H:i:s');
    	if (I('detail')) {
	    	$detail = serialize();
    	}
    	if ((int)$data['money'] == 0) {
    		show_tip('error', '/', '请输入正确的金额');
    	}
    	if ($id) {
    		$res = M('Account')->where(array('id' => $id))->save($data);
    		if ($res) {
    			show_tip('success', '/?id=' . $id, '修改成功');
    		} else {
    			show_tip('error', '/?id=' . $id, '修改失败');
    		}
    	} else {
	    	$account = M('Account')->where(array('title' => $data['title']))->find();
	    	if (!$account) {
	 			$res = M('Account')->add($data);
	 			if ($res) {
	 				show_tip('success', '/', '保存成功');
	 			}
	    	}
	    	show_tip('error', '/', '保存失败,标题已经存在');
    	}
    }

    public function delete () {
    	$id = I('id');
    	$where = array(
 			'id' => $id,
 			'uid' => $this->user['id']
    	);
    	$account = M('Account')->where($where)->find();
    	if ($account) {
    		$res = M('Account')->delete($id);
    		if ($res) {
    			show_tip('success', '/?tab=finance', '删除成功');
    		}
    	}
    }	
}