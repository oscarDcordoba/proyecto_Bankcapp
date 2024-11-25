1. Clonar el repositorio
Abre una terminal y navega al directorio donde quieres clonar el proyecto.

Ejecuta el siguiente comando:

bash
Copiar código
git clone https://github.com/<usuario>/<repositorio>.git
Reemplaza <usuario> y <repositorio> con la información correspondiente.

Ingresa al directorio del proyecto:

bash
Copiar código
cd <repositorio>
2. Configurar Composer
Verifica que Composer esté instalado ejecutando:

bash
Copiar código
composer --version
Si no está instalado, sigue las instrucciones en getcomposer.org.

Instala las dependencias del proyecto:

bash
Copiar código
composer install
3. Configurar Laravel
Crea una copia del archivo .env.example para configuraciones locales:

bash
Copiar código
cp .env.example .env
Genera una nueva clave de aplicación de Laravel:

bash
Copiar código
php artisan key:generate
Configura las variables de entorno en el archivo .env. Asegúrate de actualizar la conexión a la base de datos:

dotenv
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
Ejecuta las migraciones para crear las tablas de la base de datos:

bash
Copiar código
php artisan migrate
(Opcional) Si el proyecto incluye datos de prueba, ejecútalos:

bash
Copiar código
php artisan db:seed
4. Compilar Assets Frontend (opcional)
Si el proyecto usa Laravel Mix o Vite para manejar CSS y JavaScript:

Instala las dependencias de Node.js:

bash
Copiar código
npm install
Compila los assets:

bash
Copiar código
npm run dev
Para compilar en modo producción:

bash
Copiar código
npm run build
5. Iniciar el servidor
Para ejecutar el servidor de desarrollo de Laravel:
bash
Copiar código
php artisan serve
Accede al proyecto en tu navegador en la dirección mostrada (por defecto: http://127.0.0.1:8000).
6. Actualizar Laravel (opcional)
Si necesitas actualizar Laravel a una nueva versión:

Actualiza el framework en el archivo composer.json (si es necesario):

json
Copiar código
"laravel/framework": "^10.0"
Ejecuta el comando para actualizar:

bash
Copiar código
composer update
Revisa las notas de la versión de Laravel y realiza los ajustes necesarios en el código.

7. Notas adicionales
Para problemas con permisos en almacenamiento y caché:
bash
Copiar código
chmod -R 775 storage bootstrap/cache
Borra el caché de configuración si realizas cambios en .env:
bash
Copiar código
php artisan config:cache
------------------------------------------
usuarios para ingresar a los diferentes perfiles 

namea=dmin
'email'=>admin@gmail.com.com
'password'=123456789

namea=supervisor
'email'=>Svisor@gmail.com
'password'=123456789

namea=cajero
'email'=>cajero@gmail.com
'password'=123456789

namea=cliente
'email'=>cliente@gmail.com
'password=123456789
----------------------------------
*Al estar en el perfil de administrador si va a crear un nuevo usuario
*este lo va a crear con el rol de cliente automaticamente 

