<?php

  abstract class Videos{

    public $codigo,$nombre,$estado;

    public function __construct($codigo,$nombre,$estado){
      $this->codigo = $codigo;
      $this->nombre = $nombre;
      $this->estado = $estado;
    }

    //Equivale a a un imprimir() factura.
    public function __toString(){
      $salida = "Codigo: ".$this->codigo."<br>Nombre: ".$this->nombre.
      "<br>Estado: ".$this->estado;
      return $salida;
    }

    public abstract function costoAlquiler();

  }

  class Peliculas extends Videos{

    public $genero, $director, $categoria;

    public function __construct($codigo,$nombre,$estado,$genero,$director,$categoria){
      parent::__construct($codigo,$nombre,$estado);
      $this->genero = $genero;
      $this->director = $director;
      $this->categoria = $categoria;
    }

    public function __toString(){
      $salida = parent::__toString();
      $salida.="<br>Genero: ".$this->genero."<br>Director: ".$this->director.
      "<br>Categoria: ".$this->categoria;
      return $salida;
    }

    public function costoAlquiler(){
      if ($this->categoria == "Estreno") {
        return 7000;
      }else {
        return 5000;
      }
    }

  }


?>
