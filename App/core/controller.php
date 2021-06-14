<?php
class Controller
{
    protected function view($view, $data = [])
    {
        if (file_exists("../App/views/". $view .".php")) {
            include "../App/views/". $view .".php";
        }else{
            include "../App/views/404page.php";
        }
    }
    protected function loadModels($model)
    {
        if (file_exists("../App/models/". $model .".php")) {
            include "../App/models/". $model .".php";
            return $model = new $model();
        }
        return false;
    }

}
