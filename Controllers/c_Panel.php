<?php
Class PanelController {

	public function homeAdmin(){
		$users=User::viewUser();
		require_once("Views/v_AdminPanel.php");
	}

	public function homeSuper(){
		$perss=Pers::viewPers();
		require_once("Views/v_SuperPanel.php");
	}

	public function homeUser(){
		require_once("Views/v_UserPanel.php");
	}


	public function tambahUser(){
		$user = User::tambahUser($_POST["level"],$_POST["username"],$_POST["password"]);
		header("Location:http://simaspemkabjember.rf.gd/index.php?controller=Panel&action=homeAdmin");
	}

  public function editUser(){
		$posts=User::editUser($_POST["idUser"],$_POST["level"],$_POST["username"],$_POST["password"]);
		header("Location: http://simaspemkabjember.rf.gd/index.php?controller=Panel&action=homeAdmin");
	}

  public function hapusUser(){
		$posts=User::hapusUser($_POST["idUser"]);
		header("Location: http://simaspemkabjember.rf.gd/index.php?controller=Panel&action=homeAdmin");
	}

	public function tambahPers(){
		$user = Pers::tambahPers($_POST["nama"],$_POST["nohp"],$_POST["media"],$_POST["alamat"]);
		header("Location: http://simaspemkabjember.rf.gd/index.php?controller=Panel&action=homeSuper");
	}

	public function editPers(){
		$posts=Pers::editPers($_POST["idPers"],$_POST["nama"],$_POST["nohp"],$_POST["media"],$_POST["alamat"]);
		header("Location: http://simaspemkabjember.rf.gd/index.php?controller=Panel&action=homeSuper");
	}

	public function hapusPers(){
		$posts=Pers::hapusPers($_POST["idPers"]);
		header("Location: http://simaspemkabjember.rf.gd/index.php?controller=Panel&action=homeSuper");
	}
}
?>
