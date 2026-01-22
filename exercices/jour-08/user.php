<?php
    class USER {

public string $name;
 public string $email;
 public int $dateRegistration;


        public function __construct(string $name, string $email, int $dateRegistration) {

            $this->name = $name;
            $this->email = $email;
            $this->dateRegistration = $dateRegistration ;

        }


    }



class DateComparer
{
    public DateTime $date;

    public function __construct(string $date)
    {
        $this->date = new DateTime($date);
    }

    public function comparer(): string
    {
        $now = new DateTime();
        $diff = $now->diff($this->date);
        if ($now)

        return $diff->invert
            ? " Date passée "
            : " Date future ";


    }
 
public function isNewMember() : bool
{
    if( $this->date->format("") == "")

}

}
    


$date= new DateComparer(" 2025-08-21");
echo $date->comparer();

$membre = new DateComparer("");
echo $membre->comparer();











 