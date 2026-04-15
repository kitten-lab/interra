<?php
require_once __DIR__ . '/../../systems/rehydrateSelf.php';
require_once __DIR__ . '/functions.php';
$SHADOW_PROD_TOGGLE = SHADOW_PROD_ENV(true);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $POST__SYS =         $_POST['POST__SYS'];
    $POST__DOM =         $_POST['POST__DOM'];
    $POST__MOD =         $_POST['POST__MOD'];
    $POST__PV =          $_GET['pv'] ?? '__UNDISCLOSED__';
    $POST__TIMEZONE =    $_POST['POST__TZ'];

    $GLOBALS['POST__LOVERS_MARK'] = $_POST['LOVERS_MARK'];
    $POST__ACTING__AS =  $_POST['ACTING__AS'];
    
    $GLOBALS['GEN__WORLD_NAME'] =   $_POST['GEN__WORLD_NAME'];
    $GLOBALS['GEN__WORLD_SYS'] =    $_POST['GEN__WORLD_SYS'];
    $GLOBALS['GEN__WORLD_DOM'] =    $_POST['GEN__WORLD_DOM'];
    $GLOBALS['GEN__WORLD_MOD'] =    $_POST['GEN__WORLD_MOD'];
    $GLOBALS['GEN__ROOM'] =         $_POST['GEN__ROOM'];


    $GLOBALS['VARIANT'] = "BASIC";

    ## TOOL SIG FILE
    $TOOL_FUNC = "GENERATE A WORLD";
    $TOOL_LOC = "skyGenesis";
    $TOOL_NAME = "actorCreateWorld";
        ## SET YOUR KDE FOR THIS TOOL ##
        $KDE__ERROR_TYPE = $TOOL_FUNC . " DUPLICATE REJECTED";
        $KDE__SOURCE = $TOOL_NAME;
        $KDE__ECHO_CHAIN = $POST__SYS . ' > ' . $POST__DOM . ' > ' . $POST__MOD;
        $KDE__ERROR = "THE SKY LOCATED A HOME IN SIGHT. CONSIDER LOCATING THAT HOME OR USE A UNIQUE WORLD_NAME.";
        ################################

    $cUID = 'cUID-' . strtoupper(bin2hex(random_bytes(8)));
        $CHEST__HEADER = "GENERATED " . $GLOBALS['GEN__WORLD_NAME'];
        $CHEST__CONTEXT = 'CREATED BY ' . $POST__SYS;
        $CHEST__ACTOR = $TOOL_NAME;
        $CHEST__EVENT = $TOOL_FUNC;
        $CHEST__EVENT_LOCATON = $TOOL_LOC;

    $tUID = 'tUID-' . date('Ymd') . '.' . strtoupper(bin2hex(random_bytes(3)));
        $unix = time();
        $tzone = $POST__TIMEZONE;
        $ms = round(microtime(true) * 1000);
        $time = new DateTime("@$unix");
        $time->setTimezone(new DateTimeZone($tzone));
        $timezone = $time->format("e");
        $localtime = $time->format("h:i:sA");
        
    $event_calc = new DateTime("@$unix");
        $simpledate = $event_calc->format('Y-m-d');
        $simpleyear = $event_calc->format('Y');

        function buildTPS($unix, $ms,$tzone) {
            $tpsDT = new DateTime("@$unix");
            $tpsDT->setTimezone(new DateTimeZone("UTC"));
            $year = (int)$tpsDT->format('x');

            return [
                "UNIX" => $unix,
                "POST__TZONE" => $tzone,
                "TPS__TZONE" => "UTC",
                "TPS__netLoop" => (int)$tpsDT->format('B'),
                "TPS__millennium" => intdiv($year, 1000),
                "TPS__century" => intdiv($year, 100),
                "TPS__decade" => intdiv($year, 10),
                "TPS__year" => $year,
                "TPS__leap" => (int)$tpsDT->format('L'),
                "TPS__month" => (int)$tpsDT->format("n"),
                "TPS__week" => (int)$tpsDT->format("W"),
                "TPS__dayOfYear" => (int)$tpsDT->format("z"),
                "TPS__dayOfMonth" => (int)$tpsDT->format("j"),
                "TPS__dayOfWeek" => (int)$tpsDT->format("w"),
                "TPS__hour" => (int)$tpsDT->format("G"),
                "TPS__minute" => (int)$tpsDT->format("i"),
                "TPS__second" => (int)$tpsDT->format("s"),
                "TPS__ms" => $ms % 1000,
            ];
            }

    $tpsDATA = buildTPS($unix,$ms,$tzone);
    

//  BET ROUTE__LINE >>>>>>>>>>>>>>>>>>>>>>>>
$ROUTE__LINE = ROUTE("b", $SHADOW_PROD_TOGGLE);

    $ROUTE = $ROUTE__LINE . $GLOBALS['GEN__WORLD_NAME'] . '/';
    
        if (is_dir($ROUTE)) { KDE($$KDE__ERROR_TYPE, $KDE__SOURCE, $KDE__ECHO_CHAIN, $KDE__ERROR);}
        else { mkdir($ROUTE, 0775, true); }
        
        $CREATED_SKY_AUTH = CREATE_SKY_AUTH();
        $SKY_AUTH = $ROUTE . '-SKY_AUTH-' . $GLOBALS['GEN__WORLD_NAME'] . '.php';

    file_put_contents($SKY_AUTH, $CREATED_SKY_AUTH);

        $CREATED_SKY_SIG = CREATE_SKY_SIG($GLOBALS['GEN__WORLD_NAME'], $GLOBALS['GEN__WORLD_SYS'], $GLOBALS['GEN__WORLD_DOM'], $GLOBALS['GEN__WORLD_MOD'], $GLOBALS['VARIANT']);
        $SKY_SIG = $ROUTE . '-SKY_SIG-' . $GLOBALS['GEN__WORLD_NAME'] . '.php';

    file_put_contents($SKY_SIG, $CREATED_SKY_SIG);

        $CREATED_INDEX = CREATE_INDEX($GLOBALS['GEN__WORLD_NAME'], $GLOBALS['VARIANT']);
        $INDEX = $ROUTE . 'index.php';

    file_put_contents($INDEX, $CREATED_INDEX);

//  KHAF ROUTE LINE >>>>>>>>>>>>>>>>>>>>>>>>
$ROUTE__LINE = ROUTE("c", $SHADOW_PROD_TOGGLE);

    $ROUTE = $ROUTE__LINE . $GLOBALS['GEN__WORLD_NAME'] . '/';
    
        if (is_dir($ROUTE)) { KDE($KDE__ERROR_TYPE, $KDE__SOURCE, $KDE__ECHO_CHAIN, $KDE__ERROR);}
        else { mkdir($ROUTE, 0775, true); }
        
        $CREATED_WORLD_SIG = CREATE_WORLD_SIG($GLOBALS['GEN__WORLD_NAME'], $GLOBALS['POST__LOVERS_MARK'], $GLOBALS['GEN__ROOM'], $GLOBALS['VARIANT']);
        $WORLD_SIG = $ROUTE . '--SIG--' . $GLOBALS['GEN__WORLD_NAME'] . '.php';

        $CREATED_ERROR_FIG = CREATE_ERROR_FIG($GLOBALS['VARIANT']);
        $ERROR_FIG = $ROUTE . '-FIG--routeErrors.php';
            
    file_put_contents($WORLD_SIG, $CREATED_WORLD_SIG);
    file_put_contents($ERROR_FIG, $CREATED_ERROR_FIG);

//  MEM ROUTE LINE >>>>>>>>>>>>>>>>>>>>>>>>
$ROUTE__LINE = ROUTE("m", $SHADOW_PROD_TOGGLE);

    $ROUTE = $ROUTE__LINE . 'rooms/' . $GLOBALS['GEN__WORLD_NAME'] .'/';

    $WELCOME_ROOM = $ROUTE . '/WELCOME-HOME/';
    $FIRST_ROOM = $ROUTE . $GLOBALS['GEN__ROOM'] . '/';
    
        if (!is_dir($WELCOME_ROOM)) { mkdir($WELCOME_ROOM, 0775, true); }
        if (!is_dir($FIRST_ROOM)) { mkdir($FIRST_ROOM, 0775, true); }

        $CREATED_WELCOME_ROOM = CREATE_WELCOME_HOME($GLOBALS['GEN__WORLD_NAME'], $GLOBALS['GEN__ROOM'], $GLOBALS['VARIANT']);
        $WELCOME_HOME = $WELCOME_ROOM . 'hi-from-SKY.php';

    file_put_contents($WELCOME_HOME, $CREATED_WELCOME_ROOM);

//  ALEPH ROUTE LINE >>>>>>>>>>>>>>>>>>>>>>>>
$ROUTE__LINE = ROUTE('a', $SHADOW_PROD_TOGGLE);

    $ROUTE = $ROUTE__LINE . $GLOBALS['GEN__WORLD_NAME'] . '/' . $POST__ACTING__AS . '/';
    
        if (is_dir($ROUTE)) { KDE($$KDE__ERROR_TYPE, $KDE__SOURCE, $KDE__ECHO_CHAIN, $KDE__ERROR);}
        else { mkdir($ROUTE, 0775, true); }

        $CREATED_SHELL = CREATE_BASE_SHELL($GLO['VARIANT']);
        $SHELL = $ROUTE . 'shell.php';

        $CREATED_HEADER = CREATE_BASE_HEADER($GLOBALS['GEN__WORLD_NAME'], $GLOBALS['VARIANT']);
        $HEADER = $ROUTE . 'header.php';

        $CREATED_FOOTER = CREATE_BASE_FOOTER($GLOBALS['VARIANT']);
        $FOOTER = $ROUTE . 'footer.php';

        $CREATED_STYLESHEET = CREATE_BASIC_STYLE($GLOBALS['VARIANT']);
        $STYLE = $ROUTE . 'style.css'; //empty sheet
            
    file_put_contents($SHELL, $CREATED_SHELL);
    file_put_contents($HEADER, $CREATED_HEADER);
    file_put_contents($FOOTER, $CREATED_FOOTER);
    file_put_contents($STYLE, $CREATED_STYLESHEET);

// TIME TO MAKE A CRATE

// TIME TO MAKE A CRATE

$ROUTE__LINE = ROUTE('d', $SHADOW_PROD_TOGGLE);

$ROUTE = $ROUTE__LINE . $TOOL_LOC . '/';
    if (!is_dir($ROUTE)) { mkdir($ROUTE, 0775, true); }   

 $ECHO_ROUTE = $ROUTE__LINE . 'trackerKEEPER/' . $simpleyear . '/';
    if (!is_dir($ECHO_ROUTE)) { mkdir($ECHO_ROUTE, 0775, true); }   

  $CHEST = $ROUTE . '/data.json';
  $ECHO_CHEST = $ECHO_ROUTE . $simpledate . '.echo.json';
  
  $json = file_get_contents($CHEST);
  $ECHO_json = file_get_contents($ECHO_CHEST);
  $CHEST_THINGS = json_decode($json, true);
  $ECHO_CHEST_THINGS = json_decode($ECHO_json, true);

  function buildCHEST($site, $cUID,$POST__PV,$TOOL_LOC,$TOOL_NAME, $unix, $event_time, $tUID,$timezone){
    return [
            "CUID" => $cUID, 
            "chester_crate schema" => 3,
            // CUSTOM CHEST DETAILS HERE
            "content" => [
                "genesis" => [
                    "maker" => [
                        "room" => [ 
                            "slug" => $GLOBALS[$site]['ROOM_SLUG'], 
                            "display" => $GLOBALS[$site]['ROOM_DISPLAY'], 
                            ],
                        "mod" => [ 
                            "slug" => $GLOBALS[$site]['MOD_SLUG'], 
                            "display" => $GLOBALS[$site]['MOD_DISPLAY'], 
                            ],
                    ],
                    "made" => [
                        "type" => "WORLD SITE",
                        "lovers-mark" => $GLOBALS['POST__LOVERS_MARK'],
                        "name" => $GLOBALS['GEN__WORLD_NAME'],
                        "template" => $GLOBALS['VARIANT'],
                        "environment" => [
                            "sys" => [
                                "slug" => $GLOBALS['GEN__WORLD_SYS'],
                                "display" => $GLOBALS['GEN__WORLD_SYS'],
                            ],
                            "dom" => [
                                "slug" => $GLOBALS['GEN__WORLD_DOM'],
                                "display" => $GLOBALS['GEN__WORLD_DOM'],
                            ],
                            "mod" => [
                                "slug" => $GLOBALS['GEN__WORLD_MOD'],
                                "display" => $GLOBALS['GEN__WORLD_MOD'],
                            ],
                            "room" => [
                                "slug" => $GLOBALS['GEN__ROOM'],
                                "display" => $GLOBALS['GEN__ROOM'],
                            ],
                        ]
                    ]
                ]
            ],
            "environment" => [
                "viewport" => $POST__PV,
                "sys" => [ 
                    "slug" => $GLOBALS[$site]['SYS_SLUG'], 
                    "display" => $GLOBALS[$site]['SYS_DISPLAY'], 
                    ],
                "dom" => [ 
                    "slug" => $GLOBALS[$site]['DOM_SLUG'], 
                    "display" => $GLOBALS[$site]['DOM_DISPLAY'], 
                    ],
                "room" => [ 
                    "slug" => $GLOBALS[$site]['ROOM_SLUG'], 
                    "display" => $GLOBALS[$site]['ROOM_DISPLAY'], 
                    ],
                "mod" => [ 
                    "slug" => $GLOBALS[$site]['MOD_SLUG'], 
                    "display" => $GLOBALS[$site]['MOD_DISPLAY'], 
                    ],],
            "tool" => [
                "name" => $TOOL_LOC,
                "function" => $TOOL_NAME,
            ],
            "origin" => [
                "material" => [ 
                    "type" => $GLOBALS['MATERIAL']['TYPE'], 
                    "source" => [
                        "name" =>  $GLOBALS['MATERIAL']['SOURCE']['NAME'],
                        "id" => $GLOBALS['MATERIAL']['SOURCE']['ID'],
                        "created_on" => $GLOBALS['MATERIAL']['SOURCE']['CREATED'],
                        "last_modified" => $GLOBALS['MATERIAL']['SOURCE']['LAST_MODIFIED'],
                        ],
                "reference" => [
                    "ref" => [],
                ],
                "notes" => $GLOBALS['MATERIAL']['DETAILS'],
            ],],

            //DO NOT MODIFY BELOW
            "TPS" => [
                "ingest_unix" => $unix,
                "event_unix" => $unix,
                "TUID" => $tUID, 
                "timezone" => $timezone,
            ]
  ];
}

  if (!$CHEST_THINGS) {
    $CHEST_THINGS = [];
  }
  if (!$ECHO_CHEST_THINGS) {
    $ECHO_CHEST_THINGS = [];
  }

  $CHEST_THINGS[$cUID] = buildCHEST($site, $cUID,$POST__PV,$TOOL_LOC,$TOOL_NAME, $unix, $event_time, $tUID,$timezone);
  $ECHO_CHEST_THINGS[$cUID] = buildCHEST($site, $cUID,$POST__PV,$TOOL_LOC,$TOOL_NAME, $unix, $event_time, $tUID,$timezone);
  

  file_put_contents($CHEST, json_encode($CHEST_THINGS, JSON_PRETTY_PRINT));
  file_put_contents($ECHO_CHEST, json_encode($ECHO_CHEST_THINGS, JSON_PRETTY_PRINT));
// ============================================================================
// YAY DONE!
// ============================================================================
// OH $@%! -- DON'T FORGET YOUR TPS REPORT
// ============================================================================
  $recordKeeper = $ROUTE__LINE . 'tpsREPORTER/' . $simpleyear . '/';
    if (!is_dir($recordKeeper)) { mkdir($recordKeeper, 0775, true); }
  
  $tpsReport = $recordKeeper . '/' . $simpledate . '.tps.json';
  $json = file_get_contents($tpsReport);
  $tpss = json_decode($json, true);

    if (!$tpss) {
        $tpss = [];
    }

    if (isset($tpss[$tUID])) {
        die("Already exists in this Location.");
    }

    $tpss[$tUID] = [
        "TUID" => $tUID,
        "CUID" => $cUID,
        "tps_schema" => 3,
        "TPS__REPORT" => $tpsDATA,
    ];

  file_put_contents($tpsReport, json_encode($tpss, JSON_PRETTY_PRINT));


}

  

    