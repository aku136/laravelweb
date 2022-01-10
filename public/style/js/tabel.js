var interval = setInterval(fetchData,1000);

function fetchData(){
    const url = "https://kelompok2-gmedia.herokuapp.com/tampil1";
    fetch(url)
    .then(function(res){
        return res.json();
    })
    .then(function(data){
        const tbody = document.getElementById('data-ins');
        tbody.innerHTML = '';
        data.map((map)=>{
            insertData(map,tbody);
        });
    })
    .catch(function(err){
        console.log("error",err);
    });
	
}



function insertData(map,tbody)
{
    var {currentac,voltageac,dayaac,currentdc,voltagedc,dayadc,time} = map;
	
	const d = new Date(time)
    const ok = new Intl.DateTimeFormat('en-US', { dateStyle: 'full', timeStyle: 'short' }).format(d)

    var newRow = document.createElement('tr');
    var newData2 = document.createElement('td');
    var newData3 = document.createElement('td');
    var newData4 = document.createElement('td');
    var newData5 = document.createElement('td');
    var newData6 = document.createElement('td');
    var newData7 = document.createElement('td');
    var newData8 = document.createElement('td');

    newData2.innerHTML = currentac/1000;
    newData3.innerHTML = voltageac;
    newData4.innerHTML = dayaac;
    newData5.innerHTML = currentdc/1000;
    newData6.innerHTML = voltagedc;
    newData7.innerHTML = dayadc;
    newData8.innerHTML = ok;

    newRow.appendChild(newData2);
    newRow.appendChild(newData3);
    newRow.appendChild(newData4);
    newRow.appendChild(newData5);
    newRow.appendChild(newData6);
    newRow.appendChild(newData7);
    newRow.appendChild(newData8);
    
    tbody.appendChild(newRow);
}
