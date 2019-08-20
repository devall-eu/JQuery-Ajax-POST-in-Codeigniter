<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Welcome
 */
class Welcome extends CI_Controller
{
    /**
     * Main function with view file
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

    /**
     * Function return posted data to view file
     */
    public function ajaxRequestPost()
    {
        echo $this->input->post('id');
    }
}