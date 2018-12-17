<?php
function call($controller, $action){
	require_once('Controllers/c_'.$controller.'.php');

	switch ($controller) {
		case 'Login':
		require_once('Models/m_Login.php');
		$controller=new LoginController();
		break;

		case 'Home':
		$controller=new HomeController();
		break;

		case 'Panel':
		require_once('Models/m_User.php');
		require_once('Models/m_Pers.php');
		$controller=new PanelController();
		break;

		case 'Media':
		require_once('Models/m_Media.php');
		$controller=new MediaController();
		break;

		case 'Profile':
		require_once('Models/m_User.php');
		$controller=new ProfileController();
		break;

	}
	$controller->{ $action }();
}

$controllers = array('Login' => ['home','authentication'],
	'Home'=>['home'],
	'Panel'=>['homeAdmin','homeSuper','homeUser','tambahUser','editUser','hapusUser','tambahPers','editPers','hapusPers'],
	'Media'=>['mediaAdmin','uploadFile'],
	'Profile'=>['home','editProfile']
	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}
?>
