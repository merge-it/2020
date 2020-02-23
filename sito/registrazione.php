<?php

require_once('utils.php');
head('Registrazione');

?>

<br>

<section>
    <header>
        <h2>Registrazione</h2>
    </header>
    <div class="content">
        <section>
            <div class="content">
                <p>
                    Per partecipare alle giornate del 2 e 3 aprile a MERGE-it 2020 è gradita la registrazione, per aiutarci con l'organizzazione e l'allestimento, mentre per i workshop - che dispongono di posti limitati - la registrazione è obbligatoria.
                </p>

                <form method="post" action="https://postegg.madbob.org/save/8cad01e0-5655-11ea-b8bb-5f59bb9470ad">
                    <div class="fields">
                        <div class="field half">
                            <label>Nome</label>
                            <input type="text" name="name" value="" required>
                        </div>
                        <div class="field half">
                            <label>Email</label>
                            <input type="email" name="email" value="" required>
                        </div>
                        <div class="field">
                            <label>Attività cui sei interessato/a</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" id="talks_pa" name="talks_pa">
                            <label for="talks_pa">Giovedi 2 Aprile - Sessione Talk al Mattino</label> <a href="/softwarelibero_pubblica_amministrazione.php" target="_blank">(maggiori informazioni)</a>
                        </div>
                        <div class="field">
                            <input type="checkbox" id="workshop_opendata" name="workshop_opendata">
                            <label for="workshop_opendata">Giovedi 2 Aprile - Workshop Open Data</label> <a href="/workshop-opendata.php" target="_blank">(maggiori informazioni)</a>
                        </div>
                        <div class="field">
                            <input type="checkbox" id="workshop_migration" name="workshop_migration">
                            <label for="workshop_migration">Giovedi 2 Aprile - Workshop Migrazioni</label> <a href="/workshop-migrazioni.php" target="_blank">(maggiori informazioni)</a>
                        </div>
                        <div class="field">
                            <input type="checkbox" id="talks_business" name="talks_business">
                            <label for="talks_business">Venerdi 3 Aprile - Sessione Talk al Mattino</label> <a href="/softwarelibero_impresa.php" target="_blank">(maggiori informazioni)</a>
                        </div>
                        <div class="field">
                            <label>Note per l'Organizzazione (opzionale)</label>
                            <textarea name="message" rows="4"></textarea>
                        </div>
                        <div class="field">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">Acconsento al <a href="/privacy.php">trattamento dei dati</a></label>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Registrami" class="primary"></li>
                    </ul>
                </form>

                <hr>

                <p>
                    <a href="/" class="button primary large">Torna alla Homepage</a>
                </p>
            </div>
        </section>
    </div>
</section>

<?php

contacts();
footer();
