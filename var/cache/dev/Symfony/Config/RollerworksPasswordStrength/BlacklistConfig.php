<?php

namespace Symfony\Config\RollerworksPasswordStrength;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Blacklist'.\DIRECTORY_SEPARATOR.'ProvidersConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class BlacklistConfig 
{
    private $defaultProvider;
    private $providers;
    
    /**
     * @default 'rollerworks_password_strength.blacklist.provider.noop'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultProvider($value): self
    {
        $this->defaultProvider = $value;
    
        return $this;
    }
    
    public function providers(array $value = []): \Symfony\Config\RollerworksPasswordStrength\Blacklist\ProvidersConfig
    {
        if (null === $this->providers) {
            $this->providers = new \Symfony\Config\RollerworksPasswordStrength\Blacklist\ProvidersConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "providers()" has already been initialized. You cannot pass values the second time you call providers().');
        }
    
        return $this->providers;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default_provider'])) {
            $this->defaultProvider = $value['default_provider'];
            unset($value['default_provider']);
        }
    
        if (isset($value['providers'])) {
            $this->providers = new \Symfony\Config\RollerworksPasswordStrength\Blacklist\ProvidersConfig($value['providers']);
            unset($value['providers']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultProvider) {
            $output['default_provider'] = $this->defaultProvider;
        }
        if (null !== $this->providers) {
            $output['providers'] = $this->providers->toArray();
        }
    
        return $output;
    }

}
