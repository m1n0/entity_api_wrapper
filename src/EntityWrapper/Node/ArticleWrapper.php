<?php

/**
 * @file
 * Article wrapper class.
 */

namespace Drupal\entity_class_generator\EntityWrapper\Node;

use \EntityDrupalWrapper;

/**
 * Wraps nodes of type article with additional functionality.
 */
class ArticleWrapper extends EntityDrupalWrapper {
  protected $nodeWrapper;

  public function __construct($nid) {
    $this->nodeWrapper = new EntityDrupalWrapper('node', $nid);
  }

}