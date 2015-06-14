<?php
/**
 * @file
 * Simple `Text` field wrapper for Entity API Wrapper module.
 */

namespace Drupal\entity_api_wrapper\FieldWrapper;

/**
 * Class TextFieldWrapper.
 *
 * @package Drupal\entity_api_wrapper\FieldWrapper
 */
class TextFieldWrapper extends BaseFieldWrapper {

  /**
   * Constructor.
   *
   * @see BaseField
   *
   * @inheritdoc
   */
  public function __construct($field) {
    parent::__construct($field);
  }

  /**
   * String representation of the text field value.
   *
   * @return string
   *   String value of the field.
   */
  public function __toString() {
    return $this->getValue();
  }

}
