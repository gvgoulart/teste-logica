<?php
namespace App;

class ProductStructure
{
    public function make(): array
    {   
        $products = [
            'preto-PP',
            'preto-M',
            'preto-G',
            'preto-GG', 
            'preto-GG',
            'branco-PP',
            'branco-G',
            'vermelho-M',
            'azul-XG',
            'azul-XG',
            'azul-XG', 
            'azul-P',
        ];

        $brands = ['preto', 'branco', 'vermelho', 'azul'];

        $options = ['PP', 'P', 'M', 'G', 'GG', 'XG'];

        foreach($products as $product) {
            $array[] = explode("-",$product);
        }

        $brands_separadas = [];

        foreach($array as $arr) {
            if(in_array($arr[0], $brands)) {
                if(!in_array($arr[0], $brands_separadas)) {
                    $brands_separadas[] = $arr[0];
                }
            }
        }

        $retorno = [];

        foreach($brands_separadas as $brand) {
            foreach($array as $arr) {
                if(in_array($arr[1], $options) && $arr[0] == $brand) {
                    $retorno[] = $arr[1];
                    $estrutura_completa[$brand] = array_count_values($retorno);
                }
            }
            unset($retorno);
        }

        return $estrutura_completa;
    }
}