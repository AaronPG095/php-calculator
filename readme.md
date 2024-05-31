# Hilfe!!!
## Irgendetwas stimmt mit unserem Taschenrechner nicht mehr?!
Seit gestern kann ich unseren Taschenrechner nicht mehr verwenden.

Er liefert keine Ergebnisse mehr aus.
Nach Rücksprache mit der IT funktioniert auch der Unit-Test nicht mehr.

Als die IT den Test mittels: <code>./vendor/bin/phpunit tests</code> im Projekt-Verzeichnis ausführte, kam unter Anderem folgender Fehler:

<code>
There were 2 errors:

1) Azubi\tests\Math\MathTest::testAdd
   TypeError: Typed property Azubi\tests\Math\MathTest::$sut must be an instance of Azubi\Math\MathInterface or null, Azubi\Math\Math used
</code>

Des Weiteren hatte die IT den Verdacht, dass der Unit-Test nicht mehr vollständig ist.

### ToDo:
1. prüfen weshalb der Unit-Test nicht mehr funktioniert
2. Unit-Test reparieren
3. Unit-Test vervollständigen
4. WICHTIG!!! dafür sorgen, dass der Taschenrechner wieder die richtigen Ergebnisse liefert

#### nice to have:
 * Composer Autoloading verwenden (PSR-4)
 * Bitte das Layout wieder etwas moderner gestalten.
 * Unit-Tests via composer ausführbar machen

### Tips:
#### Composer
Composer ist eine Paketverwaltungssoftware für PHP.  
In der ***composer.json*** Datei werden die Pakete definiert, welche für das aktuelle Projekt benötigt werden.  

Durch den Befehl <code>composer install</code> werden dem Projekt alle nötigen Pakete hinzugefügt.  
Die Eingabe von <code>composer require **PAKET_NAME**</code> wird dem Projekt beispielsweise das Paket **PAKET_NAME** und dessen Abhängigkeiten hinzufügen.

Näheres dazu unter: [getcomposer.org](https://getcomposer.org/)