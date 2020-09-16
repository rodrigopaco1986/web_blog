<?php

namespace App\Import;

interface Importer
{
    public function import(): bool;
    public function getMessage(): string;
}