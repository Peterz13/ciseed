<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function getdata()
	{
		$this->load->model('user_model');
		$userdata = array();
		$user = $this->user_model->getAllUser();

		foreach ($user as $data) {
			$userdata[] = array(
				'id' => $data->id,
				'username' => $data->user_name,
				'password' => $data->password,
				);
		}
		echo json_encode($userdata);

	}


	public function savedata()
	{
		$this->load->model('user_model');
		  $postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
    	
    	$data = array(
			'user_name' => $request[0]->username,
			'password' => $request[0]->password,
		);
		 $userID = $this->user_model->addUser($data);
		

		if($userID) {
			echo json_encode(array('status' => 'success', 'userID' => $userID));

		} else {
			echo json_encode(array('status' => 'error'));

		}	


	}

		public function randomdata()
	{
		$this->load->model('user_model');
		$user = $this->user_model->random();
		
		foreach ($user as $data) {
			$userdata[] = array(
				'id' => $data->id,
				'username' => $data->user_name,
				'password' => $data->password,
				);
		}
		echo json_encode($userdata);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */