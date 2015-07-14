<?php

use app\Form\Form;
use app\Form\Label;
use app\Form\Input;
use app\Form\Select;
use app\Form\TextArea;
use app\Form\Button;

$form = new Form;

$label = new Label("Pessoa Fisica:");
$input = new Input("radio", "pessoa", "pessoa fisica", "Pessoa Física");
$form->addElement($label);
$form->addElement($input);

$label2 = new Label("Pessoa Jurídica:");
$input2 = new Input("radio", "pessoa", "pessoa jurídica", "Pessoa Jurídica");
$form->addElement($label2);
$form->addElement($input2);

$label3 = new Label("Nome:");
$input3 = new Input("text", "Nome", "", "Nome");
$form->addElement($label3);
$form->addElement($input3);

$label4 = new Label("Sobrenome:");
$input4 = new Input("text", "Sobrenome", "", "Sobrenome");
$form->addElement($label4);
$form->addElement($input4);

$label5 = new Label("E-mail:");
$input5 = new Input("text", "email", "", "E-mail");
$form->addElement($label5);
$form->addElement($input5);

$label6 = new Label("CPF/CNPJ:");
$input6 = new Input("text", "cpf_cnpj", "", "Digite aqui seu CPF ou CNPJ");
$form->addElement($label6);
$form->addElement($input6);

$label7 = new Label("Sexo:");
$select = new Select();
    $select->addOptions("Masculino");
    $select->addOptions("Feminino");
$form->addElement($label7);
$form->addElement($select);

$textArea = new TextArea(20, "texto_de_cadastro", 10, "Escreva seu texto aqui");
$form->addElement($textArea);

$button = new Button("submit", "enviar", "Enviar");
$form->addElement($button);
?>
<div class="col-md-12">
    <div class="col-sm-offset-3 col-md-6">
    <?php
        $form->render();
    ?>
    </div>
</div>
<?php
if (isset($_POST['enviar'])){
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}