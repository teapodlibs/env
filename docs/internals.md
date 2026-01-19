# Internals

## Unit testing

Пакет использует [PHPUnit](https://phpunit.de). Для запуска тестов используйте:

```shell
./vendor/bin/phpunit
```

## Тестирование через мутации

Пакет использует [Inflection](https://inflection.github.io) для тестирования через мутации с помощью
фреймворка [Inflection Static Analysis Plugin](https://github.com/Roave/infection-static-analysis-plugin). Для запуска
используйте:

```shell
./vendor/bin/roave-inflection-static-analysis-plugin
```

## Статический анализатор

Пакет использует [Psalm](https://psalm.dev). Для запуска анализатора используйте:

```shell
./vendor/bin/psalm
```

## Проверка code style 

Пакет использует [Rector](https://github.com/rectorphp/rector) для проверки стилистики кода на соответствие правилам. 
Для запуска используйте:

```shell
./vendor/bin/rector
```

## Зависимости 

Пакет может использовать записимости от других библиотек. Используйте [ComposerRequireChecker](https://github.com/maglnet/COmposerRequireChecker) для проверки [Composer](https://getcomposer.org) зависимостей. Для проверки используйте:

```shell
./vendor/bin/composer-require-checker
```
