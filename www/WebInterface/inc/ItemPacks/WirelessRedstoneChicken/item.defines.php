<?php if(!defined('DEFINE_INDEX_FILE')){if(headers_sent()){echo '<header><meta http-equiv="refresh" content="0;url=../"></header>';}else{header('HTTP/1.0 301 Moved Permanently'); header('Location: ../');} die("<font size=+2>Access Denied!!</font>");}
// Wireless Redstone Chicken Bones Edition - item definitions
$Items = &ItemFuncs::$Items;
$pack  = 'WirelessRedstoneChicken';

$Items[177]=array(
  0  =>array(
    'name'=>'Wireless Receiver',
    'icon'=>'Wireless_Receiver.png',
    'pack'=>$pack),
  256=>array(
    'name'=>'Wireless Transmitter',
    'icon'=>'Wireless_Transmitter.png',
    'pack'=>$pack),
  512=>array(
    'name'=>'Wireless Jammer',
    'icon'=>'Wireless_Jammer.png',
    'pack'=>$pack),
  -1=>array(
    'name'=>'Wireless Receiver',
    'icon'=>'Wireless_Receiver.png',
    'pack'=>$pack),
);
$Items[6357]=array(
    'name'=>'Triangulator',
    'icon'=>'Triangulator.png',
    'pack'=>$pack);
$Items[6358]=array(
    'name'=>'Wireless Remote',
    'icon'=>'Wireless_Remote.png',
    'pack'=>$pack);
$Items[6359]=array(
    'name'=>'Wireless Sniffer',
    'icon'=>'Wireless_Sniffer.png',
    'pack'=>$pack);
$Items[6360]=array(
    'name'=>'Wireless Map',
    'icon'=>'Wireless_Map.png',
    'pack'=>$pack);
$Items[6361]=array(
    'name'=>'Wireless Tracker',
    'icon'=>'Wireless_Tracker.png',
    'pack'=>$pack);
$Items[6362]=array(
    'name'=>'REP',
    'icon'=>'REP.png',
    'pack'=>$pack);
$Items[6363]=array(
    'name'=>'Private Sniffer',
    'icon'=>'Private_Sniffer.png',
    'pack'=>$pack);
$Items[6406]=array(
    'name'=>'Obsidian Stick',
    'icon'=>'Obsidian_Stick.png',
    'pack'=>$pack);
$Items[6407]=array(
    'name'=>'Stone Bowl',
    'icon'=>'Stone_Bowl.png',
    'pack'=>$pack);
$Items[6408]=array(
    'name'=>'REther Pearl',
    'icon'=>'REther_Pearl.png',
    'pack'=>$pack);
$Items[6409]=array(
    'name'=>'Wireless Transceiver',
    'icon'=>'Wireless_Transceiver.png',
    'pack'=>$pack);
$Items[6410]=array(
    'name'=>'Blaze Transceiver',
    'icon'=>'Blaze_Transceiver.png',
    'pack'=>$pack);
$Items[6411]=array(
    'name'=>'Receiver Dish',
    'icon'=>'Receiver_Dish.png',
    'pack'=>$pack);
$Items[6412]=array(
    'name'=>'Blaze Receiver Dish',
    'icon'=>'Blaze_Receiver_Dish.png',
    'pack'=>$pack);

unset($Items);
?>