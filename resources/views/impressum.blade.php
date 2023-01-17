<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer type="text/javascript" src="Downloads.js"></script>
    <title>Downloads</title>
    <style>.downloads{
            display:flex;
            flex-direction:column;
        }
    </style>
</head>

<body>

<h1>Impressum</h1>
<p>{{ $texts->firmenanschrift }}</p>
<p>{{ $texts->adresse }}</p>
<p>Unternehmensgegenstand: {{ $texts->unternehmensgegenstand }}</p>
<p>UID-Nummer: {{ $texts->UIDNummer }}</p>
<p>GLN: {{ $texts->GLN }}</p>
<p>GISA: {{ $texts->GISA }}</p>

<p>Tel.: {{ $texts->telefonnummer }}</p>
<p>Fax: {{ $texts->fax }}</p>
<p>E-Mail: {{ $texts->email }}</p>

<p>Kontaktdaten des Verantwortlichen für Datenschutz. Sollten Sie Fragen zum Datenschutz haben, finden Sie nachfolgend die Kontaktdaten der verantwortlichen Person bzw. Stelle:</p>
<p>E-Mail: {{ $texts->email }}</p>
<p>Tel.: {{ $texts->telefonnummer }}</p>

<h2>EU-Streitschlichtung</h2>
<p>Gemäß Verordnung über Online-Streitbeilegung in Verbraucherangelegenheiten (ODR-Verordnung) möchten wir Sie über die Online-Streitbeilegungsplattform (OS-Plattform) informieren.
Verbraucher haben die Möglichkeit, Beschwerden an die Online Streitbeilegungsplattform der Europäischen Kommission zu richten. Die dafür notwendigen Kontaktdaten finden Sie oberhalb in unserem Impressum.
Wir möchten Sie jedoch darauf hinweisen, dass wir nicht bereit oder verpflichtet sind, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>

<h2>Haftung für Inhalte dieser Website</h2>
<p>Wir entwickeln die Inhalte dieser Website ständig weiter und bemühen uns korrekte und aktuelle Informationen bereitzustellen. Leider können wir keine Haftung für die Korrektheit aller Inhalte auf dieser Website übernehmen, speziell für jene, die seitens Dritter bereitgestellt wurden. Als Dienstanbieter sind wir nicht verpflichtet, die von ihnen übermittelten oder gespeicherten Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
Unsere Verpflichtungen zur Entfernung von Informationen oder zur Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen aufgrund von gerichtlichen oder behördlichen Anordnungen bleiben auch im Falle unserer Nichtverantwortlichkeit davon unberührt.
Sollten Ihnen problematische oder rechtswidrige Inhalte auffallen, bitte wir Sie uns umgehend zu kontaktieren, damit wir die rechtswidrigen Inhalte entfernen können. Sie finden die Kontaktdaten im Impressum.</p>

<h2>Haftung für Links auf dieser Website</h2>
<p>Unsere Website enthält Links zu anderen Website für deren Inhalt wir nicht verantwortlich sind. Haftung für verlinkte Websites besteht für uns nicht, da wir keine Kenntnis rechtswidriger Tätigkeiten hatten und haben, uns solche Rechtswidrigkeiten auch bisher nicht aufgefallen sind und wir Links sofort entfernen würden, wenn uns Rechtswidrigkeiten bekannt werden.
Wenn Ihnen rechtswidrige Links auf unserer Website auffallen, bitte wir Sie uns zu kontaktieren. Sie finden die Kontaktdaten im Impressum.</p>

<h2>Urheberrechtshinweis</h2>
<p>Alle Inhalte dieser Webseite (Bilder, Fotos, Texte, Videos) unterliegen dem Urheberrecht. Bitte fragen Sie uns bevor Sie die Inhalte dieser Website verbreiten, vervielfältigen oder verwerten wie zum Beispiel auf anderen Websites erneut veröffentlichen. Falls notwendig, werden wir die unerlaubte Nutzung von Teilen der Inhalte unserer Seite rechtlich verfolgen.
Sollten Sie auf dieser Webseite Inhalte finden, die das Urheberrecht verletzen, bitten wir Sie uns zu kontaktieren.
</p>

<h2>Bildernachweis</h2>
<p>Die Bilder, Fotos und Grafiken auf dieser Webseite sind urheberrechtlich geschützt.
Die Bilderrechte liegen bei den folgenden Unternehmen: {{ $texts->firmenanschrift }}</p>
<p>Alle Texte sind urheberrechtlich geschützt.</p>
?>
<br>
<form action="{{ route('anfahrtplan_edit') }}" method="get">
    <input type="submit" value="Edit">
</form>

</body>
</html>
