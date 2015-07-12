<?php

namespace Kubernetes\Client\Model;

class Container
{
    const PULL_POLICY_ALWAYS = 'Always';
    const PULL_POLICY_IF_NOT_PRESENT = 'IfNotPresent';
    const PULL_POLICY_NEVER = 'Never';

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $image;
    /**
     * @var string
     */
    private $pullPolicy;
    /**
     * @var EnvironmentVariable[]
     */
    private $environmentVariables;
    /**
     * @var ContainerPort[]
     */
    private $ports;
    /**
     * @var VolumeMount[]
     */
    private $volumeMounts;

    /**
     * @param string                $name
     * @param string                $image
     * @param EnvironmentVariable[] $environmentVariables
     * @param ContainerPort[]       $ports
     * @param VolumeMount[]         $volumeMounts
     * @param string                $pullPolicy
     */
    public function __construct($name, $image, array $environmentVariables, array $ports, array $volumeMounts = [], $pullPolicy = self::PULL_POLICY_ALWAYS)
    {
        $this->name = $name;
        $this->image = $image;
        $this->environmentVariables = $environmentVariables;
        $this->ports = $ports;
        $this->volumeMounts = $volumeMounts;
        $this->pullPolicy = $pullPolicy;
    }
}