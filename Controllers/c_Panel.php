<?php
Class PanelController {

	public function homeAdmin(){
		$users=User::viewUser();
		require_once("Views/v_AdminPanel.php");
	}

	public function homeSuper(){
		require_once("Views/v_SuperPanel.php");
	}

	public function homeUser(){
		require_once("Views/v_UserPanel.php");
	}

	public function tambahUser(){
		$user = User::tambahUser($_POST["level"],$_POST["username"],$_POST["password"]);
		header("location:index.php?controller=Panel&action=homeAdmin");
	}

  public function editUser(){
		$posts=User::editUser($_GET["idUser"],$_GET["level"],$_GET["username"],$_GET["password"]);
		header("location:index.php?controller=Panel&action=homeAdmin");
	}

  public function hapusUser(){
		$posts=User::hapus($_GET["idUser"]);
		header("location:index.php?controller=Panel&action=homeAdmin");
	}

}

?>
