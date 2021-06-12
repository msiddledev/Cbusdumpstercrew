<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('send_email')){	
	function send_email($send_to,$subject,$body){
		$ci =& get_instance();
		$config['mailtype'] ='html';
		$ci->email->set_header('Header1', 'Email Information');
		$ci->email->initialize($config);    
		$ci->email->from("info@cbusdumpsters.com","The Dumpster Crew");
		$ci->email->to($send_to);		
		$ci->email->subject($subject);
		$ci->email->message($body);
		if($ci->email->send()){
			return TRUE;	
		}else{
			return FALSE;
		}
	}
}