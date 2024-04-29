<?php

declare(strict_types=1);

namespace Sylius\TwigHooks\Hookable\Metadata;

use Sylius\TwigHooks\Bag\DataBagInterface;
use Sylius\TwigHooks\Bag\ScalarDataBagInterface;
use Sylius\TwigHooks\Hook\Metadata\HookMetadata;
use Sylius\TwigHooks\Hook\Normalizer\Prefix\PrefixNormalizerInterface;

final class HookableMetadataFactory implements HookableMetadataFactoryInterface
{
    public function __construct(
        private readonly PrefixNormalizerInterface $prefixNormalizer
    ) {
    }

    public function create(
        HookMetadata $hookMetadata,
        DataBagInterface $context,
        ScalarDataBagInterface $configuration,
        array $prefixes = [],
    ): HookableMetadata {
        $prefixes = array_map([$this->prefixNormalizer, 'normalize'], $prefixes);

        return new HookableMetadata($hookMetadata, $context, $configuration, $prefixes);
    }
}
