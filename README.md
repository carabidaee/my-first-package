# Моя первая библиотека

---

## Требования

---

* PHP 7.4 и выше

## Установка

---

```bash
$ composer require alexander-tolmachev/my-first-package
```

## Использование

---

```php
<?php
$processor = new GreetingProcessor();
echo $processor->getGreeting('Max');
```