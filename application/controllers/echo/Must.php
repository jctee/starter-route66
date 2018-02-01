<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * controller must with function wehave, in folder echo
 *
 * @author JC
 */
class Must extends Application{
    function __construct()
    {
        parent::__construct();
    }

	
    public function wehave() {
        $this->show(5);
    }
}
