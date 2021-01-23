<?php
    if(!isset($_SESSION['userinfo']))
    {
        redirect(base_url());
    }
    $data = $this->user_mo->get_user();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta content="Doctorist - Patient Management System" name="description" />
        <meta content="Landinghub(themesbrand)" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/<?php echo $data[0]['favicon']; ?>">

        <!-- App title -->
        <title><?php echo $data[0]['title']." - ".$title; ?></title>
        <style type="text/css">
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
        </style>
        
