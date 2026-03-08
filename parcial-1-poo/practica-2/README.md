## Lira Lopez Juan Pablo - practica 2 

Practica 2: HERENCIA Y REUTILIZACIÓN DE CÓDIGO EN PHP

Objetivo: Implementar herencia mediante la extensión de clases,
reutilizando atributos y métodos de una clase base.


## Explicación de la herencia aplicada:

la clase Admin utiliza extends para heredar de la clase usuario, osea que esten comunicadas y hablen el mismo idioma.

Modifique los atributos nombre y correo de private a protected en la clase base para que admin pudiera acceder a ellos.

Admin no necesita volver a definir el constructor ni los metodos de nombre y correo; simplemente añadi la funcion de getrol para hacer mas rapido ese trabajo.

## Diferencias entre Usuario y Admin

La clase usuario es el cerebro, define la estructura general de cualquier usuario del sistema y la clase admin es la hija de este, hereda todo lo que tiene el usuario y añade privilegios especificos, en este caso, un rol de administrador.

## Instrucciones de ejecución

1 - activar apache en xammpp
2- abrir tu archivo de index en el servidor
3 - acceder a el mediante : `http://localhost/desarrollo-web-avanzado-fimaz-uas-main/parcial-1-poo/practica-2/index.php`
