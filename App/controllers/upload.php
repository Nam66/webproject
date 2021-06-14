<?php
class Upload extends Controller
{
    public function index()
    {

        header("Location:". ROOT . "upload/images");
        die();
    }
    public function images()
    {
        $user = $this->loadModels('user');
        if(!$result = $user->check_logged_in())
        {
            header("Location:". ROOT . "login");
            die();
        }
        if (isset($_POST['title']) && isset($_FILES['file']))
        {
            $uploader = $this->loadModels('upload_file');
            $uploader->upload($_POST,$_FILES);
        }
        $data['page_title'] = 'upload';
        $this->view('minima/upload', $data);
    }

}