<?php	
$valid_formats = array("pdf", "PDF");
$max_file_size = 1024*1000; 
$count = 0;

		$ext = explode('.', basename($_FILES['files']['name']));   // Explode file name from dot(.)
		$file_extension = end($ext); // Store extensions in the variable.
		
		/* Removing special characters of the pdf  name */
		$pdf_name = preg_replace('/[^\p{L}\p{N}\s]/u', '', $_FILES["files"]["name"]);

		/* Add a unique ID and a _ for the pdf name and Removing space from the pdf  name */
		$pdf_name = $path . uniqid()."_".$url_for_pdf;

		/* Adding the extention to the pdf  */
		$path = $pdf_name.".".$file_extension;
		$path_with_doc_root = DOC_ROOT.$path;
		
		$file_type = $_FILES['files']['type'];
		$name = strtolower($_FILES['files']['name']);
	
	    if ($_FILES['files']['error'] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'] == 0) {	           
	        if ($_FILES['files']['size'] > $max_file_size) {
	            $message[] = "$name is too large!.";
				$uploadOk = 0;
	            continue; // Skip large files
	        }
			elseif(!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				$uploadOk = 0;
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"], $path_with_doc_root))
				$pdf_path_to_upload = $path;

	            $count++; // Number of successfully uploaded file
				$uploadOk = 1;
	        }
	    }

?>