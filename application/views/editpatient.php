<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include_once('includes/header_start.php'); 
?>

<?php include_once('includes/header_end.php'); 
    $sys_title = $this->user_mo->get_user();
    $id = $this->uri->segment(3);
    $data = $this->user_mo->get_patient($id);
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
                                <li class="breadcrumb-item active">Modifier les informations du patient</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Modifier les informations du patient</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
        </div> <!-- End Container -->
    </div><!-- End Wrapper -->
    <?php
        if(!$data)
        {
            echo "<center><h3>No Such Record Found!!</h3></center>";
        }
        else{
    ?>
    <!-- ==================
         PAGE CONTENT START
        ================== -->
    <div class="page-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="m-b-20">
                        <a href="<?php echo base_url('user/patient_profile').'/'.$id; ?>"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="fa fa-arrow-left"></i>&nbsp; Back to Patient Profile</button></a>
                    </div>
                </div>
            </div><!-- Ends Row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-block">
                            <blockquote class="bg-info text-white">Informations de base</blockquote>
                            <form name="addpatient" id="addpatient" method="post" action="<?php echo base_url('user_operation/editpatient'); ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="name" placeholder="Entrez le nom du patient" required="" value="<?php echo $data[0]['p_name'] ?>">
                                            <input type="hidden" name="patient_id" value="<?php echo $data[0]['patient_id']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Âge</label>
                                            <input type="text" class="form-control" placeholder="Entrez l'âge du patient" name="age" required="" value="<?php echo $data[0]['age'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Le sexe</label>
                                            <select class="form-control" name="gender">
                                                <option value="0">--Genre du Séléctionner--</option>
                                                <?php 
                                                    if($data[0]['gender'] == 1 )
                                                    {
                                                ?>
                                                    <option  value="1" selected>Mâle</option>
                                                <?php
                                                     }
                                                     else
                                                     {
                                                        echo '<option  value="1">Male</option>';
                                                     }
                                                ?>
                                                <?php 
                                                    if($data[0]['gender'] == 2 )
                                                    {
                                                ?>
                                                    <option  value="2" selected>Femelle</option>
                                                <?php
                                                     }
                                                     else
                                                     {
                                                        echo '<option  value="2">Female</option>';
                                                     }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Numéro de téléphone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Entrez le numéro de téléphone" required="" value="<?php echo $data[0]['phone'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <textarea name="add" rows="3" class="form-control" placeholder="Entrez l'adresse actuelle" required=""><?php echo $data[0]['add'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <blockquote class="bg-info text-white mt-5">Information médicale</blockquote>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>la taille</label>
                                            <input type="text" class="form-control" name="height" placeholder="Entrez la hauteur" required="" value="<?php echo $data[0]['height'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Poids</label>
                                            <input type="text" class="form-control" name="weight" placeholder="Entrez le poids" required="" value="<?php echo $data[0]['weight'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Groupe sanguin</label>
                                            <input type="text" class="form-control" name="blood_group" placeholder="Entrez le groupe sanguin" required="" value="<?php echo $data[0]['b_group'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pression artérielle</label>
                                            <input type="text" class="form-control" name="blood_pressure" placeholder="Entrez la tension artérielle" required="" value="<?php echo $data[0]['b_pressure'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Impulsion</label>
                                            <input type="text" class="form-control" name="pulse" placeholder="Entrez l'impulsion" required="" value="<?php echo $data[0]['pulse'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Respiration</label>
                                            <input type="text" class="form-control" name="respiration" placeholder="Entrez la respiration" required="" value="<?php echo $data[0]['respiration'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Allergie</label>
                                            <input type="text" class="form-control" name="allergy" placeholder="Entrez les symptômes d'allergie" required="" value="<?php echo $data[0]['allergy'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Régime</label>
                                            <input type="text" class="form-control" name="diet" placeholder="Entrez le régime" required="" value="<?php echo $data[0]['diet'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Save patient details</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- Ends Row -->
        </div><!-- Ends container -->
    </div><!-- Ends page-content-wrapper -->
<?php } include_once('includes/footer_start.php'); ?>

<?php include_once('includes/footer_end.php'); ?>