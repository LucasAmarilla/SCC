<?php

namespace App\Entity;

use App\Db\database;

class Movimento
{
    //Movimentos iguais ao banco
    public $id;
    public $data;
    public $tipo;
    public $motivo;
    public $moeda;
    public $valor;

    public function cadastrar()
    {
        //inserir no banco
        $obDatabase = new Database('movimentos_' . $_SESSION['caixa']);
        $this->id = $obDatabase->insert([
            'data' => $this->data,
            'tipo' => $this->tipo,
            'motivo' => $this->motivo,
            'moeda' => $this->moeda,
            'valor' => $this->valor

        ]);

        //retornar sucesso
        return true;
    }


   //consulta de dados 
   public function getMovimentos($where = null, $order = null, $limit = null)
   {
       //return (new Database)
   } 
}
