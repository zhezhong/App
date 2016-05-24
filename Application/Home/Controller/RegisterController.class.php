<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller{
	public function register(){

		if(IS_POST){
			$info = array();

			//dump($_POST);
			//echo phpinfo();
			$info['team_name'] 	= $_POST['name'];
			$info['email'] 		= $_POST['email'];

			$m = $Alictf = D('AlictfTeam');
			//dump($m);
			if($Alictf->addTeam($info) == 1){
				$this->success('team information upload success!',Register/register);				
			}else{
				$this->error('register failed ,please check your input');
			};

		}else{
			
			$this->	display('register');
		}	
	}




}