<?php

$bin = '/opt/PiPass/piPass-ctl';

$whitelist = array(
    'advance',
    'reload',
    'start',
    'status',
    'stop',
    'pi-netreset',
    'pi-reboot',
    'pi-shutdown',
    'update',
    'dashboard'
);

$getpost = array_merge($_GET, $_POST);

if (!array_key_exists('command', $getpost)) {
    die('No command specified');
}

$command = $getpost['command'];

if (!in_array($command, $whitelist)) {
    die('Invalid command');
}

$shcmdarg = escapeshellarg($command);

if ($command === 'dashboard') {
    $shdasharg = escapeshellarg($getpost['DASHBOARD']);
    exec("sudo \"$bin\" $shcmdarg $shdasharg > /dev/null");
}
else exec("sudo \"$bin\" $shcmdarg > /dev/null");

?>
