<?php

$dom = "IO";  // locate domain within the primary module.....
$mod = $_GET['mod'] ?? "NOT-NE1";
$pv = $_GET['pv'] ?? "WATCHER";

$loversMark = "jk"; // UNUSED IMPERITIVE. Do not forget me.
require_once '../_configs/config.php'; // SYS config

$location = '';
$navCall = $traceback . 'a/' . $dom . '/asDom/nav.php';

// =========================================================== //

$nav = [
    "navSec" => [
        "name" => "SYS.COMS",
        "items" => [
            [ 
            "label" => "INVENTORY", 
            "path" => "blog.postList.php",
            "subSec" => [
                [ "label" => "MAKE POST", "path" => "blog.addPost.php" ],
                [ "label" => "VIEW POSTS", "path" => "blog.postList.php" ],
                ],
            ],
            [ 
            "label" => "CHARLIE-MAIL", 
            "path" => "blog.postList.php",
            "subSec" => [
                [ "label" => "EMAIL TEST", "path" => "email-test.php" ],
                [ "label" => "INBOX TEST", "path" => "inbox-test.php" ]
                ],
            ],
         ],
            
        ],
    [
        "name" => "DOM.TOOLS",
        "items" => [
            [ "label" => "SELECTOR", "path" => "index.php" ],
            [ "label" => "SPLITTER", "path" => "index.php" ],
            [ "label" => "CATAGORIZER", "path" => "index.php" ],
            [ "label" => "SANTIZER", "path" => "index.php" ],
        ]
    ]
];

$blogBasic = [
    "addSectTitle" => "SUBJECT OF CONTRIBUTION",
    "placeholderTitle" => "$sys.$dom CONTRIBUTION CONTENTS",
    "placeholderBody" => "SUBMIT YOUR CONTRIBUTIONS",
    "addSectText" => "Your contribution will be dated and logged into source. 
    You may view your contribs, but only the  $sys.$dom can remove them.",
    "confirmMsg" => "Thank you. Contribution added to forrest.source.",
    "listSectTitle" => "Contribution Listings",
    "listSectText" => "Viewing all listings from $mod in $sys.$dom."
];


$emailBasic = [
    "addSectTitle" => "ECHO $mod INBOX",
    "placeholderTitle" => "$sys.$dom DIGIMAILSYSTEM",
    "placeholderBody" => "WHAT MUST YOU COMMUNICATE BETWEEN LINES?",
    "toModLine" => "MOD LIKE '$mod'",
    "toDomLine" => "DOM LIKE '$dom'",
    "subjectLine" => "SUBJECT ECHO LINE",
    "addSectText" => "If you know the MOD and DOM of a TERMINAL MOD, you may send contact. Un-focused names will be stored, regardless of the void of their nature.",
    "confirmMsg" => "Thank you. Contribution added to forrest.source.",
    "listSectTitle" => "Contribution Listings",
    "listSectText" => "Viewing all listings from $mod in $sys.$dom."
]



?>