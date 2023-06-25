<?php

use App\Models\Catalog;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Catalog::class, function (ModelConfiguration $model) {

    $model->setTitle('Каталог');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('title')->setLabel('Назва'),
            AdminColumn::image('image')->setLabel('Фото'),
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
                        AdminDisplay::tabbed([
                            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::text('title', 'Назва')->required(),
                                AdminFormElement::ckeditor('text', 'Опис')->required(),
                                AdminFormElement::html('<label>Характеристики</label> <span class="form-element-required">*</span>'),
                                AdminFormElement::hasManyLocal('list', [
                                    AdminFormElement::columns()
                                        ->addColumn(function () {
                                            return [
                                                AdminFormElement::text('key', 'Характеристика')->required(),
                                            ];
                                        })
                                        ->addColumn(function () {
                                            return [
                                                AdminFormElement::text('value', 'Опис')->required(),
                                            ];
                                        }),
                                ]),
                            ]),
                            'English' => new \SleepingOwl\Admin\Form\FormElements([
                                AdminFormElement::text('titleEN', 'Назва')->required(),
                                AdminFormElement::ckeditor('textEN', 'Опис')->required(),
                                AdminFormElement::html('<label>Характеристики</label> <span class="form-element-required">*</span>'),
                                AdminFormElement::hasManyLocal('listEN', [
                                    AdminFormElement::columns()
                                        ->addColumn(function () {
                                            return [
                                                AdminFormElement::text('key', 'Характеристика')->required(),
                                            ];
                                        })
                                        ->addColumn(function () {
                                            return [
                                                AdminFormElement::text('value', 'Опис')->required(),
                                            ];
                                        }),
                                ]),
                            ]),
                        ]),
                    ];
                }, 12)
                ->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Фото')->required(),
                        AdminFormElement::file('photo', 'Напис шрифтом (картинка в фотматі svg)'),
                    ];
                }, 6)
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('video', 'Відео з Youtube'),
                    ];
                }, 6),
        ]);
        return $form;
    });
});