<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hello</title>
</head>
<body>
    <!-- 準備給 Vue 的掛載點 -->
    <div id="app">
        <!-- 使用我們建立的元件，
             一個有傳入名字，一個沒有 -->
        <!-- <Hello name="Tony" places={{$places}}></Hello> -->
        <!-- <Hello name={{$name}} places={{$places}}></Hello> -->
        <Hello name={{$name}} places={{$places}}></Hello>
        <!-- <Hello></Hello> -->
        <!-- <table border = "1">
            <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>City Name</td>
            <td>Email</td>
            </tr>
            @foreach (json_decode($places, true)  as $place)
            <tr>
            <td>{{ $place['id']}}</td>
            <td>{{ $place['name'] }}</td>
            <td>{{ $place['visited'] }}</td>
            <td>{{ $place['lat'] }}</td>
            <td>{{ $place['lng'] }}</td>            
            </tr>
            @endforeach
        </table> -->
    </div>
    <!-- 載入打包後的 js 檔 -->
    <script src="{{asset('js/app.js')}}"></script>
    <!-- <script src="/js/hello.js"></script> -->
    <!-- <script src="{{asset('js/hello.js')}}"></script> -->
    <!-- <script>
    export default {
        props: ['name'],
        
    }
</script> -->
</body>
</html>