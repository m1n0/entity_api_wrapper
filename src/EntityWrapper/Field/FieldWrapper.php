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

  /* @var $isRequired boolean */
  protected $isRequired;

  /* @var $helpText string */
  protected $helpText;

  /* @var $cardinality int */
  protected $cardinality;
}
