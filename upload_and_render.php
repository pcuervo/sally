<?php
<<<<<<< HEAD
	error_reporting(E_ALL); ini_set('display_errors', 'on');
	$errors = array();

	$data	= array();

	if (empty($_POST['name']))
        $errors['name'] = 'Name is required.';

    if (empty($_POST['title']))
        $errors['title'] = 'Title is required.';
=======

	error_reporting(E_ALL); ini_set('display_errors', 'on');
	$errors = array();
	$data	= array();

	if (empty($_POST['name']))
        $errors['name'] = 'Nombre obligatorio.';

    if (empty($_POST['title']))
        $errors['title'] = 'Titulo obligatorio.';
>>>>>>> 61f616ab4e637a1b165cfee40ef96b32d93e8dae

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;

    } else {

<<<<<<< HEAD
        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable

=======
        // DO ALL YOUR PROCESSING HERE
>>>>>>> 61f616ab4e637a1b165cfee40ef96b32d93e8dae
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

<<<<<<< HEAD

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
=======
    	$DISTRIBUTION_ID = "2ea30d8b-0dca-406d-beb1-a91cdc797d19";

    	//get video from camera tag and save to server at "/videos/"
    	$video_url = "https://www.cameratag.com/videos/".$uuid."/vga/mp4.mp4";

	   	$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $video_url);
		curl_setopt($ch, CURLOPT_HEADER, TRUE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$a = curl_exec($ch);
		
		if(preg_match('#Location: (.*)#', $a, $r))
		 	$l = trim($r[1]);
			curl_close($ch);
	    }
	    
	    //download video from camera tag service
	    function getVideo($url, $rename, $ch)
		{
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
			$rawdata=curl_exec ($ch);
			curl_close ($ch);

			$fp = fopen("videos/$rename.mp4",'w');
			fwrite($fp, $rawdata); 
			fclose($fp);  
			return true;           
		}

		$ch = curl_init();
		$video = $l;
		$random_string = generateRandomString();

		if(getVideo($video, $random_string , $ch)){

				//upload video to impossible software
				$username = "434bee53c36633c0f27ed1ae7764c679be616b2e";
				$password = "14555c226cf05c5dcb04ec73a95af6aba92905ec";

				$file = fopen( "videos/$random_string.mp4" , 'r');
				$is_url = 'https://api.impossible.io/v1/data/' . $DISTRIBUTION_ID . '/'.$random_string.'.mp4';

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_URL, $is_url );
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($ch, CURLOPT_USERPWD, $username.':'.$password );
				curl_setopt($ch, CURLOPT_PUT, true);
				curl_setopt($ch, CURLOPT_UPLOAD, true);
				curl_setopt($ch, CURLOPT_INFILE, $file );
				curl_setopt($ch, CURLOPT_INFILESIZE, filesize("videos/$random_string.mp4"));
				$result = curl_exec($ch);
				fclose($file);
				$curl_error = curl_error($ch);
				
				//No upload error
				if(empty($curl_error)){	

					//render with json
					$template = file_get_contents( 'template.json' );

					$search = array("__uuid__", "__name__", "__title__", "__frase1_field__", "__frase1_category__", "__frase2_field__", "__frase2_category__", "__frase3_field__", "__frase3_category__");
					$replace = array($random_string, $name, $title, $frase1_field, $frase1_category, $frase2_field, $frase2_category, $frase3_field, $frase3_category);
					$template = str_replace($search, $replace , $template);

					file_put_contents( "json/".$random_string.".json", $template );

					$file = fopen( "json/".$random_string.".json" , "rb");
					$url = 'https://api.impossible.io/v1/sdl/' . $DISTRIBUTION_ID . '/'.$random_string;
					
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
					curl_setopt($ch, CURLOPT_URL, $url );
					curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
					curl_setopt($ch, CURLOPT_USERPWD, $username.':'.$password );
					curl_setopt($ch, CURLOPT_PUT, true);
					curl_setopt($ch, CURLOPT_UPLOAD, true);
					curl_setopt($ch, CURLOPT_INFILE, $file );
					curl_setopt($ch, CURLOPT_INFILESIZE, filesize("json/$random_string.json"));
					
					$result = curl_exec($ch);
					fclose($file);
					$curl_error = curl_error($ch);

					if( empty( $curl_error ) ){

						//render ok
						$mp4 = "http://api.impossible.io/v1/render/".$DISTRIBUTION_ID."/".$random_string;
						//file_put_contents( "videos/img/".$random_string.'.mp4' ,  file_get_contents( $mp4  ) );
						
						//download video from IS 
						 function getVideoIS($url, $rename, $ch)
							{

								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $url);
								curl_setopt($ch, CURLOPT_HEADER, TRUE);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								$a = curl_exec($ch);
								
								if(preg_match('#Location: (.*)#', $a, $r)){
								 	$l = trim($r[1]);
								}
							    

								$ch = curl_init($l);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
								$rawdata=curl_exec ($ch);
								curl_close ($ch);

								$fp = fopen("render/videos/$rename.mp4",'w');
								fwrite($fp, $rawdata); 
								fclose($fp);  
								return true;   

							}

							$ch = curl_init();

							getVideoIS($mp4, $random_string, $ch);

						$jpg = "http://api.impossible.io/v1/render/".$DISTRIBUTION_ID."/".$random_string.".jpg?frame=1220";
						file_put_contents( "render/img/".$random_string.'.jpg' ,  file_get_contents( $jpg  ) );

						$data['success'] = true;
        				$data['video_url']  = "http://api.impossible.io/v1/render/$DISTRIBUTION_ID/$random_string.mp4?producto_uno=".urlencode($frase1_category)."&producto_tres=".urlencode($frase3_category)."&super_tres=".urlencode($frase3_field)."&texto=".urlencode($title)."&super_dos=".urlencode($frase2_field)."&nombre_apellido=".urlencode($name)."&producto_dos=".urlencode($frase2_category)."&nombre=".urlencode($name)."&super_uno=".urlencode($frase1_field);
						

					}else{

						$errors['render_errors'] = $curl_error;
						$data['success'] = false;
        				$data['errors']  = $errors;
					}

				}else{

					//upload errors
					$errors['upload_errors'] = $curl_error;
					$data['success'] = false;
        			$data['errors']  = $errors;

				}

		}

		function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

    echo json_encode($data);


  
>>>>>>> 61f616ab4e637a1b165cfee40ef96b32d93e8dae
?>