# Checklist Plan van Eisen vs Lorenzo's Website

> Toets van Lorenzo's portfolio website tegen alle 25 user stories uit het Plan van Eisen.
> Legenda: ✅ voldoet | ⚠️ deels | ❌ ontbreekt | ❓ nog te testen

## Epic 1 – Portfolio bekijken

| ID | User story | Voldoet? | Uitleg / bevinding |
|----|-----------|----------|--------------------|
| US-01 | Navigatiemenu | ❌ | Menu heeft Over Mij, Projecten, Kerntaken, Contact, maar **geen Inloggen/Uitloggen**. Geen actieve-pagina-markering. |
| US-02 | Over mij bekijken | ⚠️ | Pagina bestaat (`about.php`) maar bevat alleen tekst, geen foto's of video's. |
| US-03 | Projectoverzicht bekijken | ❓ | Pagina bestaat (`projects.php`) maar navigatielink is kapot (`projets.php`). Database koppeling aanwezig. |
| US-04 | Projectdetails bekijken | ❌ | **Geen detailpagina** per project. Alleen een platte lijst met link naar externe URL. |
| US-05 | Kerntaken bekijken | ⚠️ | Pagina toont alle 8 werkprocessen met links. Eén link bevat een extra spatie (`b1k1w5.php`). |
| US-06 | Bewijsmateriaal bekijken | ⚠️ | Werkproces-pagina's bestaan (`kerntaken/b1k1w*.php`) maar onduidelijk of ze lokaal bewijsmateriaal tonen. |
| US-07 | Contactgegevens bekijken | ⚠️ | Pagina bestaat met e-mail (`mailto:l.v.m@gmeel.com` = **nepadres**) en LinkedIn/GitHub links. GitHub link bevat spatie (kapot). |

## Epic 2 – Authenticatie

| ID | User story | Voldoet? | Uitleg / bevinding |
|----|-----------|----------|--------------------|
| US-08 | Registreren | ❌ | Geen registratieformulier aanwezig. |
| US-09 | E-mailverificatie | ❌ | Niet aanwezig. |
| US-10 | Inloggen | ❌ | Geen inlogfunctionaliteit. |
| US-11 | Uitloggen | ❌ | Niet aanwezig. |
| US-12 | Autorisatie | ❌ | Niet aanwezig. Iedereen kan alles zien. |

## Epic 3 – Portfolio beheren

| ID | User story | Voldoet? | Uitleg / bevinding |
|----|-----------|----------|--------------------|
| US-13 | Teksten beheren | ❌ | Teksten staan hardcoded in PHP-bestanden. Geen beheer. |
| US-14 | Project toevoegen | ❌ | Geen formulier. Projecten staan in database maar zijn niet toe te voegen. |
| US-15 | Project wijzigen | ❌ | Niet mogelijk. |
| US-16 | Project verwijderen | ❌ | Niet mogelijk. |
| US-17 | Bewijsmateriaal uploaden | ❌ | Niet mogelijk. |
| US-18 | Bewijsmateriaal verwijderen | ❌ | Niet mogelijk. |
| US-19 | Look & Feel aanpassen | ⚠️ | Alleen dark mode toggle (client-side). Geen kleurkeuze, niet opgeslagen. |

## Epic 4 – Portfolio beoordelen

| ID | User story | Voldoet? | Uitleg / bevinding |
|----|-----------|----------|--------------------|
| US-20 | Beoordelingsformulier bekijken | ❌ | Niet aanwezig. |
| US-21 | Werkprocessen koppelen aan bewijs | ❓ | Werkproces-pagina's bestaan maar inhoud nog controleren. |

## Epic 5 – Gebruiksvriendelijkheid

| ID | User story | Voldoet? | Uitleg / bevinding |
|----|-----------|----------|--------------------|
| US-22 | Intuïtieve navigatie | ❌ | Meerdere kapotte links (`projets.php`/`projet.php`), lege `<nav>`/`<main>` elementen op index. |
| US-23 | Responsive ontwerp | ❓ | `viewport` meta-tag aanwezig. Layout moet nog op desktop/tablet/mobiel getest worden. |

## Epic 6 – Multi-user ondersteuning

| ID | User story | Voldoet? | Uitleg / bevinding |
|----|-----------|----------|--------------------|
| US-24 | Eigen portfolio | ❌ | Geen gebruikers of scheiding van gegevens. |
| US-25 | Persoonlijke instellingen onthouden | ❌ | Dark mode wordt niet onthouden na herladen. |

---

## Scoreoverzicht

| Epic | ✅ | ⚠️ | ❌ | ❓ |
|------|----|----|----|----|
| Epic 1 – Portfolio bekijken | 0 | 5 | 2 | 0 |
| Epic 2 – Authenticatie | 0 | 0 | 5 | 0 |
| Epic 3 – Portfolio beheren | 0 | 1 | 6 | 0 |
| Epic 4 – Portfolio beoordelen | 0 | 0 | 1 | 1 |
| Epic 5 – Gebruiksvriendelijkheid | 0 | 0 | 1 | 1 |
| Epic 6 – Multi-user | 0 | 0 | 2 | 0 |
| **Totaal** | **0** | **6** | **17** | **2** |

**Conclusie:** 17 van de 25 user stories ontbreken volledig. De website is een statische pagina
en mist vrijwel alle gevraagde functionaliteit (inloggen, beheer, uploads, beoordeling).

> **Let op:** Deze checklist is een eerste analyse op basis van de code. Verifieer elke
> uitspraak door de website daadwerkelijk te draaien en te testen.