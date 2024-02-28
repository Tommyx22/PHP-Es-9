All'interno della cartella di lavoro lanciare il seguente comando:

docker run --rm  --name myPhp -v ./:/var/www/html -p 8080:80 benvenuti/php-composer:1.0

- Creare il file Alunno.php che implementi la classe Alunno con gli attributi protetti per nome, cognome, eta.
Implementare i metodi selettori (getters e setters), e un metodo di stampa a video degli attributi.

- Creare il file index.php che creai un array di oggetti Alunno ed esegua la stampa dei singoli elementi.
