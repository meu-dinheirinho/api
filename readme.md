# Meu dinheirinho - SERVER

Este projeto consiste em um banco de dados MariaDB. 
O arquivo Makefile foi criado para facilitar a execução do projeto.

## Pré-requisitos

Antes de rodar o projeto, certifique-se de ter o Docker e o docker-compose instalados em sua máquina. Você pode baixar o Docker [aqui](https://www.docker.com/get-started) e o docker-compose [aqui](https://docs.docker.com/compose/install/).

## Como rodar o projeto com o arquivo Makefile

Para rodar o projeto usando o arquivo Makefile, siga os seguintes passos:

1. Clone este repositório em sua máquina.

```
https://github.com/meu-dinheirinho/api.git
```

2. Abra o terminal na pasta raiz do projeto.

3. Execute o seguinte comando para instalar as dependências do projeto:

```
make install
```

4. Execute o seguinte comando para iniciar os contêineres do Docker:

```
make run
```

Isso iniciará os contêineres do MySQL e do php-server.

5. Abra o navegador e acesse a URL http://localhost:8080. Você será direcionado para a interface padrao do laravel.

6. Agora você pode gerenciar o banco de dados MySQL por qualquer SGBD que preferir como por exemplo o [DBeaver](https://dbeaver.io/download/). 
   
7. Para conectar basta apenas informar o host e a porta do mariaDB assim como nome do banco usuário e senha, por exemplo.

server_host: localhost
port: 3306
database: db
user name: user
senha: 123

## Parando os conteiners

Para parar e remover os contêineres, execute o seguinte comando:

```
make stop
```

Para reiniciar os contêineres, execute o seguinte comando:

```
make restart
```

Para apenas parar os contêineres, execute o seguinte comando:

```
make kill
```

## Executando sem makefile

Instale as dependências do Node.js.

```
npm install
```

### Executando

execute o build da aplicação.

```
docker-compose build
```


Inicie a aplicação com o Docker.

```
docker-compose up -d
```

Acesse a aplicação em seu navegador em `http://localhost:3000`.

### Parando

Pare a aplicação com o Docker.

```
docker-compose stop
```

### Reiniciando

Reinicie a aplicação com o Docker.

```
docker-compose restart
```

### Finalizando

Encerre todos os containers Docker em execução.

```
docker-compose down
```

## Conclusão

Agora você tem o projeto rodando em sua máquina. Lembre-se de que, sempre que quiser iniciar ou parar os contêineres, você deve estar no diretório raiz do projeto e usar o arquivo Makefile para executar esses comandos de forma mais simples.
