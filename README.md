# tallerProg

***************************************************************************
***************************************************************************
*ACA ROMPI TODO PQ CUANDO HICE EL CAMBIO EN DATOS REVENTE TODO LO DE FEDE *
*                                                                         *
*IMPORTANTE                                                               *
*                                                                         *
*TENER EN CUENTA                                                          *
***************************************************************************
***************************************************************************

## IMPORTANTE SMARTY

Es importante tener permisos para mostrar lso templates de smarty.
Se puede hacer de 2 maneras

+ Logueado a la consola y en el dir de la pag meter un chmod 777 a cache, config, templates y templates_c
+ Meter el scp con -rp que la p preserva los permisos locales, setearlos como arriba y darle


## Colores

+ Navbar: Dark
+ Boton principal: Dark
+ Fondo: blanco

## Paginas
+ Home
    + Navbar
        + Opciones rol
        + Login Registro
    + Barra buscador/filtros
    + Tarjetas con peliculas
        + Header: Titulo
        + Body: Poster
        + Footer: Genero y puntuacion
+ Detalle
    + Navbar
        + Opciones rol
        + Login Registro
    + Detalle pelicula
        + Titulo
        + Poster
        + FechaLanzamiento
        + Resumen
        + Nombre director + actores principales
        + Opcional video trailer
    + Comentarios
+ Alta Comentario
    + Navbar
        + Opciones rol
        + Login Registro
    + Formulario comentario
        + Texto
        + Puntaje
+ Alta pelicula (Admin)
    + Navbar
        + Opciones rol
        + Login Registro
    + Formulario pelicula
        + Titulo
        + Poster
        + FechaLanzamiento
        + Resumen
        + Nombre director + actores principales
        + Opcional video trailer
+ Aprobacion comentarios (Admin)
    + Navbar
        + Opciones rol
        + Login Registro
    + Tarjetas con comentarios
        + Body
            + Comentario
        + Footer
            + Boton aprobar
            + Boton denegar
+ Registro
+ Inicio sesion