<?php

use App\Models\Direction;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Direction::class, function (ModelConfiguration $model) {

    $model->setTitle('Напрямки');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::image('ico')->setLabel('Іконка')->setImageWidth('50px'),
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('text')->setLabel('Текст'),
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
                        AdminFormElement::file('ico', 'Іконка в форматі SVG')->required(),
                    ];
                }),
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminDisplay::tabbed([
                            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::text('title', 'Заголовок')->required(),
                                AdminFormElement::ckeditor('text', 'Текст')->required(),
    
                            ]),
                            'English' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::text('titleEN', 'Заголовок')->required(),
                                AdminFormElement::ckeditor('textEN', 'Текст')->required(),
                            ]),
                        ]),
                    ];
                }),
        ]);
        return $form;
    });
});