<?php
session_start();
require_once(ROOT.'/core/Database/PdoMysql.php');
$titre = 'BugRecovery';
if (Bdd::needInstance())
{
	$_SESSION['bdd'] = new Bdd('localhost', 'unskilledsheep', 'root', 'test123', false, null, null);
}