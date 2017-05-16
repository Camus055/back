<?php

class motocicletas
{
	protected $marca;
	protected $color;	
	protected $potencia;
	protected $stock;
    

	

	function __construct($marca,$color,$potencia,$stock)
	{
	    $this->marca=$marca;
	    $this->color=$color;
        $this->potencia=$potencia;
        $this->stock=$stock;
	}

	public function surtir($marca,$stock)
	{
		if($this->stock<=0) {
			$this->setStock($stock);
			$this->setMarca($marca);
				
		}
	}
	
	function Vender($stockPiezas=1)
	{
	    if($this->stock<=0) {
	    	echo "No hay motos para vender <br>";
            } elseif($stockPiezas>$this->stock) {
	    	$this->stock=0;
	    } else {
	    	$this->stock-=$stockPiezas;
	    }	  
	    
	}
	
	function getStatus()
	{
	    return "Quedan {$this->stock} motos de la marca {$this->marca} en esta sucursal para vender\n <br>";
	}

		function getSurtir()
	{
	    return "Se surtieron {$this->stock} motos de la marca {$this->marca} en esta sucursal para vender\n <br>";
	}
	
	
	public function getStock()
	{
	   return $this->stock;
	}

	public function setStock($stock)
	{
	  $this->stock=$stock;	
	}

	public function setMarca($marca)
	{
		$this->marca=$marca;		
	}
	
	function __destruct()
	{
	
	}

}


$vendedor1=new motocicletas("susuky","roja","160 Km",150);

$vendedor2=new motocicletas("BMW","Blanca","200 Km",0);

$vendedor3=new motocicletas ("Kawasaky","Negra","260 Km", 1550);


echo ucwords("Vendedor 1 <br>");
$vendedor1->Vender();
echo $vendedor1->getStatus();



echo ucwords("Vendedor 2 <br> ");
$vendedor2->Vender();
echo $vendedor2->getStatus();

echo ucwords("Vendedor 3 <br> ");
$vendedor3->Vender();
echo $vendedor3->getStatus();

echo ucwords("Vendedor 2 <br> ");
$vendedor2->surtir("BMW",2);
echo $vendedor2->getSurtir();

echo ucwords("Vendedor 2 <br> ");
$vendedor2->Vender();
echo $vendedor2->getStatus();











