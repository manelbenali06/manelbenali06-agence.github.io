<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'RollerworksPasswordStrength'.\DIRECTORY_SEPARATOR.'BlacklistConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class RollerworksPasswordStrengthConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $blacklist;
    
    public function blacklist(array $value = []): \Symfony\Config\RollerworksPasswordStrength\BlacklistConfig
    {
        if (null === $this->blacklist) {
            $this->blacklist = new \Symfony\Config\RollerworksPasswordStrength\BlacklistConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "blacklist()" has already been initialized. You cannot pass values the second time you call blacklist().');
        }
    
        return $this->blacklist;
    }
    
    public function getExtensionAlias(): string
    {
        return 'rollerworks_password_strength';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['blacklist'])) {
            $this->blacklist = new \Symfony\Config\RollerworksPasswordStrength\BlacklistConfig($value['blacklist']);
            unset($value['blacklist']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->blacklist) {
            $output['blacklist'] = $this->blacklist->toArray();
        }
    
        return $output;
    }

}
