<?php

declare(strict_types=1);

namespace Setono\TinyPngBundle\Client;

interface ClientInterface
{
    /**
     * Compresses a string and returns the compressed string.
     *
     * @param string $buffer
     *
     * @return string
     */
    public function compressBuffer(string $buffer): string;

    /**
     * Compresses the input file into the output file
     * If overwrite is true, it will overwrite any existing file.
     *
     * @param \SplFileInfo $input
     * @param \SplFileInfo $output
     * @param bool         $overwrite
     */
    public function compressFile(\SplFileInfo $input, \SplFileInfo $output, bool $overwrite = true): void;
}
