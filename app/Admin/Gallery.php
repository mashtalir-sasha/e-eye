<?php

use App\Models\Gallery;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Gallery::class, function (ModelConfiguration $model) {

    $model->setTitle('Галарея фото');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID слайду'),
            AdminColumn::text('created_at')->setLabel('Дата створення'),
            AdminColumn::text('updated_at')->setLabel('Дата зміни'),
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image1', 'Фото 1')->required(),
                    ];
                }, 4)
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image2', 'Фото 2')->required(),
                    ];
                }, 4)
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image3', 'Фото 3')->required(),
                    ];
                }, 4)
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image4', 'Фото 4')->required(),
                    ];
                }, 4)
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image5', 'Фото 5')->required(),
                    ];
                }, 4)
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image6', 'Фото 6')->required(),
                    ];
                }, 4)
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image7', 'Фото 7')->required(),
                    ];
                }, 4),
        ]);
        return $form;
    });
});