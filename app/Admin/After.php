<?php

use App\Models\After;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(After::class, function (ModelConfiguration $model) {

    $model->setTitle('Текст + посилання на каталог');
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
                                AdminFormElement::textarea('text1', 'Текст жирним')->required()->setRows(6),
                                AdminFormElement::textarea('text2', 'Текст звичайний знизу')->required()->setRows(6),
                                AdminFormElement::text('link', 'Посилвння на каталог')->required(),
    
                            ]),
                            'English' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::textarea('text1EN', 'Текст жирним')->required()->setRows(6),
                                AdminFormElement::textarea('text2EN', 'Текст звичайний знизу')->required()->setRows(6),
                                AdminFormElement::text('linkEN', 'Посилвння на каталог')->required(),
                            ]),
                        ]),
                    ];
                }),
        ]);
        return $form;
    });
});