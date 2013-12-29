# Yii2-sms_ru

[Yii](http://www.yiiframework.com) для работы с api [sms.ru](http://sms.ru)

## Установка

Добавьте в protected/config/<config>.php:

	'sms' => array(
		'class' => 'vendor.zelenin.yii-sms_ru.src.sms',
		'api_id' => '<api_id>'
	),

или для усиленной авторизации:

	'sms' => array(
		'class' => 'vendor.zelenin.yii-sms_ru.src.sms',
		'api_id' => '<api_id>',
		'login' => '<login>',
		'password' => '<password>'
	),

## Использование

Отправка SMS:

    Yii::app()->sms->sms_send( '<number>', '<text>' );

[Полный список методов](https://github.com/zelenin/sms_ru/blob/master/readme.md)

## Автор

[Александр Зеленин](https://github.com/zelenin/), e-mail: [aleksandr@zelenin.me](mailto:aleksandr@zelenin.me)