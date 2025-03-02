<?php

declare(strict_types=1);

namespace Drupal\dghabc\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a help.page.block block.
 */
#[Block(
  id: 'dghabc_help_page_block',
  admin_label: new TranslatableMarkup('help.page.block'),
  category: new TranslatableMarkup('Custom'),
)]
final class HelpPageBlockBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
