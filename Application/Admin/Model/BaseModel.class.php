<?php
namespace Admin\Model;
use Think\Model;
class BaseModel extends  Model {
    

    public function save_data ($data) {
        /*foreach ($data as $key => $value) {
            $d[$key] = I($key);
        };*/
        // $data['create_time'] = date('Y-m-d H:i:s');
        $data['update_time'] = date('Y-m-d H:i:s');
        if ($data['id']) {
            $last_id = D('Post')->save($data);
        } else {
            $last_id = D('Post')->add($data);
        }
        return array(
            'last_id' => $last_id,
            'parent_id' => $data['parent_id']
        );
    }

    
    
    
    /*public function __call ($method, $argument) {
        $method_end = substr($method, 6);
        $filter = hump_to_underline($method_end);
        $pages = D('Page')->where(array($filter => $argument[0]))->select();
    }*/

}