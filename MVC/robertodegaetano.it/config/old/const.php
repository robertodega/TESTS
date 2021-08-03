<?php
    define("WEBSITE_TITLE","Roberto De Gaetano - Web Developer");
	define("LOGO_TXT","Roberto De Gaetano");
	define("WEBSITE_OWNER","Roberto De Gaetano");
	define("WEBSITE_NAME","robertodegaetano.it");
	define("WEBSITE_URL","http://".WEBSITE_NAME);
	define("KEYWORDS_TAG_VALUE","Roberto De Gaetano, Roberto, De Gaetano, Gaetano, Varese, Como, Brianza, web design, web, assistenza informatica, computer, sito internet, internet, informatica, computer, PC, preventivi siti web, preventivi, siti, web, internet, realizzazione, costruzione, programmazione");
	define("DESCRIPTION_TAG_VALUE","Roberto De Gaetano, realizzazioni siti web aziendali e privati in Brianza, Como, Varese, costruzione web applications, PHP, Javascript, HTML, CSS, assistenza informatica, computer, PC");

	define("CURRENT_LAYOUT","old/");

	define("ROOT_PATH","./");
	define("LOADER_PATH","include/loader.php");
	define("IMAGES_PATH",ROOT_PATH.CURRENT_LAYOUT."img/");
	define("PORTFOLIO_PATH",IMAGES_PATH."portfolio/");
	define("SOCIAL_PATH",IMAGES_PATH."social/");
	define("DOC_PATH",ROOT_PATH."docs/");
	define("CONST_PATH",ROOT_PATH."config/".CURRENT_LAYOUT."");
	define("JS_PATH",ROOT_PATH.CURRENT_LAYOUT."js/");
	define("CSS_PATH",ROOT_PATH.CURRENT_LAYOUT."css/");
	define("SECTIONS_PATH",CONST_PATH."sections/");
    
    define("PROFILE_IMG","profile.png");
    define("LOGO_IMG","logoRDG.png");

	define('MANSION','Full Stack Developer');
	define('CONTACT_BTN','Contattami!');
	define('WORKS_BTN','I miei lavori');
	define('MAIL_FORM_SEND_BTN','Invia ');

	define("CONTACT_DEST_EMAIL","roberto@".WEBSITE_NAME."");
	define("CONTACT_SUBJECT","Form di contatto da ".WEBSITE_NAME."");
	define("CONTACT_EMAIL_BODY","Hai ricevuto un nuovo messaggio dalla contact form di ".WEBSITE_NAME."\n\nDi seguito i dettagli:\n\n");
	define("NO_REPLY_ADDRESS","noreply@".WEBSITE_NAME."");

	define("CONTACT_ALERT_FIELD","Compilare i campi, grazie");
	define("CONTACT_ERROR_MSG","L'invio del messaggio non è andato a buon fine");
	define("SENT_MSG_CNF_TXT","Il messaggio è stato correttamente inviato! Grazie!");

	$sections = [
		"about","cv","experiences","activities"/* * ,"works"/* */,"statistics","contact"
	];

    define("ABOUT_CONTENT_BODY",
	"<p>Mi sono laureato in Informatica presso <a title=\"Università degli studi dell'Insubria di Varese\" href='https://www.uninsubria.it/' target='_blank' class='txtLink'>l'Università degli studi dell'Insubria</a> di Varese nell'anno 2007 con la votazione di <b>96</b>/110.</p>
	<p>Le mie inclinazioni professionali hanno sempre riguardato il settore 'tecnico', sia nel periodo <i>pre</i> che <i>post</i> Universitario.<br />
	Le mie attività professionali hanno spaziato dall'<i>assistenza tecnica su Personal Computer, fotocopiatrici e macchine da ufficio</i> allo <i>sviluppo software in ambito web</i>.</p>
	<p>Il mio attuale settore di competenza è lo <i>sviluppo di siti internet e applicativi web</i>.<br />
	Mi occupo di programmazione utilizzando linguaggi quali <b>PHP</b>, <b>HTML</b>, <b>CSS</b>, <b>Javascript</b>.<br />
	Ho esperienza nella gestione di dati tramite DBMS (<b>MySQL</b>) e nell'approccio di sviluppo orientato al <b>Continuous Delivery</b></p>
	<p>Ho uno spiccato interesse verso tutto ciò che è tecnologia ma sono anche appassionato di attività fisica e pratico il <a title='Silat, arte marziale indo-malese' href='https://www.nairsilat.com/' target='_blank' class='txtLink'>Silat</a>, arte marziale e pratica salutistica indonesiana di origine malese.</p>
	<p>Mi piace molto la vita all'aria aperta e quando posso mi concedo qualche breve fuga fuori città.</p>"
	);
    
    define("CV_ITA_PDF",DOC_PATH."Curriculum_Vitae_Roberto_De_Gaetano.pdf");
	define("CV_ENG_PDF",DOC_PATH."Roberto_De_Gaetano_Curriculum_Vitae.pdf");

    $menuLinks = [
		"home" => "Home"
		,"about" => "Su di me"
		// ,"instruction" => "Istruzione"
        ,"cv" => "Il mio CV"
        ,"experiences" => "Esperienze"
        ,"activities" => "Attività"
        // ,"works" => "Lavori"
		,"contact" => "Lascia un commento"
	];

	$cvLinks =[
		[
			"qualification" => "PHP senior developer"
			,"company" => "Ebay S.p.A. - Milano (MI)"
			,"period" => "Maggio 2019 - Attuale"
			,"detail" => "Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a siti web aziendali, programmazione in PHP7, Javascript, utilizzo DBMS (MySql), versioning file system (Git), metodologie di sviluppo Agile(Jira), Continuous Integration and Delivery approach(Jenkins)."
		]
		,[
			"qualification" => "Web developer"
			,"company" => "Cidiverte S.p.A. - Gallarate (VA)"
			,"period" => "Novembre 2015 – Aprile 2019"
			,"detail" => "Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a sistemi gestionali aziendali, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax, strutturazione progetti secondo pattern architetturale MVC, utilizzo DBMS Mysql, Oracle, MSSQL. Uso di framework HTML5/Javascript Kendo UI basato su architettura Smarty."
		]
		,[
			"qualification" => "Web developer"
			,"company" => "Orobianco S.r.l. - Gallarate (VA)"
			,"period" => "Settembre 2013 – Agosto 2015"
			,"detail" => "Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a sistemi gestionali aziendali, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax, strutturazione progetti secondo pattern architetturale MVC, utilizzo DBMS Mysql, Oracle, MSSQL. Uso di framework HTML5/Javascript Kendo UI basato su architettura Smarty."
		]
		,[
			"qualification" => "Web developer"
			,"company" => "Reggiani S.p.A. - Varese"
			,"period" => "Gennaio 2013 – Agosto 2013"
			,"detail" => "Sviluppo applicazioni web. Lavoro in team, creazione e customizzazione di funzionalità interne a sistemi gestionali aziendali, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax, strutturazione progetti secondo pattern architetturale MVC, utilizzo DBMS Mysql, Oracle, MSSQL. Uso di framework HTML5/Javascript Kendo UI basato su architettura Smarty.Sviluppo di applicazioni web di grosse dimensioni su commissione di clienti quali Usag ed affini, creazione e personalizzazione di funzionalità interne a sistemi richiesti dal cliente, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax. Utilizzo framework CakePHP."
		]
		,[
			"qualification" => "Web developer"
			,"company" => "Mobile Solutions S.r.l. - Gallarate (VA)"
			,"period" => "Gennaio 2012 – Dicembre 2012"
			,"detail" => "Sviluppo di applicazioni web di grosse dimensioni su commissione di clienti quali Enel ed affini, creazione e personalizzazione di funzionalità interne a sistemi richiesti dal cliente, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax. Sviluppo reportistica. Analisi esigenze del cliente, studio di fattibilità e testing dell’applicazione realizzata. Utilizzo framework Smarty."
		]
		,[
			"qualification" => "Web developer"
			,"company" => "Lutech S.p.A. - Brugherio (MB)"
			,"period" => "Giugno 2010 – Dicembre 2011"
			,"detail" => "Sviluppo di applicazioni web di grosse dimensioni su commissione di clienti quali Telecom, Vodafone, Fastweb. Lavoro in team, creazione e customizzazione di funzionalità interne a sistemi richiesti dal cliente, programmazione in PHP5, Javascript, HTML5, CSS3, Ajax. Sviluppo reportistica. Analisi esigenze del cliente, studio di fattibilità e testing dell’applicazione realizzata."
		]
		,[
			"qualification" => "Web developer in proprio"
			,"company" => ""
			,"period" => "Agosto 2008 – Giugno 2010"
			,"detail" => "Gestione di attività di web developer freelance, realizzazione di siti web, restyling di siti internet esistenti, assistenza informatica hardware/software PC, consulenza informatica."
		]
		,[
			"qualification" => "Web developer"
			,"company" => "Malpensa Web Network S.r.l. - Gallarate (VA)"
			,"period" => "Aprile 2008 – Agosto 2008"
			,"detail" => "Web developer, realizzazione siti web aziendali."
		]
		,[
			"qualification" => "Software support & helpdesk manager"
			,"company" => "Grafiche Quirici S.r.l. - Barasso (VA)"
			,"period" => "Aprile 2007 – Aprile 2008"
			,"detail" => "Manutenzione e assistenza applicativo web per la gestione di ordinazioni per conto di clienti quali Whirlpool, Usag, Gessi ed affini"
		]
	];

	$experiencesLinks = [
		["PHP7" => 100]
		,["HTML5" => 90]
		,["CSS3" => 75]
		,["JQuery" => 50]
		,["MySQL" => 90]
		,["Oracle" => 60]
		,["Continuous Delivery" => 50]
		,["GIT" => 85]
	];

	define("ACTIVITY_FRONTEND_TEST",
	"<p>
		L'interfaccia utente è la <u>carta d'identità</u> di un sito web. 
		Per questo motivo deve presentarsi pulita ma allo stesso tempo accattivante.
	</p>
	<p>
		Attraverso l'utilizzo sapiente di tecnologie quali <b>Javascript</b>, <b>CSS3</b>, <b>HTML5</b>, <b>JQuery</b>, <b>Bootstrap</b> l'utente potrà apprezzare una notevole fruibilità godendo di una user experience di livello!
	</p>");
	define("ACTIVITY_BACKEND_TEST",
	"<p>
		L'area di <b>back-end</b> è quella che si potrebbe definire come il <i>cuore</i> di un'applicazione web.
	</p>
	<p>
		Per questo motivo è fondamentale sia strutturata in modo sicuro e facilmente manutenibile, 
		risultati ampiamenti ottenuti attraverso l'utilizzo di <b>database management systems</b> di varia natura e una metodologia di programmazione attuale tramite l'uso di <b>PHP7</b>.
	</p>");
	define("ACTIVITY_ASSISTANCE_TEST",
	"<p>
		Le noie ai computer si sa, possono essere di molteplice natura. Nei casi peggiori possono costituire un vero problema, in grado persino di inficiare la corretta prosecuzione della propria attività commerciale.
	</p>
	<p>
		Grazie al mio passato lavorativo in qualità di tecnico hardware/software su macchine da ufficio, sono in grado di porre fine ai grattacapi elettronici dei vostri mezzi di lavoro.
	</p>");
	
	define("KNOWN_LANG_TEXT","<h4>linguaggi di programmazione utilizzati</h4>");
	define("EXP_YEARS_TEXT","<h4>Anni di esperienza</h4>");
	define("STATISTICS_TEXT","<h4>Secondi di permanenza su questo sito!<br>Che aspetti? Contattami!</h4>");

	$worksList = [
		"DRMultiservice" => [
			"link" => "https://www.drmultiservice.it/"
			,"desc" => "<p>Copriamo una vasta gamma di servizi relativi alla tua living experience, in ogni aspetto della tua quotidianità.Usiamo prodotti certificati e a impatto 0 con l'ambiente.Ci avvaliamo di attrezzature professionali tra le migliori della gamma.</p><p> - Pulizie civili e industriali</p><p> - Pulizia uffici e abitazioni</p><p> - Trattamento pavimenti</p><p> - Micro Edilizia</p>"
		]
	];

	define("MAX_EXP_YEARS",10);
	define("MAX_KNOWN_LANG",10);

	define("FOOTER_TEXT","&copy; Roberto De Gaetano | All rights reserved");

	$socialLinks = [
		"facebook" => "https://www.facebook.com/roberto.degaetano"
		,"linkedin" => "https://www.linkedin.com/in/roberto-de-gaetano-49ba0129?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BymZo4xW5RDa0%2ByuELT7YRw%3D%3D"
		,"instagram" => "https://www.instagram.com/robdega/"
	];
?>