<?php

/**
 * @file
 * Article wrapper class.
 */

namespace Drupal\entity_api_wrapper_example\EntityWrapper\Node;

use \EntityDrupalWrapper;

/**
 * Wraps nodes of type article with additional functionality.
 */
class ArticleWrapper extends EntityDrupalWrapper {
  protected $nodeWrapper;

  /**
   * Initializes a new instance of the ArticleWrapper class.
   *
   * @param int $nid
   *   The node ID to create the wrapper for.
   */
  public function __construct($nid) {
    $this->nodeWrapper = new EntityDrupalWrapper('node', $nid);
  }

  /**
   * Gets the Body text.
   *
   * @return string
   *   The text of the body.
   */
  public function getBodyText() {
    return $this->nodeWrapper->body->value()['value'];
  }
}