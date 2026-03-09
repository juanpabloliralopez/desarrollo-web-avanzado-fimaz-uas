# Práctica 3 / Lira Lopez 

## Descripción del sistema
se implementa un nivel de seguridad en la entrada de datos mediante el uso de **Excepciones (Exceptions)**. El objetivo es validar que el correo electrónico de cualquier usuario (ya sea Admin o Alumno) cumpla con un formato válido antes de permitir la creación del objeto.

## Estructura del Proyecto
- /clases: Contiene los archivos de definición de clases (`Usuario.php`, `Admin.php`, `Alumno.php`).
- index.php: Archivo principal que ejecuta la lógica y pruebas.
- README.md: Documentación de la práctica.

## Explicación del flujo de clases
1. Clase Usuario; Define los atributos `nombre` y `correo`. En su constructor, utiliza `filter_var()` para validar el email. Si falla, utiliza la palabra reservada para lanzar una nueva excepción.
2. Clase Admin; Hereda de Usuario y añade el método `getRol()`.
3. Clase Alumno; Hereda de Usuario, añade el atributo `matricula` y el método `getRol()`.

## Manejo de Errores (Try/Catch)
Se implementó un bloque de control de errores en `index.php`:
- **Try:** Intenta crear instancias de objetos.
- **Catch:** Si alguna validación en el constructor de la clase base falla, el bloque catch captura el objeto de la excepción y muestra un mensaje de error controlado en pantalla sin detener la ejecución de otros procesos.

## Evidencia de ejecución
El sistema demuestra:
1. Crear exitosamente usuarios con correos válidos.
2. Detectar y reportar mediante un cuadro de error visual cuando se intenta registrar un correo con formato incorrecto.