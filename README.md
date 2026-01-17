# Task API – Laravel 12 + Sanctum

API REST para la gestión de tareas con autenticación basada en **Laravel Sanctum**.  
Permite crear, listar, actualizar y eliminar tareas, Utiliza **PostgreSQL** como motor de base de datos.

## Requisitos

- PHP 8.2+
- Composer
- PostgreSQL
- Laravel 12

## Instalación

### 1. Clonar el repositorio:

```bash
git clone https://github.com/tu-usuario/task-api.git
cd task-api

### 2. Instalar dependencias
``` composer install

### 3. Copiar archivo de entorno

```bash
cp .env.example .env

### 4. Generar la key
```bash
php artisan key:generate

### 5. Configurar PostgreSQL en .env
```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=task_api
DB_USERNAME=postgres
DB_PASSWORD=tu_password

### 6. Ejecutar migraciones
```bash
php artisan migrate

### 7. Iniciar el servidor
```bash
php artisan serve
