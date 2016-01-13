<?php

$sMetadataVersion = '1.0';
 
$aModule = array(
    'id'           => 'tes_variantsearch',
    'title'        => '<img src="../modules/tes_variantsearch/out/img/tes_icon.png" width="15" height="15"> TESolutions - Variantensuche',
    'description'  => 'Ermöglicht die Suche von Variantenartikeln. Bitte beachten Sie, dass diese Funktion bei einer hohen Anzahl von Artikeln und Varianten zu Performance-Problemen führen kann. Dies ist ein kostenloses Modul der Firma TESolutions.',
    'thumbnail'    => 'out/img/tesolutions.jpg',
    'version'      => '1.0',
    'author'       => 'Fabian Kaufmann',
    'url'          => 'http://www.te-solutions.de',
    'email'        => 'f.kaufmann@te-solutions.de',
    'extend'       => array(
    	'oxSearch'	=> 'tes_variantsearch/models/tes_variantsearch_oxsearch',
    ),
);
