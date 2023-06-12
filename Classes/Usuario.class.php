<?php

class Usuario extends Crud
{
    protected $tabela = 'Usuario';
    private $idUse;
    private $nomeUse;
    private $enderecoUse;
    private $bairroUse;
    private $cidadeUse;
    private $estadoUse;
    private $cepUse;
    private $nascimentoUse;
    private $emailUse;
    private $celularUse;
    private $fotoUse;


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
    public function getEnderecoUse()
    {
        return $this->enderecoUse;
    }

    /**
     * @param mixed $enderecoUse 
     * @return self
     */
    public function setEnderecoUse($enderecoUse): self
    {
        $this->enderecoUse = $enderecoUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBairroUse()
    {
        return $this->bairroUse;
    }

    /**
     * @param mixed $bairroUse 
     * @return self
     */
    public function setBairroUse($bairroUse): self
    {
        $this->bairroUse = $bairroUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidadeUse()
    {
        return $this->cidadeUse;
    }

    /**
     * @param mixed $cidadeUse 
     * @return self
     */
    public function setCidadeUse($cidadeUse): self
    {
        $this->cidadeUse = $cidadeUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstadoUse()
    {
        return $this->estadoUse;
    }

    /**
     * @param mixed $estadoUse 
     * @return self
     */
    public function setEstadoUse($estadoUse): self
    {
        $this->estadoUse = $estadoUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCepUse()
    {
        return $this->cepUse;
    }

    /**
     * @param mixed $cepUse 
     * @return self
     */
    public function setCepUse($cepUse): self
    {
        $this->cepUse = $cepUse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNascimentoUse()
    {
        return $this->nascimentoUse;
    }

    /**
     * @param mixed $nascimentoUse 
     * @return self
     */
    public function setNascimentoUse($nascimentoUse): self
    {
        $this->nascimentoUse = $nascimentoUse;
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
    public function getFotoUse()
    {
        return $this->fotoUse;
    }

    /**
     * @param mixed $fotoUse 
     * @return self
     */
    public function setFotoUse($fotoUse): self
    {
        $this->fotoUse = $fotoUse;
        return $this;
    }
    /**
     * @return mixed
     */
    public function inserir()
    {
        $nome = $this->getNomeUse();
        $endereco = $this->getEnderecoUse();
        $bairro = $this->getBairroUse();
        $cidade = $this->getCidadeUse();
        $estado = $this->getEstadoUse();
        $cep = $this->getCepUse();
        $nascimento = $this->getNascimentoUse();
        $email = $this->getEmailUse();
        $celular = $this->getCelularUse();
        $foto = $this->getFotoUse();

        $sqllnserir = "INSERT INTO $this->tabela (nomeUse, enderecoUse, bairroUse,cidadeUse, estadoUse, cepUse,  nascimentoUse, emailUse, celularUse, fotoUse)
        VALUES ('$nome', '$endereco', '$bairro', '$cidade', '$estado','$cep', '$nascimento', '$email', '$celular', '$foto')";
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
        $endereco = $this->getEnderecoUse();
        $bairro = $this->getBairroUse();
        $cidade = $this->getCidadeUse();
        $estado = $this->getEstadoUse();
        $cep = $this->getCepUse();
        $nascimento = $this->getNascimentoUse();
        $email = $this->getEmailUse();
        $celular = $this->getCelularUse();
        $foto = $this->getFotoUse();
        
        $sqlAtualizar = "UPDATE $this->tabela SET nomeUse ='$nome', enderecoUse = '$endereco', bairroUse = '$bairro', cidadeUse = '$cidade', estadoUse = '$estado', cepUse = '$cep', nascimentoUse = '$nascimento', emailUse = '$email', celularUse = '$celular', fotoUse = '$foto' where idUse = '$id'";

        if (Conexao::query($sqlAtualizar)) {
            header('location: Usuarios.php');
        }
    }

}