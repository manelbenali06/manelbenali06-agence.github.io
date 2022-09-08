<?php

namespace Symfony\Config\RollerworksPasswordStrength\Blacklist\Providers;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SqliteConfig 
{
    private $dsn;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dsn($value): self
    {
        $this->dsn = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['dsn'])) {
            $this->dsn = $value['dsn'];
            unset($value['dsn']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->dsn) {
            $output['dsn'] = $this->dsn;
        }
    
        return $output;
    }

}
