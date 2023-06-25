<?php

use App\Models\About;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(About::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
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
                        AdminFormElement::images('images', 'Фото')->required(),
                    ];
                }),
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminDisplay::tabbed([
                            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::ckeditor('text1', 'Текст вгорі')->required(),
                                AdminFormElement::ckeditor('text2', 'Текст після галерії 1')->required(),
                                AdminFormElement::ckeditor('text3', 'Текст після галерії 2')->required(),
    
                            ]),
                            'English' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::ckeditor('text1EN', 'Текст вгорі')->required(),
                                AdminFormElement::ckeditor('text2EN', 'Текст після галерії 1')->required(),
                                AdminFormElement::ckeditor('text3EN', 'Текст після галерії 2')->required(),
                            ]),
                        ]),
                    ];
                }),
        ]);
        return $form;
    });
});