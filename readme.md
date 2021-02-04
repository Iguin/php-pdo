# PDO MySQL

Classe php que utiliza o PDO para realizar a conexão com o banco de dados.

## Sumário

- [Atributos](#atributos)
  - [Private](#closed_lock_with_key-atributos-privados)
  - [Public](#unlock-atributos-publicos)

- [Métodos](#metodos)
  - [Private](#metodos-privados)
  - [Public](#metodos-publicos)

```php
$db = new PDODatabase(
  $dbUser, // Usuário
  $dbPass, // Senha
  $dbHost, // Host
  $dbName, // Nome do banco de dados
  $dbCharset = 'utf8' // Charset do banco
);
```
## Atributos

### :closed_lock_with_key: Atributos Privados

#### $conn
> ***PDO*** <br>
Conexão com o banco, inicializado no método construtor.
``` php
  private $conn;
```

### :unlock: Atributos Públicos

## Métodos

### Métodos privados

### Métodos públicos