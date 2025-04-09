<?php
namespace App\Controle;

use App\Modelo\Cliente;

class ControleCliente
{

    public function cadastrar()
    {
        $nome = 'Teste da Silva';
        $cliente = new Cliente($nome);
        $cliente->save();
        echo "Cliente cadastrado com sucesso: " . $cliente->getNome() . "<br>";
    }
    public function listar()
    {
        echo '<pre>';
        print_r(Cliente::list());
        echo '</pre>';

    }
}
