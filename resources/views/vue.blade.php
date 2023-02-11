<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Basic Vue Template</title>
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script src="https://use.fontawesome.com/4bac1256d8.js"></script>
        <script src="https://unpkg.com/vue@next"></script>
    </head>

    <body class="container mt-5 antialiased">
        <div id="app">
            <h1>@{{ name }}</h1>
        </div>
        
        <script defer>
            const App = {
                data() {
                    return {
                        name: "Vue Test",
                    };
                },
            }
            const vue = Vue.createApp(App);
            
            vue.mount('#app');
        </script>
    </body>
</html>
