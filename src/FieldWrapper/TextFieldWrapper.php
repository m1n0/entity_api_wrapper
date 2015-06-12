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
   * Returns field label.
   *
   * @TODO: This could possibly go to the base class.
   *
   * @return string
   *   Field label.
   */
  public function getLabel() {
    // Label is mandatory, so we don't need to do additional checking.
    return $this->valueWrapper->info()['label'];
  }

  /**
   * Returns whether a field is required.
   *
   * @return bool
   *   Required flag.
   */
  public function isRequired() {
    return $this->valueWrapper->info()['required'];
  }

  /**
   * Returns string value if the text field.
   *
   * @return string
   *   String value.
   */
  public function getValue() {
    return $this->valueWrapper->value();
  }

  /**
   * Returns machine name of the field.
   *
   * @return string
   *   Field machine name.
   */
  public function getMachineName() {
    return $this->valueWrapper->info()['name'];
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
