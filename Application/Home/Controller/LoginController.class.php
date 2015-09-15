<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index (){
        $this->display();
    }

    public function dologin () {
        $username = I('username');
        $password = I('password');
        $data = array(
            'username' => $username,
            'password' => md5($password)
        );
        $user = M('User')->where($data)->find();
        if (!$user) {
            redirect('/login');
        } else {
            // M('Admin')->add($data);
            // var_dump('aaa');die;
            session('user', $user);
            redirect('/index');
        }
    }
    
}