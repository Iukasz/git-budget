<?php
Class Connection {
    private  $server = "mysql:host=localhost; dbname=budgetdb";
    private  $userDb = "registerUser";
    private  $passDb = "registerpwd";
    protected $con;

    public function openConnection()
    {
        try
        {
            $this->con = new PDO($this->server, $this->userDb,$this->passDb);
            return $this->con;
        }
        catch (PDOException $e)
        {
            echo "Błąd połączenia z bazą" . $e->getMessage();
        }
    }
    public function closeConnection() {
        $this->con = null;
    }
}
?>
