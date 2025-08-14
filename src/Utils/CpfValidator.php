<?php 

/** 
 * Classe para validação de CPF no backend
 
**/

class CpfValidator 
{
    /** 
     * valida um cpf
     * **/


    public static function validar($cpf) 
    {
        //remover tudo que não é dígito
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        //o CPF deve ter 11 dígitos
        if (strlen($cpf) !== 11) {
            return false;
        }

        //verificar sequências inválidas 
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        //calcula primeiro dígito verificador
        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += $cpf[$i] * (10 - $i);
        }
        $resto = $soma % 11;
        $digito1 = $resto < 2 ? 0 : 11 - $resto;

        //verificar o primeiro dígito
        if ($cpf[9] != $digito1) {
            return false;
        }

        //calcula segundo dígito verificador
        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += $cpf[$i] * (11 - $i);
        }
        $resto = $soma % 11;
        $digito2 = $resto < 2 ? 0 : 11 - $resto;

        //verifica segundo dígito
        return $cpf[10] == $digito2;
    }


    /**
     * formata o CPF
     * **/

    public static function formatar($cpf)
    {
        if (!self::validar($cpf)) {
            return '';
        }

        $cpf = preg_replace('/[^0-9]/', '', $cpf);
         return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
    }

    /**
     * Limpa formatação do CPF
     */

    public static function limpar($cpf)
    {
        return preg_replace('/[^0-9]', '', $cpf);
    }
}