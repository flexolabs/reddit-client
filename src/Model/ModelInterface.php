<?php

declare(strict_types=1);

namespace Sigwin\RedditClient\Model;

/**
 * Interface abstracting model access.
 *
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     */
    public function getModelName(): string;

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes(): array;

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats(): array;

    /**
     * Array of attributes where the key is the local name, and the value is the original name.
     */
    public static function attributeMap(): array;

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters(): array;

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters(): array;

    /**
     * Show all the invalid properties with reasons.
     */
    public function listInvalidProperties(): array;

    /**
     * Validate all the properties in the model
     * return true if all passed.
     */
    public function valid(): bool;
}
