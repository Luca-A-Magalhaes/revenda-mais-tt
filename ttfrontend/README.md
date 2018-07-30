# TTFrontend

> Projeto para pesquisa de Tweets na API do TTBackend

A aplicação possui duas telas:

* Tela inicial com a lista das ultimas pesquisas feitas e dos Trending Topics, com a opção de buscar usando uma dessas consultas ou iniciar uma nova consulta

* Tela de consulta com o resultado da consulta e opção de realizar uma nova consulta

## Instalacao e configuracao

Antes de instalar o projeto, é necessário alterar o apontamento da API do TTBackend no arquivo:

```
src/api.js
```
Uma vez alterado o apontamento, basta executar os seguintes comandos:

``` bash
# Para instalar dependencias
npm install

# Para iniciar a aplicacao em 127.0.0.1:8080
npm run dev

# Para gerar a build minificada para producao
npm run build
```
