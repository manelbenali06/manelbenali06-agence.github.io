<?php

namespace Symfony\Config\RollerworksPasswordStrength\Blacklist;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Providers'.\DIRECTORY_SEPARATOR.'SqliteConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Providers'.\DIRECTORY_SEPARATOR.'ChainConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class ProvidersConfig 
{
    private $sqlite;
    private $chain;
    private $array;
    
    public function sqlite(array $value = []): \Symfony\Config\RollerworksPasswordStrength\Blacklist\Providers\SqliteConfig
    {
        if (null === $this->sqlite) {
            $this->sqlite = new \Symfony\Config\RollerworksPasswordStrength\Blacklist\Providers\SqliteConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sqlite()" has already been initialized. You cannot pass values the second time you call sqlite().');
        }
    
        return $this->sqlite;
    }
    
    public function chain(array $value = []): \Symfony\Config\RollerworksPasswordStrength\Blacklist\Providers\ChainConfig
    {
        if (null === $this->chain) {
            $this->chain = new \Symfony\Config\RollerworksPasswordStrength\Blacklist\Providers\ChainConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "chain()" has already been initialized. You cannot pass values the second time you call chain().');
        }
    
        return $this->chain;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function array($value): self
    {
        $this->array = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['sqlite'])) {
            $this->sqlite = new \Symfony\Config\RollerworksPasswordStrength\Blacklist\Providers\SqliteConfig($value['sqlite']);
            unset($value['sqlite']);
        }
    
        if (isset($value['chain'])) {
            $this->chain = new \Symfony\Config\RollerworksPasswordStrength\Blacklist\Providers\ChainConfig($value['chain']);
            unset($value['chain']);
        }
    
        if (isset($value['array'])) {
            $this->array = $value['array'];
            unset($value['array']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->sqlite) {
            $output['sqlite'] = $this->sqlite->toArray();
        }
        if (null !== $this->chain) {
            $output['chain'] = $this->chain->toArray();
        }
        if (null !== $this->array) {
            $output['array'] = $this->array;
        }
    
        return $output;
    }

}
