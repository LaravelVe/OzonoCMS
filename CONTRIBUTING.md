# Contribuir a Ozono CMS

Primeramente le damos las gracias y bienvenidas sean todas las correcciones y mejoras en el desarrollo del código, organización, pruebas y documentación. Toda contribución recibida es muy valiosa para toda la comunidad, no obstante, le recomendamos leer detenidamente esta guía como contribuir en el proyecto de una manera que sea eficiente para todos.

### Indice:

- [Prefacio.](#prefacio)
- [Preparando del Entorno.](#preparando-el-entorno)
- [Definiendo las contribuciones.](#definiendo-las-contribuciones)

### Prefacio

Ozono CMS es un proyecto que nace en la comunidad LaravelVe con fines didacticos para los miembros de la comunidad y todos los interesados en aprender a usar el framework Laravel. La idea principal es crear un proyecto real que aborde varios aspectos del framework y cada miembro se sienta libre de contribuir y aprender en conjunto con la comunidad.

¿Quieres formar parte de la comunidad LaravelVe?, encuentranos en [Telegram](https://telegram.me/laravelVe).

[Volver](#indice)

### Preparando el Entorno

Al ser un proyecto basado en el framework Laravel y siguiendo la documentación oficial el mejor entorno para desarrollar proyectos basados en Laravel es usando [**Laravel Homestead**](https://laravel.com/docs/5.3/homestead) un entorno de desarrollo basado en una Vagrant Box con todas las herramientas necesarias, ahorandole configuraciones y descargas de software adicional. Cabe destacar, que esta no es una limitante, debido a que usted puede usar Laravel sin **Homestead** al cumplir con los siguientes [requerimientos](https://laravel.com/docs/5.3/installation#installing-laravel).

Una vez preparado su entorno el siguiente paso es hacer **Fork** del proyecto y así tendrá una copia del mismo para trabajar desde su usuario en Github, todas las propuestas de mejoras, correcciones y aportes, así como también dudas serán manejas primeramente por medio de la creación **Issues**. Tiene la libertad de crear un **Issue** y/o  asignarselo con respecto al area en el que le gustaría contribuir. Todas las cotribuciones serán recibidas por medios de **Pull Request** al repositorio de la organización. Dichos **PR** serán revisados por los administradores de la organización para verificar que cumplan con las convenciones definidas en la siguiente sección y de solución al **Issue** al que hace referencia.

[Volver](#indice)

### Definiendo las contribuciones
En esta sección se definen las convenciones de como contribuir en el tema, desde la generación de código y documentación hasta la forma en la que se manejarán las contribuciones dentro del Repositorio en Github.

Esta sección esta sujeta a modificaciones y actualizaciones bajo previo concenso y aprobación por parte de la comunidad usando **Issues** y/o Canal Oficial en [**Telegram**](https://t.me/laravelVe)

- [Código.](#código)
- [Documentación.](#documentación)
- [Commits.](#commits)
- [Issues](#issues)
- [Branchs.](#branchs)
- [Pull Requests.](#pull-requests)
- [Merge.](#merge)

[Volver](#indice)

#### Código
Para el código se segiran los Estandares ya definidos en los PSR(Php Standars Recomendations). Prinicpalmente los PSR-1, PSR-2 y PSR-4.

puedes consultarlos aquí.
- [PSR-1 Basic Coding Standard](http://www.php-fig.org/psr/psr-1/)
- [PSR-2 Coding Style Guide](http://www.php-fig.org/psr/psr-2/)
- [PSR-4 Autoloader](http://www.php-fig.org/psr/psr-4/)
- [Más información de los PSR](http://www.php-fig.org/psr/)

[Volver](#indice)

#### Documentación
En los proyectos open source hay muchas formas de contribuir, una muy valiosa es la documentando los avances y caracteriscas de un proyecto. Github nos ofrece la ventaja de crear una wiki. más adelante se especificará los lineamientos para contribuir en la wiki.

[Volver](#indice)

#### Commits
Los commits puede seguir dos estilos:

- El Corto: 
**ETIQUETA** - mensaje Corto.

**Ejemplo:**
``` bash
 FIX - responsive de formulario [#10] #si aplica mencionar a un Issue
```

-El largo: 
**ETIQUETA** - mensaje Corto.

mensaje o explicacion adicional.

**Ejemplo:**
``` bash
 FIX - responsive de formulario [#10] #ese seria el numero del Issue
 
 correción de max-width para formulario de contacto
 en dispositivos moviles.
```

**Las Etiquetas**

Son palabras claves que ayudan a los demas contribuidores a saber que cambios fue realizado en los archivos del repositorio. Si bien ud puede decir entre usar un commit corto o largo, será de gran ayuda que incluya las etiquetas en ellos. A continuación se presenta la lista de etiquetas:

- **ADD**: para nuevos archivos y carpetas.
- **REMOVE**: para eliminación de Archivos y capetas.
- **IMPORTANT**: para camnios importante que afecten o cambien el funcionamiento. (Dependencias)
- **UPDATE**: cambio mayores, refactorización, nuevas secciones.
- **CHANGE**: cambios menores, estilos, maquetación.
- **DEV**: cambio experimental y/o temporal. si el cambio queda en el siguiente commit usar etiqueta UPDATE o IMPORTANT dependiendo del caso.
- **FIX**: Correciones de Bug, hacer mención al Issue correspondiente. Ejemplo:

#### Issues
Sientase libre de abrir un Issue en el repositorio, pero tome en cuenta las sigueinte recomendaciones.

- Antes de abrir un nuevo Issue verifique que no exista uno con las misma tematica o duda para evitar Issue duplicados.
- Github coloca a nuestra disposición Labels(Etiquetas) que nos ayudan a idenficar por tema y color.

Los Issue son el lugar ideal para proponer nuevas características, reportar errores y contribuir a solucionarlos. OzonoCMS es un proyecto para la comunidad, así que te volvemos a invitar a ser parte de ella.

[Volver](#indice)

#### Branchs
OzonoCMS se trabajará bajo dos ramas o branch principales.
- **master**.
- **dev**.

La rama master será la rama de producción o estable. El merge se realizará a través de la rama **dev** bajo la autorización de los administradores del repositorio de OzonoCMS.

La rama dev es para los desarrollos, te recomendamos que use tu propia rama **dev**  en local hagas tus contribuciones y las envies por medio de PR.

[Volver](#indice)

#### Pull Requests
Todas las contribuciones se haran por medio de **Pull Request en Github** desde tu fork en la rama **dev** al repositorio de OzonoCMS en la rama **dev**. Actualmente Github permite agregat un Template o base a nuestros PR. En OzonoCMS usamos las siguiente:

```
[ ] Fix a Error reportado en (#Issue).
[ ] Nuevo Feature propuesto en (#Issue).
[ ] Correción o refactor reportado en (#Issue)

```

- Descripción:
(Breve descripción del PR)

El la primera sección agrega un "x" para especificar que tipo de contribución estas realizando. Se recomienda que los PR vayan de la mano con respectivo Issue, por ejemplo si vas solucionar un error o agregar una nueva caracteristica.

**ejemplo**
```
[ ] Fix a Error reportado en (#Issue).
[x] Nuevo Feature propuesto en #22.
[ ] Correción o refactor reportado en (#Issue)

- Descripción:
Agregar el paquete Entrust para manejar de forma flexible la organización y asignación de roles y permisos a los usuarios dentro de  OzonoCMS
```
[Volver](#indice)

#### Merge
Los Merge seran llevados a cabo por los administradores del repositorio de OzonoCMS, recuerda que el flujo será:

- **tu-fork/dev -> OzonoCMS/dev**.
- **OzonoCMS/dev -> OzonoCMS/master**.

[Volver](#indice)
