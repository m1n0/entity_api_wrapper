<?php

/**
 * @file
 * Article wrapper class.
 */

namespace Drupal\entity_api_wrapper_example\EntityWrapper\Node;

use \Drupal\entity_api_wrapper\EntityWrapper\Node\NodeWrapper;

/**
 * Wraps nodes of type article with additional functionality.
 */
class ArticleWrapper extends NodeWrapper {

  /**
   * Initializes a new instance of the ArticleWrapper class.
   *
   * @param int $nid
   *   The node ID to create the wrapper for.
   */
  public function __construct($nid) {
    parent::__construct($nid);
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