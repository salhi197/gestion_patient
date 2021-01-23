<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include_once('includes/header_start.php'); 
?>

<?php include_once('includes/header_end.php');
        $sys_title = $this->user_mo->get_user();
        $id = $this->uri->segment(3);
        $user = $this->user_mo->getuser();
        $row_data = $this->user_mo->getprescriptionbyid($id);
?>

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><?php echo $sys_title[0]['title']; ?></a></li>
                                    <li class="breadcrumb-item active">Imprimer Ordonnance</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Imprimer Ordonnance</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
            </div> <!-- End Container -->
        </div><!-- End Wrapper -->
        <?php
            if(!$row_data)
            {
                echo "<center><h3>No Such Record Found!!</h3></center>";
            }
            else{
                $data = $row_data[0];
                $info = $this->user_mo->getp_name($data['patient_id']);
                $medicine = json_decode($data['medicine']);
                $m_nombre = json_decode($data['m_nombre']);
                $m_note = json_decode($data['m_note']);
                $test = json_decode($data['test']);
                $t_note = json_decode($data['t_note']);
        ?>

        <!-- ==================
            PAGE CONTENT START
        ================== -->
        <div class="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="m-b-20">                                
                            <a href="<?php echo base_url('user/prescription'); ?>"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="fa fa-arrow-left"></i>&nbsp; Back to Prescription List</button></a>                                           
                            <a target="_blank" href="<?php echo base_url('user/download_prescription')."/".$id  ;?>"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="fa fa-download"></i>&nbsp; Télécharger</button></a>                                           
                            <button type="button" class="btn btn-primary waves-effect waves-light" onclick="print_div()"><i class="fa fa-print"></i>&nbsp; Imprimer Ordonnance</button>
                        </div>
                    </div>
                </div>
                <div class="prescription-print">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-block">
                                    <h4>Ordonnance</h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-left">
                                                <address>
                                                    <h4>A,</h4>
                                                    <h5><?php echo $info['p_name']; ?></h5>
                                                    <p class="text-muted m-l-30"><strong>Téléphone</strong> : <?php echo $info['phone']; ?></p>
                                                </address>
                                            </div>
                                            <div class="pull-right text-right">
                                                <address>
                                                    <h3><b class="text-danger">Docteur <?php echo $user['doctor_name'] ?></b></h3>
                                                    <p class="text-muted m-l-5">
                                                        <?php echo $user['specialite'] ?><br>
                                                        Email - <?php echo $user['email'] ?> <br>
                                                        Téléphone - <?php echo $user['fax'] ?><br>
                                                        Mob - <?php echo $user['mobile'] ?><br>
                                                        Email - <?php echo $user['email'] ?><br>                                                        
                                                    </p>
                                                    <h4>Alger  <i class="fa fa-calendar"></i>&nbsp; <?php echo $data['date_ordonnance']; ?> </h4>
                                                    <h5><?php echo $info['civilite'].' '.$info['p_name'].' '.$info['prenom']; ?></h5>

                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h5>Ordonance</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Médicaments</h5>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Médic</th>
                                                            <th>Nom</th>
                                                            <th>Nombre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <?php for ( $i=0; $i<count($medicine); $i++) : ?>

                                                        <tr>
                                                            <td><?php echo $medicine[$i]; ?></td>
                                                            <td><?php echo $m_note[$i]; ?></td>
                                                            <td><?php echo $m_nombre[$i]; ?></td>
                                                            
                                                        </tr>
                                                            <?php endfor; ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>
                                            <?php echo $user['footer_1']; ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>
                                            <?php echo $user['footer_2']; ?>
                                            </h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end prescription-print -->
            </div> <!-- end container -->
        </div><!-- end page-content-wrapper -->
        
    <?php } include_once('includes/footer_start.php'); ?>

        <!-- <script type="text/javascript" src="<?php //echo base_url(); ?>assets/js/print.js"></script> -->
        <!-- <script src="<?php //echo base_url(); ?>assets/js/printThis.js"></script> -->
    <?php include_once('includes/footer_end.php'); ?>