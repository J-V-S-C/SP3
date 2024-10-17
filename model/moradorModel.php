<?php
class Morador {

    private $db;   

    private function reabrirConexao() {

        if ($this->db->connect_errno) {
            $this->db = abrirConexao(); 
        }
    }

    public function __construct($db){
        $this->db = $db;
    }

    public function BuscarTodos(){
        $this->reabrirConexao();
        $query = 'SELECT * FROM Morador';
        return $this->db->query($query);
    }
    
    public function InserirDados($dados){
        $this->reabrirConexao();
        $stmt = $this->db->prepare('INSERT INTO Morador(Telefone, Nome, NumeroApartamento) VALUES (?, ?, ?)');
        $stmt->bind_param('ssi', $dados['fone'], $dados['nome'], $dados['numeroAp']);  
        return $stmt->execute();    
    }

    public function AtualizarDados($dados){
        $this->reabrirConexao();
        $stmt = $this->db->prepare('UPDATE Morador SET Telefone = ?, Nome = ? WHERE NumeroApartamento = ?');
        $stmt->bind_param('ssi', $dados['fone'], $dados['nome'], $dados['numeroAp']);
        return $stmt->execute();
    }

    public function RemoverDados($numeroAp){
        $this->reabrirConexao();
        $stmt = $this->db->prepare('DELETE FROM Morador WHERE NumeroApartamento = ?');
        $stmt->bind_param('i', $numeroAp);
        return $stmt->execute();
    }

    public function FecharConexao(){
        $this->db->close();
    }
}   
?>
