<?php
Class LoginController{

	public function home(){
		require_once("Views/v_Login.php");
	}

	public function authentication(){
				if(Login::find($_GET['username'],$_GET['password'])==0){
					header("location:?controller=Login&action=home&error= username or password is not available");
				}else if(Login::find($_GET['username'],$_GET['password'])==1){
					$_SESSION['login']=$_GET['username'];
					header("location:index.php?controller=Home&action=home");
				}elseif(Login::find($_GET['username'],$_GET['password'])==2){
					$_SESSION['login']=$_GET['username'];
					header("location:index.php?controller=Home&action=home");
				}

}
}

?>
