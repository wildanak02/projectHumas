<?php
Class ProfileController {

	public function home(){
    $sesi = $_SESSION['login'];
		$profiles=User::profile($sesi);
		require_once("Views/v_Profile.php");
	}

	public function editProfile(){
		$posts=User::editProfile($_GET["username"],$_GET["password"]);
		$_SESSION['login']=$_GET["username"];
		header("Location: http://simaspemkabjember.rf.gd/index.php?controller=Profile&action=home");
	}
}
?>
