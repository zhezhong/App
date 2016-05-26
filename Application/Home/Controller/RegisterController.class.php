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
			$info['sign_pwd']  	= $_POST['sign_pwd'];
			$info['resgin_pwd']= $_POST['resgin_pwd'];
			$info['sign_name']	= $_POST['name'];
			if($_POST['sign_pwd'] == $_POST['resign_pwd']){
				$info['sign_pwd'] = MD5($_POST['sign_pwd']);
			}else{
				$this->error('the two password enterd are not consistent!');
			}
			$m = $Alictf = D('AlictfTeam');
			//dump($m);
			$ans = $Alictf->addTeam($info) ;
			if($ans == 1){
				$this->success('team information upload success!',Register/register);				
			}else if($ans == -1){
				$this->error('duplicate insert for your name ,maybe you have registed already !');
			}else {
				$this->error('register failed ,please check your input');
			}

		}else{
			
			$this->	display('register');
		}	
	}
}