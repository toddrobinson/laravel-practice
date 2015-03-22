  @extends('app')

  @section('content')
  <h1>This is the about page</h1>
  @if (count($people))
    <h3>People I know</h3>
    <ul>
      @foreach ($people as $person)
        <li>{{$person}}</li>
      @endforeach
    </ul>
  @endif  
  <div>
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ab consequuntur amet itaque a quo aliquid atque at modi deleniti quaerat, eius esse, odit excepturi sunt. Vero veritatis sint quis.</div>
    <div>Assumenda voluptas tenetur ab, beatae consequuntur ullam quod voluptates tempore deserunt dolorum nesciunt, nemo ipsum ipsa quas quos blanditiis? Dolorum possimus sapiente pariatur voluptatibus sit excepturi a suscipit recusandae odio.</div>
    <div>Illum labore, obcaecati natus dicta tempora autem consectetur, quidem optio quis velit, maxime fugiat nesciunt esse culpa beatae ipsa sequi! Debitis a repellendus maxime dolor quasi quibusdam, quod et expedita!</div>
    <div>Nostrum quos in nihil, eos illo error nemo voluptatum repellat doloribus adipisci, beatae dignissimos sint, iste atque. Aperiam nemo id perspiciatis voluptates impedit architecto, reiciendis, cupiditate voluptatibus tempora tempore maxime!</div>
    <div>Excepturi inventore fuga incidunt iusto natus ratione odit magni, commodi, placeat quis maiores vero officiis explicabo voluptatem vitae pariatur recusandae, beatae praesentium reiciendis quae qui rem non veniam! Nostrum, nisi?</div>
  </div>
@stop
