<?php

class Especialidade extends Crud
{
    protected $tabela = 'Especialidade';
    private $idEsp;
    private $NomeEsp;


    /**
     * @return mixed
     */
    public function getIdEsp()
    {
        return $this->idEsp;
    }

    /**
     * @param mixed $idEsp 
     * @return self
     */
    public function setIdPac($idEsp): self
    {
        $this->idEsp = $idEsp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeEsp()
    {
        return $this->NomeEsp;
    }

    /**
     * @param mixed $NomeEsp
     * @return self
     */
    public function setNomeEsp($nomeEsp): self
    {
        $this->NomeEsp = $nomeEsp;
        return $this;
    }

    public function inserir()
    {
        $nome = $this->getNomeEsp();
       
        $sqllnserir = "INSERT INTO $this->tabela (NomeEsp)
        VALUES ('$nome')";
        if (Conexao::query($sqllnserir)) {
            header('location: Especialidade.php');
        }


       
    }

    /**
     *
     * @param mixed $campo
     * @param mixed $id
     * @return mixed
     */
    public function atualizar($campo, $id)
    { 
        $nome = $this->getNomeEsp();
        $sqlAtualizar = "UPDATE paciente (nomeEsp)
            VALUES
            ('$nome')";
        if (Cenexao::query($sqlAtualizar)) {
            header('location: Especialidade.php');
        }
    }

}