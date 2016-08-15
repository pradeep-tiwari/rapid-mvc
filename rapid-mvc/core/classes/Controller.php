<?php

class Controller {

    protected $view = [];
    protected $data = [];
    
    # display the view
    protected function display() {
        extract($this->data);
        unset($this->data);
        ob_start();
        foreach($this->view as $page) {
            include_once SITE_THEME . $page . '.php';
        }
        $output = ob_get_contents();
        ob_end_clean();
        echo $output;
    }

}