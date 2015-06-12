<?php

/**
 * @file
 * Provides the Entity Class Generator pages.
 */

use Drupal\entity_api_wrapper_example\EntityWrapper\Node\ArticleWrapper;
use Drupal\entity_api_wrapper\EntityWrapper\User\UserWrapper;

/**
 * Page callback for the node testing page.
 *
 * @param int $id
 *   Nid of the testing content.
 *
 * @return string
 *   Output of the page callback.
 */
function entity_api_wrapper_node_test_page($id) {
  $output = '';

  $test = new ArticleWrapper($id);
  // This returns body of the article.
  $output .= '<H2>' . $test->getTitle() . '</H2>';
  $output .= '<div>' . $test->getBodyText() . '</div>';
  $output .= '<div>toString:' . $test->getArticleText() . '</div>';
  $output .= '<div>label: ' . $test->getArticleText()->getLabel() . '</div>';
  $output .= '<div>required: ' . $test->getArticleText()->isRequired() . '</div>';
  $output .= '<div>value: ' . $test->getArticleText()->getValue() . '</div>';

  return $output;
}
/**
 * Page callback for the user testing page.
 *
 * @param int $id
 *   Uid of the testing user.
 *
 * @return string
 *   Output of the page callback.
 */
function entity_api_wrapper_user_test_page($id) {
  $output = '';

  $test = new UserWrapper($id);
  $output .= '<H2>' . $test->getName() . '</H2>';
  $output .= '<div>' . $test->getMail() . '</div>';

  return $output;
}
