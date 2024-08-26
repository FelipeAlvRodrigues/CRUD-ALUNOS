<?php
class Database
{
  private $host = 'localhost';
  private $db_name = 'crud_alunos';
  private $username = 'root';
  private $password = '';
  public $conn;

  public function connect()
  {
    $this->conn = null;
    try {
      $conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}",  $this->username, $this->password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Conexão bem suecedida";
    } catch (PDOException $e) {
      echo "Erro na Conexão: " . $e->getMessage();
    }
    return $this->conn;
  }
}
