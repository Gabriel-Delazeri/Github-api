<?php

require 'vendor/autoload.php';
require 'settings.php';
require 'GitHubApi.php';

$api = new GitHubApi();
print_r($api->getDataUser("Gabriel-Delazeri"));

?>