<?php
namespace Spikelib;
use Spikelib\Grpc\Hardware\HardwareRequest;
use Spikelib\Grpc\Hardware\HardwareReply;
use GPBMetadata\Hardware;
require_once(dirname(__DIR__)."/vendor/autoload.php");
$req = new HardwareRequest();

$req->setCid("aaasd");
echo $req->getCid();
