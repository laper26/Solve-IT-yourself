<?php
/** parseTemplate
 * Reads the HTML-Template and exchanges the placeholders (in this case [[*NAME]])
 * with the associated values from the array.
 *
 * @param string $templateFilename Name of the Templatefile that will be read
 * @param assoc-array $pageDataArray Associative array which holds the values that will be replaced
 * @return string The string, which will be returned. It can be echoed out.
 */
function parseTemplate($templateFilename, $pageDataArray)
{
    $output = file_get_contents($templateFilename);
    foreach ($pageDataArray as $placeholder => $value)
    {
        if (empty($value))
        {
            $value = 'No value was given for the variable $pageDataArray [\'' . $placeholder . '\']';
        }
        $output = str_replace('[[*' . $placeholder . ']]', $value, $output);
    }
    return $output;
}
