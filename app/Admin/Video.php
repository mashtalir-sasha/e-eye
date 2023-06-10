<?php

use App\Models\Video;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Video::class, function (ModelConfiguration $model) {

    $model->setTitle('Відео галарея');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('link')->setLabel('ID відео'),
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
                        AdminFormElement::text('link', 'ID відео з Youtube')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Video::class, 7)
    ->setIcon('fas fa-video');