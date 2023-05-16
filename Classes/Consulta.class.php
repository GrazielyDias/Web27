<?php
class Consulta extends Crud
{
protected $tabela ='Consulta';
private $idCon;
private $paciente;
private $medicoCon;
private $dataCon;
private $horaCon;



public function listar($where = null)
{
    $sqlSelect = "select C. *, P.nomePac, M.nomeMed from {$this->tabela} C left join Paciente P on C.pacienteCon = P. idPac lest join Medico M on C.medicoCon = M.idMed $where";
    return Conexao::query($sqlSelect);
}

	/**
	 * @return mixed
	 */
	public function getIdCon() {
		return $this->idCon;
	}
	
	/**
	 * @param mixed $idCon 
	 * @return self
	 */
	public function setIdCon($idCon): self {
		$this->idCon = $idCon;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPaciente() {
		return $this->paciente;
	}
	
	/**
	 * @param mixed $paciente 
	 * @return self
	 */
	public function setPaciente($paciente): self {
		$this->paciente = $paciente;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMedicoCon() {
		return $this->medicoCon;
	}
	
	/**
	 * @param mixed $medicoCon 
	 * @return self
	 */
	public function setMedicoCon($medicoCon): self {
		$this->medicoCon = $medicoCon;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataCon() {
		return $this->dataCon;
	}
	
	/**
	 * @param mixed $dataCon 
	 * @return self
	 */
	public function setDataCon($dataCon): self {
		$this->dataCon = $dataCon;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getHoraCon() {
		return $this->horaCon;
	}
	
	/**
	 * @param mixed $horaCon 
	 * @return self
	 */
	public function setHoraCon($horaCon): self {
		$this->horaCon = $horaCon;
		return $this;
	}

    public function inserir()
    {
        $paciente= $this->getPaciente();
        $medico = $this->getMedicoCon();
        $data = $this->getDataCon();
        $hora = $this->getHoraCon();

        $sqllnserir = "INSERT INTO $this->tabela (pacienteMed,  medicoMed, dataMed, horaMed)
        VALUES ('$paciente', '$medico', '$data', '$hora')";
        if (Conexao::query($sqllnserir)) {
            header('location: Consulta.php');
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
        $paciente= $this->getPaciente();
        $medico = $this->getMedicoCon();
        $data = $this->getDataCon();
        $hora = $this->getHoraCon();
          
        $sqlAtualizar = "UPDATE $this->tabela SET pacienteMed ='$paciente',  medicoMed = '$medico', dataMed = '$data', horaMed = '$hora'  where idCon = '$id'";

        if (Conexao::query($sqlAtualizar)) {
            header('location: Consulta.php');
        }
    }

}