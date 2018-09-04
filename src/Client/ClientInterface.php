<?php

declare(strict_types=1);

namespace Setono\TinyPngBundle\Client;

interface ClientInterface
{
    /**
     * Compresses a string and returns the compressed string
     *
     * @param string $buffer
     *
     * @return string
     */
    public function compressBuffer(string $buffer): string;

    /**
     * Compresses a file and returns the compressed file
     * It does not touch the original file
     *
     * @param \SplFileInfo $file
     *
     * @return \SplFileInfo
     */
    public function compressFile(\SplFileInfo $file): \SplFileInfo;
}
