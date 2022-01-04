setInterval(fetchData,1000);

// Defining async function
async function fetchData() {

	const url = "https://kelompok2-gmedia.herokuapp.com/tampil1";
	
	// Storing response
	const response = await fetch(url);
	
	// Storing data in form of JSON
	var data = await response.json();
	console.log(data);
	if (response) {
		hideloader();
	}
	show(data);
}
// Calling that async function
fetchData(url);

// Function to hide the loader
function hideloader() {
	document.getElementById('loading').style.display = 'none';
}
// Function to define innerHTML for HTML table
function show(data) {
	let tab =
    
		`<thead style="background-color: #49809a;">
        <tr>
		<th class="text-white">Current AC</th>
		<th class="text-white">Voltage AC</th>
		<th class="text-white">Current DC</th>
		<th class="text-white">Voltage DC</th>
		<th class="text-white">Data Diteriima</th>
		</tr>
        </thead>`;

	// Loop to access all rows
	for (let r of data){
		tab += 
    `<tbody>
    <tr>
	<td>${r.currentac}</td>
	<td>${r.voltageac}</td>
	<td>${r.currentdc}</td>
	<td>${r.voltagedc}</td>		
	<td>${r.time}</td>		
    </tr>
    </tbody>`;
	}
	// Setting innerHTML as tab variable
	document.getElementById("coba").innerHTML = tab;
}
