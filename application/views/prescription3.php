<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    include('includes/header_start.php');
?>

        <!-- DataTables -->
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />   
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<?php include('includes/header_end.php');
    $data = $this->user_mo->get_user();
?>

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><?php echo $data[0]['title']; ?></a></li>
                                    <li class="breadcrumb-item active">Ordonnance</li>
                                </ol>
                            </div>
                            <h4 class="page-title">List des Ordonnances </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
            </div> <!-- End Container -->
        </div><!-- End Wrapper -->

        <!-- ==================
            PAGE CONTENT START
        ================== -->

        <div class="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="m-b-20">                                
                            <a href="<?php echo base_url('user/addprescription'); ?>"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp; Nouveau Ordonnance</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                                <div style="position:absolute;left:50%;margin-left:-209px;top:0px;width:419px;height:595px;border-style:outset;overflow:hidden">
                                <div style="position:absolute;left:0px;top:0px">
                                <img src=<?php echo base_url()."assets/images/background1.jpg"; ?> width=419 height=595></div>
                                <div style="position:absolute;left:204.05px;top:19.29px" class="cls_003"><span class="cls_003">Docteur KESKAS Ryma</span></div>
                                <div style="position:absolute;left:203.81px;top:46.19px" class="cls_003"><span class="cls_003">ﺔﻤﻳر سﺎﻜﺴﻛ ةرﻮﺘﻛﺪﻟا</span></div>
                                <div style="position:absolute;left:214.77px;top:71.51px" class="cls_004"><span class="cls_004">Gastro-entérologue</span></div>
                                <div style="position:absolute;left:17.83px;top:118.87px" class="cls_002"><span class="cls_002">le tube digestif (œsophage, estomac, intestins, le colon et le rectum), le foie , le pancréas</span></div>
                                <div style="position:absolute;left:270.91px;top:162.90px" class="cls_007"><span class="cls_007">Sétif le :</span></div>
                                <div style="position:absolute;left:14.51px;top:190.43px" class="cls_007"><span class="cls_007">Nom :</span></div>
                                <div style="position:absolute;left:158.46px;top:190.43px" class="cls_007"><span class="cls_007">Prénom :</span></div>
                                <div style="position:absolute;left:322.22px;top:188.60px" class="cls_007"><span class="cls_007">Age :</span></div>
                                <div style="position:absolute;left:132.39px;top:213.72px" class="cls_010"><span class="cls_010">ORDONNANCE</span></div>
                                <?php 
                                $i = 1;
                                $margin="0";
                                foreach ( $info as $data ) :
                                ?>
                                    <div style="position:absolute;left:20.39px;top:300.72px" class="cls_010"><span class="cls_010">Test</span></div>
                                    <div style="position:absolute;left:180.39px;top:300.72px" class="cls_010"><span class="cls_010">Test 2</span></div>
                                <?php 
                                    $i++;
                                    $margin+="60";
                                    
                                endforeach; 
                                ?>

                                <div style="position:absolute;left:31.09px;top:566.58px" class="cls_011"><span class="cls_011">07 70 82 43 53</span></div>
                                <div style="position:absolute;left:199.48px;top:566.58px" class="cls_011"><span class="cls_011">Cite 17 Octobre Chaabat el far</span></div>
                                <div style="position:absolute;left:113.59px;top:570.24px" class="cls_011"><span class="cls_011">+213 035 693 866</span></div>
                                <div style="position:absolute;left:322.25px;top:570.55px" class="cls_011"><span class="cls_011">Keskasryma@hotmail.com</span></div>
                                <div style="position:absolute;left:31.09px;top:575.06px" class="cls_011"><span class="cls_011">07 92 50 42 49</span></div>
                                <div style="position:absolute;left:199.48px;top:575.06px" class="cls_011"><span class="cls_011">Rue BE n°21 , Setif</span></div>
                                </div>

                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
        <!-- end page-content-wrapper -->
<?php include('includes/footer_start.php');?>
        <!-- Required datatable js -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.colVis.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo base_url(); ?>assets/pages/datatables.init.js"></script>
<?php include('includes/footer_end.php');?>