<?php
/**
 * @package Admin Zitate
 * @version 1.1
 */
/*
Plugin Name: Admin Zitate
Plugin URI: http://wordpress.org/extend/plugins/admin-zitate/
Description: Ein Plugin, welches beliebte Zitate direkt im Dashboard anzeigt.
Version: 1.1.0
Author: Peter Schuhknecht
Author URI: http://www.design-insel.de
License: GPL2
*/

/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Grundeinstellungen
add_option('admin_zitate_show','1'); //Anzeigen?
add_option('admin_zitate_kursiv','1'); //Kursiv?

// Zitat per Zufall
function zitate() {
	$alle = "Albert Einstein: Willst du den Charakter eines Menschen erkennen, so gib ihm Macht.|
Albert Einstein: Probleme kann man niemals mit derselben Denkweise lösen, durch die sie entstanden sind.|
Bertolt Brecht: Wer kämpft, kann verlieren. Wer nicht kämpft, hat schon verloren.|
Albert Einstein: Willst du den Charakter eines Menschen erkennen, so gib ihm Macht.|
Albert Einstein: Probleme kann man niemals mit derselben Denkweise lösen, durch die sie entstanden sind.|
Bertolt Brecht: Wer kämpft, kann verlieren. Wer nicht kämpft, hat schon verloren.|	
Albert Einstein: Phantasie ist wichtiger als Wissen, denn Wissen ist begrenzt.|
Matthias Claudius: Sage nicht alles, was du weißt, aber wisse immer, was du sagst.|
Ralph Waldo Emerson: Der beste Weg, einen Freund zu haben, ist der, selbst einer zu sein.|
Henry Ford: Wer immer tut, was er schon kann, bleibt immer das, was er schon ist.|
Johann Wolfgang von Goethe: Wer nicht mehr liebt und nicht mehr irrt, der lasse sich begraben.|
Karl Dall: Man wird alt, wenn die Leute anfangen zu sagen, dass man jung aussieht.|
Gordon Moore: Wenn dir alles gelingt, was du versuchst, dann versuchst du nicht genug.|
François Truffaut: Man kann niemanden überholen, in dessen Fußstapfen man tritt.|
Mengzi: Ein großer Mensch ist derjenige, der sein Kinderherz nicht verliert.|
Erich Kästner: Aus den Steinen, die dir in den Weg gelegt werden, kannst du etwas Schönes bauen.|
Rudolf Fernau: Erinnerungen sind Wärmflaschen fürs Herz.|
Mark Twain: Man muss die Tatsachen kennen, bevor man sie verdrehen kann.|
Johann Strauss: Glücklich ist, wer vergisst, was doch nicht zu ändern ist.|
Samuel Butler: Alle Lebewesen außer dem Menschen wissen, dass der Hauptzweck des Lebens darin besteht, es zu genießen.|
Robert Lembke: Liebe ist eine tolle Krankheit - da müssen immer gleich zwei ins Bett.|
Konrad Adenauer: Fallen ist weder gefährlich noch eine Schande. Liegenbleiben ist beides.|
Hermann Hesse: Damit das Mögliche entsteht, muss immer wieder das Unmögliche versucht werden.|
Benjamin Franklin: Wer die Freiheit aufgibt um Sicherheit zu gewinnen, der wird am Ende beides verlieren.|
Seneca: Wer den Hafen nicht kennt, in den er segeln will, für den ist kein Wind ein günstiger.|
William Thackeray: Von guter Laune kann man sagen, dass sie eines der besten Kleidungsstücke ist, die man in Gesellschaft tragen kann.|
Platon: Beim Spiel kann man einen Menschen in einer Stunde besser kennenlernen als im Gespräch in einem Jahr.|
Franz Kafka: Verbringe die Zeit nicht mit der Suche nach einem Hindernis - vielleicht ist keines da.|
Heinz Rühmann: Die Zeit ist zu kostbar, um sie mit falschen Dingen zu verschwenden.|
Henry Ford: Weil Denken die schwerste Arbeit ist, die es gibt, beschäftigen sich auch nur wenige damit.|
Henry Ford: Unsere Fehlschläge sind oft erfolgreicher als unsere Erfolge.|
Henry Ford: Das Geheimnis des Erfolges ist, den Standpunkt des anderen zu verstehen.|
Henry Ford: Zeitverschwendung ist die leichteste aller Verschwendungen.|
Henry Ford: Wenn ich die Menschen gefragt hätte, was sie wollen, hätten sie gesagt schnellere Pferde.|
Henry Ford: Einen Ruf erwirbt man sich nicht mit Dingen, die man erst tun wird.|
Henry Ford: Nicht mit Erfindungen, sondern mit Verbesserungen macht man Vermögen.|
Henry Ford: Ein Geschäft, das nur Geld einbringt, ist ein schlechtes Geschäft.|
Henry Ford: Der größte Feind der Qualität ist die Eile.|
Henry Ford: Fünfzig Prozent bei der Werbung sind immer rausgeworfen. Man weiß aber nicht, welche Hälfte das ist.|
Henry Ford: Wer nicht wirbt, stirbt!|
Truman Capote: Alle Menschen haben die Anlage, schöpferisch tätig zu sein. Nur merken es die meisten nie.|
Kurt Tucholsky: Man fällt nicht über seine Fehler. Man fällt immer über seine Feinde, die diese Fehler ausnutzen.|
Erich Kästner: Die Größe eines Menschen hängt nicht von der Größe seines Wirkungsfeldes ab.|
Konrad Adenauer: Wir leben alle unter dem gleichen Himmel, aber wir haben nicht alle den gleichen Horizont.|
Mahatma Gandhi: Sei du selbst die Veränderung, die du dir wünschst für diese Welt.|
Mahatma Gandhi: Der Schwache kann nicht verzeihen. Verzeihen ist eine Eigenschaft des Starken.|
Voltaire: Alles was du sagst, sollte wahr sein. Aber nicht alles was wahr ist, solltest du auch sagen.|
Max Frisch: Die beste und sicherste Tarnung ist immer noch die blanke und nackte Wahrheit. Die glaubt niemand!|
Winston Churchill: sDie Kunst ist, einmal mehr aufzustehen, als man umgeworfen wird.|
Mark Twain: Gib jedem Tag die Chance, der schönste deines Lebens zu werden.|
Mark Twain: Mensch: das einzige Lebewesen, das erröten kann. Es ist aber auch das einzige was Grund dazu hat.|
Mark Twain: Freundlichkeit ist eine Sprache, die Taube hören und Blinde lesen können.|
Mark Twain: Wenn wir bedenken, dass wir alle verrückt sind, ist das Leben erklärt.|
Mark Twain: Menschen mit einer neuen Idee gelten so lange als Spinner, bis sich die Sache durchgesetzt hat.|
Mark Twain: Jeder ist ein Mond und hat eine dunkle Seite, die er niemandem zeigt.|
Mark Twain: Schlagfertigkeit ist etwas, worauf man erst 24 Stunden später kommt.|
Mark Twain: Verschiebe nicht auf morgen, was genausogut auf übermorgen verschoben werden kann.|
Mark Twain: Donner ist gut und eindrucksvoll, aber die Arbeit leistet der Blitz.|
Mark Twain: Unkraut ist alles, was nach dem Jäten wieder wächst.|
Mark Twain: Je mehr Vergnügen du an deiner Arbeit hast, um so besser wird sie bezahlt.|
Marcus Aurelius: Nicht den Tod sollte man fürchten, sondern dass man nie beginnen wird, zu leben.|
Konfuzius: Wer einen Fehler gemacht hat und ihn nicht korrigiert, begeht einen zweiten.|
Mahatma Gandhi: Die Welt hat genug für jedermanns Bedürfnisse, aber nicht für jedermanns Gier.|
Mahatma Gandhi: Reich wird man erst durch Dinge, die man nicht begehrt.|
Mahatma Gandhi: Es gibt keinen Weg zum Frieden, denn Frieden ist der Weg.|
Mahatma Gandhi: Gutes kann niemals aus Lüge und Gewalt entstehen.|
Mahatma Gandhi: Auge um Auge - und die ganze Welt wird blind sein.|
Mahatma Gandhi: Du und ich: Wir sind eins. Ich kann dir nicht wehtun, ohne mich zu verletzen.|
Mahatma Gandhi: Wo Liebe wächst, gedeiht Leben - wo Hass aufkommt droht Untergang.|
Mahatma Gandhi: Es gibt Wichtigeres im Leben, als beständig dessen Geschwindigkeit zu erhöhen.|
Mahatma Gandhi: Man soll weder annehmen noch besitzen, was man nicht wirklich zum Leben braucht.|
Mahatma Gandhi: Misstrauen ist ein Zeichen von Schwäche.|
Konfuziusi: Fordere viel von dir selbst und erwarte wenig von den anderen. So wird dir Ärger erspart bleiben.|
Konfuziusi: Es ist besser, ein einziges kleines Licht anzuzünden, als die Dunkelheit zu verfluchen.|
Konfuziusi: Der Weg ist das Ziel.|
Konfuziusi: Ist man in kleinen Dingen nicht geduldig, bringt man die großen Vorhaben zum Scheitern.|
Konfuziusi: Die Menschen stolpern nicht über Berge, sondern über Maulwurfshügel.|
Wilhelm Bush: Der Neid ist die aufrichtigste Form der Anerkennung.|
Anatole France: Wenn 50 Millionen Menschen etwas Dummes sagen, bleibt es trotzdem eine Dummheit.|
Bertrand Russell: Auch wenn alle einer Meinung sind, können alle Unrecht haben.|
Friedrich Hebbel: Es gehört oft mehr Mut dazu, seine Meinung zu ändern, als ihr treu zu bleiben.|
Elbert Hubbard: Der Freund ist einer, der alles von dir weiß, und der dich trotzdem liebt.|
Bertolt Brecht: Der Mensch ist erst wirklich tot, wenn niemand mehr an ihn denkt.|
Winston Churchill: Lache nie über die Dummheit der anderen. Sie ist deine Chance.|
Lucius Annaeus Seneca: Es ist nicht zu wenig Zeit, die wir haben, sondern es ist zu viel Zeit, die wir nicht nutzen.|
Robert Lembke: Geliebt zu werden kann eine Strafe sein. Nicht wissen, ob man geliebt wird, ist Folter.|
Thomas Carlyle: Der schlimmste aller Fehler ist, sich keines solchen bewusst zu sein.|
Konrad Adenauer: Machen Sie sich erst einmal unbeliebt, dann werden Sie auch ernst genommen.|
Nicolas Chamfort: Der verlorenste aller Tage ist der, an dem man nicht gelacht hat.|
Leonardo da Vinci: Wer das Leben nicht schätzt, der verdient es nicht.|
Mahatma Gandhi: Es gibt keinen Weg zum Frieden, denn Frieden ist der Weg.|
Marie von Ebner-Eschenbach: Der Klügere gibt nach! Eine traurige Wahrheit, sie begründet die Weltherrschaft der Dummheit.|
Pearl S. Buck: Viele Menschen versäumen das kleine Glück, während sie auf das Große vergebens warten.|
Carmen Sylva: Glück ist das einzige, was wir anderen geben können, ohne es selbst zu haben.|
Pythagoras von Samos: Die kürzesten Wörter, nämlich 'ja' und 'nein' erfordern das meiste Nachdenken.|
George Gordon Byron: Eine Träne zu trocknen ist ehrenvoller, als Ströme von Blut zu vergießen.|
Albert Einstein: Die Welt wird nicht bedroht von den Menschen, die böse sind, sondern von denen, die das Böse zulassen.|
Nepalesisches Sprichwort: Wer den Feind umarmt, macht ihn bewegungsunfähig.|
Konfuzius: Fordere viel von dir selbst und erwarte wenig von den anderen. So wird dir Ärger erspart bleiben.|
André Gide: Glaube denen, die die Wahrheit suchen, und zweifle an denen, die sie gefunden haben.|
Galileo Galilei: Man kann einen Menschen nichts lehren, man kann ihm nur helfen, es in sich selbst zu entdecken.|
Albert Einstein: Es ist schwieriger, eine vorgefasste Meinung zu zertrümmern als ein Atom.|
Johann Wolfgang von Goethe: Wo viel Licht ist, ist starker Schatten.|
Arthur Schopenhauer: Wir denken selten an das, was wir haben, aber immer an das, was uns fehlt.|
Konrad Adenauer: Nehmen Sie die Menschen, wie sie sind, andere gibt's nicht.|
Heinrich Heine: Ein Kluger bemerkt alles, ein Dummer macht über alles seine Bemerkungen.|
Marie von Ebner-Eschenbach: Eine Stolz getragene Niederlage ist auch ein Sieg.|
Ralph Waldo Emerson: Unser größter Ruhm ist nicht, niemals zu fallen, sondern jedes Mal wieder aufzustehen.|
	";
	
add_option('admin_zitate_alle',$alle); //Alle Zitate in einer Option
	
	//Zufall-Zitat
	$zufall = file(ABSPATH.'wp-content/plugins/admin_zitate/zitate.txt');
    if(get_option('admin_zitate_show') == 1){
		if(get_option('admin_zitate_kursiv') == 0){
		echo '<p id="zitate">'.$zufall[array_rand($zufall,1)].'</p>'; // Ausgeben von einem Zufallselements des Arrays.
		}else{
		echo '<p id="zitate"><i>'.$zufall[array_rand($zufall,1)].'</i></p>'; // Ausgeben von einem Zufallselements des Arrays in kursiver Schreibweise.
		}
	}
}

// Funktion zum Anzeigen
add_action( 'admin_notices', 'zitate' );

// CSS
function zitate_css() {
	// Bugfix für "Links-nach-Rechts-Sprachen"
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#zitate {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 2px;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'zitate_css' );

//OPTIONSMENÜ ANFANG
add_action('admin_menu', 'zitate_menu'); //Menü anzeigen

function zitate_menu() {
	add_options_page('Admin Zitate', 'Admin Zitate', 'manage_options', 'admin-zitate-optionen', 'zitate_options');
}

function zitate_options() {
	//POST-Daten verarbeiten
	if(isset($_POST['hidden'])){
		update_option('admin_zitate_show',$_POST['admin_zitate_show']);
		update_option('admin_zitate_kursiv',$_POST['admin_zitate_kursiv']);
		update_option('admin_zitate_alle',$_POST['admin_zitate_alle']);
	}
	
	if (get_option('admin_zitate_show') == '1'){$azs_selected1=' selected="selected"';}
  	else{$azs_selected2=' selected="selected"';}
	if (get_option('admin_zitate_kursiv') == '1'){$azk_selected1=' selected="selected"';}
  	else{$azk_selected2=' selected="selected"';}
	
	echo'
	<div class="wrap">
	<h2>Admin Zitate Einstellungen</h2>
	<br />
		<strong>Achtung! Änderungen werden erst aktiv, sobald die Seite <a href="options-general.php?page=admin-zitate-optionen">aktualisiert</a> wird.</strong><br />
		<strong>Die Zitate können in der Datei "zitate.txt" im Plugin-Ordner geändert werden.</strong>
	<br /><br />
	<form method="post" action="options-general.php?page=admin-zitate-optionen">
	
		<div style="float:left;width:200px;"<strong>Zitate anzeigen:</strong></div>
		<select name="admin_zitate_show">
			<option style="width:50px;" value="1"'.$azs_selected1.'>Ja</option>
			<option style="width:50px;" value="0"'.$azs_selected2.'>Nein</option>
		</select>
		<div style="clear:both"></div>
		
		<div style="float:left;width:200px;"<strong>Zitate <i>kursiv</i> anzeigen:</strong></div>
		<select name="admin_zitate_kursiv">
			<option style="width:50px;" value="1"'.$azk_selected1.'>Ja</option>
			<option style="width:50px;" value="0"'.$azk_selected2.'>Nein</option>
		</select>
		<div style="clear:both"></div>
		<br /><br />
		<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Änderungen speichern" />
		</p>
		
		<input type="hidden" name="hidden" value="1" />
	</form>
	</div>
	';
}
//OPTIONSMENÜ ENDE
?>
