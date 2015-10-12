<?php
// определение страны для перенаправления на нужный интерфейс
include("SxGeo.php");
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
        $country = '';
        break;
    default:
        $country = 'en';
endswitch;

if( $_SERVER['REQUEST_URI'] == '/' ):
    header('Location: http://' . $_SERVER['SERVER_NAME'] . '/' . ( $country != '' ? $country . '/index.php' : 'index.php') );
    exit();
endif;