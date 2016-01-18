<?php
	error_reporting(E_ALL); ini_set('display_errors', 'on');
	$errors = array();

	$data	= array();

	if (empty($_POST['name']))
        $errors['name'] = 'Name is required.';

    if (empty($_POST['title']))
        $errors['title'] = 'Title is required.';

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;

    } else {

        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable

    	$uuid = $_POST['uuid'];
    	$name = $_POST['name'];
    	$title = $_POST['title'];
    	$frase1_field = $_POST['frase1_field'];
    	$frase1_category = $_POST['frase1_category'];
    	$frase2_field = $_POST['frase2_field'];
    	$frase2_category = $_POST['frase2_category'];
    	$frase3_field = $_POST['frase3_field'];
    	$frase3_category = $_POST['frase3_category'];
    	$category = $_POST['category'];


    	if(download_remote_file_with_curl( "https://www.cameratag.com/videos/".$uuid."/qvga/mp4.mp4", realpath("/downloads/")."/".$uuid.".mp4"))
    	{
    		$data['upload_success'] = true;
    		$data['message'] = 	realpath("downloads/").$uuid.".mp4";
    	}else{
			$data['upload_fail'] = true;
    		$data['message'] = "Error uploading file";
    	}

    }

    // return all our data to an AJAX call
    echo json_encode($data);

    function download_remote_file_with_curl($file_url, $save_to)
	{


		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 0); 
		curl_setopt($ch,CURLOPT_URL,$file_url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$file_content = curl_exec($ch);
		curl_close($ch);
 		
		$downloaded_file = fopen($save_to, 'w');
		fwrite($downloaded_file, $file_content);
		fclose($downloaded_file);
 		
 		return true;

	}
?>