<style>
        #main_body {
            position: relative;
            left: 50%;
            border: 1px solid black;
            width: 100%;
            height: 500px;
            transform: translateX(-50%);
            border-radius: 20px ;
            display: block;
        }

        #main_heading {
            padding: 10px;
            background-color: rgb(255, 139, 139);
            border-radius: 20px 20px 0 0 ;
            z-index: 1;
            position: fixed;
            width: 100%;
        }

        #main_heading h3 {
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 10px;
            text-align: center;
            color: white;
        }

        #chat_messages {
            width:inherit;
            height:370px;
            top:60px;
            position: relative;
            display: flex;
            flex-direction: column;
            overflow-y: scroll;
        }
        ::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

        .chat_message {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid black;
            border-radius: 30px;
            color:grey;
            width:fit-content;
            max-width:250px;
        }
        .sender
        {
            margin-right:10px;
            display:inherit;
            justify-content: flex-end;
        }
        .receiver
        {
            margin-left:10px;
            display:inherit;
            color:white;
            justify-content: flex-start;
        }
        .sender .chat_message
        {
            background-color: aliceblue;
        }
        .receiver .chat_message
        {
            background-color: rgb(153, 207, 255);
        }
        #send_message
        {
            position: absolute;
            bottom:0px;
            width: 100%;
            display:flex;
            padding:10px;
            border-radius:0 0 20px 20px ;
            border-top:1px solid grey;
            background-color: bisque;
        }
        #send_message input {
            width:100%;flex:80%;
            height:40px;
            border-radius: 30px;
            outline: none;
            }
            #send_message button {
                border-radius: 30px;
                flex:20%;
                padding:5px;
                outline: none;
                margin-left:5px;
                background-color: rgb(129, 255, 129);
                }
    </style>
    <div id="main_body">
        <div id="main_heading">
            <h3>Chat</h3>
        </div>
        <div id="chat_messages">
           
        </div>
        <div id="send_message">
            <input type="text" id="chit_chat" placeholder="   Type Something....." >
            <button onclick="upload()">Send</button>
        </div>
    </div>
    <script>
       
    </script>