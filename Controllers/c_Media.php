<?php
Class MediaController {

	public function mediaAdmin(){
		$files=Media::viewMedia();
		require_once("Views/v_MediaAdmin.php");
	}

	public function uploadFile(){
		$getTanggal= getdate(yy-mm-dd);
		$file = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];

		// Re	name nama fotonya dengan menambahkan tanggal dan jam upload
		$filebaru = $file;
		// Set path folder tempat menyimpan fotonya
		$path = "Assets/uploads/".$filebaru;
		// Proses upload
		if (move_uploaded_file($tmp, $path)) {
			$fileupload = Media::uploadFile('1',$filebaru,$getTanggal);
        }

		header("location: http://simaspemkabjember.rf.gd/index.php?controller=Media&action=mediaAdmin");
	}
}
?>
