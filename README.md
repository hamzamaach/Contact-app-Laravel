<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Contact-App

Ce projet est une application Laravel permettant de gérer des contacts. Il propose des fonctionnalités telles que l'affichage, la création et l'affichage détaillé des contacts. De plus, il utilise des contrôleurs, des vues et des middlewares pour organiser et gérer les différentes parties de l'application.

## Installation
Pour installer ce projet sur votre machine locale, suivez les étapes suivantes :

1. Assurez-vous que vous avez Laravel installé sur votre machine.
2. Clonez ce référentiel GitHub en utilisant la commande suivante :

   ```bash
   git clone git clone https://github.com/hamzamaach/Contact-App.git 
   ```

3. Accédez au répertoire du projet :

    ```bash
    cd Contact-App
    ```
4. Installez les dépendances du projet à l'aide de Composer :

    ```bash
    composer install
    ```
5. Copiez le fichier d'environnement .env.example et renommez-le en .env. Vous pouvez le faire en utilisant la commande suivante :

    ```bash
    cp .env.example .env
    ```
6. Générez une nouvelle clé d'application :

    ```bash
    php artisan key:generate
    ```
7. Configurez votre base de données dans le fichier .env. Vous devrez fournir les informations de connexion à votre base de données.


8. Exécutez les migrations de la base de données pour créer les tables requises :

    ```bash
    php artisan migrate
    ```
9. Lancez le serveur de développement :

    ```bash
    php artisan serve
    ```
   
Une fois le serveur en cours d'exécution, vous pouvez accéder à l'application dans votre navigateur à l'adresse `http://localhost:8000`.

## Routes et vues
Dans cette partie, nous avons intégré le modèle HTML dans notre application en suivant les étapes 1 à 3 :

1. Nous avons créé un projet Laravel nommé `"Contact-App"`.

2. Nous avons créé un fichier `main.blade.php` dans le répertoire `resources/views/layouts` qui contient la barre de navigation.

3. Nous avons créé trois fichiers dans le répertoire `resources/views/contacts` :

- `create.blade.php`
- `index.blade.php`
- `show.blade.php`

Dans ces fichiers, nous avons appelé la barre de navigation créée dans `main.blade.php` en utilisant la directive `@extends`.

De plus, nous avons défini les routes suivantes :

- __/contacts__ : redirige vers la vue `index` et passe la liste des contacts à la vue en utilisant la fonction `getContacts`. Cette route est nommée `'contacts.index'`. Les contacts sont affichés dans un tableau à l'intérieur de la section `content`.


- __/contacts/create__ : redirige vers la vue `create` qui contient un formulaire permettant de créer un nouveau contact. Cette route est nommée `contacts.create`. Le formulaire est affiché dans la section `content`.


- __/contacts/{id}__ : redirige vers la vue `show` en prenant l'identifiant d'un contact en paramètre. Si le contact est trouvé, il est affiché, sinon l'application est redirigée vers une page `"Not found"`. Cette route est nommée `contacts.show`. Les détails du contact sont affichés dans la section `content`.

De plus, certaines fonctionnalités ont été déplacées dans des sous-vues en utilisant la directive `@include`. Deux vues ont été créées : `_company-selection.blade.php` et `_filter.blade.php`. La vue `_company-selection.blade.php` affiche une liste déroulante des compagnies, tandis que la vue `_filter.blade.php` intègre la sélection des compagnies et la zone de recherche. La directive `@includeUnless(empty($companies), 'contacts._company-selection')` est utilisée pour afficher la sélection des compagnies uniquement si la liste n'est pas vide.

Si la liste des contacts est vide, le message `"Aucun contact trouvé"` est affiché. La directive `@each` est utilisée pour afficher la liste des contacts en utilisant la vue `_contact.blade.php`. Si la liste des contacts est vide, la vue `_empty.blade.php` est affichée avec le message `"Aucun contact trouvé"`.

Enfin, la page d'accueil est réalisée en utilisant la vue `home.blade.php`.

## Contrôleurs
Les contrôleurs suivants ont été créés pour gérer les différentes fonctionnalités de l'application :

- __ContactsController__ : contient les méthodes `index`, `create` et `show` pour gérer l'affichage des contacts, la création de nouveaux contacts et l'affichage détaillé d'un contact. Les routes correspondantes utilisent les méthodes du contrôleur.


- __AboutController__ : créé avec l'option `invoke` pour gérer la page "À propos". Il est utilisé pour la route `/about`.


- __CompanyController__ : créé avec l'option `resource` et sa route est définie à l'aide de la méthode `resource`.


- __TagsController__ et __TaskController__ : créés avec l'option `resource` pour gérer les fonctionnalités liées aux tags et aux tâches. Les deux contrôleurs sont regroupés dans une route spécifiée à l'aide de la méthode `resource` avec un tableau associatif contenant les contrôleurs.


- __ActivityController__ : créé avec l'option `resource` pour gérer les activités. Sa route est définie à l'aide de la méthode `resource`.


- __ContactNoteController__ : créé avec l'option `resource` et sa route est définie à l'aide de la méthode `resource`. La méthode `shallow()` est utilisée pour enregistrer la ressource de manière peu profonde.

## Middlewares
Les middlewares suivants ont été créés pour gérer les différentes vérifications et filtrages dans l'application :

- __CheckContact__ : vérifie si le contact est un administrateur. S'il l'est, l'application est redirigée vers la vue `contacts`, sinon une vue d'erreur est affichée.


- __CheckContactActif__ : vérifie si le statut du contact est actif (statut = 1). Les mêmes étapes que pour `CheckContact` sont suivies.


- __ContactsAdminController__ : contient la méthode index qui redirige vers la vue `contacts`. Il utilise le middleware `check-user`. La route correspondante est `/ContactAdmin`.

Les deux middlewares `CheckContact` et `CheckContactActif` sont enregistrés en tant que groupe middleware avec le nom `check`.

