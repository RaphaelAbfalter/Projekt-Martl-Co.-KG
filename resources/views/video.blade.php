@extends('dashboard')
@section('content')
<main class="container-video">
	<section class="video-section">
		<h2>AOI-Roboterzelle mit Verkettung</h2>
		<video controls muted loop preload>
			<source src="U:\PP\public\Videos\roboter1.mp4" type="video/mp4">
			Your browser does not support the video tag.
			Videoeinbindung wird in Ihrem Browser nicht unterstützt.
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
	</section>
	<section class="video-section">
		<h2>Roboterhandlingsgerät für Ferritkerne</h2>
		<video controls muted loop preload>
			<source src="U:\PP\public\Videos\roboter2.mp4" type="video/mp4"></source>
			Your browser does not support the video tag.
			Videoeinbindung wird in Ihrem Browser nicht unterstützt.
		</video>
		<ul>
			<li>Abnahme von Ferritkernen aus Presse</li>
			<li>Handling der Teile mit Kuka 6-Achs-Roboter mit Vakuumsauger</li>
			<li>Ablage der Ferritkerne in Sinterschalen</li>
			<li>Einbringen eines Trennmittels</li>
			<li>Pufferung der Sinterschalen in einem Paternoster-Lagerregal für eine hohe Autonomiezeit</li>
		</ul>
	</section>
</main>
@endsection