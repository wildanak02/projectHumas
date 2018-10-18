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


	}
	$controller->{ $action }();
}

$controllers = array('Login' => ['home','authentication'],
	'Home'=>['home']
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
