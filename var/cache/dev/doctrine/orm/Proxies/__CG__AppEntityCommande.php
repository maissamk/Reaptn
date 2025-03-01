<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commande extends \App\Entity\Commande implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'dateCommande' => [parent::class, 'dateCommande', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'livraison' => [parent::class, 'livraison', null],
        "\0".parent::class."\0".'materiels' => [parent::class, 'materiels', null],
        "\0".parent::class."\0".'paiement' => [parent::class, 'paiement', null],
        "\0".parent::class."\0".'quantite' => [parent::class, 'quantite', null],
        "\0".parent::class."\0".'totale' => [parent::class, 'totale', null],
        "\0".parent::class."\0".'user_id_commande' => [parent::class, 'user_id_commande', null],
        'dateCommande' => [parent::class, 'dateCommande', null],
        'id' => [parent::class, 'id', null],
        'livraison' => [parent::class, 'livraison', null],
        'materiels' => [parent::class, 'materiels', null],
        'paiement' => [parent::class, 'paiement', null],
        'quantite' => [parent::class, 'quantite', null],
        'totale' => [parent::class, 'totale', null],
        'user_id_commande' => [parent::class, 'user_id_commande', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
