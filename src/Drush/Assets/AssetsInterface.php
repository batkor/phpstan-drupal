<?php

namespace mglaman\PHPStanDrupal\Drush\Assets;

interface AssetsInterface
{

    public function filename(): string;

    public function vars(): array;

    public function template(): string;
}
