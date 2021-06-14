<?php
class Contact extends Controller
{
    public function index()
    {

        $data['page_title'] = 'contact';
        $this->view('minima/contact', $data);
    }


}