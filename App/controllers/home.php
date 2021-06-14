<?php

class Home extends Controller
{
    public function index()
    {

        $data['page_title'] = 'Home';
        $posts = $this->loadModels('posts');
        $result = $posts->get_all();
        $data['posts'] = $result;
        $pagination = $this->loadModels('pagination');
        $data['prev_page'] = $pagination->generate_link($pagination->current_page_number() - 1);
        $data['next_page'] = $pagination->generate_link($pagination->current_page_number() + 1);

//        if (is_array($data['posts']))
//        {
//            foreach ()
//        }
        $this->view('minima/index', $data);
    }


}