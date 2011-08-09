<?
$maxrssitems=11;
$xml_parser=null;
$xml_parser = xml_parser_create();

xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, true);
xml_set_element_handler($xml_parser, "startElementBL", "endElementBL");
xml_set_character_data_handler($xml_parser, "characterDataBL");
$data = getUrlContentCached($rssurl);

echo '<div class="twtr-widget">';
if (!xml_parse($xml_parser, $data, TRUE)) {
	die(sprintf("XML error: %s at line %d",
	xml_error_string(xml_get_error_code($xml_parser)),
	xml_get_current_line_number($xml_parser)));
}
echo '</div>';

xml_parser_free($xml_parser);
$xml_parser=null;
?>
