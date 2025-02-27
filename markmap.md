# Alumnator Project
## PWA
### Recursos
- Llamadas en el meta
- manifest.js
- iconos
- service-worker.js (pendiente)

## _config.php
### Variables y Arrays
- Constantes y Variables globales
- Elementos de menús
  - Menú principal
  - Menú legal
  - Menú redes sociales (pendiente)
### Base de Datos
- Consultas que devuelven resultados (pendiente)
- Consultas sin retorno (pendiente)
### Funciones Reutilizables
#### Debugs (pendiente)
- Imprime texto si debug está activo
- Imprime array si debug está activo
- Muestra elementos cargados
#### Otros
- Cargas tipo import (pendiente)
- Querys mySQL (pendiente)
- Constructor de menús (implementado)

## Formularios
### $f_curso
- Arreglo de campos:
  - Nombre curso
  - Profesor
  - Descripción
  - Fecha inicio
  - Fecha fin
  - Duración
  - Contraseña
  - Prácticas
### constructor_formularios()
- Crea un formulario
- Itera sobre $f_curso
  - Usa simpli() para definir ids y nombres de inputs

## Funciones
### simpli($texto)
- Convierte a minúsculas
- Elimina tildes y caracteres especiales (usa iconv)
- Reemplaza espacios y caracteres no deseados por guiones bajos
- Elimina guiones bajos al inicio y final
- Retorna el slug resultante

## Login
- Validación de usuario y contraseña
- Gestión de sesión para acceso a área privada

## Contacto
- Envío de email

## style.css
- Menú superior responsive (hamburguesa)
- Menús footer o inferiores no responsive

## Base de Datos
### ALUMNOS
- id alumno
- nombre (TEXT)
- apellido (TEXT)
- dni (TEXT)
- fecha nacimiento (DATE)
- email (EMAIL)
- foto (FILE)
### CURSO
- id curso
- nombre curso (TEXTO)
- descripción (TEXTAREA)
- fecha inicio (DATE)
- fecha fin (DATE)
- duración (NUMBER)
- foto curso (FILE)
- prácticas (CHECKBOX)
### CENTRO
- id centro
- nombre centro (TEXT)
- dirección (TEXT)
- teléfono (NUMBER)
- sitio web (URL)
- gps (TEXT)
- responsable (TEXT)
### PROFESORES
- id profesores
- nombre profesor
- apellidos profesor
- asignatura profesor
- email profesor
- teléfono profesor
- foto profesor