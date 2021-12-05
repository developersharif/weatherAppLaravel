 <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>weather App</title>
       <style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300);
html,
body {
    background-color: #F3F3F3;
    font-family: 'Roboto', sans-serif;
}

.card {
    margin: 0 auto;
    margin-top: 5%;
    padding: 5px 30px;
    width: 290px;
    height: 400px;
    border-radius: 3px;
    background-color: #fff;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, .2);
    -webkit-animation: open 2s cubic-bezier(.39, 0, .38, 1);
}

@-webkit-keyframes open {
    from {
        padding: 0 30px;
        height: 0;
    }
    to {
        height: 400px;
    }
}

h1,
h2,
h3,
h4 {
    position: relative;
}

h1 {
    float: right;
    color: #666;
    font-weight: 300;
    font-size: 3.59375em;
    line-height: .2em;
    -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .2s;
}

h2 {
    font-weight: 300;
    font-size: 2.25em;
    -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1);
}

h3 {
    float: left;
    margin-right: 33px;
    color: #777;
    font-weight: 400;
    font-size: 1em;
    -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .1s;
}

span {
    margin-left: 24px;
    color: #999;
    font-weight: 300;
}

span span {
    margin-left: 0;
}

.dot {
    font-size: .9em;
}

.sky {
    position: relative;
    margin-top: 108px;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: #03A9F4;
    -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .2s;
    background-image: url("{{$data->current->condition->icon}}");
    background-repeat: no-repeat;
    background-position: center;
    background-size: inherit;
}



table {
    position: relative;
    top: 10px;
    width: 100%;
    text-align: center;
}

tr:nth-child(1) td:nth-child(1),
tr:nth-child(1) td:nth-child(2),
tr:nth-child(1) td:nth-child(3),
tr:nth-child(1) td:nth-child(4),
tr:nth-child(1) td:nth-child(5) {
    padding-bottom: 32px;
    -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .7s;
}



@-webkit-keyframes up {
    0% {
        opacity: 0;
        -webkit-transform: translateY(15px);
    }
    50% {
        opacity: 0;
        -webkit-transform: translateY(15px);
    }
    99% {
        -webkit-animation-play-state: paused;
    }
    100% {
        opacity: 1;
    }
}
.form{
    display:flex;
    align-items: center;
justify-content: center;
}
.button{
background-color:none;
padding:10px;
border-radius: 5px;
margin:2px;
background:white;
border: none;
}
.button:hover{
    background:#999;
}
input[type="text"]{
    padding: 10px;
    margin: 1px;
    border: none;
    border-radius: 5px;
}
     </style>
   </head>
   <body>
<form action="" method="post" class="form">
    @csrf
    <input type="text" name="city" placeholder="city">
    <input type="submit" value="Seach" class="button">
</form>
       <div class="card">

        <h2>   {{$data->location->name;}} , {{$data->location->country;}}</h2>
        <h3>  {{$data->current->condition->text}}<span>Wind {{$data->current->wind_kph}}km/h <span class="dot">•</h3>
        <h1> {{$data->current->feelslike_c}} °C </h1>
        
        <div class="sky">
        <table>
            <tr>
                <td>{{date("D")}}</td>
               
            </tr>
            <tr>
                <td>{{$data->current->temp_c}}°</td>
                
            </tr>
    
        </table>
    </div>
   </body>
   </html>
   