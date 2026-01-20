# Env

## Требования 

- PHP 8.3 или выше.

## Установка 

Компонент может быть установлен через [Composer](https://getcomposer.org):

```shell
composer require teapodlibs/env
```

# Использование 

```php

$param = \Teapodsoft\Env::get('SOME_PARAM');

$default = \Teapodsoft\Env::get('NO_PARAM', 'default value');


```

# Документация 

- [Internals](docs/internals.md)

# Лицензия 

Пакет Env используется в публичном пространстве и может быть модифицирован или использован в комерческих целях по лицензии от BSD Licence.

Поддерживается командой [TeapodSoft](https://github.com/teapodsoft)
