<?php

declare(strict_types=1);

namespace Setono\TinyPngBundle\Client;

class Client implements ClientInterface
{
    /**
     * @param string      $apiKey
     * @param null|string $proxy
     */
    public function __construct(string $apiKey, ?string $proxy)
    {
        \Tinify\Tinify::setKey($apiKey);
        \Tinify\Tinify::setProxy($proxy);
    }

    /**
     * {@inheritdoc}
     */
    public function compressBuffer(string $buffer): string
    {
        return \Tinify\fromBuffer($buffer)->toBuffer();
    }

    /**
     * {@inheritdoc}
     */
    public function compressFile(\SplFileInfo $input, \SplFileInfo $output, bool $overwrite = true): void
    {
        if (!$overwrite && $output->isFile()) {
            throw new \RuntimeException('The file '.$output->getPathname().' already exists and the overwrite option is false');
        }

        \Tinify\fromFile($input->getPathname())->toFile($output->getPathname());
    }
}
