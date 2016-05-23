<?php

namespace Home\Model;
use Think\Model;

class AlictfTeamsModel extends Model{
	public function addTeam($info){
		$account = M('AlictfAccount');
		$data = array(
				'sign_name' => $info['sign_name'],
				'TEAM_NAME' => $info['TEAM_NAME'],
				'sign_pwd'  => $info['sign_pwd'],
				'email'		=> $info['email'],
				'phone_num'	=> $info['phone_num'],
				);
		$id = $account->data($data)->add();
		//dump($info);
		//dump('id = '.$id);
		if ($id > 0 ){
			$data = array(
				'leader_id' => $id,
				'TEAM_NAME' => $info['TEAM_NAME'],
				'status'    => 1
			);

			$teams = M('AlictfTeams');
			$teams_id = $teams->data($data)->add();
			//dump('team_id = '.$team_id);

			$ans = $account->where('id = '.$id)->save(array('teamid'=>$teams_id));
			//dump('ans ='.$ans);
			if($ans!=false){
				 return 1;
			}else{
				//$this->error('teamid 保存失败！');
				return 0;
			}
			
		}else{
			//$this->error('账户信息保存失败！');
			return 0;
		}	
	}

} 