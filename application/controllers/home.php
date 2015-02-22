<?php 

class Home extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function contactus()
	{
		$this->load->view('header');
		$this->load->view('contactus');
		$this->load->view('footer');
	}


    /////////////////////////////////////////////////////////////////
    //         functions that are used in chatroom.php            //
    ////////////////////////////////////////////////////////////////		
	public function chatroom($msg=false)
	{
		$data['message']=$msg;
		$this->load->view('header');
		$this->load->view('chatroom',$data);
		$this->load->view('footer');
	}

	public function login()
	{
		$option = $this->input->post("option");
		
		if($this->users_model->login_model())
		{
			
			if ($option == 'L' || $option == 'l') 
			{
				redirect('home/catogories');
			}
			
			elseif ($option == 'E' || $option == 'e') 
			{
				redirect('home/show_portifolio');
			}
			
		}
		else
		{
			$this->chatroom(true);
		}
	}


	public function signup()
	{
		//getting data from form from chatroom page
		$name= $this->input->post('name');
		$username= $this->input->post('username');
		$email= $this->input->post('email');
		$gender= $this->input->post('gender');
		$password= $this->input->post('password');
		$rpassword= $this->input->post('rpassword');
		$country=$this->input->post('country');
		$userfile=$this->input->post('userfile');
		
		///////////////////validation function/////////////////////////////////
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[rpassword]');
		$this->form_validation->set_rules('rpassword', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('country', 'Country name', 'required');
		
			
		if ($this->form_validation->run() == FALSE)
		{
			$this->chatroom();
			return;
		}
		else
		{

			$this->db->where('email',$email);
			$q=$this->db->get('signup');
		
			if ($q->num_rows()==1) 
			{
			 $this->chatroom();
			 return;
			}
			else
			{
				//$this->users_model->signup_model();

				$config['upload_path']='./upload';
				$config['allowed_types']='gif|jpg|png|jpeg';
				$config['max_size']='1000000000';


				$this->load->library('upload',$config);
			
				if ($this->upload->do_upload()) 
				{
					$file_data=$this->upload->data();
					if($this->users_model->signup_model($file_data['file_name']))
					{
						redirect('home/chatroom');
					}
					else
					{
						echo "some problem";
					}
					
				}
				
				else
				{
				
					$data=$this->upload->display_errors();
					print_r($data);
			    }
				
		    }

		}
	}

	/////////////////////////////////////////////////////////////////


	/////////////////////////////////////////////////////////////////
    //         after login page this page will be displayed       //
    ////////////////////////////////////////////////////////////////
	public function catogories()
	{
		$log=$this->session->userdata('logged_in');
		
		if($log==True)
		{
			$data['result']=$this->users_model->catogories();
				
			$this->load->view('header');
			$this->load->view('catogories',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('home/chatroom');
		}
	}
	////////////////////////////////////////////////////////////////


	/////////////////////////////////////////////////////////////////
    //         from catogries visit to desired catogory           //
    //         directly all question on that page will be display //
    //         by sports function while new question to data base //
    //         by question function                               //
    ////////////////////////////////////////////////////////////////

	public function sports()
	{
		$log=$this->session->userdata('logged_in');
		
		if($log==True)
		{
			$data['result']=$this->users_model->updatepage();
			
			$cat_id=$this->input->get("cat_id");
			$data['topics']=$this->users_model->topics($cat_id);
			
			$this->load->view('header2');
			$this->load->view('sports',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('home/chatroom');
		}	
	}

	public function question()
	{
		$question= $this->input->post('question');
		$cat_id= $this->input->post('cat_id');	


		$this->load->library('form_validation');
		$this->form_validation->set_rules('question', 'Question', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect('home/sports?cat_id='.$cat_id);
			return;
		}
		else
		{
			if($this->users_model->question())
			{
				redirect('home/sports?cat_id='.$cat_id);
			}
			else
			{
				echo "some error";
			}
		}
	}

	////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////
    //         After selecting specific question that question     //
    //         along with the given answer will be display by      //
    //         by show_question and new answer to data base by    //
    //         by answer  function                               //
    ////////////////////////////////////////////////////////////////

	public function show_question($topic_id2="")
	{
		$log=$this->session->userdata('logged_in');
		
		if($log==True)
		{

			$topic_id=$this->input->get("topic_id");
		
			if (!empty($topic_id2))
				$topic_id = $topic_id2; 			

			$this->db->where('id',$topic_id);
			$q=$this->db->get('topics');
			
			$data['question']=$q->result();

			$this->db->where('topic_id',$topic_id);
			$q=$this->db->get('answer');
			$data['answer']=$q->result();

			$data['result']=$this->users_model->updatepage();
			
			$this->load->view('header2');
			$this->load->view('show_question',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('home/chatroom');
		}
	}

	public function answer()
	{
		$answer= $this->input->post('answer');
		$topic_id= $this->input->post('topic_id');	


		$this->load->library('form_validation');
		$this->form_validation->set_rules('answer', 'Answer', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->show_question();
			return;
		}
		else
		{
			if($this->users_model->answer())
			{
				//echo "inserted in data base";
				//$this->show_question($topic_id);
				redirect('home/show_question?topic_id='.$topic_id);
			}
			else
			{
				echo "some error";
			}
		}
	}		

	////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////
    //         profile of the member who has asked or answered    //
    //         a question is displayed by profile function        //
    ////////////////////////////////////////////////////////////////
	
	public function profile()
	{
		$log=$this->session->userdata('logged_in');
		
		if($log==True)
		{
			$id_profile=$this->input->get("id");

			$this->db->where('id',$id_profile);
			$q=$this->db->get('signup');
			$data['info']=$q->result();

			$data['result']=$this->users_model->updatepage();

			$this->load->view('header');
			$this->load->view('profile',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('home/chatroom');
		}
	}
	
	////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////
    //         message to particular member of a group            //
    ////////////////////////////////////////////////////////////////

	public function message()
	{
		$r_id=$this->input->get("id");
		echo $r_id;
		$s_id=$this->session->userdata('user_id');
		echo $s_id;

		$ss_id=$r_id;
		$rr_id=$s_id;


		//$this->db->where('s_id', $s_id);
		//$this->db->where('r_id', $r_id);

		//$array = array('s_id' => $s_id, 'r_id' => $r_id, 'ss_id' => $ss_id, 'rr_id' => $rr_id);
		//print_r($array);
		//$array1 = array('ss_id' => $r_id, 'rr_id' => $s_id);
		
		//$this->db->where($array);
		//$this->db->or_where($array1);

		$q = $this->db->query("select * from message where ((s_id=$s_id || s_id=$r_id) && (r_id=$r_id || r_id=$s_id))");
		///////////////another try//////////////////$this->db->or_where('s_id',$r_id, 'r_id',$s_id);		

		//$where="s_id=$s_id AND r_id=$r_id OR ss_id=$r_id AND rr_id=$s_id";
		///$this->db->where($where);

		$q2=$this->db->get('message');
		$data['msg']=$q->result();

		
		$data['result']=$this->users_model->updatepage();

		$this->load->view('header');
		$this->load->view('message',$data);
		$this->load->view('footer');	
	}

	public function msg()
	{
		$r_id=$this->input->post('id');
		$message=$this->input->post('answer');
		echo $r_id;

		if($this->users_model->msg())
		{
			redirect('home/message?id='.$r_id);
		}
		else
		{
			echo "nahi howa";
		}

			
	}

	////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////
    //         updating your signup data                           //
    ////////////////////////////////////////////////////////////////

	public function updatepage()
	{
		$log=$this->session->userdata('logged_in');
		
		if($log==True)
		{
			$data['result']=$this->users_model->updatepage();

			$this->load->view('header');
			$this->load->view('updatepage', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('home/chatroom');
		}
	}

	public function updatedata()
	{
		$name= $this->input->post('name');
		$username= $this->input->post('username');
		$email= $this->input->post('email');
		$gender= $this->input->post('gender');
		$password= $this->input->post('password');
		$rpassword= $this->input->post('rpassword');
		$country=$this->input->post('country');
		$userfile=$this->input->post('userfile');
		$school=$this->input->post('school');
		$college=$this->input->post('college');
		$profession=$this->input->post('profession');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[rpassword]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->updatepage();
			return;
		}
		
		else
		{

			/*$this->db->where('email',$email);
			$q=$this->db->get('signup');
		
			if ($q->num_rows()==1) 
			{
			 $this->updatepage();
			 return;
			}
			else
			{ */
				//$this->users_model->signup_model();

				$config['upload_path']='./upload';
				$config['allowed_types']='gif|jpg|png|jpeg';
				$config['max_size']='1000000000';


				$this->load->library('upload',$config);
			
				if ($this->upload->do_upload()) 
				{
					$file_data=$this->upload->data();
					
					if($this->users_model->update_data($file_data['file_name']))
					{
						redirect('home/updatepage');
					}
					else
					{
						echo "some problem";
					}
					
				}
				
				else
				{
				
					$data=$this->upload->display_errors();
					print_r($data);
			    }
				
		    
		}
	}	
	////////////////////////////////////////////////////////////////

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('home/chatroom');
	}

	public function learning()
	{
		$this->load->view('header');
		$this->load->view('learning');
		$this->load->view('footer');
	}

	public function portifolio()
	{
		$log=$this->session->userdata('logged_in');

		if ($log == True) 
		{
			$data['result']=$this->users_model->catogories();
		}

		$this->load->view('header2');
		$this->load->view('portifolio',$data);
		$this->load->view('footer');
	}

	public function portifolio_data()
	{
		$log=$this->session->userdata('logged_in');

		$skill		= $this->input->post('skill');
		$description=$this->input->post('description');
		$userfile	=$this->input->post('userfile');

		$config['upload_path']='./upload';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='1000000000';


		$this->load->library('upload',$config);
			
		if ($this->upload->do_upload()) 
		{
			$file_data=$this->upload->data();
			if($this->users_model->portifolio_data($file_data['file_name']))
			{
				//redirect('home/portifolio');
				echo "uploaded";
			}
			else
			{
				echo "some problem";
			}
					
		}
				
		else
		{
				
			$data=$this->upload->display_errors();
			print_r($data);
		}
	}

	public function portifolio_data1()
	{
		$log=$this->session->userdata('logged_in');

		$latitude		= $this->input->get("Latitude");
		$longitude		= $this->input->get("Longitude");

		if($this->users_model->portifolio_location($latitude, $longitude))
			redirect('home/portifolio');
		else
			echo "some error";
	}

	public function show_portifolio()
	{
		$log=$this->session->userdata('logged_in');
		
		if($log==True)
		{
			

			$this->db->where('id',$log);
			$q=$this->db->get('signup');
			$data['info']=$q->result();


			$this->db->where('id',$log);
			$q=$this->db->get('portifolio_data');
			$data['result']=$q->result();

			$this->load->view('header');
			$this->load->view('show_portifolio',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('home/chatroom');
		}
	}





}
?>

