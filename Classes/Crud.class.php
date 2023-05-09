<?php
abstract class Crud
{
  protected $tabela;
  public abstract function inserir();
  public abstract function atualizar($campo, $id);

  public function listar($where=null)
  {
    $selctSql = "SELECT * FROM {$this->tabela} $where";
    return Conexao::query($selctSql);
  }
  public function buscar($campo, $id)
  {
    $selctSql = "SELECT * FROM {$this->tabela} WHERE $campo=$id";
    $dados = Conexao::query($selctSql);
    return $dados->fetch_object();
  }
  public function deletar($campo, $id)
  {
    $selctSql = "DELETE FROM {$this->tabela} WHERE $campo = {$id}";
    return Conexao::query($selctSql);
  }

}