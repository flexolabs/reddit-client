<?php

declare(strict_types=1);

namespace Sigwin\RedditClient\Model;

use ArrayAccess;
use Sigwin\RedditClient\ObjectSerializer;

/**
 * ThingData Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ThingData implements \JsonSerializable, ArrayAccess, ModelInterface
{
    public const DISCRIMINATOR = null;

    const POST_HINT_SELF = 'self';
    const POST_HINT_LINK = 'link';
    const POST_HINT_IMAGE = 'image';
    const POST_HINT_HOSTEDVIDEO = 'hosted:video';
    const POST_HINT_RICHVIDEO = 'rich:video';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ThingData';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'permalink' => 'string',
        'post_hint' => 'string',
        'created_utc' => 'int',
        'subreddit' => 'string',
        'subreddit_id' => 'string',
        'subreddit_type' => 'string',
        'author' => 'string',
        'author_fullname' => 'string',
        'title' => 'string',
        'url' => 'string',
        'url_overridden_by_dest' => 'string',
        'link_id' => 'string',
        'link_author' => 'string',
        'link_title' => 'string',
        'link_permalink' => 'string',
        'body' => 'string',
        'is_gallery' => 'bool',
        'is_meta' => 'bool',
        'is_self' => 'bool',
        'is_video' => 'bool',
        'selftext' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'permalink' => null,
        'post_hint' => null,
        'created_utc' => 'int64',
        'subreddit' => null,
        'subreddit_id' => null,
        'subreddit_type' => null,
        'author' => null,
        'author_fullname' => null,
        'title' => null,
        'url' => null,
        'url_overridden_by_dest' => null,
        'link_id' => null,
        'link_author' => null,
        'link_title' => null,
        'link_permalink' => null,
        'body' => null,
        'is_gallery' => null,
        'is_meta' => null,
        'is_self' => null,
        'is_video' => null,
        'selftext' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'permalink' => 'permalink',
        'post_hint' => 'post_hint',
        'created_utc' => 'created_utc',
        'subreddit' => 'subreddit',
        'subreddit_id' => 'subreddit_id',
        'subreddit_type' => 'subreddit_type',
        'author' => 'author',
        'author_fullname' => 'author_fullname',
        'title' => 'title',
        'url' => 'url',
        'url_overridden_by_dest' => 'url_overridden_by_dest',
        'link_id' => 'link_id',
        'link_author' => 'link_author',
        'link_title' => 'link_title',
        'link_permalink' => 'link_permalink',
        'body' => 'body',
        'is_gallery' => 'is_gallery',
        'is_meta' => 'is_meta',
        'is_self' => 'is_self',
        'is_video' => 'is_video',
        'selftext' => 'selftext',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'permalink' => 'setPermalink',
        'post_hint' => 'setPostHint',
        'created_utc' => 'setCreatedUtc',
        'subreddit' => 'setSubreddit',
        'subreddit_id' => 'setSubredditId',
        'subreddit_type' => 'setSubredditType',
        'author' => 'setAuthor',
        'author_fullname' => 'setAuthorFullname',
        'title' => 'setTitle',
        'url' => 'setUrl',
        'url_overridden_by_dest' => 'setUrlOverriddenByDest',
        'link_id' => 'setLinkId',
        'link_author' => 'setLinkAuthor',
        'link_title' => 'setLinkTitle',
        'link_permalink' => 'setLinkPermalink',
        'body' => 'setBody',
        'is_gallery' => 'setIsGallery',
        'is_meta' => 'setIsMeta',
        'is_self' => 'setIsSelf',
        'is_video' => 'setIsVideo',
        'selftext' => 'setSelftext',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'permalink' => 'getPermalink',
        'post_hint' => 'getPostHint',
        'created_utc' => 'getCreatedUtc',
        'subreddit' => 'getSubreddit',
        'subreddit_id' => 'getSubredditId',
        'subreddit_type' => 'getSubredditType',
        'author' => 'getAuthor',
        'author_fullname' => 'getAuthorFullname',
        'title' => 'getTitle',
        'url' => 'getUrl',
        'url_overridden_by_dest' => 'getUrlOverriddenByDest',
        'link_id' => 'getLinkId',
        'link_author' => 'getLinkAuthor',
        'link_title' => 'getLinkTitle',
        'link_permalink' => 'getLinkPermalink',
        'body' => 'getBody',
        'is_gallery' => 'getIsGallery',
        'is_meta' => 'getIsMeta',
        'is_self' => 'getIsSelf',
        'is_video' => 'getIsVideo',
        'selftext' => 'getSelftext',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['permalink'] = $data['permalink'] ?? null;
        $this->container['post_hint'] = $data['post_hint'] ?? null;
        $this->container['created_utc'] = $data['created_utc'] ?? null;
        $this->container['subreddit'] = $data['subreddit'] ?? null;
        $this->container['subreddit_id'] = $data['subreddit_id'] ?? null;
        $this->container['subreddit_type'] = $data['subreddit_type'] ?? null;
        $this->container['author'] = $data['author'] ?? null;
        $this->container['author_fullname'] = $data['author_fullname'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['url_overridden_by_dest'] = $data['url_overridden_by_dest'] ?? null;
        $this->container['link_id'] = $data['link_id'] ?? null;
        $this->container['link_author'] = $data['link_author'] ?? null;
        $this->container['link_title'] = $data['link_title'] ?? null;
        $this->container['link_permalink'] = $data['link_permalink'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['is_gallery'] = $data['is_gallery'] ?? null;
        $this->container['is_meta'] = $data['is_meta'] ?? null;
        $this->container['is_self'] = $data['is_self'] ?? null;
        $this->container['is_video'] = $data['is_video'] ?? null;
        $this->container['selftext'] = $data['selftext'] ?? null;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            \JSON_PRETTY_PRINT
        );
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPostHintAllowableValues(): array
    {
        return [
            self::POST_HINT_SELF,
            self::POST_HINT_LINK,
            self::POST_HINT_IMAGE,
            self::POST_HINT_HOSTEDVIDEO,
            self::POST_HINT_RICHVIDEO,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['permalink'] === null) {
            $invalidProperties[] = "'permalink' can't be null";
        }
        $allowedValues = $this->getPostHintAllowableValues();
        if (null !== $this->container['post_hint'] && ! \in_array($this->container['post_hint'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'post_hint', must be one of '%s'",
                $this->container['post_hint'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['subreddit'] === null) {
            $invalidProperties[] = "'subreddit' can't be null";
        }
        if ($this->container['subreddit_id'] === null) {
            $invalidProperties[] = "'subreddit_id' can't be null";
        }
        if ($this->container['subreddit_type'] === null) {
            $invalidProperties[] = "'subreddit_type' can't be null";
        }
        if ($this->container['author'] === null) {
            $invalidProperties[] = "'author' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets id.
     */
    public function getId(): string
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id id
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name.
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name name
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets permalink.
     */
    public function getPermalink(): string
    {
        return $this->container['permalink'];
    }

    /**
     * Sets permalink.
     *
     * @param string $permalink permalink
     */
    public function setPermalink($permalink): self
    {
        $this->container['permalink'] = $permalink;

        return $this;
    }

    /**
     * Gets post_hint.
     */
    public function getPostHint(): ?string
    {
        return $this->container['post_hint'];
    }

    /**
     * Sets post_hint.
     *
     * @param null|string $post_hint post_hint
     */
    public function setPostHint($post_hint): self
    {
        $allowedValues = $this->getPostHintAllowableValues();
        if (null !== $post_hint && ! \in_array($post_hint, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'post_hint', must be one of '%s'", $post_hint, implode("', '", $allowedValues)));
        }
        $this->container['post_hint'] = $post_hint;

        return $this;
    }

    /**
     * Gets created_utc.
     */
    public function getCreatedUtc(): ?int
    {
        return $this->container['created_utc'];
    }

    /**
     * Sets created_utc.
     *
     * @param null|int $created_utc created_utc
     */
    public function setCreatedUtc($created_utc): self
    {
        $this->container['created_utc'] = $created_utc;

        return $this;
    }

    /**
     * Gets subreddit.
     */
    public function getSubreddit(): string
    {
        return $this->container['subreddit'];
    }

    /**
     * Sets subreddit.
     *
     * @param string $subreddit subreddit
     */
    public function setSubreddit($subreddit): self
    {
        $this->container['subreddit'] = $subreddit;

        return $this;
    }

    /**
     * Gets subreddit_id.
     */
    public function getSubredditId(): string
    {
        return $this->container['subreddit_id'];
    }

    /**
     * Sets subreddit_id.
     *
     * @param string $subreddit_id subreddit_id
     */
    public function setSubredditId($subreddit_id): self
    {
        $this->container['subreddit_id'] = $subreddit_id;

        return $this;
    }

    /**
     * Gets subreddit_type.
     */
    public function getSubredditType(): string
    {
        return $this->container['subreddit_type'];
    }

    /**
     * Sets subreddit_type.
     *
     * @param string $subreddit_type subreddit_type
     */
    public function setSubredditType($subreddit_type): self
    {
        $this->container['subreddit_type'] = $subreddit_type;

        return $this;
    }

    /**
     * Gets author.
     */
    public function getAuthor(): string
    {
        return $this->container['author'];
    }

    /**
     * Sets author.
     *
     * @param string $author author
     */
    public function setAuthor($author): self
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets author_fullname.
     */
    public function getAuthorFullname(): ?string
    {
        return $this->container['author_fullname'];
    }

    /**
     * Sets author_fullname.
     *
     * @param null|string $author_fullname author_fullname
     */
    public function setAuthorFullname($author_fullname): self
    {
        $this->container['author_fullname'] = $author_fullname;

        return $this;
    }

    /**
     * Gets title.
     */
    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param null|string $title title
     */
    public function setTitle($title): self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets url.
     */
    public function getUrl(): ?string
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param null|string $url url
     */
    public function setUrl($url): self
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets url_overridden_by_dest.
     */
    public function getUrlOverriddenByDest(): ?string
    {
        return $this->container['url_overridden_by_dest'];
    }

    /**
     * Sets url_overridden_by_dest.
     *
     * @param null|string $url_overridden_by_dest url_overridden_by_dest
     */
    public function setUrlOverriddenByDest($url_overridden_by_dest): self
    {
        $this->container['url_overridden_by_dest'] = $url_overridden_by_dest;

        return $this;
    }

    /**
     * Gets link_id.
     */
    public function getLinkId(): ?string
    {
        return $this->container['link_id'];
    }

    /**
     * Sets link_id.
     *
     * @param null|string $link_id link_id
     */
    public function setLinkId($link_id): self
    {
        $this->container['link_id'] = $link_id;

        return $this;
    }

    /**
     * Gets link_author.
     */
    public function getLinkAuthor(): ?string
    {
        return $this->container['link_author'];
    }

    /**
     * Sets link_author.
     *
     * @param null|string $link_author link_author
     */
    public function setLinkAuthor($link_author): self
    {
        $this->container['link_author'] = $link_author;

        return $this;
    }

    /**
     * Gets link_title.
     */
    public function getLinkTitle(): ?string
    {
        return $this->container['link_title'];
    }

    /**
     * Sets link_title.
     *
     * @param null|string $link_title link_title
     */
    public function setLinkTitle($link_title): self
    {
        $this->container['link_title'] = $link_title;

        return $this;
    }

    /**
     * Gets link_permalink.
     */
    public function getLinkPermalink(): ?string
    {
        return $this->container['link_permalink'];
    }

    /**
     * Sets link_permalink.
     *
     * @param null|string $link_permalink link_permalink
     */
    public function setLinkPermalink($link_permalink): self
    {
        $this->container['link_permalink'] = $link_permalink;

        return $this;
    }

    /**
     * Gets body.
     */
    public function getBody(): ?string
    {
        return $this->container['body'];
    }

    /**
     * Sets body.
     *
     * @param null|string $body body
     */
    public function setBody($body): self
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets is_gallery.
     */
    public function getIsGallery(): ?bool
    {
        return $this->container['is_gallery'];
    }

    /**
     * Sets is_gallery.
     *
     * @param null|bool $is_gallery is_gallery
     */
    public function setIsGallery($is_gallery): self
    {
        $this->container['is_gallery'] = $is_gallery;

        return $this;
    }

    /**
     * Gets is_meta.
     */
    public function getIsMeta(): ?bool
    {
        return $this->container['is_meta'];
    }

    /**
     * Sets is_meta.
     *
     * @param null|bool $is_meta is_meta
     */
    public function setIsMeta($is_meta): self
    {
        $this->container['is_meta'] = $is_meta;

        return $this;
    }

    /**
     * Gets is_self.
     */
    public function getIsSelf(): ?bool
    {
        return $this->container['is_self'];
    }

    /**
     * Sets is_self.
     *
     * @param null|bool $is_self is_self
     */
    public function setIsSelf($is_self): self
    {
        $this->container['is_self'] = $is_self;

        return $this;
    }

    /**
     * Gets is_video.
     */
    public function getIsVideo(): ?bool
    {
        return $this->container['is_video'];
    }

    /**
     * Sets is_video.
     *
     * @param null|bool $is_video is_video
     */
    public function setIsVideo($is_video): self
    {
        $this->container['is_video'] = $is_video;

        return $this;
    }

    /**
     * Gets selftext.
     */
    public function getSelftext(): ?string
    {
        return $this->container['selftext'];
    }

    /**
     * Sets selftext.
     *
     * @param null|string $selftext selftext
     */
    public function setSelftext($selftext): self
    {
        $this->container['selftext'] = $selftext;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, $value): void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
