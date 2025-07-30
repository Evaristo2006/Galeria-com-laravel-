Olá este projecto é  de uma galeria de imagens com as seguintes funções:

Upload de imagens

Salvamento no banco de dados

Exibição das imagens em uma página (frontend)

Remoção (opcional)

Vou te mostrar passo a passo como fazer isso no Laravel 10:

1. primeiro passo criar o projecto:

composer create-project laravel/laravel galeria

2. Criar Model, Migration e Controller
php artisan make:model Image -m
php artisan make:controller ImageController

3. Migration da Tabela images
 
4. Configurar Upload no Controller

5. Rotas Web

6. Views (Blade Templates)
📁 Criar pasta de views
No resources/views, crie uma pasta gallery e dois arquivos:
