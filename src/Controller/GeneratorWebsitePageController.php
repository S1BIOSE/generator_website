<?php

namespace Drupal\generator_website\Controller;

use Drupal\Core\Controller\ControllerBase;

class GeneratorWebsitePageController extends ControllerBase {

  public function GeneratorWebsite() {
    return [
      '#theme' => 'generator_website_page_template',
    ];
  }

}
