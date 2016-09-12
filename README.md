# Projeto Rest Pós

Criando uma API Rest utilizando o Mini Framework [Slim](http://www.slimframework.com/).

### Requisitos

* Servidor Local PHP com Mysql
* PHP >=5.5
* Composer Instalado (Para baixar as dependências) [Composer](https://getcomposer.org/)


### Estrutura das Pastas

```
Raiz   
│   .gitignore
│   .htaccess
│   composer.json
│   config.php
│   index.php
│   routes.php
│   README.md
│
└─── app
│   │
│   └─── data
│   │    │   database.sql
│       
│   └─── lib
│   │       └─── model
│   │       │         │Usuario.php
│   │       │         
│   │       └─── util
│   │                │ClasseUtil.php
│   │                
│   └─── routes
│   │    │    default.php
│   │    │    user.php
│  
└─── vendor
    │   autoload.php
    ... Dependências
```

#### Raiz
Nome da pasta do projeto no nosso servidor local (htdocs) no nosso caso
a pasta se chama rest_pos.

#### Vendor
Pasta gerada pelo composer, nela estarão todas as dependencias do projeto, e o arquivo autoload.

#### App > Data
Dump sql do banco de dados.

#### App > Lib -> Model
Nossos Models.

#### App > Lib -> Util
Classes de utilidades em geral que serão necessárias durante o projeto.

#### App > Routes
Aqui ficarão os arquivos de rotas do slim. Separados por tipo de rotas. Ex: Usuarios, Listas, Itens e etc.


### Instalação

* Clone o projeto na raiz do seu servidor (htdocs)
* Dentro da pasta do projeto (rest_pos) rode o comando no terminal: composer install
* Chamar no navegador :  http://localhost/rest_pos
* Deve Aparecer:  {"success":"Parabéns sua aplicação esta funcionando!"}


### Rota de Teste
http://localhost/rest_post/users
Retorna uma lista de usuários.
