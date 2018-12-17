<?php
class Media
{

  public $idFile;
  public $idUser;
  public $nama;
	public $tanggalUpload;


	function __construct($idFile,$idUser,$nama,$tanggalUpload)
	{
    $this->idFile=$idFile;
    $this->idUser=$idUser;
    $this->nama=$nama;
		$this->tanggalUpload=$tanggalUpload;
	}

  public static function viewMedia(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM tb_file");
    foreach ($req->fetchAll() as $file) {
  			$list[] = new Media($file['idFile'],$file['idUser'],$file['nama'],$file['tanggalUpload']
  				);
  		}
  		return $list;
  }

  public static function uploadFile($idUser,$nama,$tanggalUpload){
  $db = DB::getInstance();

  $req = $db->query("INSERT INTO tb_file
    VALUES (NULL,'".$idUser."','".$nama."', '".$tanggalUpload."');
    ");

  return $req;
}



  // public static function hapusUser($idUser){
  //   $db = DB::getInstance();
  //
  //   $req = $db->query("DELETE FROM tb_user WHERE idUser='$idUser'");
  //
  //
  //     return $req;
  // }


}

?>
