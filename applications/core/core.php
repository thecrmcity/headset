<?php
session_start();
if(! defined('BASEPATH'))
{
	define('BASEPATH','http://localhost/experiments/pslv_headset/');
}
class Core
{
	public function __construct()
	{
		$this->init();
		$this->autoload();
		$this->dispatch();
	}

	public function init()
	{
		define('TITLE', 'Khap Headset Inventory Software');
		define('US','/');
		define('DS', DIRECTORY_SEPARATOR);
		define('APP', BASEPATH.'applications'.US);
		define('PUB', BASEPATH.'public'.US);
		define('SYS', BASEPATH.'systems'.US);

		define('CON', APP.'config'.US);
		define('CONT', APP.'controllers'.US);
		define('CORE', APP.'core'.US);
		define('MOD', APP.'models'.US);
		define('VEW', APP.'views'.US);

		define('DON', PUB.'downloads'.US);
		define('UPD', PUB.'uploads'.US);

		define('IMG', SYS.'img'.US);
	}
	public function getHeader()
	{
		echo '
			<link rel="icon" type="image/x-icon" href="'.IMG.'headset-fevicon.png">
			<link rel="stylesheet" type="text/css" href="'.SYS.'css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="'.SYS.'css/font-awesome.css">
			<link rel="stylesheet" type="text/css" href="'.SYS.'css/style.css">
			<link rel="stylesheet" type="text/css" href="'.SYS.'css/responsive.css">
			<script src="'.SYS.'js/jquery.js" type="text/javascript" charset="utf-8"></script>

		';
	}
	public function getFooter()
	{
		echo '
		<script src="'.SYS.'js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<script src="'.SYS.'js/Chart.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="'.SYS.'js/loader.js" type="text/javascript" charset="utf-8"></script>
		<script src="'.SYS.'js/popper.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript"> var basepath = '.BASEPATH.'</script>
		<script src="'.SYS.'js/script.js" type="text/javascript" charset="utf-8"></script>
		';
	}
	public function autoload()
	{
		spl_autoload_register(array(__CLASS__,'load'));
	}
	public function load($classname)
	{
		switch($classname)
		{
			case "Dispatchfile":
			include dirname(__DIR__).DS.'controllers'.DS.$classname.'.php';
			break;
		}
	}
	public function dispatch()
	{
		global $pageName;
		$page = basename($_SERVER['PHP_SELF'],'.php');
		$pageName = ucwords($page);

	}
}
$core = new Core();
?>