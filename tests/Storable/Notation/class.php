<?php

//
require_once '../common.php';

//
require_once __BASE__.'/vendor/autoload.php';

//
use Javanile\SchemaDB;

//
$notations = array(    
    
    // Class
    '<<Class>>',
    '<<Class*>>',
    '<<Class**>>',
);

?>

<table border=1 cellpadding=4>
    <tr><th>Notation</th><th>Value</th><th>Type</th><th>Column</th></tr>
    
    <?php foreach($notations as $notation) { ?>
        <tr>
            <td><?php var_dump($notation); ?></td>
            <td align="center"><?=SchemaDB\SchemaParser::getNotationValue($notation)?></td>
            <td align="center"><strong><?=SchemaDB\SchemaParser::getNotationType($notation)?></strong></td>
            <td><pre><?=var_dump(SchemaDB\SchemaParser::parseSchemaTableField(null,$notation,null))?></pre></td>
        </tr>
    <?php } ?>
</table>