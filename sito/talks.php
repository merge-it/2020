<?php

require_once('utils.php');

$talks = [
    'cloud-privato' => [
        'title' => 'Cloud Privato',
        'author' => 'Davide Mainardi',
        'date' => 'Sabato 4 Aprile - 10:00',
        'contents' => [
            "Il talk si prefigge di illustrare le tecnologie e le metodologie per la creazione e configurazione di un proprio server privato.",
            "La prima parte si focalizza sulla storia recente di internet e descrive come esso sia completamente cambiato. Il software libero ed open source e le risorse quasi illimitate dei grandi colossi del web (Google, Microsoft, Apple, ecc.) hanno permesso la creazione di innumerevoli servizi: dalla posta elettronica alla gestione dei contatti e calendari, dal backup automatico sul cloud alla condivisione di video e documenti.",
            "Dopo la definizione (e l'interpretazione) del termine \"cloud\" vengono presentate le tecnologie necessarie ad ottenere l'indipendenza tecnologica: la configurazione di un proprio server. Sono elencati in dettaglio i software, gli strumenti e le soluzioni da utilizzare.",
            "L'ultima parte è dedicata alla descrizione di un caso pratico e reale, ovvero la configurazione di tre macchine ad uso aziendale dal 2010 ad oggi.",
        ],
    ],

    'developersitalia' => [
        'title' => 'Developers Italia',
        'author' => 'Leonardo Favario',
        'date' => 'Sabato 4 Aprile - 10:00',
        'contents' => [
            "Developers Italia (<a href=\"https://developers.italia.it/\">https://developers.italia.it/</a>), progetto curato dal Dipartimento per la Trasformazione Digitale in collaborazione con AgID, è la community italiana degli sviluppatori di servizi pubblici digitali. La community unisce privati cittadini, funzionari di Pubbliche Amministrazioni e rappresentanti di imprese che operano sul territorio i quali, giornalmente, contribuiscono al processo di trasformazione digitale del paese.",
            "L'approccio è aperto, trasparente, collaborativo: tutto il codice è sviluppato direttamente in open source. Chiunque può dare una mano.",
            "Inoltre, Developers Italia è il fulcro del nuovo modello di riuso introdotto dalle linee guida su acquisizione e riuso di software per le pubbliche amministrazioni italiane.",
        ],
    ],

    'hackerspace' => [
        'title' => 'Hackerspace Design Pattern',
        'author' => 'Sebastiano Mestre',
        'date' => 'Sabato 4 Aprile - 12:00',
        'contents' => [
            "Come FARE un Hackerspace? Brevi risposte alle domande più frequenti - secondo la teoria \"classica\" e l'esperienza maturata all'Hackerspace Mittelab di Trieste!",
        ],
    ],

    'wiki-scuola' => [
        'title' => 'Wiki* per la Scuola',
        'author' => 'Matteo Ruffoni',
        'date' => 'Sabato 4 Aprile - 10:40',
        'contents' => [
            "Ottimizzare la partecipazione massiva di studenti alle wiki come sussidio didattico, favorendo l'apprendimento esperienziale e condiviso e migliorando le competenze di produzione intelletuale.",
        ],
    ],

    'siti-scolastici' => [
        'title' => 'Siti Scolastici',
        'author' => 'Marco Buttarini',
        'date' => 'Sabato 4 Aprile - 12:00',
        'contents' => [
            "I siti scolastici sono il punto di riferimento della relazione tra scuola, studenti e famiglie.",
            "Per questo il MIUR ha deciso, insieme a Designers Italia – Team per la Trasformazione Digitale – di creare un modello di siti scolastici a disposizione di tutti.",
            "Il progetto durato 2 anni è concluso ed ha prodotto materiale utilissimo alle scuole: un documento di architettura dell'informazione, il design, l'html e il tema WordPress che integra il tutto nel cms più utilizzato.",
            "Nel talk racconteremo l'esperienza e le tecniche adottate, le sfide e i problemi affrontati e le future evoluzioni del progetto.",
            "<a href=\"https://designers.italia.it/progetti/siti-web-scuole/\">https://designers.italia.it/progetti/siti-web-scuole/</a>"
        ],
    ],

    'opendatahub' => [
        'title' => 'Open Data Hub',
        'author' => 'Patrick Ohnewein',
        'date' => 'Domenica 5 Aprile - 10:40',
        'contents' => [
            "Come aziende possono utilizzare un infrastruttura basata su Open Standards e Software Libero per creare un'infrastuttura digitale per abilitare l'innovazione nei settori turismo e mobilità.",
            "Nel talk vengono presentati esperienze su come è stata creata una community di aziende per lo sviluppo del progetto Open Data Hub",
            "<a href=\"https://opendatahub.bz.it\" target=\"_blank\">https://opendatahub.bz.it/</a>",
        ],
    ],

    'contribuire-open-source' => [
        'title' => 'Contribuire all\'Open Source',
        'author' => 'Daniele Scasciafratte',
        'date' => 'Domenica 5 Aprile - 10:00',
        'contents' => [
            "Tutti i progetti dell'ecosistema Open hanno gli stessi problemi o necessità e riguardano vari aspetti: traduzione, comunicazione, promozione, organizzazione, programmazione, segnalazioni e così via.",
            "Vediamo i punti salienti basandoci sul mio libro gratuito e open source riguardo al contribuire... all'open source basato sulla mia esperienza nei molti progetti e comunità di cui faccio parte o ho contribuito.",
        ],
    ],

    'common-voice' => [
        'title' => 'Common Voice',
        'author' => 'Daniele Scasciafratte',
        'date' => 'Domenica 5 Aprile - 10:40',
        'contents' => [
            "Il progetto Common Voice per la creazione di un dataset di lingua italiana per il riconoscimento vocale e la creazione del modello di pubblico dominio di machine learning utilizzando Mozilla DeepSpeech.",
            "Common Voice sono due progetti distinti e approfondiremo come funzionano insieme e permettono alla nostra lingua e paese di poter utilizzare una tecnologia completamente libera senza necessità di internet!",
        ],
    ],

    'physiradio' => [
        'title' => 'PhysiRadio',
        'author' => 'Andrea Trentini',
        'date' => 'Domenica 5 Aprile - 11:20',
        'contents' => [
            "Open Data, data that can be used openly in terms of license, is a technical concept that is also becoming a political movement since datasets (on environment, businesses, etc.) can be used to verify/falsify (ex ante and ex post) governmental policies, i.e., Open Data can be a means to \"civic accountability\". Any citizen, with enough knowledge, can retrieve data (that can be better trusted if coming from third party sources) from public servers and study the effect of laws such as a change of tobacco taxation on number of smokers, the banning of some types of vehicles on air quality, the introduction of specific legislation to lower the amount of unoccupied people, etc...",
            "But data analysis is not for the masses: the average citizen either does not know the existence of Open Data, or he/she is not able to extract information from a dataset. Here the challenge is to raise interest, curiosity and thus the need for knowledge in the common person. Even if he/she will eventually decide not learn how to analyse datasets, at least he/she will have had the chance to reason about the possibility to leverage (possibly with the help of a data scientist) his/her right to \"civic accountability\". In this context data physicalization may be of some help: by creating a familiar device (e.g., a radio) that \"physicalizes\" some publicly available data, the authors are trying to raise curiosity about the source and availability of some data (e.g., weather status) and the techniques underlying data access, extraction and analysis.",
            "This paper presents the prototype of a desktop \"PhysiRadio\" (a Wemos ESP8266 Internet-of-Things MCU encased inside a \"vintage\" 1940 Magneti Marelli speaker) that plays Internet streams accordingly to a mapping between weather condition, mood and musical genre inspired by [27]. The authors chose to physicalize weather data for this first prototype because it is simple and easy to understand for anyone: there is little interpretation on the semantics of \"rain\", \"sun\", \"clouds\", etc. Moreover, the association between weather, mood and musical genre is (subjective but) understandable by non technical people. I.e., this device internal workings can be almost fully grasped by the average citizen, except for the implementation/programming details, it can be used as a conversation starter. After some field experiment PhysiRadio can be adapted (i.e., programmed) to musicalize other interesting data such as:",
            "- CPU load and/or network traffic (interesting to sysadmins)",
            "- city traffic conditions/train timings (if you need to get out of your home at the right time, but you're shaving/bathing\/etc.)",
            "- cooking times (if you need a musical oven timer)",
            "The authors decided for the musicalization by studying current works on data physicalization: hearing is less used than sight (the most used human sense) or touch. But sound, and music in particular, conveys a lot of information that can be received \"in background\", i.e., without active attention.",
            "PhysiRadio is currently being field-tested among relatives, coworkers, students and friends through a qualitative information gathering process. The field test data will be useful to measure the efficacy in:",
            "- conveying information (i.e., verifying the mapping)",
            "- raising curiosity about internals and Open Data techniques",
            "Keywords: physicalization, opendata, Internet of Things, musicalization",
        ],
    ],

    'domotica' => [
        'title' => 'Domotica',
        'author' => 'Francesco Tucci',
        'date' => 'Domenica 5 Aprile - 11:20',
        'contents' => [
            "Fare un sistema che controlla casa propria, senza dipendere da servizi terzi, imparando da zero a programmare in Python, usando Arduino, RaspberryPi ed ESP8266. Tutto open source, si trova su <a href=\"http://www.ladomoticafaidame.it\">www.ladomoticafaidame.it</a>.",
        ],
    ],

    'summary-plenaria' => [
        'title' => 'Summary Riunione Plenaria',
        'author' => 'Roberto Guido',
        'date' => 'Domenica 5 Aprile - 12:00',
        'contents' => [
            "Dopo una serata passata insieme ed una notte di sonno, facciamo il punto sulla <a href=\"/plenaria.php\">sessione plenaria</a> prevista per sabato pomeriggio e vediamo come attivarci empiricamente.",
        ],
    ],
];


if (!isset($_GET['id'])) {
    header('Location: /');
    exit();
}

$identifier = $_GET['id'];
if (!isset($talks[$identifier])) {
    header('Location: /');
    exit();
}

$data = $talks[$identifier];

community_talk([
    'subtitle' => $data['title'],
    'details' => [
        $data['author'],
        $data['date'],
    ],
    'contents' => $data['contents'],
]);
