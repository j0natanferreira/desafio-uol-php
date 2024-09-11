<?php
    include_once("connection.php");
    include_once("base_url.php");

    $data = $_POST;

    // MODIFICAÇÃO NO BANCO
    if (!empty($data)) {

        // CRIAR CLIENTES
        if($data["type"] === "create") {

            $name = $data["name"];
            $email = $data["email"];
            $cpf = $data["cpf"];
            $phone = $data["phone"];
            $status = $data["status"];

            $query = "INSERT INTO clients (name, email, cpf, phone, status) VALUES (:name, :email, :cpf, :phone, :status)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":status", $status);
            
            try {
                $stmt->execute();
                
            }catch(PDOException $e) {
                // ERRO DE CONEXÃO
                $error = $e->getMessage();
                echo "Erro: " . $error;
            }
        }else if($data["type"] === "edit"){

            $name = $data["name"];
            $email = $data["email"];
            $cpf = $data["cpf"];
            $phone = $data["phone"];
            $status = $data["status"];
            $id = $data["id"];

            $query = "UPDATE clients 
                      SET name = :name, email = :email, cpf = :cpf, phone = :phone, status = :status 
                      WHERE id = :id";
            
            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":status", $status);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                echo "Erro: " . $error;
            }
        }else if($data["type"] === "delete") {
            $id = $data["id"];

            $query = "DELETE FROM clients WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                echo "Erro: " . $error;
            }
        }

        // Redirect HOME
        header("Location:" .$BASE_URL . "../index.php");

    // SELEÇÃO DE DADOS
    }else {
        
        $id;

        if(!empty($_GET)) {
            $id = $_GET["id"];
        }
    
        // Retorna o dado de um contato
        if(!empty($id)){
            $query = "SELECT * FROM clients WHERE id = :id";
    
            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(":id", $id);
    
            $stmt->execute();
    
            $client = $stmt->fetch();
        }else {
            // RETORNA TODOS OS CONTATOS
            $clients = [];

            $query = "SELECT * FROM clients";

            $stmt = $conn->prepare($query);

            $stmt->execute();

            $clients = $stmt->fetchAll();
        }
    }

    // FECHAR CONEXÃO
    $conn = null;
?>