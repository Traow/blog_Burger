<li><a href="/">Home</a></li>
<li><a href="/about">About</a></li>
@auth
<li>
    <details>
        <summary>
            Admin
        </summary>
        <ul class="p-2 z-20 bg-base-100">
            <li><a href="{{route('articles.index')}}">Burxid</a></li>
        </ul>
    </details>
</li>
@endauth
