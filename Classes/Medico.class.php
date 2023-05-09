<?php

class Medico extends Crud
{
    protected $tabela = 'Medico';
    private $idMed;
    private $nomeMed;
    private $especialidadeMed;
    private $crmMed;  
    private $emailMed;
    private $celularMed;

    /**
     * @return mixed
     */
    public function getIdMed()
    {
        return $this->idMed;
    }

    /**
     * @param mixed $idMed 
     * @return self
     */
    public function setIdMed($idMed): self
    {
        $this->idMed = $idMed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeMed()
    {
        return $this->nomeMed;
    }

    /**
     * @param mixed $nomeMed 
     * @return self
     */
    public function setNomeMed($nomeMed): self
    {
        $this->nomeMed = $nomeMed;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getespecialidadeMed()
    {
        return $this->especialidadeMed;
    }

    /**
     * @param mixed $especialidadeMed 
     * @return self
     */
    public function setespecialidadeMed($especialidadeMed): self
    {
        $this->especialidadeMed = $especialidadeMed;
        return $this;
    }
   
    /**
     * @return mixed
     */
    public function getcrmMed()
    {
        return $this->crmMed;
    }

    /**
     * @param mixed $crmMed 
     * @return self
     */
    public function setcrmMed($crmMed): self
    {
        $this->crmMed = $crmMed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailMed()
    {
        return $this->emailMed;
    }

    /**
     * @param mixed $emaiMed 
     * @return self
     */
    public function setEmailMed($emaiMed): self
    {
        $this->emailMed = $emaiMed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCelularMed()
    {
        return $this->celularMed;
    }

    /**
     * @param mixed $celularMed 
     * @return self
     */
    public function setCelularMed($celularMed): self
    {
        $this->celularMed = $celularMed;
        return $this;
    }

  
    /**
     * @return mixed
     */
    public function inserir()
    {
        $nome = $this->getNomeMed();
        $especialidade = $this->getespecialidadeMed();
        $crm = $this->getcrmMed();
        $email = $this->getEmailMed();
        $celular = $this->getCelularMed();

        $sqllnserir = "INSERT INTO $this->tabela (nomeMed,  especialidadeMed, crmMed, emailMed, celularMed)
        VALUES ('$nome', '$especialidade', '$crm', '$email', '$celular')";
        if (Conexao::query($sqllnserir)) {
            header('location: Medicos.php');
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
        $nome = $this->getNomeMed();
        $especialidade = $this->getespecialidadeMed();
        $crm = $this->getcrmMed();
        $email = $this->getEmailMed();
        $celular = $this->getCelularMed();
          
        $sqlAtualizar = "UPDATE $this->tabela SET nomeMed ='$nome',  especialidadeMed = '$especialidade', crmMed = '$crm', emailMed = '$email', celularMed = '$celular',  where idMed = '$id'";

        if (Conexao::query($sqlAtualizar)) {
            header('location: Medicos.php');
        }
    }

}