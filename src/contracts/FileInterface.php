<?php

namespace MenyongMenying\MLibrary\Kucil\Systems\File\Contracts;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
interface FileInterface
{
    /**
     * Mengecek apakah suatu file ada atau tidak.
     * @param  string    $path Path file yang akan dicek.
     * @return null|bool       Hasil pengecekan.
     */
    public function exists(string $path) :null|bool;

    /**
     * Meneruskan isi file
     * @param  string      $path Path file yang akan dibaca.
     * @return null|string       Isi file.
     */
    public function get(string $path) :null|string;
}