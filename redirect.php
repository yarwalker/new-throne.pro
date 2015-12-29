<?php
$file = "SxGeo.php";
$cities = array('moscow', 'yaroslavl');
$city = '';
$country = '';

//echo $_SERVER['REQUEST_URI'];

// определение страны для перенаправления на нужный интерфейс
if(is_file($file)):
    require($file);
    $SxGeo = new SxGeo('SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);

    $arr = $SxGeo->getCity($_SERVER['REMOTE_ADDR']); //$_SERVER['REMOTE_ADDR']); // '95.175.232.2'
    if( in_array( strtolower($arr['city']['name_en']) , $cities) ):
        $city = strtolower($arr['city']['name_en']);
    endif;
    $country = $arr['country']['iso'];

    switch( $country ):
        case 'RU':
        case 'UA':
        case 'BY':
        case 'KZ':
        case 'TM':
        case 'LV':
        case 'LT':
        case 'EE':
        case 'TJ':
        case 'GE':
        case 'AM':
        case 'AM':
        case 'UZ':
        case 'KG':
            $country = 'ru';
            break;
        case 'DZ': // Алжир
        case 'BH': // Бахрейн
        case 'DJ': // Джибути
        case 'EG': // Египет
        case 'EH': // Западная Сахара
        case 'YE': // Йемен
        case 'JO': // Иордания
        case 'IQ': // Ирак
        case 'QA': // Катар
        case 'KM': // Коморы
        case 'KW': // Кувейт
        case 'LB': // Ливан
        case 'LY': // Ливия
        case 'MR': // Мавритания
        case 'MA': // Марокко
        case 'AE': // ОАЭ
        case 'OM': // Оман
        case 'PS': // Палестина
        case 'SA': // Саудовская Аравия
        case 'SY': // Сирия
        case 'SO': // Сомали
        case 'SD': // Судан
        case 'TN': // Тунис
            $country = 'arabic';
            break;
        default:
            $country = 'en';

    endswitch;

    header('Location: http://' . $_SERVER['SERVER_NAME'] . '/' . $country . ( $city != '' ? '/' . $city . '/' : '/' ) );
    exit();
else:
    echo $file . ' no such file';
endif;
