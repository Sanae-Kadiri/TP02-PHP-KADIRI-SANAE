# TP02-PHP-KADIRI-SANAE

# TP 02 PHP - Programmation Web 2

- Nom : KADIRI
- Prénom : SANAE
- Groupe : 03

## Liste des exercices
- Exercice 1 à 9 : Solutions des exercices PHP
- Exercice 10 : Formulaires GET et POST

## Exercice 2
`$note` et `$Note` sont deux variables differentes car les noms de variables en PHP sont sensibles a la casse (majuscules/miniscules).
Noms valides : `$a` , `$_a`, `$a_a`, `$AAA` , `$a1`
Noms invalides : 
-`$a!`: le caractere `!` n'est pas autorise 
-`$1a`: un nom de variable ne peut pas commencer par un chiffre 

## Exercice 4 
Avec `echo`, `true` s'affiche `1` et `false` n'affiche rien (chaine vide).

Avec `var_dump()`, on voit clairement `bool(true)` et `bool(false)`.

## Exercice 5
| Valeur testée | Message |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

## Exercice 10

- Avec GET, les valeurs apparaissent dans l'URL après le `?`
  (ex. `ex10_get.php?nom=KADIRI&prenom=SANAE&groupe=G3`).
- Avec POST, les valeurs n'apparaissent pas dans l'URL : elle reste `ex10_post.php`.
