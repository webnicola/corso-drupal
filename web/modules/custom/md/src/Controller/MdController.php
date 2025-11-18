<?php

declare(strict_types=1);

namespace Drupal\md\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Md routes.
 */
final class MdController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
