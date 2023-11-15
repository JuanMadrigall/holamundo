<?php
class Database
{
  private $servidorlocal;
  private $basededatos;
  private $usuario;
  private $password;
  private $caracteres;
    function connectar()
      {
      $servidorlocal = 'localhost';
      $basededatos   = 'crud';
      $usuario       = 'root';
      $password      = '';
      $caracteres    = 'utf8';
        try
          {
            $conexion = "mysql:host=".$servidorlocal.";dbname=".$basededatos.";charset=".$caracteres;
            $opciones = [
                          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                          PDO::ATTR_EMULATE_PREPARES  => false
                        ];
            $pdo = new PDO($conexion, $usuario, $password, $opciones);
            return $pdo;
          }
        catch(PDOException $error)
          {
            echo 'Error en la conexion:  '.$error->getMessage();
          }
      }
}
//conexion::connect();
?>

<!-- 
<?php /*
class Database
{
  private $servidorlocal;
  private $basededatos;
  private $usuario;
  private $password;
  private $charset;

  public function __construct()
    {
      $this->servidorlocal = 'localhost';
      $this->basededatos   = 'crud';
      $this->usuario       = 'root';
      $this->clave         = '';
      $this->caracteres    = 'utf8';
    }
    function connectar()
      {
        try
          {
            $conexion = "mysql:host=".$this->servidorlocal.";dbname=".$this->basededatos.";charset=".$this->caracteres;
            $opciones = [
                          PDO::ATTR_ERRMODE         => PDO::ERRMODE_EXCEPTION,
                          PDO::ATTR_EMULATE_PREPARES  => false
                        ];
            $pdo = new PDO($conexion, $this->usuario, $this->password,$opciones);
            return $pdo;
          }
        catch(PDOException $e)
          {
            print_r('Error en la conexion:  '.$e->getMessage());
          }
      }
} */
?> -->