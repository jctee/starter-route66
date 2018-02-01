<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controller force in subfolder delta
 *
 * @author JC
 */
class Force extends Application{
    function __construct()
	{
		parent::__construct();
	}

	public function index() {
            $this->show(4);
        }
}
