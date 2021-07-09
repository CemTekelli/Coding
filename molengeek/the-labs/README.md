<p align="center">LABS - coding 17 project</p>



## Labs
Le Labs est un projet Back-End réalisé au cours d'une formation intensive chez MolenGeek.<br/>
Ceci est une simulation d'un vrai projet client. <br/>
Le projet consiste à installer un template et lui configurer un Back Office simple, intuitif avec toutes les fonctionnalités demandées dans un cahier des charges. <br/>
Le back office avec ses fonctionnalités est accessible pour les membres de la société c-à-d l'Admin, Le webmaster et le rédacteur. <br/>
Les autres membres, autrement dis, les visiteurs peuvent se créer un compte et ont accès à une page "Profil" dans laquelle ils peuvent éditer le compte perso ( Photo perso, MDP, description,...)

## Comptes des membres disponible

| **Email**                 | **Password**          | **Rôle**
| ---------------------     | --------------------  | -------------
| admin@exemple.com         | cece                  | Admin
| webmaster@exemple.com     | cece                  | WebMaster
| redacteur@exemple.com     | cece                  | Redacteur 1
| redacteur2@exemple.com    | cece                  | Redacteur 2
| membre@exemple.com        | cece                  | Un membre/ Visiteur


## Installation

**Étapes à suivre :**

- Installation des packagings existant.
```
npm i && composer i
```
- Copier le point *.env*, mettez vos données pour la base de données et générez une key
```
php artisan key:generate
```


## License

Copyright **MolenGeek** By *Cem Tekelli*. 2021.
