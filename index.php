<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php-badwords</title>

</head>
<body>
    <?php

$testo = 'La crociata lituana fu un conflitto tra il Granducato di Lituania e lOrdine teutonico, assistito dallOrdine livoniano, due associazioni religiose cavalleresche, che secondo varie ricostruzioni durò dal 1283 al 1410. Le cause che la scatenarono furono diverse, non ultime quelle di tipo commerciale e politico, ma il pretesto ufficiale fu quello di completare lopera di cristianizzazione delle regioni baltiche, in particolare la Lituania.

Il Granducato rappresentava uno degli ultimi Stati che nellEuropa del XIII secolo non aveva ancora abbracciato il cristianesimo, essendo rimasto ancorato ai riti pagani tradizionali. Secondo le cronache, dal 1283 cominciarono le campagne in direzione della Lituania eseguite dagli ordini religiosi, i quali erano convinti che il conflitto non si sarebbe trascinato avanti a lungo. Invece, i combattimenti si rivelarono difficili durante il periodo in cui rimase al potere il granduca Vytenis (1295-1316), infruttuosi in concomitanza con il mandato di Gediminas (1316-1345) e dai risultati alterni quando a controllare la Lituania fu il duumvirato composto dai fratelli Algirdas e Kęstutis (1345-1382). Consapevoli della minor capacità di reclutamento rispetto ai crociati, che richiamavano combattenti da varie parti dEuropa, oltre che della maggiore arretratezza in campo bellico, i baltici tergiversarono più volte compiendo dubbie promesse di conversione, che arrestarono talvolta il conflitto su volontà della Santa Sede e limitarono la media praticamente annuale di campagne compiute dalle due fazioni contendenti nei rispettivi territori amministrati.

Una svolta importante avvenne nel 1386, quando il granduca Jogaila accettò di convertirsi al cristianesimo in cambio della corona polacca, divenendo da allora conosciuto come Ladislao II Jagellone. Linevitabile inserimento di questa nuova potenza nel conflitto compromise la forza dei teutonici, i quali con il tempo stavano già patendo la penuria di reclute per via del minore afflato degli europei alla chiamata alle crociate. Inoltre, la questione religiosa sembrò aver perso il suo ruolo, quando diverse volte, tra la fine del Trecento e linizio del Quattrocento, i crociati e i lituani combatterono assieme contro nemici comuni o fazioni ribelli da stroncare.

Unultima novità arrivò nel 1410, in occasione della celebre battaglia di Grunwald: in quel frangente, la Polonia e la Lituania guidata dal cugino di Ladislao II, Vitoldo, surclassarono definitivamente i teutonici, compromettendo la supremazia di questi ultimi nellarea baltica.[1] Tuttavia, essendo riusciti a ottenere condizioni migliori del previsto al momento della resa, i rappresentanti dello Stato monastico riuscirono a evitare una disfatta totale, anche se era chiaro, dopo le successive e fugaci lotte che avvennero tra la guerra della fame (1414) e la firma del trattato di Melno (1422), che non avrebbero potuto competere con la nascente alleanza polacco-lituana.

A livello religioso, la conseguenza principale del conflitto riguardò la cristianizzazione della Lituania, conclusasi, almeno formalmente, con listituzione della diocesi della Samogizia nel 1417. Già durante la crociata i granduchi compresero bene che lisolamento religioso non poteva durare per sempre, ma non adottarono nella prassi provvedimenti restrittivi verso chi non aderiva al credo pagano, con il risultato che sul territorio da loro amministrato convissero comunità ebraiche, musulmane e cristiane, perlopiù ortodosse. Consapevole del rischio di lasciare la Lituania lontana dal cattolicesimo, la Chiesa tentò dunque di sollecitare lopera di conversione nel Granducato, che si rivelò particolarmente celere ovunque dopo il 1410, tranne che in Samogizia, la regione che era stata più esposta alla guerra e che aveva verosimilmente patito più vittime.[2]

Nel corso dei secoli furono introdotte con frequenza armi, tattiche ed equipaggiamenti innovativi. I crociati beneficiarono del maggior afflusso di risorse economiche tramutandolo in una più efficiente dotazione disponibile per i soldati, sfruttando per la prima volta, tra le tante pratiche, la costruzione dei castelli in Europa orientale. I lituani, dal canto loro, abbandonarono il precedente assetto tribale dellapparato militare e si "occidentalizzarono" adottando nuove tattiche, usanze ed equipaggiamenti, nei limiti delle proprie possibilità, per rimanere al passo con lavversario.

Leccezionale trascinamento delle schermaglie rese la crociata lituana una delle più lunghe, complesse ed estenuanti lotte della storia europea.';

echo $testo;

$lunghezza = strlen($testo);

$parola = $_GET['parola'];

$testoModificato = str_replace($parola,'***', $testo);
$lunghezzaModificato = strlen($testoModificato);

?>
<h1>La lunghezza del testo è: <?= $lunghezza;?></h1>
<h2>Inserisci la parola da sotituire con *** nel testo</h2>
<form action="changeWord.php" method="get">
<input type="text" id="parola" name="parola">
</form>
<div>La lunghezza del testo è: <?= $testoModificato;?></div>
<h1>La lunghezza del testo modificato è: <?= $lunghezzaModificato;?></h1>
</body>
</html>

