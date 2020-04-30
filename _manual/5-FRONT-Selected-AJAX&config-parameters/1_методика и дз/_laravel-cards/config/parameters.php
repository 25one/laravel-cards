<?php

return [

    'front' => [
    	'orderby' => [
           'order' => 'type_id',
           'direction' => 'asc',
        ],
    	'where' => [
           'who' => 'name',
           'what' => 'usd',
        ],        
    ],

//...    
    'back' => [
        'order' => 'user_id',
        'direction' => 'asc',
    ],

];
