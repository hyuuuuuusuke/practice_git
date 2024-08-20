<?php
class School{
  private $year_level;
  private $units;
  private $laboratory;

  public function setValue($year_level, $units, $laboratory){
      $this->year_level = $year_level;
      $this->units = $units;
      $this->laboratory = $laboratory;
  }

  public function computeTotalPrice(){
    if($this->laboratory == "lab"){
        if($this->year_level == "1"){
            return ($this->units * 550) + 3359;

        }elseif($this->year_level == "2"){
          return ($this->units * 630) + 4000;

        }elseif($this->year_level == "3"){
          return ($this->units * 470) + 2890;

        }elseif($this->year_level == "4"){
          return ($this->units * 501) + 3555;
  
        }
    }elseif($this->laboratory == "no_lab"){
        if($this->year_level == "1"){
              return ($this->units * 550);
        
        } elseif($this->year_level == "2"){
          return ($this->units * 630);

        }elseif($this->year_level == "3"){
          return ($this->units * 470);

        }elseif($this->year_level == "4"){
          return ($this->units * 501);

        }
    }
  }
  }
  ?>