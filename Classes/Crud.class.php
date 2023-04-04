nome: Crud.class.php
<?php
 abstract class Crud{
 protected $tabela;
 public abstract function inserir();
 public abstract function atualizar($campo, $id);

 public function listar(){
    $selctSql = "SELECT * FROM {$this->tabela}";
    return Conexao::query($selctSql);
 }
 }