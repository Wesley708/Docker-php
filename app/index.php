<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Exemplo</title>
</head>
<body>
    <h1>Tabela de Exemplo</h1>
    <table>
        <?php
        $pdo = new PDO('mysql:host=mysql;dbname=test', 'root', 'password');
        $pdo->exec("CREATE TABLE IF NOT EXISTS usuarios(id int AUTO_INCREMENT PRIMARY KEY, nome varchar(255), email varchar(255))");
        $pdo->exec("INSERT INTO usuarios(id, nome, email) VALUES (null, 'teste', 'teste@teste.com')");
        ?>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

        <?php
        $stmt = $pdo->query('SELECT * FROM usuarios');
        while ($row = $stmt->fetch()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['email']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
