<p align="center">
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
  <a href="#-como-rodar">Como rodar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-rotas">Rotas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-como-contribuir">Como contribuir</a>&nbsp;&nbsp;&nbsp;
 </p>

<br>

# Criando um site administravel com PHP

## 🚀 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [PHP](https://www.php.net/) - 7.2
- [Composer](https://getcomposer.org/) - v1.8.4
- [MySQL](https://www.mysql.com/) - 5.7.24-winx64
- [Laragon](https://laragon.org/) 2.4.35

## 💻 Projeto

Projeto de um site administrável com PHP.

Esse é um projeto pratico da [School of Net](https://www.schoolofnet.com/projeto-pratico/php/php-7/criando-um-site-administravel-com-php/).

## 👩🏿‍💻 Rotas

- **`GET users`**: Listar usuários;

Retorno
```
[
  {
    "id": "1",
    "name": "Teste 1"
  },
  {
    "id": "2",
    "name": "Teste 2"
  }
]
```

- **`GET users/($id)`**: Exibir usuário;

Retorno
```
{
    "id": "1",
    "name": "Teste 1"
}
```

- **`POST users`**: Criar usuário;
Envio
```
{
    "name": "Teste 3"
}

```
Retorno
```
{
    "id": "3",
    "name": "Teste 3"
}
```

- **`PUT users/($id)`**: Alterar usuário;
Envio
```
{
    "name": "Teste 3 Alterado"
}
```
Retorno
```
{
    "id": "3",
    "name": "Teste 3 Alterado"
}
```

- **`DELETE users/($id)`**: Excluir usuário;

## 🚀 Como Rodar

- Clone o projeto.
- Na raiz do projeto rode "composer install".
- Rodar o MySQL. 
- Criar um banco com o nome pp_son1.
- composer server.
- acesse http://localhost:80


Script do tabela.
```
CREATE TABLE `users` (
	`id` BIGINT(20) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(150) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
```


## Licença

O framework Laravel e esse projeto usam a linceça [MIT license](https://opensource.org/licenses/MIT).
