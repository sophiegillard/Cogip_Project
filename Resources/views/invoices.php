<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="module" src="assets/modulesJS/table/createTable.js" defer></script>

    <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">

    <title>Cogip - table</title>
</head>
<body>

<h1>table</h1>

<div class="table-container" id="tableInvoice" role="table" aria-label="Destinations">
    <div class="flex-table header" role="rowgroup">
        <div class="flex-row" role="columnheader">Invoice number</div>
        <div class="flex-row" role="columnheader">Dates due</div>
        <div class="flex-row" role="columnheader">Company</div>
        <div class="flex-row" role="columnheader">Created at</div>
    </div>
    <div class="flex-table row" role="rowgroup">
        <div class="flex-row" role="cell">F20220915-001</div>
        <div class="flex-row" role="cell">15/09/2022</div>
        <div class="flex-row" role="cell">15/09/2022</div>
        <div class="flex-row" role="cell">25/09/2020</div>
    </div>
    <div class="flex-table row" role="rowgroup">
        <div class="flex-row first"  role="cell"><span class="flag-icon flag-icon-ca"></span> Canada</div>
        <div class="flex-row" role="cell">Vancouver to Victoria and Butchart Gardens Tour </div>
        <div class="flex-row" role="cell">23 Sep, 1:30p.m.</div>
        <div class="flex-row" role="cell">US$387</div>
    </div>
    <div class="flex-table row">
        <div class="flex-row first" role="cell"><span class="flag-icon flag-icon-au"></span> Australia</div>
        <div class="flex-row">Blue Mountains Tours</div>
        <div class="flex-row">9 Sep, 2p.m.</div>
        <div class="flex-row">US$400</div>
    </div>
    <div class="flex-table row">
        <div class="flex-row first"><span class="flag-icon flag-icon-nz"></span> New Zealand</div>
        <div class="flex-row">Milford Sound Coach & Cruise</div>
        <div class="flex-row">12 Sep, 2p.m.</div>
        <div class="flex-row">US$400</div>
    </div>
</div>

</body>

</html>