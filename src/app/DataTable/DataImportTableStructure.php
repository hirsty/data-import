<?php

namespace LaravelEnso\DataImport\app\DataTable;

use LaravelEnso\DataImport\app\Enums\DataImportTypesEnum;
use LaravelEnso\DataTable\app\Classes\TableStructure;

class DataImportTableStructure extends TableStructure
{
    public function __construct()
    {
        $this->data = [
            'crtNo'               => __('#'),
            'actionButtons'       => __('Actions'),
            'customActionButtons' => [
                ['cssSelectorClass' => 'order-details', 'cssClass' => 'btn-info fa fa-info-circle', 'event' => 'showSummary'],
            ],
            'headerAlign'         => 'center',
            'bodyAlign'           => 'center',
            'tableClass'          => 'table display compact',
            'enumMappings'        => [
                'type' => DataImportTypesEnum::class,
            ],
            'columns'             => [

                0 => [
                    'label' => __('Import Type'),
                    'data'  => 'type',
                    'name'  => 'type',
                ],
                1 => [
                    'label' => __('File Name'),
                    'data'  => 'original_name',
                    'name'  => 'original_name',
                ],
                2 => [
                    'label' => __('Comment'),
                    'data'  => 'comment',
                    'name'  => 'comment',
                ],
                3 => [
                    'label' => __('Date'),
                    'data'  => 'created_at',
                    'name'  => 'data_imports.created_at',
                ],
                4 => [
                    'label' => __('User'),
                    'data'  => 'created_by',
                    'name'  => 'users.last_name',
                ],
            ],
        ];
    }
}
