<body>
    @include('component.navbar')
    <div id="my-pic" align="center">
        <img class="rounded-circle" src="image/face.jpg" style="width: 30vh; height: 30vh">
    </div>
    <div id="contents">
        <div id="content-title">
            <h2>@yield('title')</h2>
        </div>
        <p>@yield('contents')</p>
    </div>
    @include('component.footer')
</body>