<?php 

require_once('model/Estagiario.php');
require_once('model/Desenvolvedor.php');
require_once('model/Gerente.php');

do {
    print "\n ⋇⊶⊰⊱⊷⋇ Qual cargo você deseja selecionar? by: buchinho ⋇⊶⊰⊱⊷⋇ \n";
    print " 1 Estagiário \n";
    print " 2 Desenvolvedor \n";
    print " 3 Gerente \n";
    print " 0 SAIR\n";

    $escolha = (int) readline("Qual serviço deseja utilizar? " . "\n");

    switch ($escolha) {

        case 0:
            print "ATÉ A PRÓXIMA";
            break;

        case 1:
            $estagiario = new Estagiario();
            $estagiario->setNome(readline("Qual o nome do estagiário? ")) ;
            print $estagiario . "\n";
            break;

        case 2:
            $dev = new Desenvolvedor();
            $dev->setNome(readline("Qual o nome do desenvolvedor? ")) ;
            print $dev . "\n";
            break;

        case 3:
            $gerente = new Gerente();
            $gerente->setNome(readline("Qual o nome do gerente? ")) ;
            print $gerente . "\n";
            break;

        default:
            print "ALTERNATIVA INVÁLIDA!!\n";
            break;
    }
} while ($escolha != 0);
