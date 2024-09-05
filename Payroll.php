<?php
   

  class Payroll {

	 private string $firstname = "shimenet";
	 private string $lastname = "shimenet";

     private int $prelim = 70;
     private int $midterm = 78;
     private int $endterm = 88;





     pbulic function computeFinalGrade() {
        $ave = $this->prelim + $this->midterm + $this->endterm;
        return $ave / 3;

      }


      public function getCompleteName() : string {
      	  return $this->firstname .??? $this->lastname;

      }
        
      public function displayGrade() : string {
      	  return number_format($this->cmputeFinalGrades(),2);
      }






  }

  $Payroll = new StudentGrade();

  echo "Student Name: ". $studentGrade->getcompleteName() . "<br/>";
  echo "Final Grade: " . $studentGrade->computeFinalGrade();