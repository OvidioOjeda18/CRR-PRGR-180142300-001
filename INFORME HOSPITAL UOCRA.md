# CRR-PRGR-180142300-001

Índice
	
* Introducción. 
* Ubicación e información.
* Proyecto “Alarma código azul”.
* Aplicación.
* Analisis del sistema de la base de datos.
* Mapa del hospital.
* Proposito y alcance del proyecto.
* Supuestos del proyecto.
* Requerimientos.
* Diagrama de Gantt.
* Gestión de Riesgo.
* Desglose del trabajo en tareas.
* Aclaración del proyecto.
* Registro de experiencias.







Introducción
_Se consiguió hacer en el Hospital U.O.C.R.A un proyecto llamado “Alarma Código Azul” en donde el proceso de informatización y automatización de las entidades del hospital ya mencionado dotara de una máxima eficiencia al procedimiento de atención de las emergencias médicas.
Ubicación e Información 
_El hospital U.O.C.R.A esta ubicado por la calle Neuquén 1470 3400, W3410BVP Corrientes Capital, Argentina
_En este hospital son atendidas personas de la localidad incluso de otras, son brindadas las mejores atenciones a los pacientes ya que se busca hacer que el paciente se sienta cómo en casa y no incómodo. En el ámbito laboral, el ambiente de trabajo es de lo más bueno, en el hospital son todos tratados como si fueran una familia sin importar el puesto de trabajo.
_La seguridad también está ambientada en este hospital ya que ello juega un papel importante para proteger a los pacientes y a cada integrante personal del lugar, incluso a los hurtos de los medicamentos que son propiedad del establecimiento.
Proyecto “Alarma código azul”
Aquellas emergencias con “Alarma código azul” tendrán entorno exclusivo en los quirófanos habilitados y en las habitaciones donde serán tratados hasta ser dados de alta. En cada quirófano la persona que esté a cargo de la cirugía tendrá la obligación de informar a secretaria cuando el quirófano esté desocupado, esta comunicación es posible a través de la página web del hospital en la cual se puede ingresar a través del celular con su nivel de usuario respectivo, entonces si la opción del quirófano en la página web marca desocupado; secretaria observara la página con su usuario correspondido e informara a los médicos que acompañan al paciente que el quirófano correspondiente está desocupado, una vez que la comunicación haya sido exitosa, secretaria desde la página web marcara la opción de ocupado al quirófano que acaba de informar. En el caso de que todos los quirófanos estén ocupados secretaria informara a los médicos que acompañan al paciente para que lo trasladen a las habitaciones donde esperaran a que un quirófano se desocupe o trasladaran al paciente a otro hospital. Una vez que estos pasos se haya realizado correctamente, secretaria presionara la “Alarma código azul” esta alarma indicara un “Beep” “Atención código azul, Quirófano N°(correspondiente)”, la alarma sonara en cada área del hospital para que los médicos del lugar sean comunicados y vayan al lugar correspondiente.

Página web
Se creó una aplicación web para la gestión del hospital mediante la “Alarma código azul” está será utilizada por pacientes o personas fuera del hospital ellos compartirán un nivel de usuario de visualización o consultas y los médicos/cirujanos/secretaria ellos tendrán un nivel de administrador para informarse entre ellos y cargar datos.
Ejemplo: 
*María que es paciente quiere ver los horarios del hospital para avisar a sus familiares para que la visiten ya que ellos no entienden la tecnología para ello busca los horarios desde la página web.
*Juan es médico y necesita ver los datos personales de María para hacer su informe del mes, para ello ingresa a la página web y busca los datos personales de la paciente.
Análisis de la Base de Datos
Base de Datos: Hospital U.O.C.R.A 
_Tablas:
1)	Formulario de paciente: ID - Fecha/Hora – Situación del paciente – N° Quirófano – Tipo de llamado.
2)	Ficha del paciente: Edad – DNI – Nombre y apellido – Sexo – Grupo Sanguíneo – Fecha/Hora de ingreso – Situación del paciente – N° Quirófano – Tipo de llamado – Medico.
3)	Creación de áreas: Consultorios – Quirófanos – Baños – Habitaciones – Emergencias. (Se diseñó, pero no se implementó)
4)	Login:  Usuario – Contraseña.
5)	Tipo de llamados: Normal – Emergencia – Atendido – No atendido – Fecha/Hora. (Se diseñó, pero no se implementó).
6)	Consulta de visualización de reportes: Fecha/Hora – N° Quirófano. (Se diseñó, pero no se implementó).
7)	Consulta-filtrado reporte: Área – Origen de llamado (Baño o cama) – Fecha/Hora. (Se diseñó, pero no se implementó).
8)	Quirófanos: Quirófano N°1, Quirófano N°2, Quirófano N°3, Quirófano N°4.
(Se diseñó una relación entre los campos, pero no se implementaron).





Mapa del Hospital U.O.C.R.A
*Plano y estructura:
 

Propósito y alcance del proyecto
*El propósito del proyecto es implementar una “Alarma código azul” para que las emergencias con ese nivel sean atendidas de manera priorizadas.
*En este proyecto se van a incluir módulos sonoros en distintas áreas para que los médicos escuchen en todas las áreas y puedan ir al lugar especificado por la alarma sonora.
*En el proyecto no se va incluir otros tipos de espacios inclusivos aparte de los mencionados.
Supuesto del proyecto
_Para desarrollar este proyecto se supone que en cada área del hospital se incluyan módulos sonoros para que sea escuchada la “Alarma código azul”, en el caso de que en las áreas lejanas no llegue la señal de los módulos sonoros a causa de los obstáculos o la distancia que obstruyen la señal se implementara un módulo de enlace inalámbrico ello amplificara la señal, una vez que haya sido emitido el sonido los médicos deben concurrir al lugar dicho por el sonido. Una vez terminada la cirugía se supone que los cirujanos tienen la obligación de que en la página web a través de sus celulares seleccionen la opción de desocupado el quirófano así secretaria mira los quirófanos disponibles desde la página web y manda la siguiente emergencia a ese quirófano desocupado.
Requerimientos
1)	Capacidad de analizar y solucionar problemas lógicos.
2)	Una computadora funcional
3)	Conocimientos para hacer diagramas de flujo.
4)	Manejo y uso de aplicaciones.
5)	Pensamiento lógico.
6)	 Conocimiento en los distintos lenguajes de programación (PHP, Java Script Y HTML).
7)	Servidor Apache (Aplicación XAMPP).
8)	Expresión en forma clara y uso de lenguaje técnico.
Sistema Login: Usuarios y contraseñas del sistema login de la página web. 
Usuarios:	Contraseña:	Página Web
admin	admin	Emergencias/Botón Azul
medico	medico	Datos Personales/Emergencias

Gestión de riesgo
Criterio adoptado: Se tomarán medidas de mitigación en los riesgos cuyos números de RPN sean mayores a 50.
Riesgo	Severidad	Ocurrencia	RPN	Severidad*	Ocurrencia*	RPN*
1 	9 = Que la alarma no funcione por corte de luz.	 1 = Una vez cada mes.	9			
2	 8 = Que la
mayoría de los  médicos del hospital estén ocupados.	3 = De tres veces cada mes.	24			
3	4 = Que se equivoquen en la selección de quirófanos desocupados	4 = De 4 veces cada 2 meses.	16			

Desglose del trabajo en tareas
Días:	Actividades:	Tiempo:	Personas Necesarias:


Día 1	•	Análisis de Sistema. 
•	Análisis del algoritmo. 
•	Configuración de GitHub.
•	Diseño de la base de datos. 
•	Inicio del código de la página web.
•	Inicio del informe. 	


5 Horas	


Grupo Completo

Día 2 	•	Análisis del sistema. 
•	Diseño de base de datos. 
•	Continuación del código de la página web. 	
5 Horas	
Grupo Completo
Día 3 





	•	Análisis del sistema. 
•	Continuación del informe. 
•	Continuación del código de la página web.
•	Búsqueda de la información. 
•	Diseño de la base de datos.
•	Implementación de JavaScript.
•	Diseño de planos y estructuras del Hospital.	


5 Horas	


      Grupo Completo
Día 4




	•	Continuación del informe. 
•	Continuación del código de la página web.
•	Búsqueda de la información.
•	Diseño de la base de datos.	

10 Horas	

      Grupo Completo
Día 5




	•	Terminación del Informe.
•	Terminación y testeo de la página web.
•	Envió del proyecto.	

4 Horas	

Grupo Completo


Aclaración del proyecto
Se concluyó con un simulador para el proyecto que consiste en; que, al presionar el botón de emergencias en el encabezado, te direcciona a un login en donde dependiendo tu usuario te direccionara una página diferente, teniendo el usuario de secretaria (admin) te direcciona a una página donde en el centro aparece un “Botón Azul” presionarlo muestra en pantalla una notificación diciendo “CODIGO AZUL, se solicita en el quirófano N°2” haciendo así simular la “alarma” con los módulos sonoros. Luego de seleccionar “aceptar” en la notificación te direcciona a una página donde se muestra un mapa del hospital y una lista de los quirófanos, a lado de la lista muestra los quirófanos que están habilitado y deshabilitados, pero en el simulador muestra que el quirófano N°2 está deshabilitado (ello está de forma predeterminada), más abajo muestra un botón “actualizar” para actualizar las listas de quirófanos que están habilitados o deshabilitados, y si se sigue descendiendo se muestra una cinta de opciones donde se selecciona el número de quirófano y la otra cinta de opciones donde marca SI o NO haciendo referencia a si los quirófanos están habilitados o deshabilitado, más abajo muestra un mini formulario para esos pacientes que no puedan aportar datos personales.
En el caso que ingrese un usuario médico o cirujano (medico) tendrá acceso a la página de emergencias, pero no al “Botón Azul”
En el encabezado en de la parte superior el botón “Datos Perosonales” permite buscar y cargar datos personales de los pacientes.
Referencias

Videos
GestionRt24. (2018, 1 de mayo). Insertar fecha y hora con PHP y MYSQL de forma fácil [video].
YouTube. https://youtu.be/xZWWsLhtqvQ
SLee Dw. (2021, 11 de noviembre). Como Personalizar el Checkbox | Botón Tipo Switch con Css [video].
YouTube. https://youtu.be/glrIK7_YCzo
Profe Javier. (2017, 21 de diciembre). 14. CREAR TABLAS Y ESTILOS PARA TABLAS EN HTML | Curso HTML 5 Fácil [video].
YouTube. https://youtu.be/X_Fkqh0qvm4
deivchoi. (2021, 18 de octubre). Cómo Hacer un Encabezado Responsive con HTML y CSS [video].
YouTube. https://youtu.be/OuoLQiXPitk
gabriels hds. (2020, 31 de julio). Como Hacer Sistema De Login Con PHP , MYSQL Y CSS (Validación De Datos) XAMPP (2022) [video].
YouTube. https://youtu.be/IW0sR_ms1Fo
Imágenes 
Dreamstime. Secretaria en la línea icono, ejemplo de la oficina del vector Secretaria en la muestra linear del concepto de la oficina. De https://es.dreamstime.com/secretaria-en-el-concepto-linear-del-icono-de-la-oficina-l%C3%ADnea-muestra-vector-s%C3%ADmbolo-ejemplo-image117521636
Ingenia Contract. Silla moderna INA SI para sala de hospital o geriátrico. De https://images.app.goo.gl/8zyrLrpzfd7bFM4n7
Shutterstock. logo tipo del icono de ambulancia: vector de stock (libre de regalías) 774880072.De https://www.google.com/imgres?imgurl=https%3A%2F%2Fimage.shutterstock.com%2Fimage-vector%2Fambulance-icon-logo-260nw-774880072.jpg&imgrefurl=https%3A%2F%2Fwww.shutterstock.com%2Fes%2Fimage-vector%2Fambulance-icon-logo-774880072&tbnid=7e5bkTLPmx8erM&vet=1&docid=V9T01KrAOyAz4M&w=260&h=280&hl=es-US&source=sh%2Fx%2Fim
Alamy V. (2019, 4 de diciembre). Quirófano, sala de hospital y líneas de equipos icono negro. Emergencia quirúrgica. Firme para la página web, la aplicación móvil, el logotipo. Vector de los aleros aislados. De https://images.app.goo.gl/EvtYPanvGhJ4hU6r7
Frávega. Estetoscopio Doble Campana Philco BK3006. De https://www.google.com/imgres?imgurl=https%3A%2F%2Fimages.fravega.com%2Ff500%2Fd4a81ea2ad35707f9023ee5eb562e92b.jpg&imgrefurl=https%3A%2F%2Fwww.fravega.com%2Fp%2Festetoscopio-doble-campana-philco-bk3006-50026842%2F&tbnid=0fGs-rG_BrzLCM&vet=1&docid=IA_ALHFb9lRmLM&w=500&h=500&hl=es-US&source=sh%2Fx%2Fim
Pinterest. ADA Restroom Signs: Custom Bathroom Sign, Restroom Signs. De https://images.app.goo.gl/w1BnstGPpfNHedxF7
Dreamstime. Vector del icono de la vista lateral de la silueta de la cama de hospital aislado en el fondo blanco para su web y diseño móvil de app, concepto de logotipo de la vista lateral de la silueta de la cama del hospital. De https://es.dreamstime.com/muestra-y-s%C3%ADmbolo-del-vector-icono-de-la-vista-lateral-silueta-cama-hospital-aislados-en-el-fondo-blanco-logotipo-image134070675
Vecteezy. Logo Del Hospital Vectores, Iconos, Gráficos y Fondos para Descargar Gratis. De https://images.app.goo.gl/yGT3wCvqTpNhhHWt5




Links
Driver: https://drive.google.com/drive/folders/1FJauCrtfJnrUDoDGEW0ZKIat0CEoF8Zw?usp=share_link
GitHub: 
https://github.com/OvidioOjeda18/CRR-PRGR-180142300-001.git















Registro de experiencia:
¿Cómo se organizaron los tiempos, división de tareas y roles?
Los tiempos nos organizamos bien en el ámbito de que cada uno de nosotros al llegar a nuestras casas hacíamos nuestras partes del trabajo, ya que en nuestra escuela trabajábamos juntos y cuando tocaba hora salir nos hablábamos de buscar información y avanzar en el proyecto, al otro día comparábamos informaciones buscadas y a base a ello buscábamos la mejor solución a nuestros problemas.
Nuestra división de tareas consistía que, Leo Romero; se encargaba en el área de programar (creación de la página web), Liz Luque; se encargaba de dar diseño gráfico a la página web, la base de datos y el plano del hospital, Ojeda Ovidio; se encargaba de hacer el informe del proyecto y análisis del sistema. 
*A pesar de dividir las tareas, la tarea principal de nosotros fue ayudarnos mutuamente y disfrutar la experiencia de este proyecto para hacer crecer nuestras habilidades y conocimientos hacia la programación que nos servirá en el futuro, colaborar con cada uno de nosotros a pesar de que las tareas nos las hayamos divididos, ayudarnos, proponer ideas y divertirnos en el transcurso de las olimpiadas.
¿Cómo funcionaron como equipo?
La convivencia como equipo durante este proyecto fue bastante buena ya que en anteriores ocasiones ya veníamos trabajando de este modo y sabíamos cómo debíamos hacer cada uno lo que nos tocaba y en caso de necesitar ayuda nos dábamos una mano.
¿Cuáles fueron las principales dificultades para la resolución de tareas? 
Durante los días que estuvimos trabajando los principales problemas que se nos presentaban eran los errores de código, la conexión con la base de datos y el tema de querer implementar un dispositivo del cual no conocíamos mucho.
¿Pudieron resolverlo? ¿Cómo?
Las resoluciones de esos problemas fueron bastantes fáciles ya que recibíamos ayuda de nuestros profesores y por otra parte todo aquel código o dispositivo que quisimos implementar se buscaba información y de ese modo era más sencillo poder entender la estructura y funcionalidad de los mismos. 




