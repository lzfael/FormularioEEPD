# Projeto Formulário Laravel

Este repositório contém o projeto de um sistema de cadastro de usuário desenvolvido com o framework Laravel, com foco no back-end. O projeto ainda está em desenvolvimento e inclui várias fases de construção, que serão detalhadas abaixo.

## Objetivo do Projeto

O objetivo deste projeto é criar um sistema funcional de cadastro de usuário que:
- Coleta dados essenciais como nome, CPF, RG, data de expedição, senha e confirmação de senha.
- Armazena essas informações em um banco de dados MySQL.
- Valida os dados de entrada tanto no back-end quanto, futuramente, no front-end.

## Fases do Desenvolvimento

### 1. Configuração Inicial (Concluída)
- Instalação do Laravel e configuração do ambiente de desenvolvimento.
- Conexão com o banco de dados MySQL via phpMyAdmin.
- Criação das migrações para o banco de dados e dos modelos no Laravel.
- Implementação das regras de validação no controlador para garantir a integridade dos dados inseridos.

### 2. Validação e Cadastro de Usuário (Concluída)
- Configuração do formulário de cadastro com validação de campos no back-end.
- Testes realizados para garantir que os dados sejam armazenados corretamente no banco de dados.
- Ajustes no modelo para permitir mass assignment e proteção de dados sensíveis.

### 3. Front-end e Estilização (Em Progresso)
- **Próximo passo**: Aplicar o front-end para melhorar a interface do usuário.
    - Vou utilizar o CSS e frameworks como Bootstrap (ou Tailwind) para estilizar o formulário e garantir uma boa experiência de usuário.
    - Planejo criar uma landing page, já desenhada no Figma, que será integrada com o sistema de cadastro. Esta página terá um layout responsivo e será o ponto de entrada principal para os usuários do sistema.

### 4. Integração da Landing Page (Pendente)
- A landing page foi criada no Figma e será implementada na fase final. Ela terá um design moderno, atraente e acessível.
- O foco será em criar uma interface que se comunique bem com o back-end do Laravel e que ofereça uma experiência amigável ao usuário.

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
