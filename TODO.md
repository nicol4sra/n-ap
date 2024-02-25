# WIP

    1) Planes de ejercicio:
        ✅ - Plan de ejercicio: el usuario visualiza los tipos de ejercicios(basico,medio,avanzado) junto con su informacion de como realizarlo.

        R: Mostrar 4 cards, cada nivel y el ultimo "mis planes" y redirigir a un listado correspondiente.

        - Tiene una opcion de llevar un plan con el especialista(entrenador).

        R: PENDIENTE

        ✅ - ademas de un crud: donde el usuario personaliza su propia rutina de ejercicio (nombre de la rutina, que musculos trabaja, edad minima, nivel, editar rutina, eliminar, ver).

        R: Registrar un plan de ejercicio por el usuario.

    2) Plan Nutricional:
        - Al igual que el de ejercicios, tendra una opcion que el usuario puede elegir llevar una nutricion con el especialista(nutricionista)

        R: PENDIENTE

        - tipos de nutricion.

        R: PENDIENTE
    ✅ 3) Registro de Especialistas (Entrenador, Nutricionista, Psicologo)

    R: PENDIENTE

    ✅ 4) Asignar Roles, cuando un usuario se registre en la app.

    Made: Se registran como "Usuario" todos.

    R: PENDIENTE

    5) Consultas: Tengan la opción (Botton)de pedir consulta, una vez seleccionado saldría un modal preguntando que quiere consultar ya sea , entrenador, nutriólogo o psicólogo , al seleccionar, saldría un formulario de preguntas para saber que presenta o para que es la consulta, se envía a un especialista, el sistema avisaría cuando el especialista responda o por correo

    R: PENDIENTE

# Errores

-   No carga

    -   Plan nutricional
        ✅ - Plan de ejercicios
    -   Consultas
    -

-   No funciona
    -   /peso, calculadora IMC.
    -   /alarma.
    -   /cuenta
    -   /datos/store -> no puede guardar
    -   /editp -> no actualiza
    -   /entrenador -> no puede guardar
    -   /nutricionistas -> no puede guardar

# Por cambiar

Cambios en la base de datos:

-   Receta, cambio casi todos sus campos.
-   Las antiguas recetas, por ejemplo:
    nombre: "Yogur griego con cereales y frutos secos"
    descripcion: "El yogur griego, además de nutritivo, posee una textura cremosa muy agradable al paladar"

    Pasaron a llamarse "recetas_anterior"

-   Ejercicio.
-   PartesCuerpo.

# Por hacer

-   Añadir validaciones para Ejercicio y Receta.
-   Añadir vista show para Ejercicio y Receta.
-   Enlazar User con datos.
-   Renombrar modelos de minúsculas a capitalizado y en singular (ej: datos -> Dato).

-   25-02-2024
    -   Tablas con paginacion.

# Cambios

-   Se añadió jQuery para manejar selects multiples ('/crear-receta' y '/receta/{id}/edit').
-   La tabla de alimentos en receta esta asociada con el modelo "Nutricional" y tabla "nutricionals"

# Consejos

-   Para manejar que los usuarios registren datos adicionales antes de tener acceso al sistema pueden hacer un middleware el cual buscaria al usuario activo (auth()->user(), algo asi seria para ver el usuario conectado actual) y si este no tiene datos en la relacion (user->datos) lo redireccionan a la vista con el formulario, caso contrario le lleva a la pagina correspondiente.
-   Hacer un solo formulario para registrar y actualizar un modelo siempre que sea posible.
-   Para manejar las reglas, mensajes y validaciones al registrar un modelo creen un Request (AccionModeloRequest "StoreEjercicioRequest") en el cual definirán los aspectos antes mencionados (revisar StoreEjercicioRequest y StoreRecetaRequest como ejemplos), caso contrario, se puede colocar toda esa informacion en el propio controlador, pero es aconsejable usar Request para mantenerlo organizado.
