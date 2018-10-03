
<?php


// Here Is all Routes
if (isset($_GET['p'])):
                $pageRouter = $_GET['p'];
                switch ($pageRouter):
                                case 'A':
                                                include ''.$views.'kargo/index.php';

                                                break;
                                case 'K':
                                                include ''.$views.'kargo/Kontrol.php';
                                                break;
                                case 'I':
                                                include ''.$views.'kargo/iptal.php';
                                                break;
                                case 'T':
                                                include ''.$views.'kargo/takip.php';
                                                break;
                                case 'C':
                                                include ''.$views.'kargo/cikis.php';
                                                break;
                                case 'TF':
                                                include ''.$views.'fatura/TopluFatura.php';
                                                break;
                                case 'AF':
                                                include ''.$views.'fatura/ArasFatura.php';
                                                break;
                                case 'D':
                                                include ''.$views.'depo/index.php';
                                                break;
                                case 'value':
                                                include ''.$views.'kargo/index.php';
                                                break;
                                case 'value':
                                                include ''.$views.'kargo/index.php';
                                                break;
                                case 'value':
                                                include ''.$views.'kargo/index.php';
                                                break;
                                case 'value':
                                                include ''.$views.'kargo/index.php';
                                                break;
                                case 'value':
                                                include ''.$views.'kargo/index.php';
                                                break;
                                default:
                                                include ''.$views.'kargo/index.php';
                                                break;
                endswitch;
endif;

if (!isset($_GET['p']) || $_GET['p'] == ''):

  include ''.$views.'kargo/index.php';
endif;
