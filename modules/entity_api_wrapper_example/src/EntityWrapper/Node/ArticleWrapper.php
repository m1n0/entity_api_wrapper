<?php

/**
 * @file
 * Article wrapper class.
 */

namespace Drupal\entity_api_wrapper_example\EntityWrapper\Node;

use \Drupal\entity_api_wrapper\EntityWrapper\Node\NodeWrapper;
use Drupal\entity_api_wrapper\FieldWrapper\TextFieldWrapper;

/**
 * Wraps nodes of type article with additional functionality.
 */
class ArticleWrapper extends NodeWrapper {

  /* @var TextFieldWrapper $articleText */
  private $articleText;

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

  /**
   * Article Text - Text Field (field_text) wrapper.
   *
   * @return \Drupal\entity_api_wrapper\FieldWrapper\TextFieldWrapper
   *   Article Text field.
   */
  public function getArticleText() {
    $this->articleText = new TextFieldWrapper($this->nodeWrapper->field_text);
    return $this->articleText;
  }

  /**
   * Returns original wrapper.
   *
   * @return \EntityDrupalWrapper
   *   Raw entity wrapper.
   */
  public function getRawWrapper() {
    return $this->nodeWrapper;
  }

}
