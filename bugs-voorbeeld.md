# Bugs & Bevindingen - Voorbeeld

> Dit document dient als voorbeeld. Voeg hier jullie eigen bevindingen aan toe.

---

## Overzicht

| Categorie | Aantal bugs |
|-----------|-------------|
| Functionaliteit | 4 |
| Codekwaliteit | 6 |
| Beveiliging | 2 |
| Usability | 3 |
| **Totaal** | **15** |

---

## 1. Functionaliteit

### BUG-001: Kapotte navigatielinks
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Hoog |
| **Bestand** | `mainmenu.php` |
| **Beschrijving** | In `mainmenu.php` staat `projets.php` (misspelling). In `projects.php` en `about.php` staat `projet.php`. Het bestand heet eigenlijk `projects.php`. |
| **Verwacht gedrag** | Alle links verwijzen naar het juiste bestand |
| **Werkelijk gedrag** | Links leiden naar niet-bestaande pagina's |
| **Oplossing** | Maak de spelling consistent: overal `projects.php` |

### BUG-002: Lege HTML elementen op index
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `index.php` |
<!-- dit is eerder code kwaliteit -->
| **Beschrijving** | `index.php` heeft een lege `<nav>` en twee lege `<main>` tags | 
| **Oplossing** | Ver overtollige elementen |

### BUG-003: Foutieve jaar-berekening contact.php
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Medium |
| **Bestand** | `contact.php` |
| **Beschrijving** | `date('Y')+3` geeft 2029 in plaats van 2026 |
| **Oplossing** | Gebruik `date('Y')` of bereken correct |

### BUG-004: Foutieve jaar-berekening projects.php
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Medium |
| **Bestand** | `projects.php` |
| **Beschrijving** | `date("Y+2")` is geen geldige PHP syntaxis |
| **Oplossing** | Gebruik `date('Y')` |

---

## 2. Codekwaliteit

### BUG-005: Spelfouten in tekst
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `index.php` |
<!-- dit is eerder functionaliteit, dit zijn tekst elementen wat geen effect heeft op code -->
| **Beschrijving** | Meerdere spelfouten in de Nederlandse tekst |
| **Voorbeelden** | "Portofolio" → "Portfolio", "geleerdt" → "geleerd", "goei" → "goed", "niewsgierig" → "nieuwsgierig", "studtie" → "studie", "behaaldt" → "behaald", "interese" → "interesse" |

### BUG-006: CSS inconsistency mountains
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | Diverse |
<!-- ook eerder functioneel, dit kan ook een beslissing zijn van de site maker zelf, en heeft geen effect op de executie van code alleen visueel.-->
| **Beschrijving** | De `.mountains` kleur verschilt tussen pagina's: `#1E3A8A` (blauw) vs `#1E8A3A` (groen) |
| **Oplossing** | Maak de kleur consistent |

### BUG-007: Functie aangeroepen vóór definitie
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Medium |
| **Bestand** | `projects.php` |
| **Beschrijving** | `$image = getPhoto($uuid)` wordt aangeroepen voordat de functie `getPhoto()` gedefinieerd is |
| **Oplossing** | Verplaats de functie naar boven of gebruik forward declaration |

### BUG-008: Dubbele main elementen
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `index.php`, `contact.php` |
| **Beschrijving** | Meerdere `<main>` tags op één pagina |
| **Oplossing** | Gebruik maximaal één `<main>` element |

### BUG-009: database.inc.php bevat HTML
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Medium |
| **Bestand** | `database.inc.php` |
| **Beschrijving** | Het PHP-bestand bevat een incomplete HTML structuur |
| **Oplossing** | Verwijder de HTML, houd het bij PHP code |

### BUG-010: Git commit messages niet informatief
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | Git history |
| **Beschrijving** | De commit messages zijn niet duidelijk over wat er veranderd is |

### BUG-016: Spelfouten in tekst
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Gemiddeld |
| **Bestand** | `alle kerntaak bestanden` |
| **Beschrijving** | hebben spellfouten in navigatie  |
| **Voorbeelden** | projet.php |

### BUG-017: Spelfouten in tekst
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `alle bestanden` |
| **Beschrijving** | overbodig CSS code duplicatie |
| **Voorbeelden** | dezelfde CSS voor binnen bestand |


### BUG-018: Spelfouten in tekst
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `alle bestanden` |
| **Beschrijving** | Overbodig JS code duplicatie |
| **Voorbeelden** | dezelfde JS code binnen bestand |


### BUG-019: Spelfouten in tekst
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `Bijna alle documenten` |
| **Beschrijving** | Class is gedaan met pascal-case en functies met CamalCase |
| **Voorbeelden** | class="een-voorbeeld" function eenVoorbeeld()|


### BUG-020: Spelfouten in tekst
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `alle bestanden` |
| **Beschrijving** | body en Footer zijn vaak hetzelfde |
| **Voorbeelden** | body en footer zijn vaak gekopieerd |

### BUG-021: Spelfouten in tekst
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `mappenstructuur` |
| **Beschrijving** | mappenstructuur is zeer moeilijk te navigeren |
| **Voorbeelden** | alle bestanden in een map |

### BUG-022: Spelfouten in tekst
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | `database.inc.php` |
| **Beschrijving** | onnodige naam |
| **Voorbeelden** | .inc is onnodig |


---

## 3. Beveiliging

### BUG-011: Database credentials hardcoded
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | **Kritiek** |
| **Bestand** | `database.inc.php` |
| **Beschrijving** | Gebruikersnaam en wachtwoord staan in plain text in de code |
| **Waarde** | `$username = "root"`, `$password = "root"` |
| **Oplossing** | Gebruik environment variables of een `.env` bestand |

### BUG-012: Potentiële SQL injectie
| | |
|---|---|
| **Status** | 🟡 Te onderzoeken |
| **Ernst** | Hoog |
| **Bestand** | `projects.php` |
| **Beschrijving** | `$row["url"]` wordt direct in HTML geplaatst. Wel wordt `htmlspecialchars()` gebruikt voor output, maar de query zelf is niet prepared |
| **Oplossing** | Gebruik prepared statements voor alle queries |

---

## 4. Usability

### BUG-013: Nep e-mailadres
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Medium |
| **Bestand** | `contact.php` |
| **Beschrijving** | `mailto:l.v.m@gmeel.com` is een nepmail (gmeel.com = nep domein) |
| **Oplossing** | Gebruik een echt e-mailadres |

### BUG-014: Kapotte GitHub link
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Medium |
| **Bestand** | `contact.php` |
| **Beschrijving** | `https ://github.com/lorenzovonmatterhorn` bevat een spatie |
| **Oplossing** | Verwijder de spatie |

### BUG-015: Footer naam niet consistent
| | |
|---|---|
| **Status** | 🔴 Actief |
| **Ernst** | Laag |
| **Bestand** | Diverse |
| **Beschrijving** | Footer varieert tussen "Swarley", "Swarley & CO", "Swarley & CO" |
| **Oplossing** | Maak de naam consistent |

---

## Bronnen
- GitHub: https://github.com/sberghsvista/MessyCoderChallenge
- Leerdomeinen: B1-K1-W4, B1-K1-W5
