<?php

namespace Teapodsoft;

use Dotenv\Dotenv;

/**
 * Env
 *
 * @package Teapodsoft
 * @description Класс для работы с .env файлом
 */
class Env
{

    /**
     * @param string $directory
     * @param string $envFile
     * @return void
     */
    public static function load(string $directory, string $envFile): void
    {
        if (file_exists($directory . '/'. $envFile)) {
            $dotEnv = DotEnv::createImmutable($directory, $envFile);
            $dotEnv->load();
        }
    }

    /**
     * Получить запись из $_ENV
     *
     * @param string $key
     * @param mixed|null $default
     * @return mixed
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        return (isset($_ENV[$key])) ? self::getType($_ENV[$key]) : $default;
    }

    /**
     * @param mixed $value
     * @return bool|string|null
     */
    private static function getType(mixed $value): bool|string|null
    {
        $value = strtolower($value);

        if (in_array($value, ['true', '(true)'])) {
            $value = true;
        }

        if (in_array($value, ['false', '(false)'])) {
            $value = false;
        }

        if (in_array($value, ['null', '(null)'])) {
            $value = null;
        }

        if (in_array($value, ['empty', '(empty)'])) {
            $value = '';
        }

        if (str_starts_with($value, '"') && str_ends_with($value, '"')) {
            $value = substr($value, 1, -1);
        }

        return $value;

    }

}
