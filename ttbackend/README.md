## TTBackend

> REST API para pesquisa de Tweets

A aplicação possui os seguintes endpoints:

```
// Retorna os Trending Topics atuais
GET http://ttbackend/index.php/api/trending

// Retorna as ultimas consultas realizadas
GET http://ttbackend/index.php/api/recent

// Retorna os tweets que correspondem a consulta
// Parametros: "query": String a ser pesquisada
POST: http://ttbackend/index.php/api/search
```

### Instalacao e configuracao

O projeto usa um banco de dados SQLite por padrão que se econtra no caminho:

> protected/data/testdrive.db

Caso deseje utilizar outro banco de dados é preciso alterar o esquema de banco de dados no arquivo:

> protected/config/main.php

Após configurado o novo banco de dados será necessário criar e popular as tabelas da aplicação, você pode faze-lo executando os comandos

```bash
cd protected
yiic migrate
```

Uma vez configurado e populado o banco de dados, a aplicação deve ser servida através de um web server. O projeto foi desenvolvido utilizando o [Apache](https://httpd.apache.org/docs/trunk/getting-started.html)