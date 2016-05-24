<?php

namespace Home\Model;
use Think\Model;

class AlictfTeamModel extends Model{
	public function addTeam($info){
		$account = M('AlictfAccount');
		$uid = time();
		$data = array(
				//'SIGN_NAME' => $info['sign_name'],
				'TEAM_NAME' => $info['team_name'],
				//'SIGN_PWD'  => $info['sign_pwd'],
				'EMAIL'		=> $info['email'],
				//'PHONE_NUM'	=> $info['phone_num'],
				'uid'		=> $uid
				);
		//dump($data);
		//die;
		$id = $account->data($data)->add();
		//dump($info);
		//dump('id = '.$id);
		if ($id > 0 ){
			$data = array(
				'team_name' => $info['team_name'],
				'leader'    => $uid
			);
			
			$teams = M('AlictfTeam');
			$team_id = $teams->data($data)->add();
			//dump('team_id = '.$team_id);
			//die;
			$connection = M('AlictfTeamMember')->data(array('team_id' => $team_id,'uid'=>$uid,'add_time'=> date('Y-m-d H:i:s')))->add();
			// dump($connection);
			// die;
			if ($connection <= 0) {
				return 0 ;
			}else return 1;


			
			
		}else{
			//$this->error('账户信息保存失败！');
			return 0;
		}	
	}

} 