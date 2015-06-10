# entity-class-generator

Generates helper classes for entity via drush commands to make development easier and to provide autocomplete and other
useful functionality for developers.

Example usage:

```
use Drupal\entity_class_generator\EntityWrapper\Node\ArticleWrapper;

$test = new ArticleWrapper(1);
// This nicely autocompletes and returns body of the article.
$test->getBodyText();
```