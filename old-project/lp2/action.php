<?php
/**
 * Created by PhpStorm.
 * User: Валера
 * Date: 13.09.2018
 * Time: 9:17
 */
$message = 'продукт: '.$_GET['product']."\r\n".'mail: '.$_GET['mail'];
mail('valeravilks@gmail.com', 'Заявка с сайта valeravilks.ru', $message);

header('Refresh: 3; url=https://valeravilks.ru/landing');
 echo "Данные отправлены!Через 3 секундs вас вернет на сайт";
