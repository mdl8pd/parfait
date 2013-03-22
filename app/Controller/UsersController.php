<?php

class UsersController extends AppController {
	
	var $name = 'Users';
	
	function profile() {             
		App::import('Vendor', 'facebook', array('file' => 'facebook/facebook.php'));    
		$facebook = new Facebook(array(
      			'appId'  => Configure::read("FB_APP_ID"),
      			'secret' => Configure::read("FB_APP_SECRET"),
    		));
     
    		$uid = $facebook->getUser();    
		if ($uid) {
      			try {
        			$user_profile = $facebook->api('/me');
				$this->Session->write('user_profile', $user_profile);
				$this->Session->write('login_type', "facebook");
				$this->Session->write('user_id', $uid);

				if(!$this->User->find('all', array('conditions' => array('User.user_id' => $uid)))) {
					$this->User->set(array(
						'user_id' => $uid,
						'login_type' => 'facebook',
						'name' => $user_profile['name'],
					));
					$this->User->save();
				} 
      			} catch (FacebookApiException $e) {  
        			$user = null;
      			}
    		}
    
		$loginUrl = $facebook->getLoginUrl(array(
                	'scope' => 'user_about_me,user_birthday,email,publish_stream,offline_access'
            	),''
    		);
     
 
    		if (!$uid) {
        		echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
        		exit;
    		}
    	
    		$this->Session->setFlash(__('You successfully logged in.'),'alert-success');
	}

	function logout() {
		$this->Session->destroy();
		// $this->Auth->logout();
		$this->redirect('/');
	}

}
?>
