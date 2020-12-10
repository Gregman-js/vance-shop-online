<?php

namespace App\Enum;


class CategoryEnum
{
    public const MAN = [
        'name' => 'Męskie',
        'slug' => 'meskie',
        'img' => 'assets/img/fashion-men.jpg',
        'header' => 'Dla mężczyzn',
        'desc' => 'Jesteś o krok od znalezienia wymarzonych butów męskich ! 
        Postaw na eleganckie i stylowe buty męskie wraz z Vance',
    ];
    public const WOMAN = [
        'name' => 'Damskie',
        'slug' => 'damskie',
        'img' => 'assets/img/fashion-women.jpeg',
        'header' => 'Dla kobiet',
        'desc' => 'Obuwie damskie musi być nie tylko wygodne, ale też stylowe! 
        Znajdź swoją wymarzoną parę na Vance.pl.',
    ];
    public const CHILD = [
        'name' => 'Dziecięce',
        'slug' => 'dzieciece',
        'img' => 'assets/img/fashion-child.jpg',
        'header' => 'Dla dzieci',
        'desc' => 'Troszczymy się o stopy twojego dziecka, 
        proponując najlepszy wybór dziecięcych butów. 
        Buty dziecięce - Najnowsze trendy chodzą parami!',
    ];

    public static function getCategoryBySlug($slug)
    {
        foreach (self::getCategories() as $category) {
            if ($category['slug'] === $slug) {
                return $category;
            }
        }
        return null;
    }

    public static function getCategories()
    {
        return [
            self::MAN,
            self::WOMAN,
            self::CHILD,
        ];
    }
}