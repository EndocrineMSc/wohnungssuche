<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-950 w-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wohnungssuche</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="antialiased max-w-screen-md mx-auto text-gray-200 font-poppins">
<section>
    <div class="mx-auto text-center mt-2 p-2">
        <h1 class="font-bold text-3xl">Suche Wohnung zur Miete</h1>
        <h2 class="text-xl">Sebastian Schulz</h2>
    </div>
</section>
<section aria-label="Kurze Zusammenfassung" class="shadow-[0_25px_-12px_rgb(255, 255, 255)] mx-2">
    <h2 class="text-2xl mt-3 font-bold p-2 text-center">Kurzfassung</h2>
    <div class="max-w-screen-md justify-around items-start p-2">
        <div class="flex flex-col justify-center gap-3">
            <h3 class="font-bold text-lg">Wohnung</h3>
            <div>
                <ul class="list-disc list-inside">
                    <li>50+ &#13217;</li>
                    <li>2+ Zimmer</li>
                    <li>Erdgeschoss / 1. Stock</li>
                    <li>Max. ~1100€ warm (VHB)</li>
                    <li>Einzugsdatum beliebig</li>
                </ul>
            </div>
            <h3 class="font-bold text-lg">Zu mir</h3>
            <div class="flex w-full h-54 gap-5 items-center">
                <div class="h-52">
                    <img src="portrait.jpg" alt="portrait" class="rounded h-full w-auto">
                </div>
                <div>
                    <ul class="list-disc list-inside">
                        <li>34 männlich</li>
                        <li>Webentwickler</li>
                        <li>Nichtraucher</li>
                        <li>Suche alleine</li>
                        <li>Schufa: 98.74%</li>
                        <li>Freundlich</li>
                        <li>Ruhig</li>
                        <li>Zuverlässig</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section aria-label="Dokument-Downloads">
    <div class="w-full p-2">
        <h3 class="font-bold text-lg">Dokumente</h3>
        <div class="max-h-8">
            <a href="schufa.pdf" download class="flex mt-3 gap-2 items-center">
                <img src="pdf-icon.svg" alt="pdf" class="max-h-6">
                Schufa-Score
            </a>
        </div>
    </div>
</section>
<section aria-label="Kontaktdaten">
    <div class="w-full p-2 mt-3">
        <h3 class="font-bold text-lg">Kontakt</h3>
        <ul>
            <li>Sebastian Schulz</li>
            <li>Mühlstraße 4</li>
            <li>86911 Dießen am Ammersee</li>
            <li>
                <a
                    href="mailto: sebastian.rob.schulz@gmail.com"
                    class="text-blue-500 underline">
                    sebastian.rob.schulz@email.com
                </a>
            </li>
            <li>Mobil: 0162 / 794 70 36</li>
        </ul>
    </div>
</section>
<section aria-label="Bio" class="w-full">
    <div class="mx-auto text-center">
        <h2 class="text-2xl my-3 font-bold">Langfassung</h2>
        <div class="text-start flex flex-col gap-2 mx-2">
            <p>Hallo! Mein Name ist Sebastian Schulz und ich suche eine Wohnung in der Umgebung von Neu-Ulm.</p>
            <p>Ich habe eine Festanstellung in Neu-Ulm, aber fühle mich in Vororten wohler als in der Stadt.</p>
            <p>Meine bisherigen Vermieter bezeichnen mich als ruhig, freundlich und zuverlässig und auf Anfrage wird meine jetzige Vermieterin das auch gerne bestätigen.</p>
            <p>Seit ich 2016 meinen Master of Science in der Universität Ulm abgeschlossen habe, bin ich lückenlos in angestellter Position beschäftigt.</p>
            <p>Ich wünsche mir eine Wohnung zu finden, in der ich eine lange Zeit bleiben kann. Seit meiner Studienzeit hier habe ich Ulm und Umgebung zu schätzen gelernt und würde gerne für die voraussehbare Zukunft hier bleiben.</p>
            <p>Sollten Sie weitere Informationen benötigen erreichen sie mich am besten über die oben genannte E-Mail. Bei Anrufen bin ich schlechter zu erreichen, rufe aber schnellstmöglich (üblicherweise innerhalb einer Stunde) zurück.</p>
            <p>Ich hoffe Sie bald kennen zu lernen und wieder zurück in die Nähe meiner Studienstadt ziehen zu können.</p>
            <p>Viele Grüße,</p>
            <p class="-mt-3 italic">Sebastian Schulz</p>
        </div>
    </div>
</section>
</body>
</html>
