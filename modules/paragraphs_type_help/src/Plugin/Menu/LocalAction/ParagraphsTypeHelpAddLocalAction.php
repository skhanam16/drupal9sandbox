<?php

namespace Drupal\paragraphs_type_help\Plugin\Menu\LocalAction;

use Drupal\Core\Menu\LocalActionDefault;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Url;

/**
 * Modifies the 'Add paragraphs_type_help' local action.
 */
class ParagraphsTypeHelpAddLocalAction extends LocalActionDefault {

  /**
   * {@inheritdoc}
   */
  public function getOptions(RouteMatchInterface $route_match) {
    $options = parent::getOptions($route_match);

    // Adds a destination on paragraphs_type_help listing.
    if ($route_match->getRouteName() == 'entity.paragraphs_type_help.collection') {
      $options['query']['destination'] = Url::fromRoute('<current>')->toString();
    }
    return $options;
  }

}
