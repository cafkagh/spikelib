<?php
namespace Spikelib\Grpc\Hardware;

class Client extends \Grpc\BaseStub
{
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    public function getHardware(HardwareRequest $argument, $metadata = [], $options = []) {
        return $this->_simpleRequest('/Mercury/Api/V1/GetHardware',
            $argument,
            ['Spikelib\Grpc\Hardware\HardwareReply', 'decode'],
            $metadata, $options);
    }
}
