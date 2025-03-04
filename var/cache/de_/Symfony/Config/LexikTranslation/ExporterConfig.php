<?php

namespace Symfony\Config\LexikTranslation;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ExporterConfig 
{
    private $jsonHierarchicalFormat;
    private $useYmlTree;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function jsonHierarchicalFormat($value): static
    {
        $this->_usedProperties['jsonHierarchicalFormat'] = true;
        $this->jsonHierarchicalFormat = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useYmlTree($value): static
    {
        $this->_usedProperties['useYmlTree'] = true;
        $this->useYmlTree = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('json_hierarchical_format', $value)) {
            $this->_usedProperties['jsonHierarchicalFormat'] = true;
            $this->jsonHierarchicalFormat = $value['json_hierarchical_format'];
            unset($value['json_hierarchical_format']);
        }

        if (array_key_exists('use_yml_tree', $value)) {
            $this->_usedProperties['useYmlTree'] = true;
            $this->useYmlTree = $value['use_yml_tree'];
            unset($value['use_yml_tree']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['jsonHierarchicalFormat'])) {
            $output['json_hierarchical_format'] = $this->jsonHierarchicalFormat;
        }
        if (isset($this->_usedProperties['useYmlTree'])) {
            $output['use_yml_tree'] = $this->useYmlTree;
        }

        return $output;
    }

}
