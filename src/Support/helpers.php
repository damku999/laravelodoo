<?php

/**
 * Project: laravelodoo.
 * User: AdaptIT
 * Email: darshan@adptit.co.uk
 * Date: 2022-09-08
 */

/**
 * Get configuration array data.
 *
 * @return array
 */
function laravelodooConfig()
{
    if (function_exists('config_path')) {
        if (file_exists(config_path('laravelodoo.php'))) {
            $configuration = include(config_path('laravelodoo.php'));

            return $configuration;
        }
    }

    $configuration = include(__DIR__ . '/../Config/config.php');

    return $configuration;
}

/**
 * Add Character to a given string if char no exists.
 * By default is concatenated either prefix and suffix.
 *
 * @param $text
 * @param $char
 * @param bool $prefix
 * @param bool $suffix
 * @return string
 */
function laravelodooAddCharacter($text, $char, $prefix = true, $suffix = true)
{
    if ($prefix && substr($text, 0, 1) !== $char)
        $text = $char . $text;

    if ($suffix && substr($text, -1, 1) !== $char)
        $text = $text . $char;

    return $text;
}

/**
 * Remove Character to a given string if char exists.
 * By default is removed from both side.
 *
 * @param $text
 * @param $char
 * @param bool $prefix
 * @param bool $suffix
 * @return string
 */
function laravelodooRemoveCharacter($text, $char, $prefix = true, $suffix = true)
{
    if ($prefix && substr($text, 0, 1) === $char)
        $text = substr($text, 1);

    if ($suffix && substr($text, -1, 1) === $char)
        $text = substr($text, 0, -1);

    return $text;
}
