# employeeManagement
 employee management system


## Descrição

Este é um sistema de gerenciamento de funcionários desenvolvido usando PHP, Laravel e MySQL. O sistema permite a criação de funcionários, atribuição de departamentos, definição de horários de trabalho e exibição de informações detalhadas sobre cada funcionário.

## Tecnologias Utilizadas

- PHP 8.2
- Laravel 11.0
- MySQL
- Composer (para gerenciamento de dependências)

## Funcionalidades

1. **Criação de Funcionários:**
   - Nome
   - E-mail
   - CPF
   - Idade
   - Departamento de Trabalho

2. **Atribuição de Departamentos:**
   - Criação de novos departamentos dinâmicos
   - Vínculo de departamentos com funcionários existentes

3. **Jornada de Trabalho:**
   - Lista de trabalho para os próximos 30 dias, apenas horas úteis (9h às 12h e 13h às 18h)

## Requisitos

- PHP 8.2 ou superior
- Composer
- MySQL

## Instalação

1. Clone o repositório para a sua máquina local:
   git clone <URL_DO_REPOSITORIO>
   cd <NOME_DO_DIRETORIO>

2. Instale as dependências do projeto:

    composer install

3. Copie o arquivo .env.example para .env e configure o banco de dados:

    cp .env.example .env

4. Gere a chave da aplicação:

    php artisan key:generate

5. Execute as migrações para criar as tabelas no banco de dados:

    php artisan migrate

## Uso

1. Inicie o servidor de desenvolvimento:

    php artisan serve

2. Acesse a aplicação em seu navegador:

    http://127.0.0.1:8000
    

## Estrutura do Código

1. Controladores

    EmployeeController.php: Controlador responsável por gerenciar funcionários.
    DepartmentController.php: Controlador responsável por gerenciar departamentos.
    WorkScheduleController.php: Controlador responsável por exibir os horários de trabalho.

2. Modelos

    Employee.php: Modelo do funcionário com relações para Department e WorkSchedule.
    Department.php: Modelo do departamento.
    WorkSchedule.php: Modelo do horário de trabalho.

3. Views

    resources/views/layout.blade.php: Layout principal da aplicação.
    resources/views/employees/index.blade.php: Página de listagem de funcionários.
    resources/views/employees/create.blade.php: Página de criação de funcionários.
    resources/views/departments/index.blade.php: Página de listagem de departamentos.
    resources/views/departments/create.blade.php: Página de criação de departamentos.
    resources/views/work-schedules/index.blade.php: Página de exibição dos horários de trabalho.

4. Rotas

As rotas estão definidas no arquivo routes/web.php e incluem as seguintes:
    GET /: Rota principal que direciona para a listagem de funcionários.
    GET /employees: Listagem de funcionários.
    GET /employees/create: Página de criação de funcionários.
    POST /employees: Armazena um novo funcionário.
    GET /departments: Listagem de departamentos.
    GET /departments/create: Página de criação de departamentos.
    POST /departments: Armazena um novo departamento.
    GET /work-schedules: Exibe os horários de trabalho.


## Geral

    Esse `README.md` fornece uma visão geral do projeto, como configurá-lo e usá-lo, além de descrever a estrutura do código e as funcionalidades implementadas. Adapte o URL do repositório e qualquer outra informação específica conforme necessário.
