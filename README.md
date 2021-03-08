# OBJECTIF DU PROJET :

1. MISE EN PLACE D'UNE API EN UTILISANT LARAVEL NIVEAU BACK

2. LE BACK LARAVEL DOIT LANCER DES MIGRATIONS POUR LA BASE DE DONNEES.

3. LES DONNEES COMMUNIQUEES SONT EN FORMAT JSON.

### Pour que le projet fonctionne vous devez :

1. telecharger un IDE : de preference Visual studio code ou phpstorm.

2. ouvrir le projet dans l'IDE de votre preference.

3. Avoir composer au préalable installé.

4. Avoir php 7.2 ou 7.3 ou 7.4 au préalable installé dans le but d'utiliser le serveur de developpement intégré de PHP pour servir l'application (projet).

5. lancer la commande : php artisan serve, cette commande  permet de demarrer un serveur de developpement.

6. Vous devez configurer le fichier .env dans le but d'établir la communication entre le projet et votre base de données.

7. Lancer la commande : php artisan migrate pour lancer les migrations.

8. Lancer la commande : composer dump-autoload pour regenerer le chargeur automatique de composer.

9. Lancer la commande : php artisan db:seed pour ensemencer la base de données.  

10. Avoir POSTMAN au préalable installé pour pouvoir tester les requetes. 

### TESTE : SOUS FORME D'UN JSON

#### Exemples des requetes

1. type : post, url exigé : /api/register

##### donnée : 
            {
                "login" : "Rowandja_d",
                "email" : "daniella@gmail.com",
                "name" : "Rowandja",
                "firstname" : "daniella",
                "age" : 21,
                "password" : "123456"
            }

##### N.B : 
tous les champs sont required et seul le champ email qui exige un email.

##### Reponses :
201 en cas du succès et 400 en cas d'erreur.

2. type : post, url exigé : /api/auth

##### donnée :

            {
                 "email" : "daniella@gmail.com",
                 "password" : "123456"
            }
            
##### Reponses :
200 en cas du succès et 400 en cas d'erreur.

3. type : get, url exigé : /api/users

##### Reponses : 
200 : JSON Array(Users) exemple du resultat :

    [   
        {
            {
                "id": 2,
                "username": "Rowandja_d",
                "email": "daniella@gmail.com",
                "name": "Rowandja",
                "firstname": "daniella",
                "age": 21,
                "created_at": "2021-03-05T08:38:09.000000Z",
                "updated_at": "2021-03-05T08:38:09.000000Z"
            }
        }
    ]
        
4. type : get, url exigé : /api/restaurants

##### Reponses :
200 : JSON Array(Restaurants) exemple du resultat :

    [
        {
            "id": 1,
            "name": "MacDonald's",
            "description": "Classic, long-running fast-food chain known for its burgers, fries & shakes.",
            "grade": 3.2,
            "localization": "Centre Commercial Grand Ciel, 30 Boulevard Paul Vaillant Couturier, 94200 Ivry-sur-Seine",
            "phone_number": "01 49 60 62 60",
            "website": "macdonalds.fr",
            "hours": "Monday-Saturday 9AM–9PM, Sunday Closed",
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "StarBuck",
            "description": "Coffee.",
            "grade": 4.3,
            "localization": "Centre Commercial Grand Ciel, 30 Boulevard Paul Vaillant Couturier, 94200 Ivry-sur-Seine",
            "phone_number": "01 49 60 62 60",
            "website": "starbuck.com",
            "hours": "11AM-9:30PM",
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
    ]
    
5. type : get, url exigé : /api/restaurants/{id}

##### Reponses :
200 : JSON Array(Restaurant) exemple de la requetes  /api/restaurants/1 :

        {
            "id": 1,
            "name": "MacDonald's",
            "description": "Classic, long-running fast-food chain known for its burgers, fries & shakes.",
            "grade": 3.2,
            "localization": "Centre Commercial Grand Ciel, 30 Boulevard Paul Vaillant Couturier, 94200 Ivry-sur-Seine",
            "phone_number": "01 49 60 62 60",
            "website": "macdonalds.fr",
            "hours": "Monday-Saturday 9AM–9PM, Sunday Closed",
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
        
6. type : post, url exigé : /api/restaurants

##### donnée :

        {
            "name": "ETNA",
            "description": "Ecole Technologies et Numeriques Avancées",
            "grade": 7.2,
            "localization": "Centre Commercial Grand Ciel, 54 Rue Grandcoing , 94200 Ivry-sur-Seine",
            "phone_number": "07 59 60 62 60",
            "website": "ETNA.fr",
            "hours": "Monday-Saturday 9AM–6PM, Sunday Closed"
        }
        
##### Reponses :
201 en cas du succès et 400 en cas d'erreur.

7. type : put, url exigé : /api/restaurant/{id}

##### donnée :

/api/restaurant/3

        {
             "name": "ETNA-SCHOOL-OF-WEB"
        }
        
##### Reponses :
200 en cas du succès et 400 en cas d'erreur.

8. type : delete, url exigé : /api/restaurant/{id}

##### donnée :

/api/restaurant/4

##### Reponses : 
200 en cas du succès et 400 en cas d'erreur.

9. type : get, url exigé : /epi/menus

##### Reponses :

200 : JSON Array(Menus) exemple du resultat :

    [
        {
            "id": 1,
            "name": "Menu A5",
            "description": "8 sushis, 4 makis,  4 calofornia rolls",
            "price": 16.5,
            "restaurant_id": 1,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Black Coffe",
            "description": "Black Coffee",
            "price": 3,
            "restaurant_id": 2,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
    ]
    
10. type : get, url exigé : /api/menus/{id}

##### Reponses : 

200 : JSON Array(Menu) exemple du resultat /api/menus/1 :

        {
            "id": 1,
            "name": "Menu A5",
            "description": "8 sushis, 4 makis,  4 calofornia rolls",
            "price": 16.5,
            "restaurant_id": 1,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
        
11. type : get, url exigé : /api/restaurants/{id}/menus

#### Reponses :

200 : JSON Array(Menus) exemple du resultat /api/restaurants/1/menus :

    [
        {
            "id": 1,
            "name": "Menu A5",
            "description": "8 sushis, 4 makis,  4 calofornia rolls",
            "price": 16.5,
            "restaurant_id": 1,
            "created_at": null,
            "updated_at": null,
            "deleted_at": null
        }
    ]
    
12. type : post, url exigé : /api/restaurant/{id}/menus

##### Données : 

        {
            "name": "Nouveau Menu",
            "description": "Pomme de terre, Canard,  Sauce au citron",
            "price": 50.5,
            "restaurant_id": 1
        }
        
##### Reponses : 

201 en cas de succès et 400 en cas d'echec exemple du resultat /api/restaurants/1/menus :

13. type : put, url exigé : /api/menus/{id}

##### Donnée :
/api/menus/1

        {
            "name": "Menu a jour"
        }
        
##### Reponses :

200 en cas du succès et 400 en cas d'erreur

14. type : delete, url exigé : /api/menus/{id}

##### donnée :

/api/menus/1

##### Reponse :

200 en cas du succès et 400 en cas d'erreur.


