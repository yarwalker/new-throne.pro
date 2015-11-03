<?php
$file = "SxGeo.php";

// определение страны для перенаправления на нужный интерфейс
if(is_file($file)):
    require($file);
    $SxGeo = new SxGeo('SxGeo.dat', SXGEO_BATCH | SXGEO_MEMORY);

    switch( $SxGeo->getCountry($_SERVER['REMOTE_ADDR']) ):
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

    header('Location: http://' . $_SERVER['SERVER_NAME'] . '/' . $country );
    exit();
else:
    echo $file . ' no such file';
endif;
