setInterval(fetchData,1000);

function fetchData(){
    const url = "https://kelompok2-gmedia.herokuapp.com/tampilbaru";
    fetch(url)
    .then(function(res){
        return res.json();
    })
    .then(function(data){
        let kel2 = data[0];
        const date = new Date();

        const d = new Date(`${kel2.time}`)
        const ok = new Intl.DateTimeFormat('en-US', { dateStyle: 'full', timeStyle: 'short' }).format(d)
       
        document.getElementById("update").innerHTML = `${date.toLocaleString()}`;
        document.getElementById("time").innerHTML = `${ok}`;
        document.getElementById("currentac").innerHTML = `${kel2.currentac/1000} A`;
        document.getElementById("currentdc").innerHTML = `${kel2.currentdc/1000} A`;
        document.getElementById("voltageac").innerHTML = `${kel2.voltageac} V`;
        document.getElementById("voltagedc").innerHTML = `${kel2.voltagedc} V`;
    })
    .catch(function(err){
                console.log("error",err);
    });
}