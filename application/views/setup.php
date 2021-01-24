<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $error = $this->session->flashdata('error');
    $data = $this->user_mo->get_user();
    if(count($data) == 1)
    {
        redirect(base_url());
    }
    else
    {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Page d'installation </title>
        <meta content="Patient Management System" name="description" />
        <meta content="Cosmos(themesbrand)" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon_setup.ico">

        <!-- Basic Css files -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">

        <!-- Bootstrap fileupload css -->
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="container account-sign">
            <div class="card">
                <div class="card-block">
                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Bonjour</h4>
                        <p class="text-danger text-center"><?php $data = $this->session->flashdata('image');  echo $data['error']; ?></p>
                        <form class="form-horizontal m-t-30" method="post" action="<?php echo base_url('user_operation/setup'); ?>" enctype="multipart/form-data">
                        	<div class="row">
                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="doctorname">Nom du docteur</label>
		                                <input type="text" class="form-control" id="dname" name="dname" placeholder="Entrez le nom du médecin" pattern="[A-Za-z. ]{1,}" title="Enter Proper Name(Alphabets only)" autofocus required="">
                                        <?php if($error['dname']){?> <span class="text-danger"><?php echo $error['dname']; ?></span> <?php } ?>
		                            </div>
                        		</div>

                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="doctorname">Spéciliaté </label>
		                                <input type="text" class="form-control" id="specialite" name="specialite" placeholder="Entrez le nom du médecin" pattern="[A-Za-z. ]{1,}" title="Enter Proper Name(Alphabets only)" autofocus required="">
                                        <?php if($error['specialite']){?> <span class="text-danger"><?php echo $error['specialite']; ?></span> <?php } ?>
		                            </div>
                        		</div>

                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="doctorname">Adresse : </label>
		                                <input type="text" class="form-control" id="dname" name="dname" placeholder="Entrez le nom du médecin" pattern="[A-Za-z. ]{1,}" title="Enter Proper Name(Alphabets only)" autofocus required="">
                                        <?php if($error['dname']){?> <span class="text-danger"><?php echo $error['dname']; ?></span> <?php } ?>
		                            </div>
                        		</div>

                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="email">Email:</label>
		                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrer l'adresse e-mail" required="">
                                        <?php if($error['email']){?> <span class="text-danger"><?php echo $error['email']; ?></span> <?php } ?>
		                            </div>
                        		</div>
                        	</div>

                        	<div class="row">
                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="phone">Téléphone : </label>
		                                <input type="text" class="form-control" id="phone" name="phone" placeholder="+1-234-567-7890" pattern="[\+0-9\-]{5,20}" title="Enter Numeric values only(Min 5 Numers)" required="">
                                        <?php if($error['phone']){?> <span class="text-danger"><?php echo $error['phone']; ?></span> <?php } ?>
		                            </div>
                        		</div>

                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="phone">Fax : </label>
		                                <input type="text" class="form-control" id="fax" name="fax" placeholder="+1-234-567-7890" pattern="[\+0-9\-]{5,20}" title="Entrer le numéro du fax )" required="">
                                        <?php if($error['fax']){?> <span class="text-danger"><?php echo $error['fax']; ?></span> <?php } ?>
		                            </div>
                        		</div>

                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="username">Utilisateur : </label>
		                                <input type="text" class="form-control" id="username" name="username" placeholder="Saisissez votre nom d'utilisateur" required="">
                                        <?php if($error['username']){?> <span class="text-danger"><?php echo $error['username']; ?></span> <?php } ?>
		                            </div>
                        		</div>
                        	</div>

                        	<div class="row">
                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="userpassword">Mot de passe : </label>
		                                <input type="password" class="form-control" id="password" name="password" placeholder="Entrer le mot de passe" required="">
                                        <?php if($error['password']){?> <span class="text-danger"><?php echo $error['password']; ?></span> <?php } ?>
		                            </div>
                        		</div>
                        		<div class="col-md-6">
                        			<div class="form-group">
		                                <label for="confirmpassword">Confirmer mdp:</label>
		                                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Retaper le mot de passe" required="">
                                        <?php if($error['cpassword']){?> <span class="text-danger"><?php echo $error['cpassword']; ?></span> <?php } ?>
		                            </div>
                        		</div>
                        	</div>

                        	<div class="row">
                        		<div class="col-md-12">
                        			<div class="form-group">
		                                <label for="title">Titre de Systeme </label>
		                                <input type="text" class="form-control" id="title" name="title" placeholder="Entrez le titre du système" required="">
                                        <?php if($error['title']){?> <span class="text-danger"><?php echo $error['title']; ?></span> <?php } ?>
		                            </div>
                        		</div>
                        	</div>
                            

                        	<div class="row">
                        		<div class="col-md-12">
                        			<div class="form-group">
		                                <label for="title">Footer 1:  </label>
                                        <textarea name="footer_1"></textarea>

                                        <?php if($error['footer_1']){?> <span class="text-danger"><?php echo $error['footer_1']; ?></span> <?php } ?>
		                            </div>
                        		</div>
                        	</div>

                        	<div class="row">
                        		<div class="col-md-12">
                        			<div class="form-group">
		                                <label for="title">Footer 2:  </label>
                                        <textarea name="footer_2"></textarea>

                                        <?php if($error['footer_2']){?> <span class="text-danger"><?php echo $error['footer_2']; ?></span> <?php } ?>
		                            </div>
                        		</div>
                        	</div>



                            <div class="form-group row">
                                <label class="col-3 col-form-label">Logo de Systeme </label>
                                <div class="col-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="<?php echo base_url(); ?>assets/images/logo-placeholder.jpg" alt="image" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <button type="button" class="btn btn-info waves-effect waves-light btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Selectionner Logo</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer</span>
                                                <input type="file" name="logo" class="btn-light" accept="image/png" required="" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label class="col-3 col-form-label">Icon de Systeme </label>
                                <div class="col-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="<?php echo base_url(); ?>assets/images/favicon-placeholder.jpg" alt="image" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <button type="button" class="btn btn-info waves-effect waves-light btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Sélectionner Icon</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer</span>
                                                <input type="file" name="favicon" class="btn-light" accept="image/icon" required="" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>    

                            <div class="form-group row m-t-20">
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Installateur</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">© <?php echo date('Y'); ?> Système de gestion des patients. <br> Crafted with <i class="mdi mdi-heart text-danger"></i> by Cosmos</p>
            </div>

        </div>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- Bootstrap fileupload js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

        <script>
            $(document).ready(function(){
                $('#cpassword').on('blur',function(){
                    var pass = $('#password').val();
                    var cpass = $(this).val();
                    if(cpass != pass)
                    {
                        alert('Le mot de passe ne correspond pas !! Veuillez saisir à nouveau le mot de passe correct.');
                    }    
                });
            });
        </script>
    </body>
</html>

        <?php } ?>