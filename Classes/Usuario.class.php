<?php

class Usuario extends Crud
{
    protected $tabela = 'Usuario';
    private $idUse;
    private $nomeUse;
    private $emailUse;
    private $celularUse;
    private $usuarioUse;
    private $senhaUse;


    /**
     * @return mixed
     */
    public function getIdUse()
    {
        return $this->idUse;
    }

    /**
     * @param mixed $idUse 
     * @return self
     */
    public function setIdUse($idUse): self
    {
        $this->idUse = $idUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeUse()
    {
        return $this->nomeUse;
    }

    /**
     * @param mixed $nomeUse 
     * @return self
     */
    public function setNomeUse($nomeUse): self
    {
        $this->nomeUse = $nomeUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailUse()
    {
        return $this->emailUse;
    }

    /**
     * @param mixed $emaiUse 
     * @return self
     */
    public function setEmailUse($emaiUse): self
    {
        $this->emailUse = $emaiUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCelularUse()
    {
        return $this->celularUse;
    }

    /**
     * @param mixed $celularUse 
     * @return self
     */
    public function setCelularUse($celularUse): self
    {
        $this->celularUse = $celularUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuarioUse()
    {
        return $this->usuarioUse;
    }

    /**
     * @param mixed $usuarioUse 
     * @return self
     */
    public function usuarioUse($usuarioUse): self
    {
        $this->usuarioUse = $usuarioUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenhaUse()
    {
        return $this->senhaUse;
    }

    /**
     * @param mixed $senhaUse 
     * @return self
     */
    public function senhaUse($senhaUse): self
    {
        $this->senhaUse = $senhaUse;
        return $this;
    }
    /**
     * @return mixed
     */
    public function inserir()
    {
        $nome = $this->getNomeUse();
        $email = $this->getEmailUse();
        $celular = $this->getCelularUse();
        $usuario = $this->getUsuarioUse();
        $senha = $this->getSenhaUse();


        $sqllnserir = "INSERT INTO $this->tabela (nomeUse, emailUse, celularUse, usuarioUse, senhaUse)
        VALUES ('$nome', '$email', '$celular', '$usuario', '$senha')";
        if (Conexao::query($sqllnserir)) {
            header('location: Usuarios.php');
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
        $nome = $this->getNomeUse();

        $email = $this->getEmailUse();
        $celular = $this->getCelularUse();
        $usuario = $this->getUsuarioUse();
        $senha = $this->getSenhaUse();
        
        $sqlAtualizar = "UPDATE $this->tabela SET nomeUse ='$nome',  emailUse = '$email', celularUse = '$celular', senhaUse = '$senha', usuarioUse = '$usuario' where idUse = '$id'";

        if (Conexao::query($sqlAtualizar)) {
            header('location: Usuarios.php');
        }

        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
    
        }
   
    }



}