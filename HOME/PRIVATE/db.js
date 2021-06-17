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
    var element = document.getElementById("chat_messages");
    element.scrollTop = element.scrollHeight;
};

const get_all = () => {
    var element = document.getElementById("chat_messages");
    element.scrollTop = element.scrollHeight;
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
            let messages = `` ;
            for(let i of data)
            {
                if(i[1] === document.getElementById("username").value)
                messages += `<div class="sender"><div class="chat_message">${i[2]}</div></div>`;
                else messages += `<div class="receiver"><div class="chat_message">${i[2]}</div></div>`;
            }
            document.getElementById("chat_messages").innerHTML = messages;
        }
    ) ;
    
}
setInterval(get_all,3000);