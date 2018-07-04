<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'confirmed'            => 'le :attribute confirmation ne correspondent pas.',
    'date'                 => 'le :attribute n\' est pas une date valide.',
    'email'                => 'l\' :attribute doit être une adresse email valide.',
    'max'                  => [
        'string'  => 'The :attribute ne doit pas dépasser :max caractères.',
    ],
    'min'                  => [
        'string'  => 'Le :attribute doit au minimum faire :min caractères.',
    ],
    'required'             => 'Champ obligatoire.',
    'string'               => 'le :attribute doit être une chaine de caractères.',
    'unique'               => 'l\' :attribute est déjà utilisé.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
