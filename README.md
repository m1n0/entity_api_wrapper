# entity-class-generator

Generates helper classes for entity via drush commands to make development easier and to provide autocomplete and other
useful functionality for developers.

Example usage:

``` php
<?php
use Drupal\entity_class_generator\EntityWrapper\Node\ArticleWrapper;

$test = new ArticleWrapper(1);
// This nicely autocompletes and returns body of the article.
$test->getBodyText();
?>
```

# Contribution Rules

## Commit Messages

Commit message starts with text `Issue` followed by issue number
prepended by hashtag character (`#`). The issue number is followed by
hyphen and actual commit message.

_Example:_

```
"Issue #1 - initial commit."
"Issue #2 - added xautoload dependency."
"Issue #3 - multiple minor changes:
- updated README.md file,
- added submodule folder."
```
