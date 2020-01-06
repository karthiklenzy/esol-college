</div>

<!-- jQuery -->
<!-- <script src="<?php echo ADMIN_PATH;?>js/jquery.min.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo ADMIN_PATH;?>js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo ADMIN_PATH;?>js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo ADMIN_PATH;?>js/startmin.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>



<script>
	$(function() {
    // Just one method to add a date picker!
    $( "#myDatePicker" ).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true, yearRange: "-100:+0"}); 

});
    $(function() {
    // Just one method to add a date picker!
    $( "#myDatePicker2" ).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true, yearRange: "-100:+0"}); 

});

	</script>
	<!-- <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script> -->
        
    <!-- multiple image upload edit events page  -->   
    <script>
    $(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});



var num = 4;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}
</script>
        

</body>
</html>