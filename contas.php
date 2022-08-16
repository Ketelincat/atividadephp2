<?php 

    class Contas{
        var $numAge;
        var $numConta;
        var $nome;
        var $saldo;
        
        function Imprimiretiqueta()
        {
            print 'Nome da conta: '.$this->numConta.'<br>';
            print 'Nome: '.$this->nome.'<br>';
            print 'saldo: '.$this->saldo.'<br>';
            print 'Numero da agencia: '.$this->numAge.'<br>';
        }
    }
    
?>