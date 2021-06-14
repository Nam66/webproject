<?php
class Logout extends Controller
{
    public function index()
    {

       $user = $this->loadModels('user');
       $user->logout();
    }


}
