<?php

namespace Symfony\Config\LexikTranslation;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResourcesRegistrationConfig 
{
    private $type;
    private $managedLocalesOnly;
    private $_usedProperties = [];

    /**
     * @default 'all'
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
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function managedLocalesOnly($value): static
    {
        $this->_usedProperties['managedLocalesOnly'] = true;
        $this->managedLocalesOnly = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('managed_locales_only', $value)) {
            $this->_usedProperties['managedLocalesOnly'] = true;
            $this->managedLocalesOnly = $value['managed_locales_only'];
            unset($value['managed_locales_only']);
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
        if (isset($this->_usedProperties['managedLocalesOnly'])) {
            $output['managed_locales_only'] = $this->managedLocalesOnly;
        }

        return $output;
    }

}
