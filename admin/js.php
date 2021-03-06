    <!-- Common Javascript Starts-->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/bundles/chartist.bundle.js"></script>
    <script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
    <script src="assets/bundles/flotscripts.bundle.js"></script> <!-- flot charts Plugin Js -->
    <script src="../assets/vendor/flot-charts/jquery.flot.selection.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/index.js"></script>
    <!-- Table -->
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
    <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script> 
    <script src="assets/bundles/morrisscripts.bundle.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="assets/js/pages/ui/dialogs.js"></script>
    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- date picker Js -->
    <script src="../assets/vendor/summernote/dist/summernote.js"></script><!--Editor-->
    <script src="../assets/vendor/table-dragger/table-dragger.min.js"></script>

    
    <!-- Javascript -->
    <script src="assets/bundles/libscrip.jts.bundles"></script>    

    <script src="../assets/vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
    <script src="../assets/vendor/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->
    <script src="assets/js/pages/forms/form-wizard.js"></script>


    <script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="../assets/vendor/parsleyjs/js/parsley.min.js"></script>
    



    <script src="../assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
    <script src="../assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
    <script src="../assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->


    <script src="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
    <script src="../assets/vendor/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js --> 
    <script src="assets/js/pages/forms/advanced-form-elements.js"></script>
    <script src="../assets/vendor/nestable/jquery.nestable.js"></script> <!-- Jquery Nestable -->
    <script src="assets/js/pages/ui/sortable-nestable.js"></script> 

    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
        </script> 

    <script>
    $(function () {
        $('.knob').knob({
            draw: function () {
                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    var a = this.angle(this.cv)  // Angle
                        , sa = this.startAngle          // Previous start angle
                        , sat = this.startAngle         // Start angle
                        , ea                            // Previous end angle
                        , eat = sat + a                 // End angle
                        , r = true;

                    this.g.lineWidth = this.lineWidth;

                    this.o.cursor
                        && (sat = eat - 0.3)
                        && (eat = eat + 0.3);

                    if (this.o.displayPrevious) {
                        ea = this.startAngle + this.angle(this.value);
                        this.o.cursor
                            && (sa = ea - 0.3)
                            && (ea = ea + 0.3);
                        this.g.beginPath();
                        this.g.strokeStyle = this.previousColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                        this.g.stroke();
                    }

                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                    this.g.stroke();

                    return false;
                }
            }
        });
    });
    </script>
    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
                popover: { image: [], link: [], air: [] }
            });

            $('.inline-editor').summernote({
                airMode: true
            });

        });

        window.edit = function() {
                $(".click2edit").summernote()
            },
            
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script><!--Editor-->


    <script src="../assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>

    <script>
    $(function() {
        $('#progress-format1 .progress-bar').progressbar({
            display_text: 'fill'
        });

        $('#progress-format2 .progress-bar').progressbar({
            display_text: 'fill',
            use_percentage: false
        });

        $('#progress-custom-format .progress-bar').progressbar({
            display_text: 'fill',
            use_percentage: false,
            amount_format: function(p, t) {
                return p + ' of ' + t;
            }
        });

        $('#progress-striped .progress-bar, #progress-striped-active .progress-bar, #progress-stacked .progress-bar').progressbar({
            display_text: 'fill'
        });

        $('.progress.vertical .progress-bar').progressbar();
        $('.progress.vertical.wide .progress-bar').progressbar({
            display_text: 'fill'
        });

    });
    </script>

    <script>
        $(function() {
        "use strict";

        $('.knob2').knob({
            'format' : function (value) {
                return value + '%';
            }
        });
    });
    </script>
    <script>
        $(document).ready(function(){
            $(".mail-detail-expand").click(function(){
                $("#mail-detail-open").toggle();
            });
            $(".mail-back").click(function(){
                $("#mail-detail-open").toggle();
            });
        });
    </script>

    <!-- Video View--->
    <script>
    $(document).on("change", ".file_multi_video", function(evt) {
        var $source = $('#video_here');
        $source[0].src = URL.createObjectURL(this.files[0]);
        $source.parent()[0].load();
    });
</script>
