<?php
/**
 * @file
 * BaseFieldWrapper class.
 */

namespace Drupal\entity_api_wrapper\FieldWrapper;

/**
 * Class BaseFieldWrapper.
 *
 * @package Drupal\entity_api_wrapper\FieldWrapper
 */
abstract class BaseFieldWrapper {

  /* @var \EntityValueWrapper $valueWrapper */
  protected $valueWrapper;

  /**
   * Constructor takes a field as instance of EntityValueWrapper.
   *
   * @param \EntityValueWrapper $field
   *   Field as instance of EntityValueWrapper.
   */
  public function __construct(\EntityValueWrapper $field) {
    $this->valueWrapper = $field;
  }

  /**
   * Returns original value wrapper.
   *
   * @return \EntityValueWrapper
   *   Original value Wrapper passed to the constructor.
   */
  public function getOriginalValueWrapper() {
    return $this->valueWrapper;
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
}
