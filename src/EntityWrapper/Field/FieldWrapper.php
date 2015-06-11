<?php

/**
 * @file
 * Field wrapper class.
 */

namespace Drupal\entity_api_wrapper\EntityWrapper\Field;

/**
 * Class FieldWrapper.
 *
 * @package Drupal\entity_api_wrapper\EntityWrapper\Field
 */
abstract class FieldWrapper {
  /* @var $machineName string */
  protected $machineName;

  /* @var $label string */
  protected $label;

  /* @var $isRequired bool */
  protected $isRequired;

  /* @var $helpText string */
  protected $helpText;

  /* @var $cardinality int */
  protected $cardinality;

  /**
   * Get machineName.
   *
   * @return string
   *   Field machineName.
   */
  public function getMachineName() {
    return $this->machineName;
  }

  /**
   * Set machineName.
   *
   * @param string $machineName
   *   Field machineName to set.
   */
  public function setMachineName($machineName) {
    $this->machineName = $machineName;
  }

  /**
   * Get label.
   *
   * @return string
   *   Field label.
   */
  public function getLabel() {
    return $this->label;
  }

  /**
   * Set Label.
   *
   * @param string $label
   *   Field label to set.
   */
  public function setLabel($label) {
    $this->label = $label;
  }

  /**
   * Get isRequired.
   *
   * @return bool
   *   Whether the field is required.
   */
  public function isRequired() {
    return $this->isRequired;
  }

  /**
   * Set isRequired.
   *
   * @param bool $isRequired
   *   Whether the field is required.
   */
  public function setIsRequired($isRequired) {
    $this->isRequired = $isRequired;
  }

  /**
   * Get field help text.
   *
   * @return string
   *   FIeld help text.
   */
  public function getHelpText() {
    return $this->helpText;
  }

  /**
   * Set field help text.
   *
   * @param string $helpText
   *   Field help text.
   */
  public function setHelpText($helpText) {
    $this->helpText = $helpText;
  }

  /**
   * Get field cardinality.
   *
   * @return int
   *   Field cardinality as a positive int or -1 for unlimited.
   */
  public function getCardinality() {
    return $this->cardinality;
  }

  /**
   * Set field cardinality.
   *
   * @param int $cardinality
   *   Field cardinality as a positive int or -1 for unlimited.
   */
  public function setCardinality($cardinality) {
    $this->cardinality = $cardinality;
  }
}
