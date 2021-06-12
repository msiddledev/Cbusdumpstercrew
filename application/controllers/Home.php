<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends Front_Controller
{
	
	public function index()
	{
		$this->load->view('front/homeView');
	}
	
	public function view_order()
	{
		$this->load->library('stripe_lib'); 
		$this->load->view('front/order-form');
	}


public function dumpsters()
	{
		$this->load->view('front/dumpsters');
	}
	public function under_construction()
	{
		$this->load->view('front/under_construction');
	}
	public function dumpster_20()
	{
		$this->load->view('front/dumpster_20');
	}
	public function dumpster_40()
	{
		$this->load->view('front/dumpster_40');
	}
	public function payments()
	{
		print_r($_POST);die;
	}
	
	public function payment()
	{
		$data = array(
			'productquantity' => $this->input->post('productquantity'),
			'productquantity1' => $this->input->post('productquantity1'),
			'lengthofrentalperiod' => $this->input->post('lengthofrentalperiod'),
			'customername' => $this->input->post('customername'),
			'dateofservice' => $this->input->post('dateofservice'),
			'timeofservice' => $this->input->post('timeofservice'),
			'pickupdate' => $this->input->post('pickupdate'),
			'timepickupdate' => $this->input->post('timepickupdate'),
			'streetaddress' => $this->input->post('streetaddress'),
			'zipcode' => $this->input->post('zipcode'),
			'phonenumber' => $this->input->post('phonenumber'),
			'emailaddress' => $this->input->post('emailaddress'),
			'totalprice' => $this->input->post('totalprice'),
		);
		
		$id = $this->global_model->insert_record('orderdelivery',$data);
		if($id)
		{
			$this->load->library('stripe_lib'); 
	        if(!empty($this->input->post('stripeToken')))
	        { 
	            // Retrieve stripe token and user info from the submitted form data 
	            $token  = $this->input->post('stripeToken'); 
	            $name = $this->input->post('customername'); 
	            $email = $this->input->post('emailaddress'); 
	            $customer = $this->stripe_lib->addCustomer($email, $token); 
	             
	            if($customer){ 
	                $charge = $this->stripe_lib->createCharge($customer->id, "Order Payment", $this->input->post('totalprice')); 
	                 
	                if($charge){ 
	                    if($charge['amount_refunded'] == 0 && empty($charge['failure_code']) && $charge['paid'] == 1 && $charge['captured'] == 1){ 
	                        // Transaction details  
	                        $transactionID = $charge['balance_transaction']; 
	                        $paidAmount = $charge['amount']; 
	                        $paidAmount = ($paidAmount/100); 
	                        $paidCurrency = $charge['currency']; 
	                        $payment_status = $charge['status']; 

	                        // If the order is successful 
	                        if($payment_status == 'succeeded'){ 

	                        	$section['body'] = '<table width="100%" border="1px" >';
								$section['body'] .='<tr><td>Customer Name:</td><td>'.$this->input->post('customername').'<td></tr>';
								$section['body'] .='<tr><td>Phone Number:</td><td>'.$this->input->post('phonenumber').'<td></tr>';
								$section['body'] .='<tr><td>Customer Email:</td><td>'.$this->input->post('emailaddress').'<td></tr>';
								$section['body'] .='<tr><td>Customer Zip:</td><td>'.$this->input->post('zipcode').'<td></tr>';
								$section['body'] .='<tr><td>Customer Address:</td><td>'.$this->input->post('streetaddress').'<td></tr>';
								$section['body'] .='<tr><td>Pickup Date:</td><td>'.$this->input->post('pickupdate').'<td></tr>';
								$section['body'] .='<tr><td>Pickup Time:</td><td>'.$this->input->post('timepickupdate').'<td></tr>';
								$section['body'] .='<tr><td>Date of Service:</td><td>'.$this->input->post('dateofservice').'<td></tr>';
								$section['body'] .='<tr><td>Time of service Name:</td><td>'.$this->input->post('timeofservice').'<td></tr>';
								$section['body'] .='<tr><td>Length of rental period:</td><td>'.$this->input->post('lengthofrentalperiod').'<td></tr>';
								$section['body'] .='<tr><td>Product Quantity one:</td><td>'.$this->input->post('productquantity1').'<td></tr>';
								$section['body'] .='<tr><td>Product Quantity:</td><td>'.$this->input->post('productquantity').'<td></tr>';
								$section['body'] .='<tr><td>Total Price:</td><td>'.$this->input->post('totalprice').'<td></tr>';
								$section['body'] .='<tr><td>Thankyou For Your Purchase</td></tr>';
								$section['body'].= '</table>';


								$section['subject'] = 'New Order From The Dumpster Crew';
								$body = $this->load->view('email/template',$section, TRUE);
								$mailone = send_email($this->input->post('emailaddress'),'New Order From The Dumpster Crew',$body);
								$mailtwo = send_email('order@cbusdumpsters.com','New Order From The Dumpster Crew',$body);

	                            $this->landingpage($id);
	                        } 
	                    } 
	                } 
	            } 
	        }


		}
		else
		{
			print_r('Failed');
		}
	}

	public function landingpage($id)
	{
		$data['orderdata'] = $this->global_model->records_all('orderdelivery',array('id' => $id));
		$this->load->view('front/landingpage',$data);
	}
	
	
}
