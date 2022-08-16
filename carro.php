<?php

    class Carros{
        var $cor;
        var $ano;
        var $numeroPortas;
        var $peso;

        function Imprimiretiqueta()
        {
            print 'Cor do carro: '.$this->cor.'<br>';
            print 'Ano: '.$this->ano.'<br>';
            print 'Numero de Portas: '.$this->numeroPortas.'<br>';
            print 'Peso do carro: '.$this->peso.'<br>';
        }
    }

?>