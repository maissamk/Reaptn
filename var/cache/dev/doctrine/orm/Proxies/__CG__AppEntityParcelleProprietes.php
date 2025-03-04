<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ParcelleProprietes extends \App\Entity\ParcelleProprietes implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'contact_proprietaire' => [parent::class, 'contact_proprietaire', null],
        "\0".parent::class."\0".'date_creation_annonce' => [parent::class, 'date_creation_annonce', null],
        "\0".parent::class."\0".'date_misajour_annonce' => [parent::class, 'date_misajour_annonce', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'emplacement' => [parent::class, 'emplacement', null],
        "\0".parent::class."\0".'est_disponible' => [parent::class, 'est_disponible', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'image' => [parent::class, 'image', null],
        "\0".parent::class."\0".'latitude' => [parent::class, 'latitude', null],
        "\0".parent::class."\0".'longitude' => [parent::class, 'longitude', null],
        "\0".parent::class."\0".'nom_proprietaire' => [parent::class, 'nom_proprietaire', null],
        "\0".parent::class."\0".'prix' => [parent::class, 'prix', null],
        "\0".parent::class."\0".'status' => [parent::class, 'status', null],
        "\0".parent::class."\0".'taille' => [parent::class, 'taille', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        "\0".parent::class."\0".'type_Contrat' => [parent::class, 'type_Contrat', null],
        "\0".parent::class."\0".'type_terrain' => [parent::class, 'type_terrain', null],
        "\0".parent::class."\0".'user_id_parcelle' => [parent::class, 'user_id_parcelle', null],
        'contact_proprietaire' => [parent::class, 'contact_proprietaire', null],
        'date_creation_annonce' => [parent::class, 'date_creation_annonce', null],
        'date_misajour_annonce' => [parent::class, 'date_misajour_annonce', null],
        'description' => [parent::class, 'description', null],
        'email' => [parent::class, 'email', null],
        'emplacement' => [parent::class, 'emplacement', null],
        'est_disponible' => [parent::class, 'est_disponible', null],
        'id' => [parent::class, 'id', null],
        'image' => [parent::class, 'image', null],
        'latitude' => [parent::class, 'latitude', null],
        'longitude' => [parent::class, 'longitude', null],
        'nom_proprietaire' => [parent::class, 'nom_proprietaire', null],
        'prix' => [parent::class, 'prix', null],
        'status' => [parent::class, 'status', null],
        'taille' => [parent::class, 'taille', null],
        'titre' => [parent::class, 'titre', null],
        'type_Contrat' => [parent::class, 'type_Contrat', null],
        'type_terrain' => [parent::class, 'type_terrain', null],
        'user_id_parcelle' => [parent::class, 'user_id_parcelle', null],
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
