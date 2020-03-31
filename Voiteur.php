<?php
class Voiteur{
public function __construct(string $color, int $nbSeats, int $energyLevel)
{
    $this->color = $color;
    $this->nbSeats=$nbSeats;
    $this->energyLevel=$energyLevel;
}

      /**
      * @var integer
      */
    private $nbWheels;
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

      /**
      * @var integer
      */
    private $currentSpeed;
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
     /**
       * @var string
       */
    private $color;
    public function getColor(): string
    {
        return $this->color;
    }



      /**
      * @var integer
      */
    private $nbSeats;
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
     /**
       * @var string
       */
    private $energy;
    public function getEnergy(): string
    {
        return $this->energy;
    }

      /**
      * @var integer
      */
    private $energyLevel;
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function dump()
    {
        var_dump($this);
    
    }
    public function forward()
    {
        $this->currentSpeed ;

        return "Go !";
    }

  public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}


}