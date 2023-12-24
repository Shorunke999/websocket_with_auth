
<div>
    <ul>
        @foreach ($useR as $item)
        <a href="{{route('chat')}}">
            <li>
              name:  {{$item->name}}
            </li>
        </a>
        <br/>
        @endforeach
    </ul>
</div>