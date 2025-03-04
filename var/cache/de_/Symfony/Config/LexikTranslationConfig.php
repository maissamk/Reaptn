<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikTranslation'.\DIRECTORY_SEPARATOR.'StorageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikTranslation'.\DIRECTORY_SEPARATOR.'ResourcesRegistrationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikTranslation'.\DIRECTORY_SEPARATOR.'ExporterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikTranslation'.\DIRECTORY_SEPARATOR.'DevToolsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LexikTranslationConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $baseLayout;
    private $fallbackLocale;
    private $managedLocales;
    private $gridInputType;
    private $gridToggleSimilar;
    private $autoCacheClean;
    private $autoCacheCleanInterval;
    private $storage;
    private $resourcesRegistration;
    private $exporter;
    private $devTools;
    private $_usedProperties = [];

    /**
     * @default '@LexikTranslationBundle/layout.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function baseLayout($value): static
    {
        $this->_usedProperties['baseLayout'] = true;
        $this->baseLayout = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function fallbackLocale(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['fallbackLocale'] = true;
        $this->fallbackLocale = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function managedLocales(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['managedLocales'] = true;
        $this->managedLocales = $value;

        return $this;
    }

    /**
     * @default 'text'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function gridInputType($value): static
    {
        $this->_usedProperties['gridInputType'] = true;
        $this->gridInputType = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function gridToggleSimilar($value): static
    {
        $this->_usedProperties['gridToggleSimilar'] = true;
        $this->gridToggleSimilar = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoCacheClean($value): static
    {
        $this->_usedProperties['autoCacheClean'] = true;
        $this->autoCacheClean = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function autoCacheCleanInterval($value): static
    {
        $this->_usedProperties['autoCacheCleanInterval'] = true;
        $this->autoCacheCleanInterval = $value;

        return $this;
    }

    /**
     * @default {"type":"orm"}
    */
    public function storage(array $value = []): \Symfony\Config\LexikTranslation\StorageConfig
    {
        if (null === $this->storage) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\LexikTranslation\StorageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "storage()" has already been initialized. You cannot pass values the second time you call storage().');
        }

        return $this->storage;
    }

    /**
     * @default {"type":"all","managed_locales_only":true}
    */
    public function resourcesRegistration(array $value = []): \Symfony\Config\LexikTranslation\ResourcesRegistrationConfig
    {
        if (null === $this->resourcesRegistration) {
            $this->_usedProperties['resourcesRegistration'] = true;
            $this->resourcesRegistration = new \Symfony\Config\LexikTranslation\ResourcesRegistrationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resourcesRegistration()" has already been initialized. You cannot pass values the second time you call resourcesRegistration().');
        }

        return $this->resourcesRegistration;
    }

    /**
     * @default {"json_hierarchical_format":false,"use_yml_tree":false}
    */
    public function exporter(array $value = []): \Symfony\Config\LexikTranslation\ExporterConfig
    {
        if (null === $this->exporter) {
            $this->_usedProperties['exporter'] = true;
            $this->exporter = new \Symfony\Config\LexikTranslation\ExporterConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "exporter()" has already been initialized. You cannot pass values the second time you call exporter().');
        }

        return $this->exporter;
    }

    /**
     * @default {"enable":false,"create_missing":false,"file_format":"yml"}
    */
    public function devTools(array $value = []): \Symfony\Config\LexikTranslation\DevToolsConfig
    {
        if (null === $this->devTools) {
            $this->_usedProperties['devTools'] = true;
            $this->devTools = new \Symfony\Config\LexikTranslation\DevToolsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "devTools()" has already been initialized. You cannot pass values the second time you call devTools().');
        }

        return $this->devTools;
    }

    public function getExtensionAlias(): string
    {
        return 'lexik_translation';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('base_layout', $value)) {
            $this->_usedProperties['baseLayout'] = true;
            $this->baseLayout = $value['base_layout'];
            unset($value['base_layout']);
        }

        if (array_key_exists('fallback_locale', $value)) {
            $this->_usedProperties['fallbackLocale'] = true;
            $this->fallbackLocale = $value['fallback_locale'];
            unset($value['fallback_locale']);
        }

        if (array_key_exists('managed_locales', $value)) {
            $this->_usedProperties['managedLocales'] = true;
            $this->managedLocales = $value['managed_locales'];
            unset($value['managed_locales']);
        }

        if (array_key_exists('grid_input_type', $value)) {
            $this->_usedProperties['gridInputType'] = true;
            $this->gridInputType = $value['grid_input_type'];
            unset($value['grid_input_type']);
        }

        if (array_key_exists('grid_toggle_similar', $value)) {
            $this->_usedProperties['gridToggleSimilar'] = true;
            $this->gridToggleSimilar = $value['grid_toggle_similar'];
            unset($value['grid_toggle_similar']);
        }

        if (array_key_exists('auto_cache_clean', $value)) {
            $this->_usedProperties['autoCacheClean'] = true;
            $this->autoCacheClean = $value['auto_cache_clean'];
            unset($value['auto_cache_clean']);
        }

        if (array_key_exists('auto_cache_clean_interval', $value)) {
            $this->_usedProperties['autoCacheCleanInterval'] = true;
            $this->autoCacheCleanInterval = $value['auto_cache_clean_interval'];
            unset($value['auto_cache_clean_interval']);
        }

        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\LexikTranslation\StorageConfig($value['storage']);
            unset($value['storage']);
        }

        if (array_key_exists('resources_registration', $value)) {
            $this->_usedProperties['resourcesRegistration'] = true;
            $this->resourcesRegistration = new \Symfony\Config\LexikTranslation\ResourcesRegistrationConfig($value['resources_registration']);
            unset($value['resources_registration']);
        }

        if (array_key_exists('exporter', $value)) {
            $this->_usedProperties['exporter'] = true;
            $this->exporter = new \Symfony\Config\LexikTranslation\ExporterConfig($value['exporter']);
            unset($value['exporter']);
        }

        if (array_key_exists('dev_tools', $value)) {
            $this->_usedProperties['devTools'] = true;
            $this->devTools = new \Symfony\Config\LexikTranslation\DevToolsConfig($value['dev_tools']);
            unset($value['dev_tools']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['baseLayout'])) {
            $output['base_layout'] = $this->baseLayout;
        }
        if (isset($this->_usedProperties['fallbackLocale'])) {
            $output['fallback_locale'] = $this->fallbackLocale;
        }
        if (isset($this->_usedProperties['managedLocales'])) {
            $output['managed_locales'] = $this->managedLocales;
        }
        if (isset($this->_usedProperties['gridInputType'])) {
            $output['grid_input_type'] = $this->gridInputType;
        }
        if (isset($this->_usedProperties['gridToggleSimilar'])) {
            $output['grid_toggle_similar'] = $this->gridToggleSimilar;
        }
        if (isset($this->_usedProperties['autoCacheClean'])) {
            $output['auto_cache_clean'] = $this->autoCacheClean;
        }
        if (isset($this->_usedProperties['autoCacheCleanInterval'])) {
            $output['auto_cache_clean_interval'] = $this->autoCacheCleanInterval;
        }
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage->toArray();
        }
        if (isset($this->_usedProperties['resourcesRegistration'])) {
            $output['resources_registration'] = $this->resourcesRegistration->toArray();
        }
        if (isset($this->_usedProperties['exporter'])) {
            $output['exporter'] = $this->exporter->toArray();
        }
        if (isset($this->_usedProperties['devTools'])) {
            $output['dev_tools'] = $this->devTools->toArray();
        }

        return $output;
    }

}
