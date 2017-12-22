# Quels cas d'utilisations ? 

- Un adherent peut se connecter
- Accéder à la liste de ses nichoirs
- Ajouter un nichoir 
- Supprimer un nichoir

# Notes 

Pour l'ajout de nichoir, ne pas mettre un lien de photo encodé en base64,

Un simple lien vers une image sur internet en png / jp suffit

# Etape 1 (config bdd) 

Modifier **$dbParams** dans **/server/bootstrap.php** 

```

$dbParams = [
    'driver' => 'pdo_mysql', // le sgbd
    'host' => '127.0.0.1', // l’adresse ip du serveur bdd
    'charset' => 'utf8',
    'user' => 'root', // login d’accés
    'password' => '', // mdp
    'dbname' => 'lpo', // nom BDD
];
```

# Etape 2 (créer la bdd vide)

Créer une base de données avec le nom **lpo** sur mysql

# Etape 3 (Lancer le client) 

``` bash
cd client
composer install // ou php composer.phar install
php -S localhost:8081
```

# Etape 4  (Lancer le serveur)

``` bash
cd server
composer install // ou php composer.phar install
"./vendor/bin/doctrine.php.bat" orm:schema-tool:create //genere le schema bdd
php -S localhost:8082
```


# Etape 5 (Executer les fixtures)

Pour executer les fixtures, il suffit d'accéder a n'importe quelle route coté serveur

Ex : **http://localhost:8082/nichoirs**

Vérifier que les fixtures ont bien été ajoutés en base (table nichoirs et adherent)


# Etape 6 (Fin client)
 
Accéder à l'url **http://localhost:8081**

Se connecter avec un des comptes en base

ex : polo:polo (login:password)