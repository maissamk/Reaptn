<?php

namespace Symfony\Config\LexikTranslation;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StorageConfig 
{
    private $type;
    private $objectManager;
    private $_usedProperties = [];
    
    /**
     * @default 'orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function objectManager($value): static
    {
        $this->_usedProperties['objectManager'] = true;
        $this->objectManager = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (array_key_exists('object_manager', $value)) {
            $this->_usedProperties['objectManager'] = true;
            $this->objectManager = $value['object_manager'];
            unset($value['object_manager']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['objectManager'])) {
            $output['object_manager'] = $this->objectManager;
        }
    
        return $output;
    }

}
