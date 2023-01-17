# Laravel Test

# Stack
- Laravel 8.x
- PHP 7.4.x
- MySQL 5.7.x
- Vue 3.x

**NOTA:** Para las modificaciones o implementaciones en Vue, se puede hacer uso del Options API o Composition API.

# Requerimientos
El resultado final de la aplicación debe permitir:
- Registro exitoso de usuarios.
- Login de los usuarios registrados al dashboard.
- Cambiar la zona horaria a **Bogotá** y el lenguaje por defecto a **Español**.
- En el registro de usuario añadir un campo adicional de **teléfono**.
- En el [dashboard](vendor\laravel\breeze\stubs\inertia-vue\resources\js\Pages\Dashboard.vue), cuadno el usuario se autentica, reemplazar el texto **"You're logged in!"** por la lista de usuarios registrados con su información básica. El diseño de la lista queda a su elección, puede ser una lista simple, cards, tablas...
- A la lista creada anteriormente añadirle un botón de eliminar, este botón debe ser visible para todos los usuarios, menos para el usuario actualmente autenticado. Este botón debe permitir eliminar el usuario de la base de datos y refrescar la lista con los usuarios restantes.
- Como valor agregado pero no requerido, se podría adicionar un recuadro de confirmación cuando se de en el botón de eliminar para confirmar la acción. Se puede usar librerías externas como Swal o similares.

# Entrega
- Se debe subir el código a un repositorio personal en Bitbucket y compartirnos el enlace de este, debes asegurarte de que el repositorio sea público para así nosotros poder tener acceso a este.