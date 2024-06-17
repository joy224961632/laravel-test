
<h1>R</h1>

@foreach($datas as $data)
    <tr><td>ID:{{$data->id}}----</td><td>data:{{$data->data}}</td></tr><br>
@endforeach

<h1>C</h1>

<form action="/set1" method="POST">
@csrf
    <label for="id">ID</label>
    <input type="text" name="id" id="">

    <label for="data">data</label>
    <input type="text" name="data" id="">

    <input type="submit">

</form>

<h1>U</h1>

<form action="/up1" method="POST">
@csrf
    <label for="id">ID</label>
    <input type="text" name="id" id="">

    <label for="data">data</label>
    <input type="text" name="data" id="">

    <input type="submit">

</form>

<h1>D</h1>

<form action="/de2" method="POST">
    @csrf
    <label for="id">ID</label>
    <input type="text" name="id" id="">

    <input type="submit">

</form>