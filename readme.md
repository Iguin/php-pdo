# PDO database

Classe php que utiliza o PDO para realizar a conexão com o banco de dados.

## Sumário

- [Atributos](#atributos)
  - [Private](#atributos-privados)
  - [Public](#atributos-publicos)

- [Métodos](#metodos)
  - [Private](#metodos-privados)
  - [Public](#metodos-publicos)

## Atributos

### :closed_lock_with_key: Atributos Privados

#### $dbHost
> Define o host do banco de dados, pode ser alterado diretamente no arquivo ou utilizando o método [setDbHost](#setdbhost)
``` php
  private $dbHost;
```

#### $dbName
> Define o nome do banco de dados, pode ser alterado diretamente no arquivo ou utilizando o método [setDbName](#setdbname)
``` php
  private $dbName;
```

#### $dbName
> Define o charset do banco de dados, seu valor é predefinido como **utf8**. Pode ser alterado diretamente no arquivo ou utilizando o método [setDbCharset](#setdbcharset)
``` php
  private $dbCharset = 'utf8';
```

### :unlock:Atributos Públicos

## Métodos

### Métodos privados

### Métodos públicos