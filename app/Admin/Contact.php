<?php

use App\Models\Contact;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Contact::class, function (ModelConfiguration $model) {

    $model->setTitle('Контакти');
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
                                AdminFormElement::text('address', 'Адреса')->required(),
    
                            ]),
                            'English' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::text('addressEN', 'Адреса')->required(),
                            ]),
                        ]),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('phone1', 'Телефон 1')->required(),
                        AdminFormElement::text('phone2', 'Телефон 2'),
                        AdminFormElement::text('email', 'E-mail')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('facebook', 'Facebook'),
                        AdminFormElement::text('instagram', 'Instagram'),
                        AdminFormElement::text('youtube', 'Youtube'),
                        AdminFormElement::text('twiter', 'Twiter'),
                        AdminFormElement::text('tiktok', 'Tiktok'),
                    ];
                }),
        ]);
        return $form;
    });
});