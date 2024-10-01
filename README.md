NB: non essendo sicuro se lo stato della repo "laravel-model-controller" risulti "consegnato", creo la seguente repo poiché così facendo riesamino tutti i passaggi.

/*Esercizio di oggi:
nome repo: laravel-model-controller
Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
1 - Create un nuovo progetto Laravel 9.2
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
3 - Importate nel vostro database la tabella movies in allegato
4 - inserite le vostre credenziali per il database nel file .env
5 - Create un model Movie
php artisan make:model Movie
6 - Create un controller che gestirà la rotta /
php artisan make:controller Guest/PageController
7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
BONUS:
Stilare il layout nei dettagli con Sass*/

/*CONSEGNA*/

- creo il progetto base di laravel
- in phpMyAdmin creo un database intitolato database laravel_model_controller-extra
- sempre in phpMyAdmin, importo la tabella movies in allegato nel mio database
- modifico il file .env per inserire le mie credenziali
- creo il model Movie.php tramite il comando php artisan make:model Movie