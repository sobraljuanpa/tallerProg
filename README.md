# tallerProg

## Comandos instalación

(Sesion de terminal abierta en la maquina virtual)
Creo la carpeta que va a contener al obligatorio en la máquina virtual:
```
cd /var/www
mkdir tallerProg
```

(Sesion de terminal abierta en mi equipo)
Me paro en la carpeta que contiene la aplicación y la copio a mi máquina virtual:
```
scp -r . $usuario@$ipVM:/var/www/tallerProg
```

(Sesion de terminal abierta en la maquina virtual)
Listo los contenidos del directorio para chequear que estén todos presentes, en caso de haber alguno de los directorios auxiliares de Smarty(cache, config, templates_c) faltantes lo creo:
```
cd /var/www/tallerProg
ls
mkdir $nombreDirectorio
```

(Sesion de terminal abierta en la maquina virtual)
Cambio los permisos sobre las carpetas que utiliza Smarty y la carpeta en la cual se van a almacenar los poster:
```
cd /var/www/tallerProg
chmod 777 cache
chmod 777 config
chmod 777 templates
chmod 777 templates_c 
chmod 777 img
```