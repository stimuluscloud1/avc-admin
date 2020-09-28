<!---------------------------------------------- Lession.php Start ------------------------------------------>

<script type="text/javascript">
    // add row
    $("#addRow").click(function() {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function() {
        $(this).closest('#inputFormRow').remove();
    });
</script>

<script>
    function lessionYes() {


        var x = document.getElementById('linkingBox').style.display;
        //var y= document.getElementById('linkingBox1').style.display;
        var z = document.getElementById('linkingBox2').style.display;

        if (x == 'none') {
            document.getElementById('linkingBox').style.display = 'block';
            //document.getElementById('linkingBox1').style.display='block';
            document.getElementById('linkingBox2').style.display = 'block';
        } else {
            document.getElementById('linkingBox').style.display = 'none';
            //document.getElementById('linkingBox1').style.display='none';
            document.getElementById('linkingBox2').style.display = 'none';
        }

    }
</script>

<!---------------------------------------------- Lession.php End ------------------------------------------>