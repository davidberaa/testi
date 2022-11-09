@foreach($show as $key => $data)
    <tr>
      <th>{{$data->food_title}}</th>
      <th>{{$data->price}}</th>                 
    </tr>
@endforeach