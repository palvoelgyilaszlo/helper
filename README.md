# helper

 Die Motivation ist die Ausgabe besser sichtbar zu machen 
 und gleichzeitig die Position der Ausgabe exakt zu markeiren.

 Methoden:

# Gibt alles strukturiert und gut lesbar wieder
    Helper::e($variable);
# Gibt alle deklarierte Klassen wieder
    Helper::getClasses();
# Gibt alle Methoden eine Klasse wieder
    Helper::getClassMethod('Helper');
# Gibt den Klassenname samt Namespace zurück
    Helper::getClassName(new Helper);
# Gibt alle nutzbaren Methoden wieder
    Helper::getSelfMethodes();
# Bescheibt einiges über ein Array Objekt
    Helper::arrayObject();