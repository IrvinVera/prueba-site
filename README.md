Pasos para la ejecución del programa;

1,. Una vez creado el repositorio deberían copiar el .env.example al archivo .env

2. Se deberá crear una base da deatos llamada db_site

3.- Se ejecuta el comando php artisan migrate (Esta migración creará la tabla de dispositivos solicitada en el sistema)

4.- Se debe ejecutar el compando composer update y composer dumpautoload 

5.- En este caso se debería podrar entrar al sistema mediante la siguiente ruta: http://localhost/prueba-site/public/

6.- En algunos casos se pide el key:generate (En caso de ser necesario ejecutar el comando php artisan key:generate y recargar la página)


En caso de porbar las api por sí solas, les dejo la siguentes ligas:

http://localhost/prueba-site/public/api/obtener-dispositivos (Obtiene todos los dispostivos registrados)

http://localhost/prueba-site/public/api/crear-dispositivo (Crea un dispositivo nuevo, los valores enviados enel form data son tal cuales los manejaron en el ejemplo)

http://localhost/prueba-site/public/api/editar-dispositivo (Modifica un dispositivo, los valores enviados enel form data son tal cuales los manejaron en el ejemplo)