<?php

return array(

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

    "accepted"             => "El camp :attribute s'ha d'acceptar.",
    "active_url"           => "El camp :attribute no es una URL vàlida.",
    "after"                => "El camp :attribute ha de ser una data posterior a :date.",
    "alpha"                => "El camp :attribute només por contenir lletres.",
    "alpha_spaces"         => "El camp :attribute només por contenir lletres i espais.",
    "alpha_dash"           => "El camp :attribute només por contenir lletres, números i guions.",
    "alpha_num"            => "El camp :attribute només por contenir lletres i números.",
    "array"                => "El camp :attribute ha de ser un array.",
    "before"               => "El camp :attribute ha de ser una data anterior a :date.",
    "between"              => array(
        "numeric" => "El camp :attribute ha d'estar entre :min i :max.",
        "file"    => "El camp :attribute ha d'estar entre :min i :max kilobytes.",
        "string"  => "El camp :attribute ha d'estar entre :min i :max caràcters.",
        "array"   => "El camp :attribute ha d'estar entre :min i :max elements.",
    ),
    "confirmed"            => "El camp :attribute de confirmació no coincideix.",
    "date"                 => "El camp :attribute no es una data vàlida.",
    "date_format"          => "El camp :attribute no coincideix amb el format :format.",
    "different"            => "El camp :attribute i :other han de ser diferents.",
    "digits"               => "El camp :attribute ha de tenir :digits dígits.",
    "digits_between"       => "El camp :attribute ha d'estar entre :min i :max dígits.",
    "email"                => "El camp :attribute ha de tenir una adreça d'email vàlida.",
    "exists"               => "L'element seleccionat :attribute no es vàlid.",
    "image"                => "El camp :attribute ha de ser una imatge.",
    "in"                   => "L'element seleccionat :attribute no es vàlid.",
    "integer"              => "El camp :attribute ha de ser en nombre enter.",
    "ip"                   => "El camp :attribute ha de ser una adreça IP vàlida.",
    "max"                  => array(
        "numeric" => "El camp :attribute ha de ser inferior a :max.",
        "file"    => "El camp :attribute ha de ser inferior a :max kilobytes.",
        "string"  => "El camp :attribute ha de ser inferior a :max caràcters.",
        "array"   => "El camp :attribute no pot tenir més de :max elements.",
    ),
    "mimes"                => "El camp :attribute ha de ser un arxiu del tipus: :values.",
    "min"                  => array(
        "numeric" => "El camp :attribute ha de ser com a mínim :min.",
        "file"    => "El camp :attribute ha de ser com a mínim :min kilobytes.",
        "string"  => "El camp :attribute ha de ser com a mínim :min caràcters.",
        "array"   => "El camp :attribute ha de tenir com a mínim :min elements.",
    ),
    "not_in"               => "L'element seleccionat :attribute no es vàlid.",
    "numeric"              => "El camp :attribute ha de ser numèric.",
    "regex"                => "El format del camp :attribute no es vàlid.",
    "required"             => "El camp :attribute es obligatori.",
    "required_if"          => "El camp :attribute es obligatori si :other es :value.",
    "required_with"        => "El camp :attribute es obligatori si :values existeix.",
    "required_with_all"    => "El camp :attribute es obligatori si :values existeix.",
    "required_without"     => "El camp :attribute es obligatori si :values no existeix.",
    "required_without_all" => "El camp :attribute es obligatori si cap dels valors :values existeixen.",
    "same"                 => "El camp :attribute i :other han de coincidir.",
    "size"                 => array(
        "numeric" => "El camp :attribute ha de ser :size.",
        "file"    => "El camp :attribute ha de ser de :size kilobytes.",
        "string"  => "El camp :attribute ha de ser de :size caràcters.",
        "array"   => "El camp :attribute ha de contenir :size elements.",
    ),
    "unique"               => "El camp :attribute ja està ocupat.",
    "url"                  => "El format del camp :attribute no es vàlid.",

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

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

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

    'attributes' => array(),

);
