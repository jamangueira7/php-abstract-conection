<p align="center">
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
  <a href="#-como-rodar">Como rodar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-rotas">Rotas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-como-contribuir">Como contribuir</a>&nbsp;&nbsp;&nbsp;
 </p>

<br>

# Conexão com o banco de dados usando abstração

## 🚀 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [PHP](https://www.php.net/) - 8.1
- [Composer](https://getcomposer.org/) - v1.8.4
- [MariaDB](https://mariadb.org/) - 10.4.24
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)

## 💻 Projeto

Projeto para persistir uma entidade no banco usando abstração.

## 🚀 Como Rodar

- Clone o projeto.
- Na raiz do projeto rode "composer install".
- Rodar o MySQL. 
- Criar um banco com o nome "test_conn".
- composer server.
- acesse http://localhost:8080


Script do tabela.
```
CREATE TABLE `users` (
	`id` BIGINT(20) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL DEFAULT NULL,
	`last_name` VARCHAR(50) NULL DEFAULT NULL,
	`old` INT NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
```


## Licença

O framework Laravel e esse projeto usam a linceça [MIT license](https://opensource.org/licenses/MIT).
