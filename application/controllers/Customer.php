<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends Front_Controller
{

	public function index()
	{
		if(empty($this->session->userdata('customer_id')))
		{
			$this->session->set_flashdata('msg', '2');
			$this->session->set_flashdata('alert_data', 'Please Login');
			redirect();	
		}
		$data['customerDetails'] = $this->global_model->records_single('customer',array('customer_id' =>$this->session->userdata('customer_id')));
		$data['main_content']= 'customer/customer-dashboard';
		$this->load->view('front/inc/view',$data);
	}

	public function customer_dashboard()
	{
		if(empty($this->session->userdata('customer_id')))
		{
			$this->session->set_flashdata('msg', '2');
			$this->session->set_flashdata('alert_data', 'Please Login');
			redirect();	
		}
		$data['customerData'] = $this->global_model->records_single('customer',array('customer_id' =>$this->session->userdata('customer_id')));
		$data['main_content'] = 'customer/customer-dashboard';				
		$this->load->view('front/inc/view',$data);
	}
	
	public function customer_invoice($id)
	{
		if(empty($this->session->userdata('customer_id')))
		{
			$this->session->set_flashdata('msg', '2');
			$this->session->set_flashdata('alert_data', 'Please Login');
			redirect();	
		}
		$data['order'] = $this->global_model->records_single('orders',array('orders_id' =>$id));
		$data['main_content'] = 'customer/invoicenew';				
		$this->load->view('front/inc/view',$data);
	}

	public function sign_in()
	{
		
		if($_POST)
		{
			$email = $this->input->post('customer_email',TRUE);
			$password = $this->input->post('customer_password',TRUE);
			$this->form_validation->set_rules("customer_email","",'valid_email');
			if($this->form_validation->run())
			{
				$where = array('customer_email'=>$email);
			}
			else
			{
				$where = array('customer_username'=>$email);
			}
			
			$result = $this->global_model->records_single('customer',$where);

			if($result)
			{
				if($this->encryption->decrypt($result->customer_password) == $password)
				{
					$session_data = array(
						'customer_id' => $result->customer_id,				
						'customer_email' => $result->customer_email,						
					);				
					$this->session->set_userdata($session_data);
					$this->session->set_flashdata('msg', '1');
					$this->session->set_flashdata('alert_data', 'Login Successfull.');

					redirect('customer-dashboard');
				}
				else
				{
					$this->session->set_flashdata('msg', '2');
					$this->session->set_flashdata('alert_data', 'Invalid Email Or Password.');
					redirect($_SERVER['HTTP_REFERER']);
				}							
			}
			else
			{				
				$this->session->set_flashdata('msg', '2');
				$this->session->set_flashdata('alert_data', 'Invalid Email Or Password.');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else
		{
			if(!empty($this->session->userdata('customer_id')))
			{
				redirect('customer-dashboard');
			}
			else
			{
				$this->session->set_flashdata('msg', '2');
				$this->session->set_flashdata('alert_data', 'Invalid Email Or Password.');
				redirect($_SERVER['HTTP_REFERER']);
			}
			
		}
	}
	
	public function recover_password()
	{
	    $CustomerEmail = $this->input->post('customer_email');
	    
    	   $check = $this->global_model->coloum_record_one('customer',array('customer_email' => $CustomerEmail),'customer_id');
    	   if($check)
    	   {
    	       $today = date("Ymd");
    			$rand = strtoupper(substr(uniqid(sha1(time())),0,12));
    			$unique = $today . $rand;
    			$forgot_password_token = "MOYKA".$unique."AKYOM";
    			
    			$recovery_Link = base_url('customer/password_recovery/').$forgot_password_token;
    			
    			$this->global_model->update_record('customer',array('forgot_password_token'=>$forgot_password_token),array('customer_id' => $check));
    			
    			$section['body'] = '<table width="100%" border="1px" >';
				$section['body'] .='<tr><td><h3>Welcome to Moykawear!<br></h3><td></tr>';
				$section['body'] .='<tr><td>Password Recovery Link:</td><td><a href="'.$recovery_Link.'">Click here to recover password</a><td></tr>';
				$section['body'] .='<br>';
				$section['body'] .='<tr><td>See You Soon!<br></td></tr>';
				$section['body'].= '</table>';
				$section['subject'] = 'Password Recovery';
				$body = $this->load->view('email/template',$section, TRUE);
				
				send_email($CustomerEmail,'Moyka - Password Recovery',$body);
    			
    			
			
    	       echo "<div>Password recovery link has been sent to your registered email.</div>";
    	   }
    	   else
    	   {
    	       echo "<div class='text-danger'>Invalid email or user account is disabled</div>";
    	   }
	}
	
	public function password_recovery($recoverToken)
	{
	    $data['customerData'] = $this->global_model->records_single('customer',array('forgot_password_token' => $recoverToken));
	    $data['main_content']= 'customer/recoverpassword';
		$this->load->view('front/inc/view',$data);
	}
	
		public function update_customer_password($token)
	{
				$this->form_validation->set_rules("password","Password",'required');
				$this->form_validation->set_rules("confirm_password","Confirm Password",'required|matches[password]');
				if($this->form_validation->run())
				{
					$data = array(
						"customer_password" => $this->encryption->encrypt($this->input->post("password",TRUE)),
						"forgot_password_token" => "",
					);

					$this->global_model->update_record('customer',$data,array('forgot_password_token'=>$token));
					$this->session->set_flashdata('msg', '1');
					$this->session->set_flashdata('alert_data', 'Customer Updated Successfully');
					redirect('');
				}
				else
				{
					$this->session->set_flashdata('msg', '2');
					$this->session->set_flashdata('alert_data','Password Match Failed');
					redirect($_SERVER['HTTP_REFERER']);


				}
	}

	public function sign_up()
	{
		if(!empty($this->session->userdata('customer_id')))
		{
			$this->session->set_flashdata('msg', '1');
			$this->session->set_flashdata('alert_data', 'Already in a session');
			redirect();	
		}
		if($_POST)
		{
			$this->form_validation->set_rules("customer_first_name","First Name",'required|min_length[3]');
			$this->form_validation->set_rules("customer_last_name","Last Name",'required');
			$this->form_validation->set_rules("customer_email","Customer Email",'required|is_unique[customer.customer_email]');
			$this->form_validation->set_rules("customer_password","Password",'required');
			$this->form_validation->set_rules("confirm_password","Confirm Password",'required|matches[customer_password]');

			if($this->form_validation->run())
			{

				$data = array(
					"customer_first_name" => $this->input->post("customer_first_name",TRUE),
					"customer_last_name" => $this->input->post("customer_last_name",TRUE),
					"customer_email" => $this->input->post("customer_email",TRUE),
					"customer_password" => $this->encryption->encrypt($this->input->post("customer_password",TRUE)),
				);
				$this->global_model->insert_record('customer',$data);
				
				// $section['body'] = '<table width="100%" border="1px" >';
				// $section['body'] .='<tr><td><h3>Welcome to Moyka, let the savings begin!<br></h3><td></tr>';
				// $section['body'] .='<tr><td>Dear '.$this->input->post("customer_first_name",TRUE).' '.$this->input->post("customer_last_name",TRUE).',<br><td></tr>';
				// $section['body'] .='<tr><td>Thank you for joining Moyka. Enjoy an amazing shopping experience in just a click.<br><h4><b>YOUR DETAILS</b></h4><td></tr>';
				// $section['body'] .='<tr><td>First Name:</td><td>'.$this->input->post("customer_first_name",TRUE).'<td></tr>';
				// $section['body'] .='<tr><td>Last Name:</td><td>'.$this->input->post("customer_last_name",TRUE).'<td></tr>';
				// $section['body'] .='<tr><td>Mobile Number:</td><td>'.$this->input->post("customer_phone_number",TRUE).'<td></tr>';
				// $section['body'] .='<tr><td>Customer Email:</td><td>'.$this->input->post("customer_email",TRUE).'<td></tr>';
				// $section['body'] .='<tr><td>Password :</td><td>'.$this->input->post("customer_password",TRUE).'<td></tr>';
				// $section['body'] .='<br>';
				// $section['body'] .='<tr><td>See You Soon!<br>Your Moyka</td></tr>';
				// $section['body'].= '</table>';
				// $section['subject'] = 'New customer registration';
				// $body = $this->load->view('email/template',$section, TRUE);
				// $result = send_email($this->input->post("customer_email",TRUE),'Moyka - Your account has been created',$body);
				// $result = send_email($this->adminEmail,'Moyka - New user registration',$body);

				$this->session->set_flashdata('msg', '1');
				$this->session->set_flashdata('alert_data', 'customer Added Successfully Proceed To Login');
				
				redirect('login-signup');
			}
			else
			{
				$this->session->set_flashdata('msg', '2');
				$this->session->set_flashdata('alert_data', 'Registration Failed');
				$data['main_content'] = 'login-signup';				
				$this->load->view('front/inc/view',$data);
			}
			
		}
		else
		{
			$data['main_content'] = 'login-signup';				
			$this->load->view('front/inc/view',$data);
		}
	}
	public function update_checkout_profile()
	{
		if($_POST)
		{
			$this->form_validation->set_rules("customer_first_name","First Name",'required|min_length[3]');
			$this->form_validation->set_rules("customer_last_name","Last Name",'required');
			$this->form_validation->set_rules("customer_address","Address",'required');
			$this->form_validation->set_rules("customer_phone_number","Mobile Number",'required|min_length[10]|max_length[10]');
			
			


			if($this->form_validation->run())
			{
				$data = array(
					"customer_first_name" => $this->input->post("customer_first_name",TRUE),
					"customer_last_name" => $this->input->post("customer_last_name",TRUE),
					"customer_address" => $this->input->post("customer_address",TRUE),
					"customer_billing_address" => $this->input->post("customer_billing_address",TRUE),
					"country" => $this->input->post("country",TRUE),
					"state" => $this->input->post("state",TRUE),
					"customer_phone_number" => $this->input->post("customer_phone_number",TRUE),
					"zip_code" => $this->input->post("zip_code",TRUE),	
				);
				$this->global_model->update_record('customer',$data,array('customer_id'=>$this->session->userdata('customer_id')));
				$this->session->set_flashdata('msg', '1');
				$this->session->set_flashdata('alert_data', 'customer Updated Successfully Proceed To Checkout');
				$response = array(
					'type' => "success",
				);
				echo json_encode($response);
			}
			else
			{

				$this->form_validation->set_error_delimiters('', '');
				$response = array(
					'type' => "valid_error",
					'customer_first_name' => form_error('customer_first_name','<div style="color:#de002e" class="p-1 m-1">','</div>'),
					'customer_last_name' => form_error('customer_last_name','<div style="color:#de002e" class="p-1 m-1">','</div>'),
					'customer_phone_number' => form_error('customer_phone_number','<div style="color:#de002e" class="p-1 m-1">','</div>'),
					'customer_address' => form_error('customer_address','<div style="color:#de002e" class="p-1 m-1">','</div>'),
				);
				echo json_encode($response);
			}
			
		}
		else
		{
			$data['main_content'] = 'register';				
			$this->load->view('front/inc/view',$data);
		}
	}
	public function customer_logout()
	{
		$this->session->unset_userdata('customer_id');
		$this->session->unset_userdata('customer_email');
		redirect();
	}

	public function customer_orders()
	{
		if(empty($this->session->userdata('customer_id')))
		{
			$this->session->set_flashdata('msg', '2');
			$this->session->set_flashdata('alert_data', 'Please Login');
			redirect();	
		}
		$data['orders'] = $this->global_model->records_all('orders',array('customer_id' => $this->session->userdata('customer_id')));
		$data['main_content']= 'customer/order-history';
		$this->load->view('front/inc/view',$data);
	}
	public function customer_edit_profile()
	{
		if(empty($this->session->userdata('customer_id')))
		{
			$this->session->set_flashdata('msg', '1');
			$this->session->set_flashdata('alert_data', 'Already in a session');
			redirect();	
		}
		if($_POST)
		{
			if(!empty($_POST['new_password']))
			{
				$this->form_validation->set_rules("new_password","",'required');
				$this->form_validation->set_rules("cnf_password","Confirm Password",'required|matches[new_password]');
				if($this->form_validation->run())
				{
					$data = array(
						"customer_password" => $this->encryption->encrypt($this->input->post("new_password",TRUE)),
					);

					$this->global_model->update_record('customer',$data,array('customer_id'=>$this->session->userdata('customer_id')));
					$this->session->set_flashdata('msg', '1');
					$this->session->set_flashdata('alert_data', 'Password Successfully');
					redirect('customer-profile');
				}
				else
				{
					$this->session->set_flashdata('msg', '2');
					$this->session->set_flashdata('alert_data','Password match failed');
					redirect('customer-profile');
				}
			}
			else
			{
				$this->form_validation->set_rules("customer_first_name","Username Name",'required|alpha');
				$this->form_validation->set_rules("customer_last_name","Username Name",'required|alpha');
				if($this->form_validation->run())
				{
					$data = array(
						"customer_first_name" => $this->input->post("customer_first_name",TRUE),
						"customer_last_name" => $this->input->post("customer_last_name",TRUE),
						"customer_address" => $this->input->post("customer_address",TRUE),
						"customer_phone_number" => $this->input->post("customer_phone_number",TRUE),
					);

					$this->global_model->update_record('customer',$data,array('customer_id'=>$this->session->userdata('customer_id')));
					$this->session->set_flashdata('msg', '1');
					$this->session->set_flashdata('alert_data', 'Customer Updated Successfully');
					redirect('customer-profile');
				}
				else
				{
					$this->session->set_flashdata('msg', '2');
					$this->session->set_flashdata('alert_data','Update Failed');
					redirect('customer-profile');


				}
			}

			
			
		}
		else
		{
			$data['customerDetails'] = $this->global_model->records_single('customer',array('customer_id' =>$this->session->userdata('customer_id')));
			$data['main_content']= 'customer/account-details';
			$this->load->view('front/inc/view',$data);
		}
		
	}

	

	



	


}
