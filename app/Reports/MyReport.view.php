<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\ColumnChart;
// use \koolreport\widgets\koolphp\DataTables;
// use \koolreport\datagrid\DataTables;

?>
<html>
    <head>
    <title>My Report</title>
    </head>
    <body>
        <!-- <h1>It works</h1> -->
        <?php
        Table::create([
            "dataSource"=>$this->dataStore("leads"),
            "paging"=>array(
                "pageSize"=>5,
                // "pageIndex"=>0,
                "paging"=>true,
                "searching"=>true,
            ),
            "searchOnEnter" => true,
            "searchMode" => "or"
        ]);

        ?>
    </body>
</html>

<!--    $chart = BarChart::create([
            "title" => "Sales Chart",
            "dataSource" => $this->dataStore('salesData'),
        ]); -->
