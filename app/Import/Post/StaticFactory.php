<?php

namespace App\Import\Post;

use InvalidArgumentException;
use App\Import\Importer;
use App\Import\Post\ApiRestImporter;

class StaticFactory
{
    const API_REST = 'api_rest';

    public static function factory(string $type): Importer
    {
        if ($type == self::API_REST) {
            return new ApiRestImporter();
        }

        throw new InvalidArgumentException('Unknown source given');
    }
}