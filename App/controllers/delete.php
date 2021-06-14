<?php
class Delete extends Controller
{
    public function index($link)
    {

        if ($link == '') {
            echo "image not found";
            die();
        } else {
            $data['page_title'] = 'delete_post';
            $posts = $this->loadModels('posts');
            $result = $posts->get_one($link);
            $data['post'] = $result;
            $a = implode($_GET);
            $image_url = substr($a, 7);

            if (isset($_POST['delete'])){
                $result = $posts->delete($image_url);
            }
            $this->view('minima/delete', $data);
        }
    }



}
