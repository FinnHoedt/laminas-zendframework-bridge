# laminas-zendframework-bridge for testing

## second heading

[![Build Status](https://github.com/laminas/laminas-zendframework-bridge/workflows/Continuous%20Integration/badge.svg)](https://github.com/laminas/laminas-zendframework-bridge/actions?query=workflow%3A"Continuous+Integration")

> This package is considered feature-complete, and is now in **security-only** maintenance mode, following a [decision by the Technical Steering Committee](https://github.com/laminas/technical-steering-committee/blob/6dc4d8a798021f690ad8c65d0d9a0c4b21835a1e/meetings/minutes/2022-07-11-TSC-Minutes.md#future-of-the-migration-layer).
> If you have a security issue, please [follow our security reporting guidelines](https://getlaminas.org/security/).
> If you wish to take on the role of maintainer, please [nominate yourself](https://github.com/laminas/technical-steering-committee/issues/new?assignees=&labels=Nomination&template=Maintainer_Nomination.md&title=%5BNOMINATION%5D%5BMAINTAINER%5D%3A+%7Bname+of+person+being+nominated%7D)

> ## 🇷🇺 Русским гражданам
>
> Мы, участники Laminas, родились и живем в разных странах. У многих из нас есть друзья, родственники и коллеги как в России, так и в Украине. Некоторые из нас родились в России. Некоторые из нас живут в России. У некоторых бабушки и дедушки сражались с фашистами во Второй мировой войне. Здесь никто не поддерживает фашизм.
>
> У одного из нас есть украинская родственница, которая спаслась из дома вместе с сыном. Поезд задержался из-за бомбежки на дороге впереди. У нас есть друзья, которые прячутся в бомбоубежищах. Мы с тревогой ждем весточки от них после воздушных налетов, которые беспорядочно наносят удары и попадают по больницам, школам, детским садам и домам. Мы не берем это из каких-либо СМИ. Мы наблюдаем это напрямую.
>
> Вы доверяете нам достаточно, чтоб использовать наши программы, и мы просим вас довериться нам вновь. Мы нуждаемся в помощи. Выходите и протестуйте против этой бесполезной войны. Остановите кровопролитие. Скажите "Нет войне!"
>
> ## 🇺🇸 To Citizens of Russia
>
> We at Laminas come from all over the world. Many of us have friends, family and colleagues in both Russia and Ukraine. Some of us were born in Russia. Some of us currently live in Russia. Some have grandparents who fought Nazis in World War II. Nobody here supports fascism.
>
> One team member has a Ukrainian relative who fled her home with her son. The train was delayed due to bombing on the road ahead. We have friends who are hiding in bomb shelters. We anxiously follow up on them after the air raids, which indiscriminately fire at hospitals, schools, kindergartens and houses. We're not taking this from any media. These are our actual experiences.
>
> You trust us enough to use our software. We ask that you trust us to say the truth on this. We need your help. Go out and protest this unnecessary war. Stop the bloodshed. Say "stop the war!"

This library provides a custom autoloader that aliases legacy Zend Framework,
Apigility, and Expressive classes to their replacements under the Laminas
Project.

This package should be installed only if you are also using the composer plugin
that installs Laminas packages to replace ZF/Apigility/Expressive packages.

This tool supports:

- Zend Framework MVC projects, all v2 and v3 releases
- Apigility projects, all stable versions
- Expressive versions, all stable versions

## Installation

Run the following to install this library:

```bash
$ composer require laminas/laminas-zendframework-bridge
```

## Configuration

- Since 1.6.0

You may provide additional replacements for the configuration post processor.
This is particularly useful if your application uses third-party components that include class names that the post processor otherwise rewrites, and which you want to never rewrite.

Configuration is via the following structure:

```php
return [
    'laminas-zendframework-bridge' => [
        'replacements' => [
            'to-replace' => 'replacement',
            // ...
        ],
    ],
];
```

As an example, if your configuration included the following dependency mapping:

```php
return [
    'controller_plugins' => [
        'factories' => [
            'customZendFormBinder' => \CustomZendFormBinder\Controller\Plugin\Factory\BinderPluginFactory::class,
        ],
    ],
];
```

And you wanted the two strings that contain the verbiage `ZendForm` to remain untouched, you could define the following replacements mapping:

```php
return [
    'laminas-zendframework-bridge' => [
        'replacements' => [
            // Never rewrite!
            'customZendFormBinder' => 'customZendFormBinder',
            'CustomZendFormBinder' => 'CustomZendFormBinder',
        ],
    ],
];
```

## Support

- [Issues](https://github.com/laminas/laminas-zendframework-bridge/issues/)
- [Forum](https://discourse.laminas.dev/)
