<?php

class About extends Controller
{
    public function index()
    {
        $data['page_title'] = 'About';
        $this->view('minima/about-us', $data);
    }

}
