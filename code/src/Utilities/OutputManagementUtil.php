<?php

declare(strict_types=1);

namespace AssetGrabber\Utilities;

abstract class OutputManagementUtil
{
    private const ERROR   = '[ERROR]  ';
    private const WARNING = '[WARNING] ';
    private const NOTICE  = '[NOTICE]  ';
    private const INFO    = '[INFO]    ';
    private const DEBUG   = '[DEBUG]   ';

    public static function error(string $message): string
    {
        return self::formatMessage(self::ERROR, $message);
    }

    public static function warning(string $message): string
    {
        return self::formatMessage(self::WARNING, $message);
    }

    public static function notice(string $message): string
    {
        return self::formatMessage(self::NOTICE, $message);
    }

    public static function info(string $message): string
    {
        return self::formatMessage(self::INFO, $message);
    }

    public static function debug(string $message): string
    {
        return self::formatMessage(self::DEBUG, $message);
    }

    private static function formatMessage($type, $message)
    {
        return $type . $message;
    }
}