<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller{
	public function register(){

		if(IS_POST){
			$info = array();

			//dump($_POST);
			//echo phpinfo();

			$info['TEAM_NAME']	= $_POST['TEAM_NAME'];
			$info['sign_name'] 	= $_POST['sign_name'];
			$info['email'] 		= $_POST['email'];
			$info['sign_pwd'] 	= $_POST['sign_pwd'];
			$info['phone_num']  = $_POST['phone_num'];
			$info['team_name']	= $_POST['team_name'];

			$m = $Alictf = D('AlictfTeams');
			//dump($m);
			if($Alictf->addTeam($info) == 1){
				$this->success('team information upload success!',Register/register);				
			}else{
				$this->error('register failed ,please contact admin buaaeezz@163.com！');
			};

		}else{
			
			$this->	display('register');
		}	
	}




}