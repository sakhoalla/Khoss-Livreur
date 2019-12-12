valide.',
    'not_regex' => 'Le format d'attribut: n'est pas valide.',
    'numeric' => 'L'attribut: doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ: attribute doit être présent.',
    'regex' => 'Le format d'attribut: n'est pas valide.',
    'required' => 'Le champ: attribut est obligatoire.',
    'required_if' => 'Le champ: attribute est obligatoire lorsque: other est: value.',
    'required_unless' => 'Le champ: attribute est obligatoire sauf si: other est dans: values.',
    'required_with' => 'Le champ: attribute est obligatoire lorsque: values ​​est présent.',
    'required_with_all' => 'Le champ: attribute est obligatoire lorsque: des valeurs sont présentes.',
    'required_without' => 'Le champ: attribute est obligatoire lorsque: values ​​n'est pas présent.',
    'required_without_all' => 'Le champ: attribute est obligatoire lorsqu'aucune des valeurs: n'est présente.',
    'same' => 'L'attribut: et: autre doit correspondre.',
    'taille' => [
        'numeric' => 'L'attribut: doit être: size.',
        'file' => 'L'attribut: doit être: taille kilo-octets.',
        'string' => 'L'attribut: doit être: caractères de taille.',
        'array' => 'L'attribut: doit contenir: des éléments de taille.',
    ],
    'starts_with' => 'L'attribut: doit commencer par l'un des éléments suivants:: values',
    'string' => 'L'attribut: doit être une chaîne.',
    'timezone' => 'L'attribut: doit être une zone valide.',
    'unique' => 'L'attribut: a déjà été pris.',
    'upload' => 'L'attribut: n'a pas pu être téléchargé.',
    'url' => 'Le format d'attribut: n'est pas valide.',
    'uuid' => 'L'attribut: doit être un UUID valide.',

    / *
    | ------------------------------------------------- -------------------------
    | Lignes de langue de validation personnalisées
    | ------------------------------------------------- -------------------------
    |
    | Ici, vous pouvez spécifier des messages de validation personnalisés pour les attributs à l'aide du
    | convention "attribute.rule" pour nommer les lignes. Cela permet de
    | spécifiez une ligne de langue personnalisée spécifique pour une règle d'attribut donnée.
    |
    * /

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    | Attributs de validation personnalisés
    | ------------------------------------------------- -------------------------
    |
    | Les lignes de langue suivantes sont utilisées pour échanger notre espace réservé d'attribut
    | avec quelque chose de plus convivial pour les lecteurs comme "Adresse e-mail" à la place
    | de "courriel". Cela nous aide simplement à rendre notre message plus expressif.
    |
    * /

    'attributes' => [],

];