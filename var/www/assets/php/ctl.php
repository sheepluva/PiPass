<?php

function run_pipass_ctl_command($command = false) {

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
        //'backup',
        //'restore',
        'dashboard'
    );


    if (($command === false) || (strlen(trim($command)) < 1)) {
        error_log('No command specified');
        return false;
    }

    if (!in_array($command, $whitelist)) {
        error_log('Invalid command');
        return false;
    }

    $shcmdarg = escapeshellarg($command);

    $output = array();
    $exitcode = 0;

    if ($command === 'dashboard') {
        $shdasharg = escapeshellarg($_POST['DASHBOARD']);
        exec("sudo \"$bin\" $shcmdarg $shdasharg > /dev/null", $output, $exitcode);
    }
    else exec("sudo \"$bin\" $shcmdarg > /dev/null", $output, $exitcode);

    return ($exitcode === 0);
}

if (array_key_exists('command', $_GET)) {
    run_pipass_ctl_command($_GET['command']);
}
else if (array_key_exists('command', $_POST)) {
    run_pipass_ctl_command($_POST['command']);
}

?>
