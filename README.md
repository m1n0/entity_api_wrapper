# Entity API Wrapper

Wraps basic Drupal entities for some OOP goodness.

Example usage:

``` php
<?php
use Drupal\entity_class_generator\EntityWrapper\Node\ArticleWrapper;

$test = new ArticleWrapper(1);
// This nicely autocompletes and returns body of the article.
$test->getBodyText();
?>
```