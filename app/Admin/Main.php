<?php

use App\Models\Main;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Main::class, function (ModelConfiguration $model) {

    $model->setTitle('Заголовки 1 екран');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('created_at')->setLabel('Дата створення'),
            AdminColumn::text('updated_at')->setLabel('Дата зміни'),
        ]);
        return $display;
    });

    $model->disableCreating();
    $model->disableDeleting();

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminDisplay::tabbed([
                            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::text('title', 'Заголовок')->required(),
                                AdminFormElement::textarea('text', 'Текст')->required(),
    
                            ]),
                            'English' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::text('titleEN', 'Заголовок')->required(),
                                AdminFormElement::textarea('textEN', 'Текст')->required(),
                            ]),
                        ]),
                    ];
                }),
        ]);
        return $form;
    });
});