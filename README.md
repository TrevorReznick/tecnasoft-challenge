# tecnasoft-challenge
Gestionale Azienda XYZ
Questo progetto è stato creato per gestire le operazioni richieste dall'Azienda XYZ, in particolare la gestione delle anagrafiche dei servizi, dei costi e dei listini di vendita per singolo Point, l'attivazione/disattivazione della vendita di servizi su un determinato Point e la consultazione dello storico delle vendite di ogni articolo.

Diagramma ER
Il diagramma ER seguente rappresenta le entità del database relative alle operazioni descritte:

Le entità rappresentate sono le seguenti:

ServiceRegistry: rappresenta l'anagrafica dei servizi disponibili;
PointRegistry: rappresenta l'anagrafica dei Point con cui l'Azienda XYZ ha convenzioni per l'erogazione dei servizi;
PriceList: rappresenta l'elenco dei prezzi per ogni servizio disponibile per ogni Point;
Purchase: rappresenta l'acquisto di un servizio da parte di un utente tramite il sito web dell'Azienda XYZ;
PurchaseItem: rappresenta l'acquisto di un singolo servizio da parte di un utente;
Invoice: rappresenta la fattura emessa dal Point ad Azienda XYZ a fine mese per i costi sostenuti.
