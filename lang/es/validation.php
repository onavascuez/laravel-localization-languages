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

    "accepted"             => "El campo :attribute debe ser aceptado.",
    "active_url"           => "El campo :attribute no es una URL válida.",
    "after"                => "El campo :attribute debe ser una fecha después de :date.",
    "alpha"                => "El campo :attribute sólo puede contener letras.",
    "alpha_spaces"         => "El campo :attribute sólo puede contener letras y espacios.",
    "alpha_dash"           => "El campo :attribute sólo puede contener letras, números y guiones.",
    "alpha_num"            => "El campo :attribute sólo puede contener letras y números.",
    "array"                => "El campo :attribute debe ser un array.",
    "before"               => "El campo :attribute debe ser una fecha anterior a :date.",
    "between"              => array(
        "numeric" => "El campo :attribute debe estar entre :min - :max.",
        "file"    => "El campo :attribute debe estar entre :min - :max kilobytes.",
        "string"  => "El campo :attribute debe estar entre :min - :max caracteres.",
        "array"   => "El campo :attribute debe estar entre :min - :max elementos.",
    ),
    "confirmed"            => "El campo :attribute de confirmación no coincide.",
    "date"                 => "El campo :attribute no es una fecha válida.",
    "date_format"          => "El campo :attribute no coincide con el formato :format.",
    "different"            => "El campo :attribute y :other debe ser diferente.",
    "digits"               => "El campo :attribute debe tener :digits dígitos.",
    "digits_between"       => "El campo :attribute debe estar entre :min y :max dígitos.",
    "email"                => "El campo :attribute tiene que ser un email válido.",
    "exists"               => "El campo :attribute seleccionado  es inválido",
    "image"                => "El campo :attribute debe ser una imagen.",
    "in"                   => "El campo :attribute seleccionado es inválido.",
    "integer"              => "El campo :attribute debe ser un entero.",
    "ip"                   => "El campo :attribute debe ser una dirección IP válida.",
    "max"                  => array(
        "numeric" => "El campo :attribute debe ser menor que :max.",
        "file"    => "El campo :attribute debe ser menor que :max kilobytes.",
        "string"  => "El campo :attribute debe ser menor que :max caracteres.",
        "array"   => "El campo :attribute debe ser menor que :max elementos.",
    ),
    "mimes"                => "El campo :attribute debe ser un archivo de tipo: :values.",
    "min"                  => array(
        "numeric" => "El campo :attribute debe tener al menos :min.",
        "file"    => "El campo :attribute debe tener al menos :min kilobytes.",
        "string"  => "El campo :attribute debe tener al menos :min caracteres.",
        "array"   => "El campo :attribute debe tener al menos :min elementos.",
    ),
    "not_in"               => "El campo :attribute seleccionado es invalido.",
    "numeric"              => "El campo :attribute debe ser un numero.",
    "regex"                => "El formato del campo :attribute es inválido.",
    "required"             => "El campo :attribute es requerido.",
    "required_if"          => "El campo :attribute es requerido si :other es :value.",
    "required_with"        => "El campo :attribute es requerido si :values existe.",
    "required_with_all"    => "El campo :attribute es requerido si :values existe.",
    "required_without"     => "El campo :attribute es requerido si :values no existe.",
    "required_without_all" => "El campo :attribute es requerido si ninguno de los valores :values existen.",
    "same"                 => "El campo :attribute y :other tienen que ser iguales.",
    "size"                 => array(
        "numeric" => "El campo :attribute debe ser :size.",
        "file"    => "El campo :attribute debe tener :size kilobytes.",
        "string"  => "El campo :attribute debe tener :size characters.",
        "array"   => "El campo :attribute debe contener :size elementos.",
    ),
    "unique"               => "El campo :attribute ya está ocupado.",
    "url"                  => "El formato de :attribute es invalido.",

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
