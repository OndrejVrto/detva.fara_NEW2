<?php
    require 'Nette/loader.php';
    // pokud používáte verzi pro PHP 5.3, odkomentujte následující řádek:
    echo Framework::VERSION;
	use NetteFormsForm;
    $form = new Form;
    $form->addText('name', 'Jméno:'); // name je název prvku, Jméno: je popisek
    $form->addText('email', 'E-mail:');
    $form->addCheckbox('promo', 'zasílejte mi reklamu');
    $form->addTextArea('text', 'Vzkaz:');
    $form->addSubmit('send', 'Odeslat');
    echo $form; 
?>