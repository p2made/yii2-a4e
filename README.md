Yii 2 Advanced 4 Ends v0.0.3
=====================

Additions for giving Yii2 `API` & `assets` application ends.

Installation
------------

First create a new Yii2 Advanced project by running...

```
	composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
```

*Before* running `init`, either...

Run *one* of the following commands:

```
	composer require p2made/yii2-a4e "^0.0"
```

or

```
	php composer.phar require p2made/yii2-a4e "^0.0"
```

*or* add:

```
	"p2made/yii2-a4e": "^0.0"
```

to the requires section of your `composer.json` & run `composer update`.

Next run...

```
	cp -r ./vendor/p2made/yii2-a4e/api ./
	cp -r ./vendor/p2made/yii2-a4e/assets ./
	cp -r ./vendor/p2made/yii2-a4e/environments ./
```

The  `environments` will replace the original.

Now run `./init` as usual.


DIRECTORY STRUCTURE
-------------------

```
api                 [likely to be stripped down]
    assets/             contains application assets such as JavaScript and CSS
    components/         contains api components
    config/             contains api configurations
    controllers/        contains Web controller classes
    models/             contains api specific model classes
    runtime/            contains files generated during runtime
    tests/              contains tests for api application
    views/              contains view files for the Web application
    web/                contains the entry script and Web resources
    widgets/            contains api widgets
assets              a set of directories for static resources
    assets/             contains application assets such as JavaScript and CSS
    config/             contains static end configurations
    controllers/        contains Web controller classes
    runtime/            contains files generated during runtime
    tests/              contains tests for static end application
    views/              contains view files for the Web application
    web/                contains the entry script and Web resources
        backend/            for assets belonging solely to the backend
            css/
            fonts/
            img/
            js/
            pub/            for published resources belonging to the backend
        frontend/           for assets belonging solely to the frontend
            css/
            fonts/
            img/
            js/
            pub/            for published resources belonging to the frontend
        common/             for assets shared between ends
            css/
            fonts/
            img/
            js/
            pub/            for published resources shared between ends
        vendor/             for developer added vender resources
backend
    assets/             contains application assets such as JavaScript and CSS
    components/         contains backend components
    config/             contains backend configurations
    controllers/        contains Web controller classes
    models/             contains backend specific model classes
    runtime/            contains files generated during runtime
    tests/              contains tests for backend application
    views/              contains view files for the Web application
    web/                contains the entry script and Web resources
    widgets/            contains backend widgets
frontend
    assets/             contains application assets such as JavaScript and CSS
    components/         contains frontend components
    config/             contains frontend configurations
    controllers/        contains Web controller classes
    models/             contains frontend specific model classes
    runtime/            contains files generated during runtime
    tests/              contains tests for frontend application
    views/              contains view files for the Web application
    web/                contains the entry script and Web resources
    widgets/            contains frontend widgets
common
    assets/             contains application assets such as JavaScript and CSS
    components/         contains shared components
    config/             contains shared configurations
    mail/               contains view files for e-mails
    models/             contains model classes used in both backend and frontend
    tests/              contains tests for common classes
    widgets/            contains shared widgets
console
    config/             contains console configurations
    controllers/        contains console controllers (commands)
    migrations/         contains database migrations
    models/             contains console specific model classes
    runtime/            contains files generated during runtime
vendor/                 contains dependent 3rd-party packages
environments/           contains environment-based overrides
```
