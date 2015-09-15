<?php
namespace Admin\Model;
use Think\Model;
class PostModel extends  BaseModel {

    private $public_data = array(
        '1' => '发布',
        '0' => '草稿',
    );

    private $recommend_data = array(
        '1' => '推荐',
        '0' => '不推荐',
    );
    
    public function getPostWidthParentField ($filter, $parent_field_str) {
        $parent_field_array = explode(',', $parent_field_str);
        $posts = D('Post')->where($filter)->order('create_time desc')->select();
        $pages = D('Page')->where(array('parent_id' => 0))->Field($parent_field_str)->select();
        foreach ($posts as $key => $value) {
            foreach ($pages as $k => $v) {
                if ($value['parent_id'] == $v['id']) {
                    foreach ($v as $page_key => $page_value) {
                        $posts[$key]['parent_' . $page_key] = $page_value;
                    }
                }
            }
        }
        return $posts;
    }

    public function build_select_html_tag ($name, $data, $select = '') {
        $str = '<select name="' . $name . '" id="' . $name . '">';
        foreach ($data as $key => $value) {
            $selector = $select == $value ? 'selected' : '';
            if (empty($selector)) {
                $selector = $select == $key ? 'selected' : '';
            }
            $str .= '<option value="' . $key . '"' . $selector . '>' . $value . '</option>'; 
        }
        $str .= '</select>';
        return $str;
    }

    public function getByPublicData () {
        return $this->public_data;
    }
    
    public function getByRecommendData () {
        return $this->recommend_data;
    }
    
    
    
    /*public function __call ($method, $argument) {
        $method_end = substr($method, 6);
        $filter = hump_to_underline($method_end);
        $pages = D('Page')->where(array($filter => $argument[0]))->select();
    }*/
    
}