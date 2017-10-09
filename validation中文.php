<?php

return [

    'unique'               => ':attribute �Ѵ���',
    'accepted'             => ':attribute �Ǳ����ܵ�',
    'active_url'           => ':attribute ������һ���Ϸ��� URL',
    'after'                => ':attribute ������ :date ֮���һ������',
    'alpha'                => ':attribute ����ȫ������ĸ�ַ����ɡ�',
    'alpha_dash'           => ':attribute ����ȫ������ĸ�����֡��л��߻��»����ַ�����',
    'alpha_num'            => ':attribute ����ȫ������ĸ�����ֹ���',
    'array'                => ':attribute �����Ǹ�����',
    'before'               => ':attribute ������ :date ֮ǰ��һ������',
    'between'              => [
        'numeric' => ':attribute ������ :min �� :max ֮��',
        'file'    => ':attribute ������ :min �� :max KB֮��',
        'string'  => ':attribute ������ :min �� :max ���ַ�֮��',
        'array'   => ':attribute ������ :min �� :max ��֮��',
    ],
    'boolean'              => ':attribute �ַ������� true �� false',
    'confirmed'            => ':attribute ����ȷ�ϲ�ƥ��',
    'date'                 => ':attribute ������һ���Ϸ�������',
    'date_format'          => ':attribute ������ĸ�ʽ :format ������',
    'different'            => ':attribute ���벻ͬ��:other',
    'digits'               => ':attribute ������ :digits λ',
    'digits_between'       => ':attribute ������ :min and :max λ֮��',
    'email'                => ':attribute ������һ���Ϸ��ĵ����ʼ���ַ��',
    'filled'               => ':attribute ���ֶ��Ǳ����',
    'exists'               => 'ѡ���� :attribute ����Ч��',
    'image'                => ':attribute ������һ��ͼƬ (jpeg, png, bmp ���� gif)',
    'in'                   => 'ѡ���� :attribute ����Ч��',
    'integer'              => ':attribute �����Ǹ�����',
    'ip'                   => ':attribute ������һ���Ϸ��� IP ��ַ��',
    'max'                  => [
        'numeric' => ':attribute ����󳤶�Ϊ :max λ',
        'file'    => ':attribute �����Ϊ :max',
        'string'  => ':attribute ����󳤶�Ϊ :max �ַ�',
        'array'   => ':attribute ��������Ϊ :max ��',
    ],
    'mimes'                => ':attribute ���ļ����ͱ�����:values',
    'min'                  => [
        'numeric' => ':attribute ����С����Ϊ :min λ',
        'string'  => ':attribute ����С����Ϊ :min �ַ�',
        'file'    => ':attribute ��С����Ϊ:min KB',
        'array'   => ':attribute ������ :min ��',
    ],
    'not_in'               => 'ѡ���� :attribute ����Ч��',
    'numeric'              => ':attribute ����������',
    'regex'                => ':attribute ��ʽ����Ч��',
    'required'             => ':attribute �ֶα�����д',
    'required_if'          => ':attribute �ֶ��Ǳ���ĵ� :other �� :value',
    'required_with'        => ':attribute �ֶ��Ǳ���ĵ� :values �Ǵ��ڵ�',
    'required_with_all'    => ':attribute �ֶ��Ǳ���ĵ� :values �Ǵ��ڵ�',
    'required_without'     => ':attribute �ֶ��Ǳ���ĵ� :values �ǲ����ڵ�',
    'required_without_all' => ':attribute �ֶ��Ǳ���ĵ� û��һ�� :values �Ǵ��ڵ�',
    'same'                 => ':attribute �� :other ����ƥ��',
    'size'                 => [
        'numeric' => ':attribute ������ :size λ',
        'file'    => ':attribute ������ :size KB',
        'string'  => ':attribute ������ :size ���ַ�',
        'array'   => ':attribute ������� :size ��',
    ],
    'url'                  => ':attribute ��Ч�ĸ�ʽ',
    'timezone'             => ':attribute �������Ч��ʱ��',

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
    'custom'               => [
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
    'attributes'           => [
        'username' => '�û���',
        'account'  => '�˺�',
        'captcha'  => '��֤��',
        'mobile'   => '�ֻ���',
        'password' => '����',
        'content'  => '����',
        'identity' => '�ֻ���/�û���',
        'title' => '����',
    ],

];
