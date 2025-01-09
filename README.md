# Repair Report App

Dit is een Laravel CRUD-applicatie waarmee beheerders reparatierapporten voor horloges kunnen beheren. De applicatie maakt gebruik van Laravel 10 en biedt de mogelijkheid om rapporten aan te maken, te bekijken, bij te werken en te verwijderen. Het project is bedoeld voor intern gebruik binnen een horlogebedrijf.

## Functionaliteiten

- **Rapport Aanmaken**: Beheerders kunnen nieuwe reparatierapporten aanmaken door gegevens zoals het horlogemodel, de reden van reparatie, de datum van het rapport en de geplande reparatiedatum in te voeren.
- **Rapport Bekijken**: Alle reparatierapporten kunnen worden bekeken in een nette galerijweergave.
- **Rapport Bewerken**: Beheerders kunnen bestaande reparatierapporten bijwerken.
- **Rapport Verwijderen**: Beheerders kunnen reparatierapporten verwijderen.

## Technologieën

- **Laravel 10**
- **MySQL**
- **Eloquent ORM**
- **Blade Templates**

## Installatie

Volg de onderstaande stappen om de applicatie lokaal te installeren:

1. Clone het project:
   ```bash
   git clone https://github.com/bakkouy2005/repair-report-apps.git

2. Ga naar de projectmap:
   cd repair-report-apps

3. Installeer de afhankelijkheden:
composer install

4. Kopieer het .env-bestand:
cp .env.example .env

5. Stel de juiste databaseconfiguratie in het .env-bestand in (bijv. MySQL-databasegegevens).

6. Maak de database en voer de migraties uit:
php artisan migrate

7. Start de server:
php artisan serve

- Gebruik

Meld je aan als beheerder om toegang te krijgen tot de applicatie.
Je kunt reparatierapporten aanmaken, bijwerken, verwijderen en bekijken.

Dit project is open-source en gelicentieerd onder de MIT-licentie.

Als je klaar bent, sla je de wijzigingen op en commit je de **README.md** opnieuw naar GitHub:

```bash
git add README.md
git commit -m "Update README.md"
git push origin main

