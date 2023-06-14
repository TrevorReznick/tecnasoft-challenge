# tecnasoft-challenge

# Gestionale Web Azienda XYZ
Questo progetto è stato creato per gestire le operazioni richieste dall'Azienda **XYZ**, in particolare la gestione delle anagrafiche dei servizi, dei costi e dei listini di vendita per singolo Point, l'attivazione/disattivazione della vendita di servizi su un determinato Point e la consultazione dello storico delle vendite di ogni articolo.

# Diagramma ER
Il diagramma ER seguente rappresenta le entità del database relative alle operazioni descritte:

Le entità rappresentate sono le seguenti:

**ServiceRegistry**: rappresenta l'anagrafica dei servizi disponibili;
**PointRegistry**: rappresenta l'anagrafica dei Point con cui l'Azienda XYZ ha convenzioni per l'erogazione dei servizi;
**PriceList**: rappresenta l'elenco dei prezzi per ogni servizio disponibile per ogni Point;
**Purchase**: rappresenta l'acquisto di un servizio da parte di un utente tramite il sito web dell'Azienda XYZ;
**PurchaseItem**: rappresenta l'acquisto di un singolo servizio da parte di un utente;
**Invoice**: rappresenta la fattura emessa dal Point ad Azienda XYZ a fine mese per i costi sostenuti.

# files

il repository contiene anche un dump del database MySql usato per generare le **migrations**
si possono trovare imprecisioni su **integrità referenziali** e relazioni di **join**, ma si spera il risultato finale vada bene per lo scopo del lavoro


# Installazione laravel

Assicurati di avere installato PHP e un server web (come Apache o Nginx) sul tuo computer. Inoltre, assicurati di avere installato Composer, che è il gestore di dipendenze di PHP.
Scarica o clona il progetto Laravel dal repository Git o da un archivio ZIP.
Apri una finestra del terminale nella directory del progetto Laravel.
Esegui il comando composer install per installare tutte le dipendenze del progetto.
Crea un file .env nella root del progetto, copiando il contenuto del file .env.example e configurando le variabili d'ambiente come ad esempio la connessione al database.
* Esegui il comando php artisan key:generate per generare una nuova chiave per l'applicazione Laravel.
* Esegui il comando php artisan migrate per eseguire le migrazioni del database e creare le tabelle necessarie per il funzionamento dell'applicazione.
* Esegui il comando php artisan serve per avviare il server web di sviluppo di Laravel.
* Apri il browser e visita l'URL http://localhost:8000 per accedere all'applicazione.
