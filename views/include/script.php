<script src="<?php echo $server ?>views/src/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?php echo $server ?>views/src/bootstrap/js/popper.min.js"></script>
<script src="<?php echo $server ?>views/src/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo $server ?>views/src/assets/js/app.js"></script>
<script src="<?php echo $server ?>views/src/assets/js/sweetalert.min.js"></script>
<script src="<?php echo $server ?>views/src/assets/js/modal/classie.js"></script>
<script src="<?php echo $server ?>views/src/assets/js/modal/modalEffects.js"></script>
<script src="<?php echo $server ?>views/src/plugins/table/datatable/datatables.js"></script>
<script src="<?php echo $server ?>views/src/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/table/datatable/button-ext/jszip.min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="<?php echo $server ?>views/src/assets/js/custom.js"></script>
<script src="<?php echo $server ?>views/src/plugins/scrollbar/jquery.colorbox-min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/jquery-step/jquery.steps.min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/jquery-step/jquery.validate.min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/jquery-step/custom-jquery.steps.js"></script>
<script src="<?php echo $server ?>views/src/assets/js/element/steps/progress-bar.js"></script>
<script src="<?php echo $server ?>views/src/assets/js/element/steps/steps-app.js"></script>
<script src="<?php echo $server ?>views/src/assets/js/element/steps/custom_steps.js"></script>
<script src="<?php echo $server ?>views/src/plugins/select2/select2.min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/input-mask/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo $server ?>views/src/plugins/input-mask/input-mask.js"></script>
<script src="<?php echo $server?>views/src/plugins/form-repeater/jquery.repeater.min.js"></script>
<script src="<?php echo $server?>views/src/plugins/color_pickers/jquery_minicolors/jquery.minicolors.min.js"></script>
<script src="<?php echo $server?>views/src/plugins/icheck/icheck.js"></script>
<script src="<?php echo $server?>views/src/assets/js/moment.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
<script src="<?php echo $server?>sources/js/main.js"></script>
<script src="<?php echo $server?>sources/js/auth.js"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip();
</script>
<?php
    if(isset($url[0])) {
        if ($url[0] == "usuarios" || $url[0] == "addUsuario") {
            echo '<script src="'.$server.'sources/js/usuarios.js"></script>';
        } else if ($url[0] == "clientes" || $url[0] == "addCliente" || $url[0] == "verCompania") {
            echo '<script src="'.$server.'sources/js/clientes.js"></script>';
        } else if ($url[0] == "alumnos" || $url[0] == "addAlumno") {
            echo '<script src="'.$server.'sources/js/alumnos.js"></script>';
        } else if ($url[0] == "inicio") {
            echo '<script src="'.$server.'sources/js/dashboard.js"></script>';
        }
    }
?>