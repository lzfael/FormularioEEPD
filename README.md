# Projeto Formulário Laravel

Este projeto é parte de um trabalho dado pelo professor Jesus Germano, com o objetivo de criar um sistema de cadastro de usuários usando Laravel e MySQL. O sistema permite coletar informações essenciais como nome, CPF, RG, data de expedição, senha e confirmação de senha, e armazená-las de forma segura em um banco de dados.

## Tarefas a Realizar

- **Validação com Regex**: Implementação de uma validação mais robusta, com regex em cada entrada de dados
- **Funcionalidade de Conta**: Implementação de uma funcionalidade para a parte "Já possui uma conta?"

## Tecnologias Utilizadas

- **PHP** - Linguagem de programação usada para o desenvolvimento do back-end.
- **Laravel** (versão 11) - Framework para construção do back-end e manipulação de dados.
- **MySQL** - Banco de dados relacional usado para armazenar os cadastros de usuários.
- **phpMyAdmin** - Ferramenta para gerenciar visualmente o banco de dados.
- **HTML/CSS** - Será usado para criar o front-end do sistema.
- **Figma** - Ferramenta de design usada para criar o layout da landing page e interface do usuário.

## Como Rodar o Projeto


### Pré-requisitos
Antes de iniciar, você precisará dos seguintes softwares instalados:

- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) ou [WAMP/XAMPP](https://www.apachefriends.org/index.html)
- [Node.js](https://nodejs.org/) 

### Instruções

1. Clone o repositório:
   ```bash
   git clone https://github.com/lzfael/FormularioEEPD.git
2. Instale as dependências do projeto:
    ```bash
   composer install

3. Configure o arquivo .env com suas credenciais de banco de dados e outras configurações necessárias.

4. Execute as migrações:
   ```bash
    php artisan migrate
5. Inicie o servidor:
    ```bash
    php artisan serve

6. Acesse o projeto em http://localhost:8000 e teste o formulário.
