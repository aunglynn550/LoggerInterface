<?php 
require_once 'Application.php';
require_once 'FileLog.php';
require_once 'DbLog.php';

//only change happens here

$app = new Application(
    new FileLog()
    //new DbLog()
);

$app->logger->info("Info Message");
$app->logger->error("Error Message");
$app->logger->success("Success Message");
$app->logger->warning("Warning Message");
$app->logger->log("DEBUG","Debug Message");