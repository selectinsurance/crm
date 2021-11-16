<?php
/*
create_relation.php
Create this file into your root directory of vtiger i.e. vtigercrm/
and then run this file directly using your browser 
for example localhost/vtigercrm/create_relation.php
*/

include_once('vtlib/Vtiger/Module.php');

$mInstance = Vtiger_Module::getInstance('Contacts');
$accountsModule = Vtiger_Module::getInstance('Insurance');
$relationLabel  = 'Insurance';
$mInstance->setRelatedList(
      $accountsModule, $relationLabel, Array('ADD')
);

echo "done";
