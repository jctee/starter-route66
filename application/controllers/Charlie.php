<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * subcontroller called Charlie
 *
 * @author JC
 */
class Charlie extends Application{
    
    function __construct()
    {
        parent::__construct();
    }

	
    public function brown() {
        $this->show(3);
    }
}
