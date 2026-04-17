// Lira Lopez //

- Objetivo de la práctica:
Aplicar los fundamentos de la Programación Orientada a
Objetos en PHP, implementando una clase con atributos privados,
constructor y métodos de acceso, siguiendo buenas prácticas de
encapsulamiento.

Descripción de la clase creada:
Se implemento la clase "usuario", la cual contiene los siguientes elementos en ella: 
- Atributos privados; `$nombre` y `$correo`, protegidos mediante encapsulamiento para evitar el acceso directo desde fuera de la clase.
- Constructor; use el metodo de `__construct` que recibe e inicializa el nombre y el correo al momento de crear la instancia.
- Metodos Getter;   `getNombre()` y `getCorreo()`, utilizados para recuperar de forma segura los valores de los atributos.
- Metodos Setters; `setNombre()` y `setCorreo()`, para permitir la actualización controlada de la información.

Instrucciones de ejecución:
Para que esta practica funcione y se ejecute correctamente, se tienen que seguir estos pasos;
1. Asegúrese de tener instalado un servidor local como XAMPP, yo use ese.
2. Inicie el servicio **Apache** desde el panel de control del servidor.
3. Clone o descargue este repositorio dentro de la carpeta `htdocs` de su instalación de XAMPP.
4. Abra su navegador web y acceda a la siguiente dirección:
   `http://localhost/desarrollo-web-avanzado-fimaz-uas-main/parcial-1-poo/practica-1/index.php`
5. La página mostrará la información del usuario procesada a través de la clase.