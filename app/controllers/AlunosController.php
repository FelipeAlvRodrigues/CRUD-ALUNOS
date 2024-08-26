<?php
require_once "../models/Aluno.php";
require_once "../config/Database.php";
class AlunoController
{
  private $aluno;

  public function __construct()
  {
    $database = new Database();
    $db = $database->connect();
    $this->aluno = new Aluno($db);
  }
  public function index(){}
  public function create(){}
  public function edit(){}
  public function update(){}
  public function delete(){}
  public function toggleStatus(){}
}
