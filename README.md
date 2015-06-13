# Entity API Wrapper

Wraps basic Drupal entities for some OOP goodness.

Example usage:

```php
<?php
use Drupal\entity_class_generator\EntityWrapper\Node\ArticleWrapper;

$test = new ArticleWrapper(1);
// This nicely autocompletes and returns body of the article.
$test->getBodyText();
?>
```

# Contribution Rules

## Branching

By default we use [GitFlow](http://nvie.com/posts/a-successful-git-branching-model/)
as the branching model.

Feature branches have following syntax:

`feature/[issue number]-short_name`,

for example

`feature/5-text_field`.

Issue number is followed by hyphen and short name with spaces replaced by
underscores.

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
