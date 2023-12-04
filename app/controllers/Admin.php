<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {
    public function home() 
    {

       $this->call->view('Admin/home');
    }

     public function Dashboard() 
     {

        $this->call->view('Admin/Dashboard');
     }
     public function ChangePass() 
     {

        $this->call->view('Admin/ChangePass');
     }
     public function OrminDash() 
     {

        $this->call->view('Admin/Oriental/OrminDash');
     }
     public function OrminTab() 
     {

        $this->call->view('Admin/Oriental/OrminTab');
     }
     public function OcciDash() 
     {

        $this->call->view('Admin/Ocidental/OcciDash');
     }
     public function OcciTab() 
     {

        $this->call->view('Admin/Ocidental/OcciTab');
     }
     public function PalDash() 
     {

        $this->call->view('Admin/Palawan/PalDash');
     }
     public function PalTab() 
     {

        $this->call->view('Admin/Palawan/PalTab');
     }
     public function RomDash() 
     {

        $this->call->view('Admin/Romblon/RomDash');
     }
     public function RomTab() 
     {

        $this->call->view('Admin/Romblon/RomTab');
     }
     public function MarDash() 
     {

        $this->call->view('Admin/Marinduque/MarDash');
     }
     public function MarTab() 
     {

        $this->call->view('Admin/Marinduque/MarTab');
     }
     public function Table() 
     {

        $this->call->view('Admin/Table');
     }
     public function Report() 
     {

        $this->call->view('Admin/Report');
     }
}
?>
