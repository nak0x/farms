# Concept file for OOP trainning

Car repair station :

Concept :

Jeu de gestion de ferme, le but vas être de gérer une ferme, je recommence avec la ferme la plus basique à chaque lancement et je peut progresser.

Cahier des charges fonctionelle

P1 :
- Un gameManager capable de gérer l'état du jeu, ainsi que le render, les ticks, et les user inputs
- Une class entity qui instanciera touts les élements du jeu, le but pour cette class va être de proposé les fonctions utils pour le manager tel que render, kill, update etc
- Une class farm, qui représente une ferme, incluant l'état de la ferme ainsi que la gestion de workers
- Une class field, qui représent un champ, qui pourra être typé et correspondra à un champ de culture
- Une class barn (étable) qui pourra être typé et correspondra à une étable pour le bétail
- Une class crop, qui représente un type de culture + toute class fille pour chaque type de culture
- Une class livestock, qui représente du bétails + toute class fille pour chaque type de bétail
- Une class worker, qui représente un employé de la ferme.

## Renderer

The renderer react to user action and switch to plurals view witch all have différents UserAction possiblity like.

| TypeOfView   | UserAction    |
|--------------- | --------------- |
| Farm | Add new field; Add new barn; Goto(field_id | barn_id); infos; Back; |
| Field | infos; Harvest; Plant(crop); Watering; Schedule; Back;  |
| Barn | infos; Harvest; Insert(Livestock); Feed; Schedule; Back; |
| infos | Back; |
| Global | Add new farm; Goto(farm_id); infos; |


