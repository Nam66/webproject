<?php
class Single_post extends Controller
{
    public function index($link ='')
    {
        if ($link == '') {
            echo "image not found";
            die();
        } else {
            $data['page_title'] = 'single_post';
            $posts = $this->loadModels('posts');
            $result = $posts->get_one($link);
            $data['post'] = $result;
            $this->view('minima/single_post', $data);
        }
    }
}