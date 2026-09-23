DAW 2 - Coursework & Projects

This repository contains practical exercises, class tasks, and small projects developed during my second year of the Web Application Development (Desarrollo de Aplicaciones Web - DAW) vocational degree.

The purpose of this repository is to track my technical progress, maintain clean version control, and document hands-on implementations across frontend, backend, and environment setup.

Repository Structure

.
├── DIW/                # Web Interface Design (Diseño de Interfaces Web)
│   └── PDFS/           # Task documentation, wireframes, and design deliveries
├── DWEC/               # Client-Side Web Development (JavaScript, DOM, Web APIs)
│   ├── PDFS/           # Exercise specifications and documentation
│   └── *.html / *.js   # Vanilla JavaScript practices and UI interactions
├── DWES/               # Server-Side Web Development (PHP, Backend logic)
│   └── Docker/         # Containerized development environment
│       ├── src/        # Backend source code (OOP, DB integration, templates)
│       ├── Dockerfile
│       └── docker-compose.yml
└── .gitignore


Modules & Focus Areas

DIW (Web Interface Design): Usability, accessibility, UI/UX structure, component styling, and visual documentation.

DWEC (Client-Side Web Development): Modern JavaScript fundamentals, asynchronous operations, event handling, and DOM manipulation.

DWES (Server-Side Web Development): PHP logic, database connectivity (MySQL/MariaDB), templating, and backend architecture.

Containerization & Tooling: Local setup using Docker and Docker Compose to ensure reproducible dev environments.

Setup & Running the Environment (DWES)

The server-side environment is containerized. To spin up the local server:

Navigate to the Docker folder:

cd DWES/Docker


Build and start the containers:

docker compose up -d


Open your browser at http://localhost (or the port defined in the compose file).

DAW 2 - Prácticas y Proyectos

Este repositorio recoge las prácticas, ejercicios de clase y proyectos desarrollados durante el segundo curso del ciclo formativo de Desarrollo de Aplicaciones Web (DAW).

El objetivo es llevar un seguimiento del aprendizaje, mantener un control de versiones limpio y documentar las implementaciones prácticas tanto en frontend como en backend y despliegue local.

Estructura del Repositorio

.
├── DIW/                # Diseño de Interfaces Web
│   └── PDFS/           # Entregas, diagramas y documentación de actividades
├── DWEC/               # Desarrollo Web en Entorno Cliente (JS, DOM, APIs Web)
│   ├── PDFS/           # Enunciados y documentación de prácticas
│   └── *.html / *.js   # Ejercicios prácticos con JavaScript nativo y lógica en cliente
├── DWES/               # Desarrollo Web en Entorno Servidor (PHP, Backend)
│   └── Docker/         # Entorno de desarrollo local dockerizado
│       ├── src/        # Código fuente PHP (sintaxis básica, gestión de ficheros, BBDD)
│       ├── Dockerfile
│       └── docker-compose.yml
└── .gitignore


Asignaturas y Tecnologías

DIW (Diseño de Interfaces Web): Diseño responsive, accesibilidad, maquetación y entrega de prototipos documentados.

DWEC (Desarrollo en Entorno Cliente): Fundamentos de JavaScript moderno, interacción con el DOM, gestión de eventos y consumo de datos.

DWES (Desarrollo en Entorno Servidor): Programación backend con PHP, manejo de sesiones, persistencia y conexión a bases de datos.

Entorno y Herramientas: Uso de Git/GitHub para control de versiones y Docker/Docker Compose para aislar el entorno de ejecución del servidor.

Cómo levantar el entorno local (DWES)

Para ejecutar los scripts y servicios de servidor:

Entra en el directorio de configuración:

cd DWES/Docker


Levanta los contenedores con Docker Compose:

docker compose up -d


Accede desde el navegador a http://localhost (o el puerto configurado).
