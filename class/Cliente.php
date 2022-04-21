<?php
class Cliente{
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $senha;

    protected $db;

    public function __construct($id=0,$nome="",$cpf="",$email="",$senha=""){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;

        $this->db = new PDO('mysql:host=localhost;dbname=conveniencia', 'root', '');
    }

    public function setId($id){
        $this->nome = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function adicionar(){
        try{
            $sql = $this->db->prepare("INSERT INTO Clientes(ClienteNome, ClienteCpf, ClienteEmail, ClienteSenha) VALUES(?,?,?,?)");
            $sql->execute([$this->nome,$this->cpf,$this->email,$this->senha]);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

}


?>