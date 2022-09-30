    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @for($i = 0; $i < sizeof($links)-1; $i++)
                <li class="breadcrumb-item">
                    <a href=" {{$links[$i]['href']}}">{{$links[$i]['label']}}</a>
                </li>
            @endfor
            <li class="breadcrumb-item active">{{$links[sizeof($links)-1]['label']}}</li>
        </ol>
    </nav>