<?php
	//	DB constants
	$dbConst = [
		"localhost" => [
			"host" => "localhost"
			,"dbname" => "robertodegaetano"
			,"user" => "root"
			,"pwd" => ""
		]
		,"remote" => [
			"host" => "89.46.111.232"
			,"dbname" => "Sql1473003_1"
			,"user" => "Sql1473003"
			,"pwd" => "f5j8734srb"
		]
	];
	//  index constants
	define("KEYWORDS_TAG_VALUE","Roberto De Gaetano, Roberto, De Gaetano, Gaetano, Varese, Como, Brianza, web design, web, assistenza informatica, computer, sito internet, internet, informatica, computer, PC, preventivi siti web, preventivi, siti, web, internet, realizzazione, costruzione, programmazione");
	define("DESCRIPTION_TAG_VALUE","Roberto De Gaetano, realizzazioni siti web aziendali e privati in Brianza, Como, Varese, costruzione web applications, PHP, Javascript, HTML, CSS, assistenza informatica, computer, PC");
	define("WEBSITE_OWNER","Roberto De Gaetano");
	define("WEBSITE_TITLE","Roberto De Gaetano - Web Developer");
	define("CURRENT_LAYOUT","freelance/");
	//  header constants
	define("IMG_PATH","../public/freelance/images/");
	define("PROFILE_IMG","".IMG_PATH."profile.png");
	define("LOGO_TXT","Benvenuti!");
	define("MANSION","
		<br /><br />Grazie per aver visitato il mio sito web!
		<br />Mi chiamo <b><u>Roberto De Gaetano</u></b>, sono un programmatore web e mi occupo di<br />
		programmazione <b>PHP</b> | <b>Javascript</b> | <b>HTML</b> | <b>CSS</b> | <b>MySQL</b>
		<br />Sono appassionato di tecnologia, cinema e mi piace molto tenermi impegnato in attività all'aria aperta.
		<br />Mi diverto molto a svolgere vari sport a livello amatoriale<br />quali ciclismo, tennis, bowling<br />e tra i miei vari interessi spicca senza dubbio<br />la passione per il <u><a title='Silat, arte marziale indo-malese' href='https://www.nairsilat.com/' target='_blank' class='txtLink'>Silat</a></u>,<br />arte marziale e pratica salutistica indonesiana di origine malese, che svolgo dal 2012.
	");
	//  about constants
	define("ABOUT_CONTENT_BODY",
	"
	<img src='".PROFILE_IMG."' class='aboutImg' alt='Roberto De Gaetano' />
	<p>Mi sono laureato in Informatica presso l'<a title=\"Università degli studi dell'Insubria di Varese\" href='https://www.uninsubria.it/' target='_blank' class='txtLink'>Università degli studi dell'Insubria</a> di Varese nell'anno 2007 con la votazione di <b>96</b>/110.</p>
	<p>Le mie inclinazioni professionali hanno sempre riguardato il settore 'tecnico', sia nel periodo <i>pre</i> che <i>post</i> universitario.<br />
	Le mie attività professionali hanno spaziato dall'<i>assistenza tecnica su Personal Computer, fotocopiatrici e macchine da ufficio</i> allo <i>sviluppo software in ambito web</i>.</p>
	<p>Il mio attuale settore di competenza è lo <i>sviluppo di siti internet e applicativi web</i>.<br />
	Mi occupo di programmazione utilizzando linguaggi quali <b>PHP</b>, <b>HTML</b>, <b>CSS</b>, <b>Javascript</b>.<br />
	Ho esperienza nella gestione di dati tramite DBMS (<b>MySQL</b>) e nell'approccio di sviluppo orientato al <b>Continuous Delivery</b></p>"
	);
	define("DOC_PATH","../public/docs/");
	define("CV_IT_PDF","Curriculum_Vitae_Roberto_De_Gaetano.pdf");
	define("CV_EN_PDF","Roberto_De_Gaetano_Curriculum_Vitae.pdf");
	define("CV_DWL_IT","Scarica il mio CV!");
	define("CV_DWL_EN","Download my CV!");
	//  CV constants
	define("CLOSE_BTN_MODAL","Chiudi la finestra");
	//  activities constants
	define("ACTIVITY_FRONTEND_TEST",
	"<p class='cursiveFont'>
		L'interfaccia utente è la <u>carta d'identità</u> di un sito web. 
		Per questo motivo deve presentarsi pulita ma allo stesso tempo accattivante.
	</p>
	<p class='cursiveFont'>
		Attraverso l'utilizzo sapiente di tecnologie quali <b>Javascript</b>, <b>CSS3</b>, <b>HTML5</b>, <b>JQuery</b>, <b>Bootstrap</b> l'utente potrà apprezzare una notevole fruibilità godendo di una user experience di livello!
	</p>");
	define("ACTIVITY_BACKEND_TEST",
	"<p class='cursiveFont'>
		L'area di <b>back-end</b> è quella che si potrebbe definire come il <i>cuore</i> di un'applicazione web.
	</p>
	<p class='cursiveFont'>
		Per questo motivo è fondamentale sia strutturata in modo sicuro e facilmente manutenibile, 
		risultati ampiamenti ottenuti attraverso l'utilizzo di <b>database management systems</b> di varia natura e una metodologia di programmazione attuale tramite l'uso di <b>PHP7</b>.
	</p>");
	define("ACTIVITY_ASSISTANCE_TEST",
	"<p class='cursiveFont'>
		Le noie ai computer si sa, possono essere di molteplice natura. Nei casi peggiori possono costituire un vero problema, in grado persino di inficiare la corretta prosecuzione della propria attività commerciale.
	</p>
	<p class='cursiveFont'>
		Grazie al mio passato lavorativo in qualità di tecnico hardware/software su macchine da ufficio, sono in grado di porre fine a questi 'grattacapi elettronici'.
	</p>");
	//  contacts constants
	define("WEBSITE_NAME","robertodegaetano.it");
	define("CONTACT_DEST_EMAIL","roberto@".WEBSITE_NAME."");
	define("CONTACT_SUBJECT","Form di contatto da ".WEBSITE_NAME."");
	define("CONTACT_EMAIL_BODY","Hai ricevuto un nuovo messaggio dalla contact form di ".WEBSITE_NAME."\n\nDi seguito i dettagli:\n\n");
	define("NO_REPLY_ADDRESS","noreply@".WEBSITE_NAME."");
	
	define('MAIL_FORM_SEND_BTN','Invia');
	define("CONTACT_ALERT_FIELD","Compilare i campi, grazie");
	define("CONTACT_ERROR_MSG","L'invio del messaggio non è andato a buon fine");
	define("SENT_MSG_CNF_TXT","Il messaggio è stato correttamente inviato! Grazie!");
	define("MANDATORY_FIELD_LABEL","Campo Obbligatorio");
	//  copyright constants
	define("COPY_TEXT","&copy; Roberto De Gaetano | All rights reserved");
	