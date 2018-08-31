<?php
    namespace App\Http\Request;
    #=====================#
    # ==Request Manager== #
    #=====================#

    class Request implements AcessLevel
    {
        //Check acess level
        public function checkAcessLevel(){

        }
        /*get required form field if is there, else throw error message and stop script*/
        public function getRegisterForm(ControllerForm $form){
            if(!isset($_POST['email'])||!isset($_POST['password'])||!isset($_POST['nickname'])||!isset($_POST['born'])){
                exit(new Exception(01));
            }
            $form->email = $_POST['email'];
            $form->password = $_POST['password'];
            $form->nickname = $_POST['nickname'];
            $form->born = $_POST['born'];
            $form->name = (isset($_POST['name'])) ? ($_POST['name']) : 'none';
            $form->diploma = (isset($_POST['diploma'])) ? ($_POST['diploma']) : 'none';
        }
    }