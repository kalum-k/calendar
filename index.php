<html>
<head>
<script>
function setDay(v)
{
   // Latch onto the select we are updating by ID (day)
   var select = document.getElementById("day");


   // Set end day depending on the month (you could use IF statements to combine months actually)
   switch(v)
   {
      case "1":
      // Set end day to 31
	  endday = 31;
      break;

      case "2":
      // Set end day to 29 (you'll need to account for leap years)
	  endday = 29;
      break;

      case "3":
      // Set end day to 31
	  endday = 31;
      break;
   }

   // Loop from 1 to endday creating select options
   for(i=1;i<=endday;i++)
   {
	   select.options[i] = new Option(i, i, true, false);
   }
}

</script>
</head>

<body>
ปี-เดือน-วัน
<form action="Show.php" method="post">
<select name="month" onchange="setDay(this.value)">
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">Apil</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">Sebtember</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>

... and so on
</select>

<select name="date" id="day">
   <option value="1"> 1</option>
   <option value="2"> 2</option>
   <option value="3"> 3</option>
   <option value="4"> 4</option>
   <option value="5"> 5</option>
   <option value="6"> 6</option>
   <option value="7"> 7</option>
   <option value="8"> 8</option>
   <option value="9"> 9</option>
   <option value="10"> 10</option>
   <option value="15"> 15</option>
   <option value="20"> 20</option>
   ... and so on to 31; probably don't need these at all to be honest ...
</select>

<input type="submit"  name="submit" value="showday">

</body>
<heml>

