<?php
/** parseTemplate
 * Liest eine HTML-Vorlage und ersetzt die Platzhalter (in diesem Fall [[*NAME]])
 * mit den dazugehörigen Werten aus dem Array.
 * @param string $templateFilename Name der zu lesenden Vorlagendatei
 * @param assoc-arrac $pageDataArray Assoziatives Array der zu ersetzenden Werte
 * @return string Die Zeichenkette, die mit echo ausgegeben werden kann
 */
function parseTemplate($templateFilename, $pageDataArray)
{
    $output = file_get_contents($templateFilename);
    foreach ($pageDataArray as $placeholder => $value)
    {
        if (empty($value))
        {
//            $value = 'Für die Variable $pageDataArray[\'' . $placeholder . '\'] wurde kein Wert angegeben...';
        }
        $output = str_replace('[[*' . $placeholder . ']]', $value, $output);
    }
    return $output;
}
