<?php

namespace mglaman\PHPStanDrupal\Drush\Assets\Php;

use mglaman\PHPStanDrupal\Drush\Assets\BaseAssets;

final class Services extends BaseAssets
{

    public function filename(): string
    {
        return 'services.php';
    }

    public function vars(): array
    {
        return [
            'services' => $this->generator->getHelper('service_info')->getServiceDefinitions(),
        ];
    }

    public function template(): string
    {
        return <<<'TWIG'
<?php
  return [
  {% for service_id, def in services %}
    '{{ service_id }}' => [
      'class' => '{{ def.class }}',
    ],
  {% endfor %}
  ];

TWIG;
    }
}
