<?php   	  
		
require_once __DIR__ . '/config.php';
$random = new RandomOrgClient();

// Get a API key: https://api.random.org/api-keys
$random->setApiKey('a3a28ac2-9743-41e0-8f87-709e671bc7ba');
$arrRandomInt = $random->generateIntegers(1, 1, 100);
echo json_encode($arrRandomInt);
		
?>
