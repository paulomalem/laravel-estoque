# laravel-estoque
Projeto Web simples de controle de estoque, utilizando Framework Laravel(PHP) e testando Knockout JS.


Plano de Implantação	

Configuração do ambiente:

1 – O projeto deve ser implementado em um servidor Apache com PHP .
1.1 – Como requisito para executar projetos em Laravel, é preciso ter instalado o composer para trabalhar com as dependências.
Configuração do Banco de Dados

2 -  Para garantir a persistência dos dados, foi utilizado banco de dados MySQL.
2.1 – Após configurado as etapas anteriores, devemos criar o banco de dados, pode-se criar o banco com o nome de “db_estoque” para não precisar configurar posteriormente.
2.2 – Dentro da pasta raiz está o arquivo “db_estoque.sql” o qual é o script do banco, que deve ser importado para o banco de dados criado recentemente e executado.
Configuração no Projeto

3 – Com o banco criado e o script exportado, podemos configurar nosso projeto para acessar o banco de dados. Para configurar o sistema precisamos entrar na pasta raiz do projeto e alterar o arquivo “. env” com os dados corretos da máquina em questão (pode-se ver que o projeto está configurado com o padrão XAMPP, root, sem senha).
3.1 – Para garantir a configuração além do “. env” tem um arquivo de configuração de databases que fica dentro da pasta “laravel-estoque/config/database.php”
Inicializando o Projeto

 4 – Após a configuração do ambiente e as configurações do projeto, basta entrar na pasta raiz do projeto pelo terminal e subir o servidor pelo comando “php artisan serve”, logo o projeto estará na URL: http://localhost:8000
4.1 – Caso de algum erro provavelmente será em relação as dependências, executando o comando “composer update” na pasta raiz do projeto pelo terminal.