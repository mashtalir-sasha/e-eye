<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    AdminSection::addMenuPage(\App\Models\Main::class)
        ->setIcon('fas fa-home')
        ->setPriority(1)
        ->setTitle('Заголовки 1 екран'),
    
    AdminSection::addMenuPage(\App\Models\Benefit::class)
        ->setIcon('fas fa-list-alt')
        ->setPriority(2)
        ->setTitle('Переваги'),
    
    AdminSection::addMenuPage(\App\Models\Direction::class)
        ->setIcon('fas fa-directions')
        ->setPriority(3)
        ->setTitle('Напрямки'),
    
    AdminSection::addMenuPage(\App\Models\Bpla::class)
        ->setIcon('fas fa-file')
        ->setPriority(4)
        ->setTitle('БПЛА, текст'),
    
    AdminSection::addMenuPage(\App\Models\Catalog::class)
        ->setIcon('fas fa-shopping-cart')
        ->setPriority(5)
        ->setTitle('Каталог'),

    AdminSection::addMenuPage(\App\Models\After::class)
        ->setIcon('fas fa-file-alt')
        ->setPriority(6)
        ->setTitle('Текст + посилання на каталог'),
    
    AdminSection::addMenuPage(\App\Models\About::class)
        ->setIcon('fas fa-info')
        ->setPriority(7)
        ->setTitle('Про нас'),

    AdminSection::addMenuPage(\App\Models\Gallery::class)
        ->setIcon('fas fa-images')
        ->setPriority(8)
        ->setTitle('Галарея фото'),
    
    AdminSection::addMenuPage(\App\Models\Video::class)
        ->setIcon('fas fa-video')
        ->setPriority(9)
        ->setTitle('Відео галарея'),
    
    AdminSection::addMenuPage(\App\Models\Contact::class)
        ->setIcon('fas fa-map-marker-alt')
        ->setPriority(10)
        ->setTitle('Контакти'),

];
