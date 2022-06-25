<?php
namespace Spikelib\Grpc\Hardware;

class Server
{
    public function getHardware(HardwareRequest $request, \Grpc\ServerContext $context): ?HardwareReply
    {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    final public function getMethodDescriptors(): array
    {
        return [
            '/Mercury/Api/V1/GetHardware' => new \Grpc\MethodDescriptor(
                $this,
                'GetHardware',
                'Spikelib\Grpc\Hardware\HardwareRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }
}
