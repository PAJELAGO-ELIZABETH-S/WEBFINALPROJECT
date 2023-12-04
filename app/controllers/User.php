<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
    public function Main() 
    {

       $this->call->view('User/Main');
    }
    public function UserDashboard() 
    {

       $this->call->view('User/UserDashboard');
    }
    public function UserTable() 
    {

       $this->call->view('User/UserTable');
    }
    public function UserReport() 
    {

       $this->call->view('User/UserReport');
    }
    public function ResetPass() 
    {

       $this->call->view('User/ResetPass');
    }
   }

?>
