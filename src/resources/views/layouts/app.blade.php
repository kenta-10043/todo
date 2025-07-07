    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ToDoリスト</title>
        <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
        <link rel="stylesheet" href="{{asset('css/common.css')}}">
        @yield('css')

    </head>
    <body>
        <header class="header">
            <div class="header-tittle">Todo</div>
                
        </header>
        

        <main>
                <form class="header-result" action="" method="post">
                <input type="text" name="result" value=""/>
                </form>

            <div>
                <form action="" method="post">
                <input type="text" name="content" />
                
                <button type="submit">送信</button>
                </form>
            </div>

            
        </main>

    
    
</body>
</html>