<?php

function head($title = '')
{
    ?>

    <!DOCTYPE HTML>
    <html>
    	<head>
    		<title>MERGE-it 2020<?php echo (empty($title) ? '' : ": $title") ?></title>
    		<meta charset="utf-8" />
    		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    		<meta name="description" content="" />
    		<meta name="keywords" content="libertà digitali, opensource, freesoftware, software libero, creative commons, pubblica amministrazione, impresa, torino, aprile" />

    		<link rel="stylesheet" href="/assets/css/main.css" />
    		<link rel="stylesheet" href="/assets/css/leaflet.css" />

    		<meta property="og:site_name" content="MERGE-it 2020" />
    		<meta property="og:title" content="MERGE-it 2020" />
    		<meta property="og:url" content="https://merge-it.net/" />
    		<meta property="og:image" content="https://merge-it.net/images/fb.png" />
    		<meta property="og:type" content="website" />
    		<meta property="og:country-name" content="Italy" />
    		<meta property="og:email" content="info@merge-it.net" />
    		<meta property="og:locale" content="it_IT" />
    	</head>
    	<body class="is-preload">
    		<div id="wrapper">
                <p class="box tragic">
    				UPDATE: l'evento è stato rimandato a data da destinarsi a seguito dell'escalation della diffusione del virus COVID-19 e della conseguente sospensione di tutti gli eventi pubblici <a href="http://www.governo.it/it/articolo/coronavirus-firmato-il-dpcm-4-marzo-2020/14241">per decreto della Presidenza del Consiglio dei Ministri</a>.<br>
    				Seguite <a href="https://twitter.com/merge_it">il nostro account Twitter</a> o <a href="http://www.ils.org/newsletter">la mailing list di Italian Linux Society</a> per aggiornamenti.
    			</p>

    <?php
}

function footer()
{
        ?>

    </div>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.scrolly.min.js"></script>
    <script src="/assets/js/browser.min.js"></script>
    <script src="/assets/js/breakpoints.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/leaflet.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq || [];
        _paq.push(['disableCookies']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//stats.madbob.org/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '7']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src="//stats.madbob.org/matomo.php?idsite=7&amp;rec=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Matomo Code -->
</body>
</html>

        <?php
}

function contacts()
{
    ?>

    <section id="contacts">
		<header>
			<h2>Get in touch</h2>
		</header>
		<div class="content">
			<p>Per metterti in contatto con l'organizzazione di <strong>MERGE-it</strong> usa i contatti indicati accanto.</p>

			<div class="supporters">
				<h5>Evento Coordinato da</h5>
				<p>
					<img alt="Italian Linux Society" src="/images/ils.png">
				</p>

				<h5>Con la Collaborazione di</h5>
				<p>
					<img alt="Top-IX" src="/images/topix.png">
				</p>

				<h5>Con il patrocinio di</h5>
				<p>
					<img alt="Città di Torino" src="/images/citta_torino.jpg">
				</p>
			</div>
		</div>
		<footer>
			<ul class="items">
				<li>
					<h3>Email</h3>
					<a href="mailto:info@merge-it.net">info@merge-it.net</a>
				</li>
				<li>
					<h3>Telefono</h3>
					<a href="tel:00393487254214">+39 3487254214</a>
				</li>
				<li>
					<h3>Online</h3>
					<ul class="icons">
                        <li><a href="http://online.merge-it.net/">MERGE-it Online</a></li>
						<li><a href="https://twitter.com/merge_it" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://github.com/merge-it" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					</ul>
				</li>
			</ul>
		</footer>
	</section>

    <div class="copyright">CC-BY-3.0. Design: <a href="https://html5up.net/paradigm-shift">HTML5 UP</a>.</div>

    <?php
}

function page($data)
{
    head($data['title']);

    ?>

    <br>

	<section>
		<header>
			<h2><?php echo $data['title'] ?></h2>
		</header>
		<div class="content">
			<section>
				<header>
                    <?php if(isset($data['subtitle'])): ?>
	                   <h3><?php echo $data['subtitle'] ?></h3>
                   <?php endif ?>

                   <?php if(is_string($data['details'])): ?>
                        <p>
                            <?php echo $data['details'] ?>
                        </p>
                    <?php elseif(is_array($data['details'])): ?>
                        <?php foreach($data['details'] as $row): ?>
                            <p>
                                <?php echo $row ?>
                            </p>
                        <?php endforeach ?>
                    <?php endif ?>
				</header>
				<div class="content">
                    <?php foreach($data['contents'] as $row): ?>
                        <p>
                            <?php echo $row ?>
                        </p>
                    <?php endforeach ?>

                    <hr>

                    <?php if(isset($data['register'])): ?>
                        <?php if($data['register'] == 'mandatory'): ?>
                            <p class="alert">
                                Per partecipare a questa attività - con posti limitati - è richiesta la registrazione: <a href="/registrazione.php">clicca qui e compila il form</a>.
                            </p>
                        <?php else: ?>
                            <p class="alert">
                                Per partecipare a questa attività è gradita la registrazione: <a href="/registrazione.php">clicca qui e compila il form</a>.
                            </p>
                        <?php endif ?>

                        <hr>
                    <?php endif ?>

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
}

function community_talk($data)
{
    $data['title'] = 'Talk';
    $data['details'][] = 'Toolbox<br>Via Agostino da Montefeltro 2, Torino';
    page($data);
}
