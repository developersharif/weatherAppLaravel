 <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>weather App</title>
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
       <style>
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
     </style>
   </head>
   <body>
<form action="" method="post" class="form">
    @csrf
    <input type="text" name="city" placeholder="Location">
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
   