<?php

/**
 * @file
 * Provides the Entity Class Generator pages.
 */

use Drupal\entity_api_wrapper_example\EntityWrapper\Node\ArticleWrapper;

function entity_api_wrapper_test_page($id) {
  $output = '';
  $test = new ArticleWrapper($id);
  // This returns body of the article.
  $output .= $test->getBodyText();

  return $output;
}