<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        //session_start();
    }

    public function login()
    {
        $code = 1;

        isset($_SESSION['ip']) || $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        isset($_SESSION['try_cnt']) || $_SESSION['try_cnt'] = 1;
        isset($_SESSION['logged_in']) || $_SESSION['logged_in'] = FALSE;

        if( $_SESSION['try_cnt'] < 4 && $_SESSION['ip'] == $_SERVER['REMOTE_ADDR'] ):

            $login = filter_var($this->input->post('input_login'), FILTER_SANITIZE_STRING);
            $pass = filter_var($this->input->post('input_pass'), FILTER_SANITIZE_STRING);

            if( $this->config->item('adm_login') == $login && $this->config->item('adm_pass') == $pass ):
                $_SESSION["login"] = $login;
                $_SESSION['logged_in'] = TRUE;
                $code = 0;
            else:
                $_SESSION['try_cnt']++;
            endif;
        else:
            $code = 10;
        endif;

        echo json_encode( array('code' => $code, 'try' => $_SESSION['try_cnt'],
            'auth' => array($this->config->item('adm_login') . '-' . $this->input->post('input_login') . '-' . $login,
                $this->config->item('adm_pass') . '-' . $this->input->post('input_pass') . '-' . $pass) ));

    }

    public function is_logged_in()
    {
        if( isset($_SESSION['logged_in']) ):
            $result = $_SESSION['logged_in'];
        else:
            $result = FALSE;
        endif;

        return $result;
    }
}