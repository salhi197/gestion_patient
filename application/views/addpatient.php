<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include_once('includes/header_start.php'); 
?>

<?php include_once('includes/header_end.php');
    $data = $this->user_mo->get_user();
    $error = $this->session->flashdata('error');
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
                                <li class="breadcrumb-item active">Ajouter Patient</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter Patient</h4>
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
                        <a href="<?php echo base_url('user/patients'); ?>"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="fa fa-arrow-left"></i>&nbsp; Retour à la liste Patient</button></a>
                    </div>
                </div>
            </div><!-- Ends Row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-block">
                            <blockquote>Information Basic</blockquote>
                            <form name="addpatient" id="addpatient" method="post" action="<?php echo base_url('user_operation/addpatient'); ?>">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Civilité : </label>
                                            <select class="form-control" name="civilite" required="">
                                                <option value="">--Séléctionner Civilité--</option>
                                                <option  value="Mr">Monsieur</option>
                                                <option  value="Mme">Madame</option>
                                                <option  value="Mle">Madamoiselle</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="name" placeholder="Entrez le nom du patient" pattern="[A-Za-z. ]{1,}" title="Enter Proper Name(Alphabets only)" required="">
                                            <?php if($error['name']){?> <span class="text-danger"><?php echo $error['name']; ?></span> <?php } ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" class="form-control" name="prenom" placeholder="Entrer le prénom :" pattern="[A-Za-z. ]{1,}" title="Entrer le prénom : " required="">
                                            <?php if($error['prenom']){?> <span class="text-danger"><?php echo $error['prenom']; ?></span> <?php } ?>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" class="form-control" placeholder="Entrez l'âge du patient" name="age" pattern="[0-9]{1,3}" title="Enter Numeric values only(3 digit only)" required="">
                                            <?php if($error['age']){?> <span class="text-danger"><?php echo $error['age']; ?></span> <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <select class="form-control" name="gender" required="">
                                                <option value="">--Séléctionner Gender--</option>
                                                <option  value="1">Male</option>
                                                <option  value="2">Female</option>
                                            </select>
                                            <?php if($error['gender']){?> <span class="text-danger"><?php echo $error['gender']; ?></span> <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="+1-234-567-7890" pattern="[\+0-9\-]{5,20}" title="Enter Numeric values only(Min 5 Numers)" required="" maxlength="20">
                                            <?php if($error['phone']){?> <span class="text-danger"><?php echo $error['phone']; ?></span> <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea name="add" rows="3" class="form-control" placeholder="Entrez l'adresse actuelle" required=""></textarea>
                                            <?php if($error['add']){?> <span class="text-danger"><?php echo $error['add']; ?></span> <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <blockquote>Information Medical </blockquote>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Taille</label>
                                            <input type="text" class="form-control" name="height" placeholder="Entrez la hauteur"  title="Enter Numeric values only(3 digit only)" required="">
                                            <?php if($error['height']){?> <span class="text-danger"><?php echo $error['height']; ?></span> <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Poids</label>
                                            <input type="text" class="form-control" name="weight" placeholder="Entrez le poids"  title="Enter Numeric values only(3 digit only)" required="">
                                            <?php if($error['weight']){?> <span class="text-danger"><?php echo $error['weight']; ?></span> <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Group Sanguin</label>
                                            <select class="form-control" name="blood_group" required="">
                                                <option value="">-- Select Blood Group --</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                            <?php if($error['blood_group']){?> <span class="text-danger"><?php echo $error['blood_group']; ?></span> <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- Ends Row -->
        </div><!-- Ends container -->
    </div><!-- Ends page-content-wrapper -->
<?php include_once('includes/footer_start.php'); ?>

<?php include_once('includes/footer_end.php'); ?>