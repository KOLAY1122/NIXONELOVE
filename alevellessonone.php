<?php 
	$myName = "mykola"."</br>";
	echo $myName;

	$myAge = "20"."</br>";
	echo $myAge;

	$a = pi();
    echo $a;

    $full = array( 'alex', 'vova','tolya');
    echo $short;

    $short = [
    	'alex',
    	'vova',
    	'tolya',
    	[
    		'kostya',
    		'olia'
    	]
    ]; 
    echo $short;
    $shortOne = [
    	'alex',
    	'vova',
    	'tolya',
    	[
    		'kostya',
    		'olia',
    		[
    			'gosha',
    			'mila',
    		]
    	]
    ];
    echo $shortTwo;
    $shortTwo = [
    	'alex',
    	'vova',
    	'tolya',
    	[
    		'kostya',
    		'olia',
    	],
    	[
    			'gosha',
    			'mila',
    	],
    ];
    echo $shortTwo;

 ?>