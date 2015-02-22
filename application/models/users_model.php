<?php 

	class Users_model extends  CI_Model
	{

		public function login_model()
		{
			$email      =$this->input->post('email');
			$password   =$this->input->post('password');
			$option		=$this->input->post('option');


			$this->db->where('email',$email);
			$this->db->where('password',$password);

			$q=$this->db->get('signup');

			if ($q->num_rows()==1) 
			{
				$newdata = array( 'user_id' => $q->row()->id,
					              'user_image'=>$q->row()->image,
					              'username'=>$q->row()->username,
								  'logged_in'=>true);
				$this->session->set_userdata($newdata);
				return true;
			}
			else
			{
				return false;
			}
		}

		public function signup_model($file_name)
		{

			$name      =$this->input->post('name');
			$username  =$this->input->post('username');
			$email     =$this->input->post('email');
			$country   =$this->input->post('country');
			$password  =$this->input->post('password');
			$rpassword =$this->input->post('password');
			$gender    =$this->input->post('gender');
			//$userfile  =$this->input->post('userfile');
			
			$data      =array('name' =>$name, 'username' =>$username, 'email' =>$email, 'country' =>$country, 
							  'password' => $password, 'rpassword' =>$rpassword , 'gender' =>$gender , 'image'=>$file_name);


			if($this->db->insert('signup',$data))
				return true;
			else
				return false;
		}

		public function update_data($file_name)
		{
			$id=$this->session->userdata('user_id');

			$name= $this->input->post('name');
			$username= $this->input->post('username');
			$email= $this->input->post('email');
			$gender= $this->input->post('gender');
			$password= $this->input->post('password');
			$rpassword= $this->input->post('rpassword');
			$country=$this->input->post('country');
			//$userfile=$this->input->post('userfile');
			$school=$this->input->post('school');
			$college=$this->input->post('college');
			$profession=$this->input->post('profession');

			$data      =array('name' =>$name, 'username' =>$username, 'email' =>$email, 'country' =>$country, 
							  'password' => $password, 'rpassword' =>$rpassword , 'gender' =>$gender , 'image'=>$file_name,
							  'school'=>$school, 'college'=>$college, 'profession'=>$profession);

			$this->db->where('id',$id);
			if($this->db->update('signup',$data))
			{
				return true;
			}
			else
			{
				echo "database not updated";
			}


		}

		//////////////////////// for getting data from database questions////////////////
		/////////////////////////////////////////////////////////////////////////////////
		public function topics($cat_id)
		{
			$this->db->where('cat_id',$cat_id );
			$q=$this->db->get('topics');
			return $q->result();
		}

		///////////////////inserting question to database////////////////////////////////////
		/////////////////////////////////////////////////////////////////////////////////////

		public function question()
		{
			$id = $this->session->userdata('user_id');
			$image = $this->session->userdata('user_image');
			$username = $this->session->userdata('username');
			$cat_id= $this->input->post('cat_id');

			$question= $this->input->post('question');

			$data= array('name' => $question , 'user_id'=>$id , 'cat_id'=>$cat_id , 'image'=>$image, 'username'=>$username);

			if($this->db->insert('topics',$data))
				return true;
			else
				return false;
		}
		//////////////////////////////////////////////////////////////////// //////////////////////

		public function answer()
		{
			$id = $this->session->userdata('user_id');
			$image = $this->session->userdata('user_image');
			
			$topic_id= $this->input->post('topic_id');
			$answer= $this->input->post('answer');

			$data= array('answer' => $answer , 'user_id'=>$id , 'topic_id'=>$topic_id, 'image'=>$image);

			if($this->db->insert('answer',$data))
				return true;
			else
				return false;
		}	
		
		public function catogories()
		{
			$id=$this->session->userdata('user_id');
			$this->db->where('id', $id);
			$q=$this->db->get('signup');
			return $q->result();
		}


		public function updatepage()
		{
			$id=$this->session->userdata('user_id');
			$this->db->where('id', $id);
			$q=$this->db->get('signup');
			return $q->result();
		}

		/*public function message()
		{
			$s_id=$this->session->userdata('user_id');
			$r_id=$this->input->post('id');

			echo $r_id;
			//$this->db->where('s_id',$s_id, 'r_id',$r_id);
			$where="s_id=$s_id AND r_id=$r_id OR s_id=$r_id AND r_id=$s_id";
			$this->db->where($where);

			$q=$this->db->get('message');
			return $q->result();
		}*/

		public function msg()
		{
			$s_id=$this->session->userdata('user_id');
			$r_id=$this->input->post('id');
			$image = $this->session->userdata('user_image');			
			$message=$this->input->post('answer');

			$data= array('image'=>$image, 'message' => $message , 's_id'=>$s_id , 'r_id'=>$r_id , 'ss_id'=>$r_id , 'rr_id'=>$s_id);

			if($this->db->insert('message',$data))
				return true;
			else
				return false;
		}

	

	}
?>