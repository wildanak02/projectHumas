<?php
class Pers
{

  public $idPers;
  public $nama;
  public $nohp;
	public $media;
  public $alamat;


	function __construct($idPers,$nama,$nohp,$media,$alamat)
	{
    $this->idPers=$idPers;
    $this->nama=$nama;
    $this->nohp=$nohp;
		$this->media=$media;
    $this->alamat=$alamat;
	}

  public static function viewPers(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM tb_Pers");
    foreach ($req->fetchAll() as $pers) {
  			$list[] = new Pers($pers['idPers'],$pers['nama'],$pers['nohp'],$pers['media'],$pers['alamat']
  				);
  		}
  		return $list;
  }

  public static function tambahPers($nama,$nohp,$media,$alamat){
  $db = DB::getInstance();

  $req = $db->query("INSERT INTO tb_Pers
    VALUES (NULL,'".$nama."','".$nohp."', '".$media."', '".$alamat."');
    ");

  return $req;
}

	public static function editPers($idPers,$nama,$nohp,$media,$alamat)
	{
		$db = DB::getInstance();

		$req = $db->query("UPDATE tb_Pers SET nama='".$nama."',nohp='".$nohp."', media='".$media."', alamat='".$alamat."' WHERE idPers='$idPers'");
		return $req;
	}

  public static function hapusPers($idPers){
    $db = DB::getInstance();

    $req = $db->query("DELETE FROM tb_Pers WHERE idPers='$idPers'");


      return $req;
  }


}

?>
