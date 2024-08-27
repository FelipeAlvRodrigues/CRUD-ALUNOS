<?php
require_once "./app/config/Database.php";
$database = new Database();
$db = $database->connect();

class Aluno
{
  public $id;
  public $nome;
  public $email;
  public $telefone;
  public $mensalidade;
  public $senha;
  public $situacao;
  public $observacao;
  private $conn;
  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function create() {}
  public function read() {}
  public function update() {}
  public function delete() {}
  public function toggleStatus() {}
}
