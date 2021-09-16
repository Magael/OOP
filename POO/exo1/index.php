<?php
    require 'form.php';
    
    $html=new html();
    $form = new Form (array(
        'nom'=>'',
        'prenom'=>'',
        'genre'=>'',
        'country'=>array(
            'Portugal',
            'Belgique',
            'Espagne'
        )

    ));
    echo $html->meta();
    echo $html->css();
    echo $form->create();
    echo $form->input('nom', 'prenom');
    echo $form ->radio();
    echo $form->select('country','portugal');
    echo $form->check();
    echo $form->textarea();
    echo $form->submit();

    echo $html->img();
    echo $html->link();
    echo $html->java();
?>