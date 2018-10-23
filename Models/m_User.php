<?php
class User
{

  public $idUser;
  public $level;
  public $username;
	public $password;


	function __construct($idUser,$level,$username,$password)
	{
    $this->idUser=$idUser;
    $this->level=$level;
    $this->username=$username;
		$this->password=$password;
	}

  public static function viewUser(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM tb_user");
    foreach ($req->fetchAll() as $user) {
  			$list[] = new User($user['idUser'],$user['level'],$user['username'],$user['password']
  				);
  		}
  		return $list;
  }

  public static function tambahUser($level,$username,$password){
  $db = DB::getInstance();

  $req = $db->query("INSERT INTO tb_user
    VALUES (NULL,'".$level."','".$username."', '".$password."');
    ");

  return $req;
}

	public static function editUser($idUser,$level,$username,$password)
	{
		$db = DB::getInstance();

		$req = $db->query("UPDATE tb_user SET eventName='".$level."',type='".$username."', organizer='".$password."' WHERE idUser='$idUser'");
		return $req;
	}

  public static function hapus($idUser){
    $db = DB::getInstance();

    $req = $db->query("DELETE FROM tb_user WHERE idUser='$idUser'");


      return $req;
  }


}

?>
