<?php

declare(strict_types=1);

namespace Setono\TinyPngBundle\Client;

use RuntimeException;
use SplFileInfo;
use Tinify\Tinify;
use function Tinify\fromBuffer;
use function Tinify\fromFile;

class Client implements ClientInterface
{
    /**
     * @param string      $apiKey
     * @param null|string $proxy
     */
    public function __construct(string $apiKey, ?string $proxy)
    {
        Tinify::setKey($apiKey);
        Tinify::setProxy($proxy);
    }

    /**
     * {@inheritdoc}
     */
    public function compressBuffer(string $buffer): string
    {
        return fromBuffer($buffer)->toBuffer();
    }

    /**
     * {@inheritdoc}
     */
    public function compressFile(SplFileInfo $input, SplFileInfo $output, bool $overwrite = true): void
    {
        if (!$overwrite && $output->isFile()) {
            throw new RuntimeException('The file '.$output->getPathname().' already exists and the overwrite option is false');
        }

        fromFile($input->getPathname())->toFile($output->getPathname());
    }
}
