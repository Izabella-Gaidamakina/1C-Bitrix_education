<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
pre('start');

if (file_exists('data.xml')) {
    $xml = simplexml_load_file('data.xml');

    print_r($xml);
} else {
    exit('Не удалось открыть файл data.xml.');
}

#-------------ТУТ ВАШ КОД
#Что нужно сделать: Загрузить XML в PHP (рекомендую simplexml_load_file). Далее вывести на экран каждый элемент со свойствами
#Цель: Аккуратно окунуть Вас в работу с самим PHP и посмотреть у кого возникнут сложности с чистым PHP. Далее мы имея данные в массивах/обьектах научимся загружать это непосредственно в Bitrix.
#-------------КОНЕЦ КОДА
pre('done.');
