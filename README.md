<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistema De Gestión De Hoteles

Este es un sistema de gestión de hoteles construido con el framework **Laravel** y la suite **Laragon**. El sistema sigue el patrón de diseño **MVC** y permite a los usuarios gestionar hoteles, habitaciones, usuarios e imágenes. El proyecto incluye un sistema de login con diferentes roles de usuario: Administrador, Empleado, Cliente e Invitado.

## Características

- Autenticación de usuarios y gestión de roles
- Panel de administración para gestionar hoteles, habitaciones y usuarios
- Interfaz de cliente para ver detalles de hoteles y habitaciones
- Subida de imágenes para hoteles y habitaciones
- Control de acceso basado en roles:
  - Administrador: Acceso completo para gestionar todos los aspectos del sistema
  - Empleado: Acceso limitado para gestionar detalles de hoteles y habitaciones
  - Cliente: Acceso para ver detalles de hoteles y habitaciones
  - Invitado: Puede navegar por hoteles y habitaciones sin necesidad de iniciar sesión

## Instalación
### Requsitos Previos

- PHP
- Composer
- Node.js
- MySQL o un RDBMS compatible
- Laragon (recomendado para desarrollo local)

> [!WARNING]
> Versiones mínimas requeridas para este proyecto:
> - PHP 7.3 | 8.0 o superior
> - Laravel 8.12 o superior
> - Node.js 12.5.0 o superior
> - MySQL 5.7.24 o superior

### Pasos
1. **Clonar el Repositorio**
   ```bash
   git clone https://github.com/your-username/hotel-management-system.git
   cd hotel-management-system
2. **Instalar Dependencias**
   ```bash
   composer install
   npm install
   npm run dev
3. **Configuración del Entorno**
   - Copia el archivo `.env.example` a `.env`
   - Actualiza el archivo `.env` con tu configuración de base de datos y otras configuraciones
   ```bash
   cp .env.example .env
4. **Generar la Clave de la Aplicación**
   ```bash
   php artisan key:generate
5. **Generar Migraciones y Seeders**
   ```bash
   php artisan migrate --seed
6. **Servir la Aplicación**
   ```bash
   php artisan serve
7. **Acceder a la Aplicación**
   - Visita `http://localhost:_localport_` en tu navegador.
  
## Uso
### Credenciales del Administrador
- **Email:** `miguel@hotmail.com`
- **Contraseña:** 123456

### Roles y Permisos
- **Administador:** Acceso completo
- **Empleado:** Gestionar detalles de hoteles y habitaciones
- **Cliente:** Ver detalles de hoteles y habitaciones
- **Invitado:** Navegar sin iniciar sesión

## Licencia
Este proyecto está bajo la Licencia **CC BY-NC-ND 4.0**. Ver el archivo [LICENSE](LICENSE) para más detalles.

## Contribuir
Las solicitudes de pull son bienvenidas. Para cambios importantes, abre un issue primero para discutir lo que te gustaría cambiar.

## Contacto
Para cualquier pregunta o sugerencia, no dudes en contactarme al [email](miguel_cg97@hotmail.com).

> [!TIP]
> **Laragon** puede ser reemplazado con las siguientes suites y/o herramientas:
> - **MAMP** (macOS, Windows): [MAMP](https://www.mamp.info/en/)
> - **XAMPP** (macOS, Windows, Linux): [XAMPP](https://www.apachefriends.org/index.html)
> - **Laravel Valet** (macOS): [Laravel Valet](https://laravel.com/docs/8.x/valet)
> - **Homestead** (macOS, Windows, Linux): [Laravel Homestead](https://laravel.com/docs/8.x/homestead)
> - **Docker** (macOS, Windows, Linux): [Docker](https://www.docker.com/)
