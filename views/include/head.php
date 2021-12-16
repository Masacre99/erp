<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siamphi | Administrador</title>
    <meta property="og:image" content="https://siamphi.aleanx.com/sources/img/siamphi.jpg">
    <meta name="description" content="Plataforma Web">
    <link rel="shortcut icon" href="<?php echo $server?>views/src/assets/img/logo.svg" type="image/svg">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto&display=swap" rel="stylesheet">
    <link href="<?php echo $server?>views/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $server?>views/src/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $server?>views/src/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server?>views/src/plugins/table/datatable/custom_dt_multiple_tables.css">
    <link href="<?php echo $server?>views/src/plugins/animate/animate.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/assets/css/modals/component.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/plugins/file-upload/file-upload-with-preview.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $server?>views/src/assets/css/ui-kit/custom-modal.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $server?>views/src/plugins/jquery-step/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server?>views/src/plugins/select2/select2.min.css">
    <link href="<?php echo $server?>views/src/assets/css/ecommerce/product-catalog.css" rel="stylesheet" type="text/css" />
    <style> :root { --admin-color: #02542F  !important; } </style>
    <link href="<?php echo $server?>views/src/assets/css/elements/steps/steps.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/assets/css/elements/steps/custom-steps.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/assets/css/ui-kit/custom-tooltips_and_popovers.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/plugins/scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/plugins/scrollbar/colorbox.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/assets/css/components/custom-scroll_bars_basic.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/assets/css/elements/testimonial/testimonial.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/plugins/dropzone/basic.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $server?>views/src/plugins/color_pickers/jquery_minicolors/jquery.minicolors.css" rel="stylesheet" type="text/css"/>    
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style> #formValidate .wizard > .content {min-height: 25em;} </style>
    <?php echo (isset($_SESSION["auth"]) && $_SESSION["auth"] == "ok") ? '' : '<link href="'.$server.'views/src/assets/css/users/login-2.css" rel="stylesheet" type="text/css"/>'; ?>
    <style>
        .form-control {
            border: 1px solid #ccc;
            color: #888ea8;
            font-size: 15px;
            border-radius: 2px;
        }
        code { color: #3b3f5c ; }
        .form-control:disabled, .form-control[readonly] { background-color: #f1f3f9; border-color: #f1f3f1; }
        .btn-primary.disabled, .btn-primary:disabled { background-color: #3b3f5c ; border-color: #3b3f5c ; }
        label { color: #3b3f5c ; margin-bottom: 14px; }
        .form-control::-webkit-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-ms-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-moz-placeholder { color: #888ea8; font-size: 15px; }
        .form-control:focus { border-color: #f1f3f1; border-left: solid 3px #3b3f5c ; }
    </style>
    <link href="<?php echo $server?>views/src/assets/css/estilos.css" rel="stylesheet" type="text/css"/>
</head>