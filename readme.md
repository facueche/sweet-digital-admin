# Sweet Digital Admin

Sweet Digital Admin es un paquete para agilizar el sistema de administracion con login y registro incorporado para los sistemas desarrollados por Sweet Digital Dreams.

## Installation

Usar el manejador de paquetes [composer](https://getcomposer.org/) para instalar Sweet Digital Admin.

```bash
composer require debianmoor/sweetdigitaladmin
```

Añadir la siguiente linea en el archivo **composer.json** ubicado en la raiz

```json
"autoload": {
        "psr-4": {
            ...
            "DebianMoor\\SweetDigitalAdmin\\": "vendor/debianmoor/sweetdigitaladmin/src"
        },
        ...
    },
```

Actualizar la información de las clases que se van a usar

```bash
composer dump-autoload
```

Publicar el framework Lumino
```bash
php artisan vendor:publish --tag=lumino
```

Publicar las migraciones
```bash
php artisan vendor:publish --tag=migrations --force
```
