# Plan van Eisen - Portfolio Applicatie

> Bron: Plan van Eisen (meegestuurd door docent)

## Aanleiding voor de applicatie
Studenten van de opleiding Software Developer moeten een portfolio maken waarin ze hun kennis en vaardigheden tonen en bewijzen. Dit portfolio dient als basis voor het eindexamen van de opleiding.

## Doel van de applicatie
De applicatie moet op basis van de werkprocessen een goed overzicht geven van de opgedane kennis en vaardigheden van de student. De applicatie kan bewijsmateriaal tonen dat het door de student aangegeven niveau ondersteunt.

## Functionaliteiten

- Het navigatiemenu bevat minimaal de onderdelen: Over mij | Projecten | Kerntaken | Contact | Inloggen (Uitloggen)
- Over mij moet de mogelijkheid hebben om tekst en foto's of video's over en van de student te bevatten.
- Projecten toont een overzicht van de projecten die de student inbrengt voor dit portfolio. Elk project kent een link naar de projectdetails. Elke project moet minimaal 1, liefst meerdere screenshots kunnen laten zien. Tevens wordt het project ondersteunt door tekst.
- Kerntaken bevat een lijst van de kerntaken en werkprocessen. Elke werkproces kent een link waarin een lijst van bewijsmateriaal wordt getoond. Het bewijsmateriaal is geen link naar externe bronnen. Alles moet binnen het project worden opgeslagen. Het bewijsmateriaal kan diverse extenties hebben, minimaal wordt gedacht aan pdf, jpg, jpeg, png, mov, mp4, mp3. Deze lijst mag uitgebreid worden.
- Contact bevat de contactgegevens van de student. Deze pagina bevat minimaal een e-mailadres, of een formulier waarin contact gezocht kan worden. Tevens mogen links naar LinkedIn, FaceBook, Instagram, TikTok of andere social media worden gegeven.
- Inloggen per student. Elke student krijgt zijn eigen portfolio te zien. De student is tevens admin voor zijn eigen portfolio.
- De applicatie kent een mogelijkheid om bewijsmateriaal te kunnen uploaden en te verwijderen.
- De applicatie kent een mogelijkheid om teksten te kunnen toevoegen of te wijzigen.
- De applicatie kent een aanpasbare 'look and feel', zodat de student zijn eigen draai kan geven aan de vormgeving.
- De applicatie kent een mogelijkheid om projecten te kunnen toevoegen, wijzigen en verwijderen.
- De applicatie kent een goede, juiste en intuïtieve navigatiestructuur en is wordt door de gebruiker als prettig ervaren.
- Het beoordelingsformulier van het portfolio-examen is verwerkt in de applicatie.
- De applicatie kent een inlogsysteem dat erop toeziet dat alleen geregistreerde gebruikers kunnen toevoegen, wijzigen en verwijderen.
- De applicatie moet gebruikt kunnen worden door meerdere studenten. Elke student krijgt alleen zijn eigen projecten en zijn eigen bewijslast te zien. Tevens kan elke student zijn eigen 'look and feel' aanpassen en wordt dit door de applicatie onthouden.
- Er moet een registratieproces zijn om je te kunnen aanmelden. Dit proces bevat een tweetraps verificatie voordat je kunt inloggen. Bij voorkeur via een e-mailbevestiging.

## Eindverwachting
De applicatie toont een goed en duidelijk overzicht van de projecten van de student, waaraan deze tijdens de opleiding aan heeft gewerkt. Tevens toont de applicatie een goed en duidelijk overzicht van de opgedane kennis en vaardigheden van de student op basis van de werkprocessen en het beoordelingsformulier.

---

## User Stories

### Epic 1 – Portfolio bekijken

**US-01 – Navigatiemenu**
Als bezoeker wil ik een duidelijk navigatiemenu met de onderdelen Over mij, Projecten, Kerntaken, Contact en Inloggen/Uitloggen zodat ik eenvoudig door het portfolio kan navigeren.
Acceptatiecriteria:
- Navigatiemenu is op iedere pagina zichtbaar.
- Menu bevat minimaal de genoemde onderdelen.
- Actieve pagina is zichtbaar gemarkeerd.

**US-02 – Over mij bekijken**
Als bezoeker wil ik informatie over de student kunnen bekijken, inclusief tekst, foto's en video's zodat ik een indruk krijg van de student.
Acceptatiecriteria:
- Pagina bevat tekst.
- Foto's kunnen worden weergegeven.
- Video's kunnen worden afgespeeld.

**US-03 – Projectoverzicht bekijken**
Als bezoeker wil ik een overzicht van alle projecten zien zodat ik snel kan bekijken welke projecten de student heeft uitgevoerd.
Acceptatiecriteria:
- Alle projecten worden weergegeven.
- Elk project bevat minimaal een titel.
- Elk project bevat een link naar de detailpagina.

**US-04 – Projectdetails bekijken**
Als bezoeker wil ik de details van een project bekijken zodat ik meer informatie krijg over het project.
Acceptatiecriteria:
- Project bevat een omschrijving.
- Er wordt minimaal één screenshot getoond.
- Meerdere screenshots kunnen worden weergegeven.

**US-05 – Kerntaken bekijken**
Als bezoeker wil ik een overzicht van kerntaken en werkprocessen zien zodat ik kan beoordelen welke competenties zijn behaald.
Acceptatiecriteria:
- Alle kerntaken worden weergegeven.
- Werkprocessen zijn zichtbaar.
- Werkprocessen bevatten een detailpagina.

**US-06 – Bewijsmateriaal bekijken**
Als bezoeker wil ik bewijsmateriaal bij een werkproces kunnen bekijken zodat ik de behaalde vaardigheden kan controleren.
Acceptatiecriteria:
- Bewijsmateriaal staat lokaal opgeslagen.
- Ondersteunde bestanden zijn minimaal: PDF, JPG, JPEG, PNG, MOV, MP4, MP3.

**US-07 – Contactgegevens bekijken**
Als bezoeker wil ik de contactgegevens van de student kunnen bekijken zodat ik contact kan opnemen.
Acceptatiecriteria:
- E-mailadres is zichtbaar of er is een contactformulier.
- Social media links kunnen worden weergegeven.

### Epic 2 – Authenticatie

**US-08 – Registreren**
Als nieuwe student wil ik een account kunnen aanmaken zodat ik mijn eigen portfolio kan beheren.
Acceptatiecriteria:
- Registratieformulier is beschikbaar.
- Uniek e-mailadres is verplicht.
- Account is pas actief na verificatie.

**US-09 – E-mailverificatie**
Als nieuwe student wil ik mijn account via e-mail bevestigen zodat mijn account veilig wordt geactiveerd.
Acceptatiecriteria:
- Er wordt een verificatiemail verstuurd.
- Account is pas actief na bevestiging.

**US-10 – Inloggen**
Als student wil ik kunnen inloggen zodat ik mijn portfolio kan beheren.
Acceptatiecriteria:
- Alleen geldige gebruikers kunnen inloggen.
- Na inloggen wordt het eigen portfolio geopend.

**US-11 – Uitloggen**
Als ingelogde student wil ik kunnen uitloggen zodat mijn gegevens beschermd blijven.
Acceptatiecriteria:
- Sessie wordt beëindigd.
- Gebruiker wordt teruggestuurd naar de startpagina.

**US-12 – Autorisatie**
Als student wil ik alleen mijn eigen portfolio kunnen beheren zodat gegevens van andere studenten beschermd blijven.
Acceptatiecriteria:
- Studenten kunnen geen gegevens van anderen wijzigen.
- Studenten zien uitsluitend hun eigen gegevens.

### Epic 3 – Portfolio beheren

**US-13 – Teksten beheren**
Als student wil ik teksten kunnen toevoegen en wijzigen zodat mijn portfolio actueel blijft.
Acceptatiecriteria:
- Teksten kunnen worden toegevoegd.
- Teksten kunnen worden gewijzigd.
- Wijzigingen worden opgeslagen.

**US-14 – Project toevoegen**
Als student wil ik een nieuw project kunnen toevoegen zodat mijn portfolio compleet blijft.
Acceptatiecriteria:
- Titel is verplicht.
- Beschrijving kan worden ingevuld.
- Screenshots kunnen worden toegevoegd.

**US-15 – Project wijzigen**
Als student wil ik bestaande projecten kunnen aanpassen zodat informatie actueel blijft.
Acceptatiecriteria:
- Alle projectgegevens kunnen worden aangepast.
- Wijzigingen worden opgeslagen.

**US-16 – Project verwijderen**
Als student wil ik projecten kunnen verwijderen zodat mijn portfolio overzichtelijk blijft.
Acceptatiecriteria:
- Verwijderen vraagt om bevestiging.
- Project verdwijnt uit het overzicht.

**US-17 – Bewijsmateriaal uploaden**
Als student wil ik bestanden kunnen uploaden zodat ik bewijs van mijn werk kan toevoegen.
Acceptatiecriteria:
- Ondersteunde bestandstypen worden geaccepteerd.
- Upload wordt gekoppeld aan een werkproces.

**US-18 – Bewijsmateriaal verwijderen**
Als student wil ik bewijsmateriaal kunnen verwijderen zodat ik verouderde bestanden kan opruimen.
Acceptatiecriteria:
- Verwijderen vraagt om bevestiging.
- Bestand wordt verwijderd uit de applicatie.

**US-19 – Look & Feel aanpassen**
Als student wil ik de vormgeving van mijn portfolio kunnen aanpassen zodat mijn portfolio een persoonlijke uitstraling krijgt.
Acceptatiecriteria:
- Kleuren kunnen worden aangepast.
- Thema wordt opgeslagen.
- Instellingen blijven behouden na opnieuw inloggen.

### Epic 4 – Portfolio beoordelen

**US-20 – Beoordelingsformulier bekijken**
Als docent of examinator wil ik het beoordelingsformulier binnen de applicatie kunnen gebruiken zodat ik het portfolio eenvoudig kan beoordelen.
Acceptatiecriteria:
- Beoordelingscriteria zijn zichtbaar.
- Criteria sluiten aan op de werkprocessen.

**US-21 – Werkprocessen koppelen aan bewijs**
Als docent of examinator wil ik per werkproces het bewijsmateriaal kunnen bekijken zodat ik de beoordeling kan onderbouwen.
Acceptatiecriteria:
- Werkproces toont gekoppeld bewijs.
- Bestanden zijn direct te openen.

### Epic 5 – Gebruiksvriendelijkheid

**US-22 – Intuïtieve navigatie**
Als gebruiker wil ik eenvoudig door de applicatie kunnen navigeren zodat ik snel de gewenste informatie vind.
Acceptatiecriteria:
- Navigatie is logisch opgebouwd.
- Pagina's laden zonder fouten.
- Gebruiker kan met maximaal drie klikken belangrijke informatie bereiken.

**US-23 – Responsive ontwerp**
Als gebruiker wil ik het portfolio op verschillende apparaten kunnen gebruiken zodat ik het portfolio altijd kan bekijken.
Acceptatiecriteria:
- Applicatie werkt op desktop.
- Applicatie werkt op tablet.
- Applicatie werkt op mobiele telefoon.

### Epic 6 – Multi-user ondersteuning

**US-24 – Eigen portfolio**
Als student wil ik alleen mijn eigen projecten en bewijsmateriaal zien zodat mijn portfolio privé blijft.
Acceptatiecriteria:
- Gegevens zijn gescheiden per gebruiker.
- Andere portfolio's zijn niet toegankelijk.

**US-25 – Persoonlijke instellingen onthouden**
Als student wil ik dat mijn persoonlijke instellingen worden opgeslagen zodat mijn portfolio na iedere login dezelfde uitstraling behoudt.
Acceptatiecriteria:
- Thema wordt opgeslagen.
- Instellingen blijven behouden na uitloggen.
- Instellingen worden automatisch geladen bij het inloggen.