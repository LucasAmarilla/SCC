<?php

namespace App\Db;

use \PDO;
use PDOException;

session_start();



class database
{
    //dados_do_banco
    const HOST = '127.0.0.1';
    const USER = 'root';
    const PASS = '';
    const NAME = 'SCC';

    //nome_da_tabela_manipulada
    private $table;
    //var de conexão
    private $connection;

    //construtor
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS); //conexao_com_o_db
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //fatal_se_der_errado
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    //executa dentro do banco de dados
    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    //recebe os dados por array
    public function insert($values)
    {
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        //monta a query
        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

        //executa o insert
        $this->execute($query, array_values($values));

        //retorna o id    
        return $this->connection->lastInsertId();
    }
}
