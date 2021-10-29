<?php 

define('SITE_URL', 'https://lifelinewills.co.uk/');
define('LOGO_PATH', 'http://lifelinewills.co.uk/assets/img/logo.png');
// define('ALLIED_URL', 'https://lifelineprotect.co.uk/admin/mortgage/addinfowebsite');

// define('SITE_KEY', '6LdSDTYaAAAAAPv4Vsq10etW71ucmKls8uFaSys4');//live
// define('SECRET_KEY', '6LdSDTYaAAAAAK0sPqRJTHf2sd3Ja7z9VG9VcsKg');//live

define('SITE_KEY', '6Ldhv9wZAAAAAPg7l6YS_dzBl_rLc4cPRwPScrga');//local
define('SECRET_KEY', '6Ldhv9wZAAAAAJe_4SYTPsclUL28uMihFwDeHU-o');//local

$server_name=$original_server_name=$_SERVER['HTTP_HOST'];
$server_name = preg_replace('/^' . preg_quote("www.", '/') . '/', '', $server_name);
$server_name = preg_replace('/^' . preg_quote("WWW.", '/') . '/', '', $server_name);
$scheme=isset($_SERVER["REQUEST_SCHEME"])?$_SERVER["REQUEST_SCHEME"]:'http';
$base_url="{$scheme}://".$original_server_name;
$cdn_path="{$scheme}://".$server_name."/cdn";
$sub_folder = '';
$server_root=__DIR__;
if($server_name == '192.168.29.210' || $server_name == '192.168.29.210:8888'){
    $sub_folder="/training/Rizwan/LifelineWills/";
    $cdn_path .= $sub_folder;
    $server_root=dirname(dirname(dirname($server_root)));
}

if($server_name == '192.168.29.210' || $server_name == '192.168.29.210:8888'){
  $sub_folder="/training/Rizwan/LifelineWills/";
  $cdn_path .= $sub_folder.'/admin';
  $server_root=dirname(dirname(dirname($server_root)));
  define("CDN_ROOT", str_replace("/", DIRECTORY_SEPARATOR, $server_root.DIRECTORY_SEPARATOR."cdn".$sub_folder.DIRECTORY_SEPARATOR."admin"));
}
if($server_name == "lifelinewills.co.uk") {
$cdn_path="{$scheme}://".$server_name."/admin/cdn";
$server_root=dirname($server_root);
// 	$sub_folder = '/admin';
define("CDN_ROOT", str_replace("/", DIRECTORY_SEPARATOR, $server_root.DIRECTORY_SEPARATOR."admin".DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR."webroot".DIRECTORY_SEPARATOR."cdn"));
}
$base_url .= $sub_folder;

define('HTTP_PATH',$base_url);
define("CDN_PATH", $cdn_path);

// $base_url .= $sub_folder;

// define('HTTP_PATH',$base_url);
// define("CDN_PATH", $cdn_path.'/admin');
// define("CDN_ROOT", str_replace("/", DIRECTORY_SEPARATOR, $server_root.DIRECTORY_SEPARATOR."cdn".$sub_folder.DIRECTORY_SEPARATOR."admin"));

// echo CDN_PATH;
// echo "<br>";
// echo CDN_ROOT;
// exit;

// $blogs_image_path = array("http_path"=>CDN_PATH."/files/blogs","file_path"=>CDN_ROOT.DIRECTORY_SEPARATOR."files".DIRECTORY_SEPARATOR."blogs","resize_array"=>[],"file_type"=>"jpg,jpeg,png");

// print_r($blogs_image_path);
//db details
// $servername = "localhost";
// $username = "root";
// $password = "";
// $my_db = 'lifelineprotect';

// Create connection
// $conn = new mysqli($servername, $username, $password,$my_db);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

?>