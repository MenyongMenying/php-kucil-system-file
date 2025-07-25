<?php

namespace MenyongMenying\MLibrary\Kucil\Systems\File;

use MenyongMenying\MLibrary\Kucil\Systems\File\Contracts\FileInterface;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
final class File implements FileInterface
{
    public function exists(string $path) :null|bool
    {
        return file_exists($path);
    }

    public function get(string $path) :null|string
    {
        if (false === file_get_contents($path)) {
            return null;
        }
        return file_get_contents($path);
    }
}