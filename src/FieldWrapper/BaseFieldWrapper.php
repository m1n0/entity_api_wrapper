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

}
