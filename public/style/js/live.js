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

        let numac = (`${((120/(((kel2.currentac/1000)*kel2.voltageac)/12))-(120/(((kel2.currentac/1000)*kel2.voltageac)/12))*20/100)*3600}`);
        var hoursac = Math.floor(numac/3600);
        var sisaminuteac = Math.floor(numac%3600);
        var minuteac = Math.floor(sisaminuteac/60);
        var secondac = Math.floor(sisaminuteac%60);

        let numdc = (`${((120/(((kel2.currentdc/1000)*kel2.voltagedc)/12))-(120/(((kel2.currentdc/1000)*kel2.voltagedc)/12))*20/100)*3600}`);
        var hoursdc = Math.floor(numdc/3600);
        var sisaminutedc = Math.floor(numdc%3600);
        var minutedc = Math.floor(sisaminutedc/60);
        var seconddc = Math.floor(sisaminutedc%60);

        document.getElementById("akiac").innerHTML = hoursac + ":" + minuteac + ":" + secondac ;
        document.getElementById("akidc").innerHTML = hoursdc + ":" + minutedc + ":" + seconddc ;
        document.getElementById("update").innerHTML = `${date.toLocaleString()}`;
        document.getElementById("time").innerHTML = `${ok}`;
        document.getElementById("currentac").innerHTML = `${kel2.currentac/1000} A`;
        document.getElementById("currentdc").innerHTML = `${kel2.currentdc/1000} A`;
        document.getElementById("voltageac").innerHTML = `${kel2.voltageac} V`;
        document.getElementById("voltagedc").innerHTML = `${kel2.voltagedc} V`;
        document.getElementById("dayaac").innerHTML = `${kel2.dayaac} W`;
        document.getElementById("dayadc").innerHTML = `${kel2.dayadc} W`;
    })
    .catch(function(err){
                console.log("error",err);
    });
}