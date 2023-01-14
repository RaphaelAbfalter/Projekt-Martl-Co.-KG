@extends('dashboard')
@section('content')
<body> 
	<div>
		<h2>AOI-Roboterzelle mit Verkettung</h2>
		<video controls muted loop preload>
			<source src="{{ public_path('videos/roboter1.mp4') }}" type="video/mp4">
		</video>
		<ul>
			<li>Löten von Elektronikbauteilen</li>
			<li>Reinigung von Verschmutzungen</li>
			<li>Lötstellenkontrolle mittels 3D-Kamera</li>
			<li>Bauteilhandlung mit 6-Achs-Roboter</li>
			<li>Verkettung mit Lötanlagen & vorgelagerten Prozessen mittels Transferbändern</li>
			<li>Datenerfassung von Kameramesswerten und Ablage in Datenbanken</li>
			<li>Erfassung Lötdaten mittels RFID-System</li>
		</ul>

		<h2>Roboterhandlingsgerät für Ferritkerne</h2>
		<video controls muted loop preload>
			<source src="{{ public_path('videos/roboter2.mp4') }}" type="video/mp4"></source>
		</video>
		<ul>
			<li>Abnahme von Ferritkernen aus Presse</li>
			<li>Handling der Teile mit Kuka 6-Achs-Roboter mit Vakuumsauger</li>
			<li>Ablage der Ferritkerne in Sinterschalen</li>
			<li>Einbringen eines Trennmittels</li>
			<li>Pufferung der Sinterschalen in einem Paternoster-Lagerregal für eine hohe Autonomiezeit</li>
		</ul>
	</div>
	<div>
		<footer>
			<p>*Footer* Kontakt - Anfahrt - News - Impressum *Footer*</p>
		</footer>
	</div>
</body>
@endsection