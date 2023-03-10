<?php
$i18n = array(
    'GO' => "Suchen",
    'PLACEHOLDER' => "Suchwörter",
    'HEADER' => "Suchergebnisse",
    'NOT_FOUND' => "Keine Ergebnisse gefunden",
    'DATE_LOCALE' => "de_DE.utf8,de_DE,de",
    'DATE_FORMAT' => "%A, %d.%m.%Y - %H:%M",
    'FIRST_TEXT' => "<<",
    'FIRST_TITLE' => "Erste Seite",
    'PREV_TEXT' => "<",
    'PREV_TITLE' => "Vorige Seite",
    'NEXT_TEXT' => ">",
    'NEXT_TITLE' => "Nächste Seite",
    'LAST_TEXT' => ">>",
    'LAST_TITLE' => "Letzte Seite",
    'CONFIGURE' => "I18N Search konfigurieren",
    'CONFIGURATION' => "I18N Search",
    'VIEW_USAGE' => "Verwendung",
    'VIEW_SETTINGS' => "Einstellungen",
    'INDEX_SETTINGS' => "Indizierungseinstellungen",
    'INDEX_DESCRIPTION' => "Diese Einstellungen beschreiben, wie wichtig es ist, wo ein Wort gefunden wird, z.B. ein a Gewicht des Inhalts von 1 und ein Gewicht des Titels von 5 bedeutet, dass es mehr zählt, wenn das Wort im Titel gefunden wird als 4mal im Seiteninhalt selbst.",
    'CONTENT_WEIGHT' => "Relatives Gewicht des Inhalts",
    'TITLE_WEIGHT' => "Relatives Gewicht des Titels",
    'TAG_WEIGHT' => "Relatives Gewicht von Schlüsselwörtern",
    'SEARCHFORM_SETTINGS' => "Suchformular-Einstellungen",
    'SEARCHFORM_DESCRIPTION' => "Wollen Sie eine Schlüsselwortwolke im Suchformular haben? Wenn Sie keine Schlüsselwörter eingegeben haben, schalten Sie diese Option aus.",
    'SHOW_TAGS' => "Schlüsselwortwolke anzeigen",
    'MIN_TAG_SIZE' => "Minimale Schriftgröße eines Schlüsselworts (Prozent)",
    'MAX_TAG_SIZE' => "Maximale Schriftgröße eines Schlüsselworts (Prozent)",
    'SEARCHRESULT_SETTINGS' => "Suchergebnis-Einstellungen",
    'SEARCHRESULT_DESCRIPTION' => "Diese Einstellungen beschreiben, wie die Suchergebnisse dargestellt werden sollen.",
    'MAX' => "Maximale Anzahl von Ergebnissen pro Seite",
    'NUM_WORDS' => "Anzahl anzuzeigender Wörter des Inhalts (0 = nichts, -1 = ganzer Inhalt)",
    'SHOW_LANGUAGE' => "Sprache anzeigen (nur für mehrsprachige Sites sinnvoll)",
	'SHOW_UL' => "Use UL and LI HTML-tags",
    'SHOW_DATE' => "Publizierungsdatum anzeigen",
    'SHOW_PAGING' => "Bei mehr Ergebnissen Navigation zum Blättern anzeigen",
    'SAVE_CONFIGURATION' => "Suchkonfiguration speichern",
    'RESET_CONFIGURATION' => "Suchkonfiguration zurücksetzen",
    'SAVE_FAILURE' => "Ihre Änderungen der Suchkonfiguration konnten nicht gespeichert werden.",
    'SAVE_SUCCESS' => "Ihre Änderungen der Suchkonfiguration wurde gespeichert.",
    'RESET_FAILURE' => "Die Suchkonfiguration konnten nicht zurückgesetzt werden.",
    'RESET_SUCCESS' => "Die Suchkonfiguration wurde auf die Standardwerte zurückgesetzt.",
    'UNDO_FAILURE' => "Die Suchkonfiguration konnte nicht wiederhergestellt werden.",
    'UNDO_SUCCESS' => "Die Suchkonfiguration wurde wiederhergestellt.",
    'USAGE_IN_PAGE' => "Um das I18N Search plugin zu benutzen, erstellen Sie eine Seite - z.B. mit URL search and title \"Suche\" - mit folgenden Zeilen:",
    'USAGE_IN_TEMPLATE' => "Um ein Suchformular in die Sidebar oder in eine Vorlage (z.B. den Kopf der Seite) zu stellen, benutzen Sie den folgenden Code ('search' ist die Seite zum Anzeigen der Suchergebnisse):",
    'CUSTOMIZE_1' => "Um die Suche individuell anzupassen, verwenden Sie die ",
    'CUSTOMIZE_2' => "Seite und/oder fügen Sie Parameter zu den Suchaufrufen hinzu:",
    'CUSTOMIZE_3' => "wobei die folgenden Parameter erlaubt sind:",
    'PARAMETER_NAME' => "Name",
    'PARAMETER_DESCRIPTION' => "Beschreibung",
    'SLUG_DESCR' => "Slug/URL der Seite, die die Suchergebnisse anzeigt, z.B. search",
    'GO_DESCR' => "Text der Suchen-Schaltfläche",
    'TAGS_DESCR' => "Tags (Schlüsselwörter), nach denen gesucht werden soll - statt der eingegebenen Tags im Suchformular",
    'WORDS_DESCR' => "Wörter, nach denen gesucht werden soll - statt der eingegebenen Wörter im Suchformular",
    'ORDER_DESCR' => "Reihenfolge der Ergebnisse: <i>url</i> = nach URL aufsteigend, <i>reverseurl</i> = nach URL absteigend, <i>date</i> = nach Publizierungsdatum absteigend, <i>created</i> = nach Erstellungsdatum absteigend (falls vorhanden), Standard: nach Bewertung absteigend",
    'HEADER_DESCR' => "Überschrift über den Suchergebnissen",
    'NOT_FOUND_DESCR' => "Meldung, dass keine Ergebnisse gefunden wurden",
    'DATE_LOCALE_DESCR' => "Sprachcode (Locale) zur Darstellung eines Datums, oder mehrere, durch Komma getrennt, z.B. \"de_DE.utf8,de_DE,de\"",
    'DATE_FORMAT_DESCR' => "Datumsformat, wie für die PHP-Funktion strftime beschrieben, z.B. \"%A, %d.%m.%Y - %H:%M\"",
    'PAGING_DESCR' => "Blättern, z.B. ",
    'LANGUAGE_FILE_COMMENT' => "Die Parameter in Großbuchstaben werden normalerweise aus den Sprachdateien des Plugins gelesen. Daher wird empfohlen, Sprachdateien (in /plugins/i18n_search/lang/) zu erzeugen oder zu modifizieren anstatt diese Parameter zu verwenden.",
    'LANG_DESCR' => "Wenn angegeben, werden nur Ergebnisse in dieser Sprache zurückgegeben, andernfalls in allen Sprachen des Benutzers und in der Standardsprache. Z.B.: \"de\"",
    'ADDTAGS_DESCR' => "Zusätzliche Tags, die zur Suchanfrage hinzugefügt werden",
    'ADDWORDS_DESCR' => "Zusätzliche Wörter, die zur Suchanfrage hinzugefügt werden",
    'COMPONENT_DESCR' => "Eine Komponente, die für jedes Suchresultat aufgerufen wird",
    'TRANSLITERATION' => "Transkription",
    'TRANSLITERATION_DESCRIPTION' => "Hier können Sie Buchstaben eingeben, die für die Suche ersetzt werden sollen. Jede Zeile muss eine Übersetzung in der Form <em>Quellzeichen \"=\" Zielzeichen</em> enthalten, z.B. <em>ö=o</em>.",
    'TRANSLITERATION_SETTINGS' => "Transkriptionseinstellungen",
    'AJAX_DESCR' => "Der Wert 0 schaltet die AJAX-Funktionalität von Suchformular und Schlüsselwortwolke aus.",
    'PLACEHOLDER_DESCR' => "Platzhalter für Sucheingabefeld",
    'LIVE_DESCR' => "Ein Wert von 1 schaltet die Live-Suche ein, sodass während der Auswahl von Tags und dem Eingeben von Suchwörtern schon Ergebnisse präsentiert werden. Dieser Parameter muss sowohl beim Suchformular als auch beim Suchergebnis gesetzt sein.",
    'IDPREFIX_DESCR' => "Wenn dieser Parameter gesetzt ist, erhält jedes Suchergebnis eine ID mit diesem Prefix und einer laufenden Nummer.",
    'TAGCLASSPREFIX_DESCR' => "Wenn dieser Parameter gesetzt ist, werden alle Schlüsselwörter eines Suchergebnisses als CSS-Klassen mit diesem Prefix beim Listeneintrag gesetzt. Die Ergebnisse können dann mit CSS aufgrund der Schlüsselwörter unterschiedlich formatiert werden.",
    'TAG_MODE' => "Welche Schlüsselwörter sollen verwendet werden",
    'TAGS_LANG_OR_DEFLANG' => "Die der Standardsprache, wenn keine sprachspezifischen vorhanden sind",
    'TAGS_ALWAYS_DEFLANG' => "Immer die der Standardsprache",
    'TAGS_ALWAYS_LANG' => "Immer die sprachspezifischen",
    'MARK' => "Suchwörter auf Seiten markieren",
	'SHOW_SCRIPT' => "Use autocomplete script? (requires a jQuery library connection)"
);