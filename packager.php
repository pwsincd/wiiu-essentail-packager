<?php
//Quickstore zip packager by pwsincd.
$apps = $_POST['data'];
$zip = new ZipArchive;
$date = date('m-d-Y_H:i:s');

if ($zip->open('flumpyfile'.$date.'.zip', ZipArchive::CREATE) === TRUE) {
	$zip->addEmptyDir('wiiu/apps');
	foreach ($apps as $value) {
		$zip->addEmptyDir('wiiu/apps/'.$value['dir']);
   $zip->addFile('../appstore/apps/'.$value['dir'].'/icon.png', 'wiiu/apps/'.$value['dir'].'/icon.png');
   $zip->addFile('../appstore/apps/'.$value['dir'].'/meta.xml', 'wiiu/apps/'.$value['dir'].'/meta.xml');
   $zip->addFile('../appstore/apps/'.$value['dir'].'/'.$value['binary'], 'wiiu/apps/'.$value['dir'].'/'.$value['binary']);
   if ($value['dir'] == "haxchi")
   {
    $zip->addEmptyDir('haxchi');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/haxchi/bootDrcTex.tga', 'haxchi/bootDrcTex.tga');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/haxchi/bootTvTex.tga', 'haxchi/bootTvTex.tga');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/haxchi/config.txt', 'haxchi/config.txt');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/haxchi/iconTex.tga', 'haxchi/iconTex.tga');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/haxchi/title.txt', 'haxchi/title.txt');
  }
  if ($value['dir'] == "cbhc")
  {
    $zip->addEmptyDir('cbhc');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/cbhc/bootDrcTex.tga', 'cbhc/bootDrcTex.tga');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/cbhc/bootTvTex.tga', 'cbhc/bootTvTex.tga');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/cbhc/config.txt', 'cbhc/config.txt');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/cbhc/iconTex.tga', 'cbhc/iconTex.tga');
    $zip->addFile('../appstore/apps/'.$value['dir'].'/sd/cbhc/title.txt', 'cbhc/title.txt');
  }
  if ($value['dir'] == "HBLchannel")
{
  $zip->addEmptyDir('install/HBL');
  $zip->addFile('channels/'.$value['dir'].'/title.tmd', 'install/HBL/title.tmd');
  $zip->addFile('channels/'.$value['dir'].'/title.tik', 'install/HBL/title.tik');
  $zip->addFile('channels/'.$value['dir'].'/title.cert', 'install/HBL/title.cert');
  $zip->addFile('channels/'.$value['dir'].'/00000000.app', 'install/HBL/00000000.app');
  $zip->addFile('channels/'.$value['dir'].'/00000001.app', 'install/HBL/00000001.app');
  $zip->addFile('channels/'.$value['dir'].'/00000002.app', 'install/HBL/00000002.app');
  $zip->addFile('channels/'.$value['dir'].'/00000003.app', 'install/HBL/00000003.app');
  $zip->addFile('channels/'.$value['dir'].'/00000004.app', 'install/HBL/00000004.app');
  $zip->addFile('channels/'.$value['dir'].'/00000005.app', 'install/HBL/00000005.app');
  $zip->addFile('channels/'.$value['dir'].'/00000006.app', 'install/HBL/00000006.app');
  $zip->addFile('channels/'.$value['dir'].'/00000007.app', 'install/HBL/00000007.app');
  $zip->addFile('channels/'.$value['dir'].'/00000008.app', 'install/HBL/00000008.app');
  $zip->addFile('channels/'.$value['dir'].'/00000003.h3', 'install/HBL/00000003.h3');
  $zip->addFile('channels/'.$value['dir'].'/00000004.h3', 'install/HBL/00000004.h3');
  $zip->addFile('channels/'.$value['dir'].'/00000005.h3', 'install/HBL/00000005.h3');
  $zip->addFile('channels/'.$value['dir'].'/00000006.h3', 'install/HBL/00000006.h3');
  $zip->addFile('channels/'.$value['dir'].'/00000008.h3', 'install/HBL/00000008.h3');
}
if ($value['dir'] == "WUPGX2channel")
{
  $zip->addEmptyDir('install/WUPinstallerGX2');
  $zip->addFile('channels/'.$value['dir'].'/title.tmd', 'install/WUPinstallerGX2/title.tmd');
  $zip->addFile('channels/'.$value['dir'].'/title.tik', 'install/WUPinstallerGX2/title.tik');
  $zip->addFile('channels/'.$value['dir'].'/title.cert', 'install/WUPinstallerGX2/title.cert');
  $zip->addFile('channels/'.$value['dir'].'/00000000.app', 'install/WUPinstallerGX2/00000000.app');
  $zip->addFile('channels/'.$value['dir'].'/00000001.app', 'install/WUPinstallerGX2/00000001.app');
  $zip->addFile('channels/'.$value['dir'].'/00000002.app', 'install/WUPinstallerGX2/00000002.app');
  $zip->addFile('channels/'.$value['dir'].'/00000003.app', 'install/WUPinstallerGX2/00000003.app');
  $zip->addFile('channels/'.$value['dir'].'/00000004.app', 'install/WUPinstallerGX2/00000004.app');
  $zip->addFile('channels/'.$value['dir'].'/00000005.app', 'install/WUPinstallerGX2/00000005.app');
  $zip->addFile('channels/'.$value['dir'].'/00000006.app', 'install/WUPinstallerGX2/00000006.app');
  $zip->addFile('channels/'.$value['dir'].'/00000007.app', 'install/WUPinstallerGX2/00000007.app');
  $zip->addFile('channels/'.$value['dir'].'/00000008.app', 'install/WUPinstallerGX2/00000008.app');
  $zip->addFile('channels/'.$value['dir'].'/00000003.h3', 'install/WUPinstallerGX2/00000003.h3');
  $zip->addFile('channels/'.$value['dir'].'/00000004.h3', 'install/WUPinstallerGX2/00000004.h3');
  $zip->addFile('channels/'.$value['dir'].'/00000005.h3', 'install/WUPinstallerGX2/00000005.h3');
  $zip->addFile('channels/'.$value['dir'].'/00000006.h3', 'install/WUPinstallerGX2/00000006.h3');
  $zip->addFile('channels/'.$value['dir'].'/00000008.h3', 'install/WUPinstallerGX2/00000008.h3');
}
}
$zip->close();
echo 'https://www.wiiubru.com/flump/flumpyfile'.$date.'.zip';
} else {
  echo 'oops....something went wrong , contact Flump on Discord';
}
?>