--PROYECTO PLATAFORMA WEB CURSOS ONLINE--

  Este proyecto esta hecho para poder visualizar, crear, modificar y eliminar CURSOS ONLINE. El usuario tiene de primera forma un login de acceso, en el cual si este no esta registrado, puede crearse una cuenta para poder ingresar. 
  Posteriormente entrara a un dashboard principal en el cual tendra las opciones de ver en detalle, poder crear nuevos cursos, modificar valores que estime conveniente y eliminar cursos en cualquier momento,
  todo esto segun los cursos creados por el usuario en cuestion, sino le mostrara mensajes de alerta lo cual no podra modificar ni eliminar cursos de otros usuarios. Finalmente este puede salir de la plataforma cerrando sesion.

--INSTRUCCIONES DE INSTALACION--

  -Este aplicativo esta instalado con el apache XAMPP mas reciente (no excluyente).
  -PHP 8.2
  -BASE DE DATOS MYSQL
  -INICIALIZAR LOS MODULOS APACHE Y MYSQL EN LA MAQUINA.

  Esto es lo primero que debe tener la maquina servidor que se utilizara para usar el aplicativo, posteriormente se debe:
   - importar archivo en mysql llamado "cursos_online.sql" ya que creara BD y tablas, inclusive datos, que son necesarios para el aplicativo.
   - posteriormente almacenar el resto de archivos en la carpeta del servidor del apache la cual visualizara los archivos via web en el localhost (www o htdocs).
   - finalmente si al instalar si se creo algun tipo de usuario o contraseña distinto para acceder a la BD, estos deben modificarse de manera manual en el archivo de la ruta "class/conexion.php", ya que deben ser identicos a la configuracion de cada maquina.

  Con estos pasos ya se podria utilizar el aplicativo sin problemas.

--MANUAL DE USO--

-Pagina principal (index.php)
 *login y boton para creacion usuario
-Pagina posterior dashboard
 *vista listado de cursos totales y botones para cada uno de DETALLE, MODIFICACION Y ELIMINACION
 *Menu izquierdo con la lista totales, vista creacion NUEVO CURSO y enlace CERRAR SESION.
-Pagina creacion nuevo curso
 *vista de los campos requeridos para la creacion del nuevo curso
-Pagina vista detalle curso
 *vista individual del curso señalado, sus datos adicionales, y los botones de MODIFICACION Y ELIMINACION
-Pagina vista modificacion curso 
 *vista individual del curso seleccionado con la opcion de reescribir algun cambio en el curso elejido.
 
 //el boton de eliminacion abre una alerta directamente en el curso señalado y espera confirmacion si desea eliminar el curso seleccionado.
 // todas las funciones estan validadas para no ingresar mas de 1 usuario repetido ni tampoco algun curso repetido en la BD, como tambien la validacion que cada modificacion de curso o eliminacion la debe realizar el mismo usuario que creo dicho curso.

