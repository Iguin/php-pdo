# PDO MySQL

Classe php que utiliza o PDO para realizar a conexão com o banco de dados.

```php
$db = new PDODatabase(
  $dbUser, // Usuário
  $dbPass, // Senha
  $dbHost, // Host
  $dbName, // Nome do banco de dados
  $dbCharset = 'utf8' // Charset do banco
  $dbOptions = array() // Opções
);
```

## Sumário

- [Atributos](#atributos)

  - [Private](#closed_lock_with_key-atributos-privados)

- [Métodos](#metodos)
  - [Private](#métodos-privados)
  - [Public](#métodos-públicos)

## Atributos

### :closed_lock_with_key: Atributos Privados

#### $conn

> **_PDO_** <br>
> Conexão com o banco, inicializado no método construtor.

```php
  private $conn;
```

#### $stmt

> **_PDOStatement_** <br>
> Declaração da conexão

```php
  private $stmt;
```

#### $query

> **_string_** <br>
> Query SQL que será utilizada, definida pelo método [setQuery( $query )](#setquery-string-query-)

```php
  private $query;
```

#### $params

> **_array_** <br>
> Parâmetros da query, definida pelo método [setParams( $params )](#setparams-array-query-)

```php
  private $query;
```

## Métodos

### Métodos privados

### Métodos públicos

#### setQuery( _string_ $query )

> Define a query que será realizada pelo método [execute()](#execute)

```php
  $db->setQuery("...");
```

#### setParams( _array_ $query )

> Define os parâmetros da query, utilizando _chave_ e _valor_

```php
  $db->setQuery("SELECT * FROM `database` WHERE `name` = :name AND `last_name` = :last_name");

  $db->setParams([
    ":name"       => "Igor",
    ":last_name"  => "Horta",
  ]);
```
