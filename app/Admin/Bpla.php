<?php

use App\Models\Bpla;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Bpla::class, function (ModelConfiguration $model) {

    $model->setTitle('БПЛА, текст');
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
                                AdminFormElement::textarea('text1', 'Текст ліворуч')->required(),
                                AdminFormElement::textarea('text2', 'Текст праворуч')->required(),
    
                            ]),
                            'English' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::textarea('text1EN', 'Текст ліворуч')->required(),
                                AdminFormElement::textarea('text2EN', 'Текст праворуч')->required(),
                            ]),
                        ]),
                    ];
                }),
        ]);
        return $form;
    });
});