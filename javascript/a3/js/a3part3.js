tableHTML = "";

tableHTML += "<table width=\"50%\" border=\"1\" cellpadding=\"5\" cellspacing=\"1\">";

for (i = 1; i <= 10; i++)
{
	tableHTML += "<tr>";

	for (j = 1; j <= 10; j++)
	{
		tableHTML += "<td>";
		tableHTML += (i == j) ? "<strong>" : "";
		tableHTML += (i * j);
		tableHTML += (i == j) ? "</strong>" : "";
		tableHTML += "</td>";
	}

	tableHTML += "</tr>";
}

tableHTML += "</table>"
document.getElementById('target').innerHTML = tableHTML;

