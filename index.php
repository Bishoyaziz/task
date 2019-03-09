<?php
// connect to db 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Subscribe 

	if (isset($_POST['submit_btn'])) { 
		
		if (!empty($_POST['subscriber'])) { 
		
			$email = filter_var($_POST['subscriber'], FILTER_SANITIZE_EMAIL);
			
			if (!empty($email)) {
				$sqlMail = "INSERT INTO subscribe(email) VALUES ('$email')";
				if(mysqli_query($conn, $sqlMail)){
					echo'ُEmail has been inserted';
				}
			}
		}else {
			echo 'Please enter your email ';
		}
	
	}
?>

<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="styles.css" rel="stylesheet">
	<title>Home</title>
</head>
<body>
	<!-- Start Landing Page
         ==================================== -->
	<section class="landing_page">
		<div class="logo_section"><img alt="" src="images/logo.png"></div>
		<div class="logo_heading">
			<h3 class="heading_txt">Nur noch einen Klick zum Download-Link…</h3>
		</div>
		<div class="header">
			<h2>Gutschein-Code: Microsoft Office 2019</h2>
		</div>
		<p class="bold">Jetzt zu den auserwählten Gewinnern gehören und <span class="text_underline">bis zu 6 Monate kostenlos nutzen!</span></p>
		<div class="inner_content_content">
			<div class="inner_content_txt">
				<div class="inner_content_points">
					<img alt="" src="images/check.png"> <span>bis zu 6 Monate kostenlos erhalten!</span>
				</div>
				<div class="inner_content_points">
					<img alt="" src="images/check.png"> <span>Download direkt bei Microsoft-Servern!</span>
				</div>
				<div class="inner_content_points">
					<img alt="" src="images/check.png"> <span>Aktivierungskey sofort per E-Mail!</span>
				</div>
				<div class="inner_content_points">
					<h1 class="bold_txt">Klicke <span>JETZT</span> auf „Gutschein anfordern“, damit du den Gutschein-Code per E-Mail bekommst!</h1>
				</div>
				<div class="subscribe">
					<form method="POST" action="">
						<span>E-Mail:</span>
						<input class="subscribe-form-txt" name="subscriber" placeholder="bitte hier den Key senden…" type="email">
						<button name="submit_btn"><a href="#sales-page" class="btn bounce">Gutschein anfordern</a></button>
					</form>
				</div>
			</div>
			<div class="inner_content_img"><img alt="" src="images/office.png"></div>
		</div>
		<div class="inner_content_logos"><img alt="" src="images/chip.png"> <img alt="" src="images/trusted%20shop.png"> <img alt="" src="images/handler.png"> <img alt="" src="images/ssl.png" width="100"></div>
	</section><!-- End Landing Page
         ==================================== -->
	<!-- Start Sales Page
         ==================================== -->
	<section class="sales_page" id="sales-page">
		<div class="logo_section"><img alt="" src="images/logo.png"></div>
		<div class="logo_heading">
			<h3 class="heading_txt">Herzlichen Glückwunsch! Du hast es geschafft… <img alt="" class="sales_header_img" src="images/e.png"></h3>
		</div>
		<div class="header">
			<h2>MEGA-DEAL: Microsoft Office 2019</h2>
		</div>
		<p class="bold">Lese jetzt weiter, um zu erfahren wie du das originale Microsoft Office 2019 mit dem Gutschein <span class="text_underline">bis zu 6 Monate kostenlos</span> nutzen kannst!</p>
		<div class="inner_content_content">
			<div class="inner_content_txt">
				<div class="quotes_content">
					<img alt="" src="images/sales_1.png">
					<p><q>Echt eine super Idee!<br>
					Danke für dieses tolle Angebot!</q> <span class="quotes_author">Sabrina</span></p>
				</div>
				<div class="quotes_content">
					<img alt="" src="images/sales_2.png">
					<p><q>Liebes Sofort Aktivierung Team, ich habe es bisher nicht erlebt,<br>
					dass jemand so ein kleveres Konzept entwickelt! Davon werden mit Sicherheit noch sehr viele profitieren können. Ihr seid klasse!</q> <span class="quotes_author">Danny</span></p>
				</div>
				<div class="quotes_content">
					<img alt="" src="images/sales_3.png">
					<p><q>Es klappt wirklich! Hätte ich nicht gedacht… SUPER-DEAL!!!</q> <span class="quotes_author">Martin</span></p>
				</div>
			</div>
			<div class="inner_content_img"><img alt="" src="images/office.png"></div>
		</div>
		<div class="sales_page_bottom_txt_parent">
			<div class="sales_page_bottom_txt">
				<p>Hast du es auch endlich satt mit provisorischen Alternativen wie OpenOffice oder Pages zu arbeiten und nur halb-starke Ergebnisse zu erzielen…? Oder arbeitest du immer noch mit Office 2013 oder sogar mit noch älteren Versionen von Microsoft, die absolut nicht Up-to-Date sind? <strong>Hier ist die gute Nachricht:</strong> Damit ist jetzt ENDLICH Schluss! Die Lösung liegt genau hier in diesem Mega-Deal!</p>
			</div>
			<div class="sales_page_bottom_txt">
				<p>Nach langem Überlegen von verschiedenen Konzepten ist uns diese unglaubliche Idee aufgekommen! Wir haben ein System entwickelt, womit endlich so viele von dieser Einschränkung befreit werden können und das volle Potential von Microsoft Office 2019 nutzen können… Wir wissen, dass sich viele so ein leistungsstarkes Software-Paket wie Microsoft Office 2019 gar nicht leisten können, weil der Anschaffungspreis mit über 179,00€einfach zu hoch ist!</p><b><span>Und so funktioniert’s…</span></b>
			</div>
			<div class="sales_page_bottom_txt">
				<p>Es ist eine Win-Win-Win-Lösung, in der drei Parteien beteiligt sind und unglaublich voneinander profitieren: Wir übernehmen die Lizenzverträge von Firmen die insolvent gegangen sind, oder kurz davor stehen… Wir erhalten die Aktivierungskeys in größeren Mengen zu einen günstigeren Preis und hier kommt der Knaller: Wir verkaufen nicht diese Keys weiter, sondern vermieten die Nutzungsrechte monatlich ab 1,50€! Nach Ablauf des Abos erhalten wir den Key zurück und verkaufen diesen auf dem Gebrauchtmarkt. UND ES FUNKTIONIERT! Wir geben sogar eine Geld-zurück-Garantie! Ist ein Key (aus was für Gründen auch immer) nicht aktivierbar, dann kannst du dich umgehend an unserem Support wenden und du erhältst sofort einen neuen Key oder dein Geld zurück! Das ist unser Versprechen! Klicke Jetzt auf „Abo bestellen“, damit du bis zu 6 Monate kostenlos erhältst!</p>
			</div>
			<div class="sales_page_bottom_txt">
				<p>wenden und du erhältst sofort einen neuen Key oder dein Geld zurück! Das ist unser Versprechen!<br>
				Klicke auf „ Jetzt bestellen“, damit du <b><u>bis zu 6 Monate kostenlos</u></b> erhältst!</p>
			</div>
		</div>
		<div class="table_upper_elements">
			<div class="long_txt_arrow">
				<img alt="" class="table_upper_arrow" src="images/right-arrow.png"> <button class="btn bounce arrow-btn bounce" onclick="showModal()">Jetzt bestellen!</button>
				<div class="table_upper_elements_img"><span class="table_word">meist bestellt</span> <img alt="garantee" src="images/3.png"></div>
			</div>
		</div>
		<div class="sales_table_section">
			<table class="sales_table">
				<tr>
					<th>Regulärer Preis</th>
					<td>nur <b>2€</b>/ Monat</td>
					<td>nur <b>1,50€</b> / Monat</td>
					<td>einmalig 79€</td>
				</tr>
				<tr>
					<th>Laufzeit</th>
					<td>12 Monate</td>
					<td>24 Monate</td>
					<td>unbefristet</td>
				</tr>
				<tr class="tr_bg_color">
					<th>Mit Gutschein-Code</th>
					<th class="th_center">3 Monate kostenlos</th>
					<th class="th_center">6 Monate kostenlos</th>
					<th class="th_center">-25 %</th>
				</tr>
				<tr class="tr_bg_color">
					<th>Aktionspreis</th>
					<td>nur <b>1,50€</b>/ Monat</td>
					<td>nur <b>1,13€</b>/ Monat</td>
					<td>einmalig 59€</td>
				</tr>
				<tr>
					<th>Downloadprodukt (für Windows)</th>
					<td>Microsoft Office 2019 Professional Plus</td>
					<td>Microsoft Office 2019 Professional Plus</td>
					<td>Microsoft Office 2019 Professional Plus</td>
				</tr>
				<tr>
					<th>Enthalten ist</th>
					<td>
						<p>Word 2019</p>
						<p>Excel 2019</p>
						<p>Power Point 2019</p>
						<p>Outlook 2019</p>
						<p>OneNote 2019</p>
						<p>Publisher 2019</p>
						<p>Access 2019</p>
					</td>
					<td>
						<p>Word 2019</p>
						<p>Excel 2019</p>
						<p>Power Point 2019</p>
						<p>Outlook 2019</p>
						<p>OneNote 2019</p>
						<p>Publisher 2019</p>
						<p>Access 2019</p>
					</td>
					<td>
						<p>Word 2019</p>
						<p>Excel 2019</p>
						<p>Power Point 2019</p>
						<p>Outlook 2019</p>
						<p>OneNote 2019</p>
						<p>Publisher 2019</p>
						<p>Access 2019</p>
					</td>
				</tr>
			</table>
		</div>
		<p>Klicke auf „ Jetzt bestellen“, damit du <b><u>bis zu 6 Monate kostenlos</u></b> erhältst!</p>
		<div class="table_upper_elements">
			<div class="long_txt_arrow">
				<img alt="" class="table_upper_arrow" src="images/right-arrow.png"> <button class="btn bounce arrow-btn bounce" onclick="showModal()">Jetzt bestellen!</button>
				<div class="table_upper_elements_img"><img alt="garantee" src="images/3.png"></div>
			</div>
		</div>
		<div class="computer_img_section">
			<img alt="computer_img" src="images/computer.jpg">
			<div class="computer_txt">
				<p><strong>Fazit: Unschlagbar gut…</strong></p><q><span>…Keine Frage, Office 2019 bietet immer noch die besten Anwendungen zum Schreiben,<br>
				Rechnen, Gestalten und E-Mailen</span></q>
			</div>
		</div>
		<div class="yellow_section">
			<p>Vertrauen ist gut Kontrolle ist besser! Bei uns sind Sie sicher…</p>
		</div>
		<div class="inner_content_logos"><img alt="" src="images/ssl.png" width="110"> <img alt="" src="images/garantee.png"> <img alt="" src="images/Handler.png"> <img alt="" src="images/k.png"> <img alt="" src="images/1.png"></div>
		<div class="sales_page_long_txt">
			<p>Wenn du Jetzt bestellst, dann erhältst du KOSTENLOS eine VideoInstallationsanleitung und eine Schritt-für-Schritt Anleitung als PDF. Und wenn das nicht reicht, kannst du zu unseren Öffnungszeiten mit unserem <b>technischen Supportin</b> Kontakt treten und KOSTENLOS Unterstützung bekommen… <b>Als Bonus-Geschenk</b> erhältst du sogar noch das eBook „MS Office Profi-Tipps“, was in unserem Shop für 7,95€erhältlich ist, KOSTENLOS, worin du sehr wertvolle Tipps bekommst, wie du Office 2019 wie ein Profi nutzen kannst und durch exzellente Ergebnisse richtig beeindrucken wirst!</p><img alt="" src="images/exzellenter.jpg">
			<p><b>Nochmal zusammengefasst:</b><br>
			Bei diesem <b>Mega-Deal</b> kannst du bist zu 6 Monate kostenlos Microsoft Office 2019 nutzen. Bei diesem Abo erhältst du schon bei nur 1,50€ monatlich <b>vollen Zugriff</b> auf alle professionellen Programme von Microsoft Office wie Word 2019, Excel 2019, PowerPoint 2019, Outlook 2019, OneNote 2019… ohne irgendeine Einschränkung. <b>Zum Vergleich:</b>Das Abonnement direkt bei Microsoft, bekannt als Office 365, ist erst ab 69,00€pro Jahr erhältlich! Da denkt man sich doch „Ich bin doch nicht blöd!“ Was soll dich noch daran Hindern ein Teil von diesem Win-Win-Win-Konzept zu sein, und wirklich sinnvoll zu sparen? Wie du siehst erhältst du von uns sogar eine Geld-zurück-Garantie!</p>
			<p>Als deutsche GmbH stellen wir dir eine Rechnung mit ausgewiesener MwSt. aus, sodass Selbstständige und Unternehmer sogar nur den Nettobetrag zahlen müssen! Werde jetzt ein Teil der Klever-Sparer-Communty und <u>klicke auf „Jetzt bestellen“, damit du sofort mit dem Download beginnen kannst.</u></p>
			<div class="long_txt_arrow">
				<img alt="" class="table_upper_arrow" src="images/right-arrow.png"> <button class="btn bounce arrow-btn bounce" onclick="showModal()">Jetzt bestellen!</button>
			</div>
		</div>
		<div class="bottom_txt">
			<h3>ACHTUNG! WICHTIGER HINWEIS:</h3>
			<p>Dieses Angebot ist limitiert auf die ersten 500 Bestellungen! Verpasse nicht diese Chance und<br>
			greife zu bevor es zu spät ist!</p>
			<p>Stelle dir vor, du blickst in wenigen Monaten zurück und denkst dir nur:<br>
			„Oh man, hätte ich damals bei diesem Mega-Deal mitgemacht!“<br>
			Der frühe Vogel fängt den Wurm… also nutze diese Chance und <u>klicke auf „Jetzt bestellen“,</u><br>
			<u>damit du von diesem limitierten Angebot profitierst!</u></p>
			<div class="long_txt_arrow left_arrow_container">
				<img alt="" class="table_upper_arrow left-arrow" src="images/left-arrow.png"> <button class="btn bounce arrow-btn bounce" onclick="showModal()">Jetzt bestellen!</button>
			</div>
		</div>
	</section><!-- End Sales Page
         ==================================== -->
	<!-- Start Checkout Page
         ==================================== -->
	<section class="checkout" id="checkout-modal">
		<div class="checkout_inner_section">
			<span class="close">&times;</span> <img alt="" src="images/logo.png">
			<h3 class="heading_txt">Nur noch einen Klick zum Download-Link…</h3>
			<div class="top_elements">
				<div class="checkout_top_images"><img alt="" src="images/handler.png"> <img alt="" src="images/2.png"> <img alt="" src="images/garantee.png"> <img alt="" src="images/ssl.png" width="105"></div>
				<div class="checkout_top_points">
					<div class="checkout_top_points--content">
						<img alt="" src="images/check.png"> <span>SSL-verschlusselte Dantenubermittiung</span>
					</div>
					<div class="checkout_top_points--content">
						<img alt="" src="images/check.png"> <span>100% Datenschutzkonform</span>
					</div>
					<div class="checkout_top_points--content">
						<img alt="" src="images/check.png"> <span>Geprufte Datensicherheit</span>
					</div>
					<div class="checkout_top_points--content">
						<img alt="" src="images/check.png"> <span>Sichere Zahlungsabwicklung</span>
					</div>
				</div>
			</div>
			<div class="checkout_inner_content">
				<div class="checkout_inner_content--img"><img alt="" src="images/office.png"></div>
				<div class="checkout_inner_content--form">
					<form>
						<div class="checkbox">
							<input type="checkbox"> Ja, ich habe einen Gutschein-Code
						</div>
						<div class="code_email">
							<input name="code" placeholder="Gutschein-Code" type="text"> <input name="email" placeholder="email-aus-session@mail.com" type="email">
						</div>
						<div class="dropdown_container">
							<p><strong><u>Abo auswählen:</u></strong></p><select name="checkout_from_dropdown">
								<option class="dropdown_menu" value="1,50€/ Monat | 6 Monate gratis | Dauer: 24 Monate (statt 36,00€nur 27€)">
									1,50€/ Monat | 6 Monate gratis | Dauer: 24 Monate (statt 36,00€nur 27€)
								</option>
							</select>
						</div>
						<div class="checkbox">
							<input type="checkbox"> Ja, ich möchte KOSTENLOSeine Installationsanleitung als Video und PDF
						</div>
						<div class="checkbox">
							<input type="checkbox"> Ja, ich möchte das Bonus-Geschenk„MS Office Profi-Tipps“ (statt7,95€&gt;&gt; 0,00€)
						</div>
						<div class="payment_method">
							<div class="payment_form">
								<p><strong><u>Anschrift:</u></strong></p>
								<div class="payment_first_input checkout_input">
									<input placeholder="Vorname" type="text"> <input placeholder="Nachname" type="text">
								</div>
								<div class="payment_second_input">
									<input placeholder="Strasse, Hausnummer" type="text">
								</div>
								<div class="payment_third_input">
									<input placeholder="PLZ" type="text"> <input placeholder="Ort" type="text">
								</div>
							</div>
							<div class="payment_images">
								<p><strong><u>Zahlungsmethode wählen:</u></strong></p>
								<div class="payment_images--img"><input class="input_checkbox" type="checkbox"> <img alt="" src="images/paypal.png"></div>
								<div class="payment_images--img"><input class="input_checkbox" type="checkbox"> <img alt="" src="images/sofort.png"></div>
								<div class="payment_images--img"><input class="input_checkbox" type="checkbox"> <img alt="" src="images/visa.png"></div>
								<div class="payment_images--img"><input class="input_checkbox" type="checkbox"> <img alt="" src="images/amazon.png"></div>
								<div class="payment_images--img payment_center_img"><input class="input_checkbox" type="checkbox"> <img alt="" src="images/vorkasse.png"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section><!-- End Checkout Page
         ==================================== -->
	<script src="scripts.js">
	</script>
</body>
</html>