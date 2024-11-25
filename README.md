
# Banckapp


## 1. Clonar el repositorio
Abre una terminal y navega al directorio donde quieres clonar el proyecto.

Ejecuta el siguiente comando:
-----------------------------------------
#### 
Copiar código
### git clone:  https://github.com/<usuario>/<repositorio>.git
Reemplaza <usuario> y <repositorio> con la información correspondiente.

### Ingresa al directorio del proyecto:

Copiar código
cd <repositorio>
___________________________________________________________
### 2. Configurar Composer
Verifica que Composer esté instalado ejecutando:

Copiar código
composer --version
Si no está instalado, sigue las instrucciones en getcomposer.org.
Instala las dependencias del proyecto:
Copiar código
composer install
____________________________________________
### 3. Configurar Laravel
Crea una copia del archivo .env.example para configuraciones locales:

Copiar código
cp .env.example .env
Genera una nueva clave de aplicación de Laravel:
____________________________________________
Copiar código
php artisan key:generate
Configura las variables de entorno en el archivo .env. Asegúrate de actualizar la conexión a la base de datos:

#### DB_CONNECTION=mysql
#### DB_HOST=127.0.0.1
#### DB_PORT=3306
#### DB_DATABASE=nombre_base_datos
#### DB_USERNAME=usuario
#### DB_PASSWORD=contraseña

________________________________________________________________
## Ejecuta las migraciones para crear las tablas de la base de datos:
#### Copiar código
#### php artisan migrate
#### (Opcional) Si el proyecto incluye datos de prueba, ejecútalos:
#### Copiar código
#### php artisan db:seed
_________________________________________________
## 4. Compilar Assets Frontend (opcional)
### Si el proyecto usa Laravel Mix o Vite para manejar CSS y JavaScript:

#### Instala las dependencias de Node.js:


#### Copiar código:
#### npm install
#### Copiar código:
#### npm run dev
#### Para compilar en modo producción:
#### Copiar código:
#### npm run build
___________________________________________________

## 5. Iniciar el servidor
Para ejecutar el servidor de desarrollo de Laravel:

#### Copiar código
#### php artisan serve
#### Accede al proyecto en tu navegador en la dirección mostrada (por defecto: http://127.0.0.1:8000).
___________________________________________________
## 6. Actualizar Laravel (opcional)
#### Si necesitas actualizar Laravel a una nueva versión:
#### Actualiza el framework en el archivo composer.json (si es necesario):

#### json
#### Copiar código
#### "laravel/framework": "^10.0"
#### Ejecuta el comando para actualizar:

#### Copiar código
#### composer update
#### Revisa las notas de la versión de Laravel y realiza los ajustes necesarios en el código.
___________________________________________________
## 7. Notas adicionales
#### Para problemas con permisos en almacenamiento y caché:
#### Copiar código
#### chmod -R 775 storage bootstrap/cache
#### Borra el caché de configuración si realizas cambios en .env:
#### Copiar código
#### php artisan config:cache
------------------------------------------
## Estos usuarios son para ingresar a los diferentes perfiles 

* namea=dmin 
* email'=>admin@gmail.com.com
* password'=123456789
___________________________________________________
* namea=supervisor
* 'email'=>Svisor@gmail.com
* 'password'=123456789
___________________________________________________
* namea=cajero
*  'email'=>cajero@gmail.com
* 'password'=123456789
___________________________________________________
* namea=cliente
* 'email'=>cliente@gmail.com
* 'password=123456789
___________________________________________________
##### - Al estar en el perfil de administrador si va a crear un nuevo usuario 
##### este lo va a crear con el rol de cliente automaticamente. 
