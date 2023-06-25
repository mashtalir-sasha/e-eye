<?php

use App\Models\Benefit;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Benefit::class, function (ModelConfiguration $model) {

    $model->setTitle('Переваги');
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
                                AdminFormElement::textarea('item1', 'Пункт 01')->required()->setRows(2),
                                AdminFormElement::textarea('item2', 'Пункт 02')->required()->setRows(2),
                                AdminFormElement::textarea('item3', 'Пункт 03')->required()->setRows(2),
                                AdminFormElement::textarea('item4', 'Пункт 04')->required()->setRows(2),
                                AdminFormElement::textarea('item5', 'Пункт 05')->required()->setRows(2),
    
                            ]),
                            'English' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::textarea('item1EN', 'Пункт 01')->required()->setRows(2),
                                AdminFormElement::textarea('item2EN', 'Пункт 02')->required()->setRows(2),
                                AdminFormElement::textarea('item3EN', 'Пункт 03')->required()->setRows(2),
                                AdminFormElement::textarea('item4EN', 'Пункт 04')->required()->setRows(2),
                                AdminFormElement::textarea('item5EN', 'Пункт 05')->required()->setRows(2),
                            ]),
                        ]),
                    ];
                }),
        ]);
        return $form;
    });
});