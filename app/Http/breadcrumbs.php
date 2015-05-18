<?php

//Крошки главной
Breadcrumbs::register('dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Главная', route('admin'), ['icon' => 'fa fa-home']);
});


//Страницы
Breadcrumbs::register('page', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Страницы', route('news'), ['icon' => 'fa fa-file-text']);
});


Breadcrumbs::register('curpage', function ($breadcrumbs, $element) {
    $breadcrumbs->parent('page');
    $breadcrumbs->push(
        isset($element) ? $element->name : 'Новая запись',
        route('news', isset($element) ? $element->id : 'Новая запись'), ['icon' => 'fa fa-file-text-o']);
});


//Крошки главная->новости
Breadcrumbs::register('news', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Новости', route('news'), ['icon' => 'fa fa-newspaper-o']);
});

//Крошки главная->новости->конкретная страница
Breadcrumbs::register('curnews', function ($breadcrumbs, $element) {
    $breadcrumbs->parent('news');
    $breadcrumbs->push(
        isset($element) ? $element->name : 'Новая запись',
        route('news', isset($element) ? $element->id : 'Новая запись'), ['icon' => 'fa fa-bullhorn']);
});


//Крошки главная->акции
Breadcrumbs::register('share', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Акции', route('share'), ['icon' => 'fa fa-file-text']);
});

//Крошки главная->акции->конкретная страница
Breadcrumbs::register('curshare', function ($breadcrumbs, $element) {
    $breadcrumbs->parent('share');
    $breadcrumbs->push(
        isset($element) ? $element->name : 'Новая запись',
        route('share', isset($element) ? $element->id : 'Новая запись'), ['icon' => 'fa fa-bullhorn']);
});


//Крошки главная->обратная связь
Breadcrumbs::register('feedback', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Обратная связь', route('feedback'), ['icon' => 'glyphicon fa fa-inbox']);
});

//Крошки главная->обратная связь->запись
Breadcrumbs::register('curfeedback', function ($breadcrumbs, $element) {
    $breadcrumbs->parent('feedback');
    $breadcrumbs->push(
        isset($element) ? $element->fio : 'Новая запись',
        route('feedback', isset($element) ? $element->id : 'Новая запись'), ['icon' => 'fa fa-paper-plane-o']);
});


//Крошки главная->каталог
Breadcrumbs::register('category', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Категории', route('category'), ['icon' => 'fa fa-suitcase']);
});

Breadcrumbs::register('curcategory', function ($breadcrumbs, $element) {
    $breadcrumbs->parent('feedback');
    $breadcrumbs->push(
        isset($element) ? $element->name : 'Новая запись',
        route('category', isset($element) ? $element->id : 'Новая запись'), ['icon' => 'fa fa-pencil-square-o']);
});


//Крошки главная->услуги
Breadcrumbs::register('goods', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Услуги', route('goods'), ['icon' => 'fa fa-stethoscope']);
});
