<?php
/**
 * Created by PhpStorm.
 * User: PraviinM
 * Date: 2/7/16
 * Time: 1:55 PM
 */
?>

<html>
<head>
  <title>
    FIRST CRUD
  </title>
  <!-- Style -- Can also be included as a file usually style.css -->
  <style type="text/css">
	table.table-style-three {
      font-family: verdana, arial, sans-serif;
      font-size: 11px;
      color: #333333;
      border-width: 1px;
      border-color: #3A3A3A;
      border-collapse: collapse;
    }
    table.table-style-three th {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #FFA6A6;
      background-color: #D56A6A;
      color: #ffffff;
    }
    table.table-style-three a {
      color: #ffffff;
      text-decoration: none;
    }

    table.table-style-three tr:hover td {
      cursor: pointer;
    }
    table.table-style-three tr:nth-child(even) td{
      background-color: #F7CFCF;
    }
    table.table-style-three td {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #FFA6A6;
      background-color: #ffffff;
    }
</style>

</head>
<body>

<!-- Table goes in the document BODY -->
<table class="table-style-three">
	<thead>
	<!-- Display CRUD options in TH format -->
    <tr>
      <th><a href="createNewRecord.php">Create a new record (C)</a></th>
    </tr>
    <tr>
      <th><a href="displayAllRecords.php">Read All Record information (R)</a></th>
    </tr>
    <tr>
      <th><a href="displayAllRecords.php">Update A Record (U)</a></th>
    </tr>
    <tr>
      <th><a href="displayAllRecords.php">Delete A Record (D)</a></th>
    </tr>

	</thead>
</table>

</body>
</html>
