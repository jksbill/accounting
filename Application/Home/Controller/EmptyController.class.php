<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends controller {
    public function index (){
        redirect('/login');
    }
}