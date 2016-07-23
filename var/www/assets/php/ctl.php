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
    'upgrade'
);

$getpost = array_merge($_GET, $_POST);

if (!array_key_exists('command', $getpost)) {
    die('No command specified');
}

$command = $getpost['command'];

if (!in_array($command, $whitelist)) {
    die('Invalid command');
}

exec("sudo \"$bin\" '$command'");

?>
