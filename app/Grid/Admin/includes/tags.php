<?php

use BalajiDharma\LaravelCategory\Models\CategoryType;

return [
    'attribute' => 'admin_tags',
    'label' => __('Tags'),
    'list' => false,
    'fillable' => true,
    'value' => function ($model) {
        return collect($model->getCategoriesByType(config('admin.tag_name'))->get())->pluck('name')->implode(', ');
    },
    'form_options' => function ($model) {
        if (old('admin_tags')) {
            if (json_decode(old('admin_tags'))) {
                $value = collect(json_decode(old('admin_tags')))->pluck('value')->implode(',');
            } else {
                $value = old('admin_tags');
            }
        } else {
            $value = $model ? collect($model->getCategoriesByType(config('admin.tag_name'))->get())->pluck('name')->implode(', ') : '';
        }

        return [
            'field_type' => 'text',
            'value' => $value,
            'attr' => [
                'data-tagify' => 1,
                'placeholder' => 'Enter tag',
                'data-tagify-maxTags' => 5,
                'data-tagify-url' => route('admin.category.type.item.index', CategoryType::where('machine_name', config('admin.tag_name'))->first()->id),
            ],
        ];
    },
];
