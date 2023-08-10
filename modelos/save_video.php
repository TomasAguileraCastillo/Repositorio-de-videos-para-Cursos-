<?php
	date_default_timezone_set('America/Mexico_City');
	require_once 'conexion/conn.php';
	
	if(ISSET($_POST['save'])){
		$file_name = $_FILES['video']['name'];
		$file_temp = $_FILES['video']['tmp_name'];
		$file_size = $_FILES['video']['size'];
		$descripcion=$_POST['descripcion'];	
		
		if($file_size < 1000000000){
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('wmv', 'mov', 'mp4', 'mkv');
			if(in_array($end, $allowed_ext)){
				$name = date("Ymd").time();
				$location = 'video/'.$name.".".$end;
				if(move_uploaded_file($file_temp, $location)){
					mysqli_query($conn, "INSERT INTO `video` VALUES('', '$name', '$location', '$descripcion')") or die(mysqli_error());
					echo "<script>alert('Video subido correctamente')</script>";
					echo "<script>window.location = '../index.php'</script>";
				}
			}else{
				echo "<script>alert('Formato de Video Equivocado')</script>";
				echo "<script>window.location = '../index.php'</script>";
			}
		}else{
			echo "<script>alert('File too large to upload')</script>";
			echo "<script>window.location = '../index.php'</script>";
		}
	}
?>