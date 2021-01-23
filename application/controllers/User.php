<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->library('migration');

		if ($this->migration->current() === FALSE)
		{
				show_error($this->migration->error_string());
		}
		$this->session->sess_destroy();
		$this->load->view('login');
	}
	public function setup()
	{
		$data['title'] = "Installation Page";
		$this->load->view('setup',$data);
	}
	public function dashboard()
	{
		$data['title'] = "Dashboard";
		$data['total'] = $this->user_mo->total_count();
		$data['info'] = $this->user_mo->patient();
		$this->load->view('dashboard',$data);
	}
	public function appointment()
	{
		$data['title'] = "Appointment List";
		$data['info'] = $this->user_mo->patient_info();
		$data['ap_list'] = $this->user_mo->appointment_list();
		$this->load->view('appointment',$data);
	}
	public function prescription()
	{
		$data['title'] = "Prescription List";
		$data['info'] = $this->user_mo->getprescription();
		$this->load->view('prescription',$data);
	}
	public function billing()
	{
		$data['title'] = "Billing List";
		$data['info'] = $this->user_mo->getinvoice();
		$this->load->view('billing',$data);
	}
	public function patients()
	{
		$data['title'] = "Patient List";
		$data['info'] = $this->user_mo->patient_info();
		$this->load->view('patient',$data);
	}
	public function lockscreen()
	{
		$data['user'] = $this->user_mo->getuser();
		$this->load->view('lockscreen',$data);
	}
	public function recoverpassword()
	{
		$data['title'] = "Recover Password";
		$this->load->view('recoverpassword',$data);
	}
	public function profile()
	{
		$data['title'] = "Doctor's Profile";
		$data['info'] = $this->user_mo->user_info();
		$this->load->view('profile',$data);
	}
	public function addpatient()
	{
		$data['title'] = "Add New Patient";
		$this->load->view('addpatient',$data);
	}

	public function patient_profile()
	{
		$data['title'] = "Patient Profile";
		$this->load->view('patientprofile',$data);
	}

	public function editpatient()
	{
		$data['title'] = "Edit Patient Profile";
		$this->load->view('editpatient',$data);
	}

	public function addprescription()
	{
		$data['title'] = "Add Prescription";
		$data['info'] = $this->user_mo->patient_info();
		$this->load->view('addprescription',$data);
	}

	public function print_prescription()
	{
		$data['title'] = "Print Prescription";
		$this->load->view('printprescription',$data);
	}

	public function download_prescription()
	{
		$id = $this->uri->segment(3);
        $row_data = $this->user_mo->getprescriptionbyid($id);
		// print_r($row_data);
		$this->load->library('pdf');
		$path="assets/images/background1.jpg";
	
		$html = '

		<html>
		<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
		<style type="text/css">
		<!--
		span.cls_003{font-family:"Arabic Typesetting",serif;font-size:18.4px;color:rgb(36,94,134);font-weight:bold;font-style:normal;text-decoration: none}
		div.cls_003{font-family:"Arabic Typesetting",serif;font-size:18.4px;color:rgb(36,94,134);font-weight:bold;font-style:normal;text-decoration: none}
		span.cls_004{font-family:"Arabic Typesetting",serif;font-size:18.4px;color:rgb(33,136,95);font-weight:normal;font-style:normal;text-decoration: none}
		div.cls_004{font-family:"Arabic Typesetting",serif;font-size:18.4px;color:rgb(33,136,95);font-weight:normal;font-style:normal;text-decoration: none}
		span.cls_002{font-family:"Arabic Typesetting",serif;font-size:9.5px;color:rgb(38,102,146);font-weight:bold;font-style:normal;text-decoration: none}
		div.cls_002{font-family:"Arabic Typesetting",serif;font-size:9.5px;color:rgb(38,102,146);font-weight:bold;font-style:normal;text-decoration: none}
		span.cls_007{font-family:Arial,serif;font-size:9.7px;color:rgb(38,102,146);font-weight:bold;font-style:normal;text-decoration: none}
		div.cls_007{font-family:Arial,serif;font-size:9.7px;color:rgb(38,102,146);font-weight:bold;font-style:normal;text-decoration: none}
		span.cls_010{font-family:Arial,serif;font-size:21.5px;color:rgb(38,102,146);font-weight:bold;font-style:normal;text-decoration: none}
		div.cls_010{font-family:Arial,serif;font-size:21.5px;color:rgb(38,102,146);font-weight:bold;font-style:normal;text-decoration: none}
		span.cls_011{font-family:"Arabic Typesetting",serif;font-size:7.1px;color:rgb(33,136,95);font-weight:bold;font-style:normal;text-decoration: none}
		div.cls_011{font-family:"Arabic Typesetting",serif;font-size:7.1px;color:rgb(33,136,95);font-weight:bold;font-style:normal;text-decoration: none}
		-->
		</style>
		<script type="text/javascript" src="4da245fa-5cc2-11eb-8b25-0cc47a792c0a_id_4da245fa-5cc2-11eb-8b25-0cc47a792c0a_files/wz_jsgraphics.js"></script>
		</head>
		<body>
		<div style="position:absolute;top:0px;width:100%;height:100%;border-style:outset;overflow:hidden">
		<div style="position:absolute;left:0px;top:0px">
		<img src="'.$path.'" width=419 height=595></div>
		<div style="position:absolute;left:204.05px;top:19.29px" class="cls_003"><span class="cls_003">Docteur KESKAS Ryma</span></div>
		<div style="position:absolute;left:203.81px;top:46.19px" class="cls_003"><span class="cls_003">ﺔﻤﻳر سﺎﻜﺴﻛ ةرﻮﺘﻛﺪﻟا</span></div>
		<div style="position:absolute;left:214.77px;top:71.51px" class="cls_004"><span class="cls_004">Gastro-entérologue</span></div>
		<div style="position:absolute;left:17.83px;top:118.87px" class="cls_002"><span class="cls_002">le tube digestif (œsophage, estomac, intestins, le colon et le rectum), le foie , le pancréas</span></div>
		<div style="position:absolute;left:270.91px;top:162.90px" class="cls_007"><span class="cls_007">Sétif le :</span></div>
		<div style="position:absolute;left:14.51px;top:190.43px" class="cls_007"><span class="cls_007">Nom :</span></div>
		<div style="position:absolute;left:158.46px;top:190.43px" class="cls_007"><span class="cls_007">Prénom :</span></div>
		<div style="position:absolute;left:322.22px;top:188.60px" class="cls_007"><span class="cls_007">Age :</span></div>
		<div style="position:absolute;left:132.39px;top:213.72px" class="cls_010"><span class="cls_010">ORDONNANCE</span></div>
		<div style="position:absolute;left:31.09px;top:566.58px" class="cls_011"><span class="cls_011">07 70 82 43 53</span></div>
		<div style="position:absolute;left:199.48px;top:566.58px" class="cls_011"><span class="cls_011">Cite 17 Octobre Chaabat el far</span></div>
		<div style="position:absolute;left:113.59px;top:570.24px" class="cls_011"><span class="cls_011">+213 035 693 866</span></div>
		<div style="position:absolute;left:322.25px;top:570.55px" class="cls_011"><span class="cls_011">Keskasryma@hotmail.com</span></div>
		<div style="position:absolute;left:31.09px;top:575.06px" class="cls_011"><span class="cls_011">07 92 50 42 49</span></div>
		<div style="position:absolute;left:199.48px;top:575.06px" class="cls_011"><span class="cls_011">Rue BE n°21 , Setif</span></div>
		</div>
		</body>
		</html>				
		';
		
		$dompdf = new PDF();
		$dompdf->load_html($html);
		
		$dompdf->render();
		$dompdf->stream("pdf_filename_".rand(10,1000).".pdf", array("Attachment" => false));

		// $output = $dompdf->output();
		// file_put_contents('test.pdf', $output);
		$data['title'] = "Print Prescription";
		$this->load->view('printprescription',$data);

	}


	public function createinvoice()
	{
		$data['title'] = "Create New Invoice";
		$data['info'] = $this->user_mo->patient_info();
		$this->load->view('createinvoice',$data);
	}

	public function print_invoice()
	{
		$data['title'] = "Print Invoice";
		$this->load->view('printinvoice',$data);
	}
}
