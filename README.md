# Extra Collect

Some extra Laravel collection methods.

```bash
composer require chrisrhymes/extra-collect
```

## Contents

* [Collection Methods](#collection-methods)
    * [Prefix](#prefix)
    * [Suffix](#suffix)
    * [Double Quote](#double-quote)
* [Tests](#tests)

## Collection Methods

### Prefix

```php
collect(['a', 'b', 'c'])->prefix('test');

// ['testa', 'testb', 'testc']


collect([['name' => 'a'], ['name' => 'b'], ['name' => 'c']])->prefix('test', 'name');

// [['name' => 'testa'], ['name' => 'testb'], ['name' => 'testc']]
```

### Suffix

```php
collect(['a', 'b', 'c'])->suffix('test');

// ['atest', 'btest', 'ctest']


collect([['name' => 'a'], ['name' => 'b'], ['name' => 'c']])->suffix('test', 'name');

// [['name' => 'atest'], ['name' => 'btest'], ['name' => 'ctest']]
```

### Double Quote

```php
collect(['a', 'b', 'c'])->doubleQuote();

// ['"a"', '"b"', '"c"']


collect([['name' => 'a'], ['name' => 'b'], ['name' => 'c']])->doubleQuote('name');

// [['name' => '"a"'], ['name' => '"b"'], ['name' => '"c"']]

```

## Testing

```bash
composer test
```