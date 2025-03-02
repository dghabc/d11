<?php

declare(strict_types=1);

namespace Drupal\dghabc\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for dghabc routes.
 */
final class DghabcController extends ControllerBase {

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

  public function dghabchelp(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('help is works!'),
    ];

    return $build;
  }

}
