<?php
//$connection = ssh2_connect('online.necta.go.tz', 22);
//ssh2_auth_password($connection, 'brnuser', 'sftpBRN_2015');
//
//$sftp = ssh2_sftp($connection);
//echo $sftp;
////$stream = fopen("ssh2.sftp://$sftp/path/to/file", 'r');
?>
<?php
/* Notify the user if the server terminates the connection */
function my_ssh_disconnect($reason, $message, $language) {
  printf("Server disconnected with reason code [%d] and message: %s\n",
         $reason, $message);
}

$methods = array(
  'kex' => 'diffie-hellman-group1-sha1',
  'client_to_server' => array(
    'crypt' => '3des-cbc',
    'comp' => 'none'),
  'server_to_client' => array(
    'crypt' => 'aes256-cbc,aes192-cbc,aes128-cbc',
    'comp' => 'none'));

$callbacks = array('disconnect' => 'my_ssh_disconnect');

$connection = ssh2_connect('shell.example.com', 22, $methods, $callbacks);
if (!$connection) die('Connection failed');
?>