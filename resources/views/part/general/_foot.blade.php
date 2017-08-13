<style>
    
    /*page demo styles*/
    .wizard .steps .fa,
    .wizard .steps .glyphicon,
    .wizard .steps .glyphicon {
        display: none;
    }
    </style>

<script type="text/javascript" src="/vendor/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<script type="text/javascript" src="/assets/js/main.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="/assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Page Plugins -->
<script type="text/javascript" src="/assets/js/pages/login/EasePack.min.js"></script>
<script type="text/javascript" src="/assets/js/pages/login/rAF.js"></script>
<script type="text/javascript" src="/assets/js/pages/login/TweenLite.min.js"></script>
<script type="text/javascript" src="/assets/js/pages/login/login.js"></script>

<!-- Datatables -->
<script type="text/javascript" src="/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

<!-- Datatables Tabletools addon -->
<script type="text/javascript" src="/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

<!-- Datatables Editor addon - READ LICENSING NOT MIT  -->
<script type="text/javascript" src="/vendor/plugins/datatables/extensions/Editor/js/dataTables.editor.js"></script>

<!-- Datatables Bootstrap Modifications  -->
<script type="text/javascript" src="/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/vendor/plugins/datatables/extensions/Editor/js/editor.bootstrap.js"></script>
{{-- <script type="text/javascript" src="/vendor/tinymce/js/tinymce/tinymce.min.js"></script> --}}


<!-- Theme Javascript -->
<script type="text/javascript" src="/assets/js/utility/utility.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>

<script type="text/javascript" src="/assets/admin-tools/admin-forms/js/advanced/steps/jquery.steps.js"></script>
<script type="text/javascript" src="/assets/admin-tools/admin-forms/js/jquery.validate.min.js"></script>


<script type="text/javascript" src="/assets/js/demo.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";
        Core.init();
        Demo.init();
        // Form Wizard 
            var form = $("#form-wizard");
            form.validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
            form.children(".wizard").steps({
                headerTag: ".wizard-section-title",
                bodyTag: ".wizard-section",
                onStepChanging: function(event, currentIndex, newIndex) {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function(event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function(event, currentIndex) {
                    alert("Submitted!");
                }
            });

            // Demo Wizard Functionality
            var formWizard = $('.wizard');
            var formSteps = formWizard.find('.steps');

            $('.wizard-options .holder-style').on('click', function(e) {
                e.preventDefault();

                var stepStyle = $(this).data('steps-style');

                var stepRight = $('.holder-style[data-steps-style="steps-right"');
                var stepLeft = $('.holder-style[data-steps-style="steps-left"');
                var stepJustified = $('.holder-style[data-steps-style="steps-justified"');

                if (stepStyle === "steps-left") {
                    stepRight.removeClass('holder-active');
                    stepJustified.removeClass('holder-active');
                    formWizard.removeClass('steps-right steps-justified');
                }
                if (stepStyle === "steps-right") {
                    stepLeft.removeClass('holder-active');
                    stepJustified.removeClass('holder-active');
                    formWizard.removeClass('steps-left steps-justified');
                }
                if (stepStyle === "steps-justified") {
                    stepLeft.removeClass('holder-active');
                    stepRight.removeClass('holder-active');
                    formWizard.removeClass('steps-left steps-right');
                }

                // Assign new style 
                if ($(this).hasClass('holder-active')) {
                    formWizard.removeClass(stepStyle);
                } else {
                    formWizard.addClass(stepStyle);
                }

                // Assign new active holder
                $(this).toggleClass('holder-active');
            });

        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2,
                y: window.innerHeight / 3.3
            },
        });


        

    });

    $('#datatable2').dataTable({
        "aoColumnDefs": [{
            'bSortable': false,
            'aTargets': [-1]
        }],
        "oLanguage": {
            "oPaginate": {
                "sPrevious": "",
                "sNext": ""
            }
        },
        "iDisplayLength": 5,
        "aLengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ],
        "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
        "oTableTools": {
            "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
        }
    });
          var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            // $(wrapper).append('<div><input class="form-group" type="text" name="opsi[]"/><a href="#" class="remove_field btn btn-danger">Hapus</a></div>'); //add input box
            // /
            // 
            $(wrapper).append('<div><input class="form-control" type="text" name="opsi[]"><a href="#" class="remove_field btn btn-danger">Hapus</a></div>');
                                                    
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
</script>
