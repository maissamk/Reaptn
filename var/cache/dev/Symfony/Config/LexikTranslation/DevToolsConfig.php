<?php

namespace Symfony\Config\LexikTranslation;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DevToolsConfig 
{
    private $enable;
    private $createMissing;
    private $fileFormat;
    private $_usedProperties = [];
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enable($value): static
    {
        $this->_usedProperties['enable'] = true;
        $this->enable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function createMissing($value): static
    {
        $this->_usedProperties['createMissing'] = true;
        $this->createMissing = $value;
    
        return $this;
    }
    
    /**
     * @default 'yml'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fileFormat($value): static
    {
        $this->_usedProperties['fileFormat'] = true;
        $this->fileFormat = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('enable', $value)) {
            $this->_usedProperties['enable'] = true;
            $this->enable = $value['enable'];
            unset($value['enable']);
        }
    
        if (array_key_exists('create_missing', $value)) {
            $this->_usedProperties['createMissing'] = true;
            $this->createMissing = $value['create_missing'];
            unset($value['create_missing']);
        }
    
        if (array_key_exists('file_format', $value)) {
            $this->_usedProperties['fileFormat'] = true;
            $this->fileFormat = $value['file_format'];
            unset($value['file_format']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enable'])) {
            $output['enable'] = $this->enable;
        }
        if (isset($this->_usedProperties['createMissing'])) {
            $output['create_missing'] = $this->createMissing;
        }
        if (isset($this->_usedProperties['fileFormat'])) {
            $output['file_format'] = $this->fileFormat;
        }
    
        return $output;
    }

}
