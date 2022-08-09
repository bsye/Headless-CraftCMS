<?php

return [

  // Custom palettes, fixed options [label, default (boolean), colour (array(colour, customOptions)) ]
  'palettes' => [
    'Tailwind' => [ // custom label (required)
      [
        'label' => "dark-500", // custom label (required)
        'default' => true, // default could be true/false (option is required)
        'color' => [
          [
            'color' => '#1c292c', // the colour shown in the fieldtype (required)
            'background' => 'bg-dark-500', // optional / custom attribute
            'backgroundHover' => 'hover:bg-dark-700', // optional / custom attribute
            'text' => 'text-dark-500', // optional / custom attribute
            'textHover' => 'hover:text-dark-700' // optional / custom attribute
          ]
        ]
      ],
      [
        'label' => 'clear-500', // custom label (required)
        'default' => false, // default could be true/false (option is required)
        'color' => [
          [
            'color' => '#f2e9dc', // the colour shown in the fieldtype (required)
            'background' => 'bg-light-500', // optional / custom attribute
            'backgroundHover' => 'hover:bg-light-700', // optional / custom attribute
            'text' => 'text-light-500', // optional / custom attribute
            'textHover' => 'hover:text-light-700' // optional / custom attribute
          ]
        ]
      ],
      [
        'label' => 'dark-300', 
        'default' => false, 
        'color' => [
          [
            'color' => '#777f80',
            'backgroundHover' => 'hover:bg-dark-500', 
            'text' => 'text-dark-300', 
            'textHover' => 'hover:text-dark-500' 
          ]
        ]
      ],
      [
        'label' => 'clear-300',
        'default' => false,
        'color' => [
          [
            'color' => '#f7f2ea',
            'background' => 'bg-clear-300',
            'backgroundHover' => 'hover:bg-clear-500',
            'text' => 'text-clear-300',
            'textHover' => 'hover:text-clear-500'
          ]
        ]
      ],
      [
        'label' => 'dark-900', 
        'default' => false, 
        'color' => [
          [
            'color' => '#11191a', 
            'background' => 'bg-dark-700', 
            'backgroundHover' => 'hover:bg-dark-900', 
            'text' => 'text-dark-700', 
            'textHover' => 'hover:text-dark-900' 
          ]
        ]
      ],
      [
        'label' => 'light-700', 
        'default' => false, 
        'color' => [
          [
            'color' => '#918c84', 
            'background' => 'bg-light-700', 
            'backgroundHover' => 'hover:bg-light-900', 
            'text' => 'text-light-700', 
            'textHover' => 'hover:text-light-900' 
          ]
        ]
      ],
      [
        'label' => 'orange', 
        'default' => false, 
        'color' => [
          [
            'color' => '#CE894F', 
            'background' => 'bg-orange', 
            'backgroundHover' => 'hover:bg-orange', 
            'text' => 'text-orange', 
            'textHover' => 'hover:text-orange' 
          ]
        ]
      ],
      [
        'label' => 'green', 
        'default' => false, 
        'color' => [
          [
            'color' => '#57704E', 
            'background' => 'bg-green', 
            'backgroundHover' => 'hover:bg-green', 
            'text' => 'text-green', 
            'textHover' => 'hover:text-green' 
          ]
        ]
      ],
      [
        'label' => 'blue', 
        'default' => false, 
        'color' => [
          [
            'color' => '#4E6F70', 
            'background' => 'bg-blue', 
            'backgroundHover' => 'hover:bg-blue', 
            'text' => 'text-blue', 
            'textHover' => 'hover:text-blue' 
          ]
        ]
      ],
      [
        'label' => 'brown', 
        'default' => false, 
        'color' => [
          [
            'color' => '#93765A', 
            'background' => 'bg-brown', 
            'backgroundHover' => 'hover:bg-brown', 
            'text' => 'text-brown', 
            'textHover' => 'hover:text-brown' 
          ]
        ]
      ],
      [
        'label' => 'red', 
        'default' => false, 
        'color' => [
          [
            'color' => '#91404E', 
            'background' => 'bg-red', 
            'backgroundHover' => 'hover:bg-red', 
            'text' => 'text-red', 
            'textHover' => 'hover:text-red' 
          ]
        ]
      ],
      [
        'label' => 'white', 
        'default' => false, 
        'color' => [
          [
            'color' => '#fff', 
            'background' => 'bg-white', 
            'backgroundHover' => 'hover:bg-white', 
            'text' => 'text-white', 
            'textHover' => 'hover:text-white' 
          ]
        ]
      ],
      [
        'label' => 'black', 
        'default' => false, 
        'color' => [
          [
            'color' => '#000', 
            'background' => 'bg-black', 
            'backgroundHover' => 'hover:bg-black', 
            'text' => 'text-black', 
            'textHover' => 'hover:text-black' 
          ]
        ]
      ],
    ]
  ]

];
