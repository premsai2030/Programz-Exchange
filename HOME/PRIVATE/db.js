const upload =() =>{
    const data ={chit_chat:document.getElementById("chit_chat").value,get_id:document.getElementById("get_id").value};
    document.getElementById("chit_chat").value = "" ;
    //console.log(data) ;
    fetch("db_after.php",{
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
          },
    }).then(b => b.json()).then(c => {
        if(c.ok) get_all() ;
    });
};

const get_all = () => {
    const data ={get_id:document.getElementById("get_id").value};
    //console.log(data)
    fetch("messages.php",{
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
          }
    }).then(res => res.json()).then(data => 
        {
            
            //console.log(data);
            let prem = `` ;
            for(let i of data)
            {
                prem += `<div class="card" style="padding: 20px;margin-top:10px;color:grey;"><h3>${i[1]}</h3><p>${i[2]}</p></div>`;
            }
            document.getElementById("data").innerHTML = prem;
        }
    ) ;
}
setInterval(get_all,3000);