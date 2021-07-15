<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                  <div class="select" style="width: 20rem;">
                     <form action="{{url('/')}}" method="get">
                        <div class="form-group">
                            <select name="country" id="" class="form-control select2">
                                <option value="" holder>Pilih Negara</option>
                                @foreach ($country as $result)
                                        <option value="{{$result}}">{{$result}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" style="width: 20rem;color:white;" class="btn btn-info btn-block">Cari Data</button>
                        </div>
                     </form>
                </div>
              
            </div>
            <div class="col">
                <br>
                <div class="card" style="width: 20rem;">
                <img src="https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Covid-19</h5>
                    <p class="card-text">Coronavirus atau disebut juga dengan virus corona merupakan keluarga besar virus yang mengakibatkan terjadinya infeksi saluran pernapasan atas ringan hingga sedang, seperti penyakit flu. Banyak orang terinfeksi virus ini, setidaknya satu kali dalam hidupnya.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center"><h4>{{$list_data['country']}} </h4></li>
                    <li class="list-group-item text-center text-info"><h4>{{$list_data['confirmed']}} </h4></li>
                </ul>
                <div class="card-body">
                    <table width="100%">
                        <tr>
                            <th><h6 class="text-center">Meninggal</h6></th>
                            <th><h6 class="text-center">Sembuh</h6></th>
                            
                        </tr>
                        <tr>
                            <td><h4 class="text-center text-danger">{{$list_data['deaths']}}</h4></td>
                            <td><h4 class="text-center text-success">{{$list_data['recovered']}} </h4></td>
                        </tr>
                    </table>
                </div>
                  <div class="card-footer">
            <h6 class="text-center">   Update at: {{$list_data['lastUpdate']}} </h6>
        </div>
                </div>
              
            </div>
            <div class="col">
                    
            </div>
    
        </div>
        
    </div>
      
       
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    
</body>
</html>


