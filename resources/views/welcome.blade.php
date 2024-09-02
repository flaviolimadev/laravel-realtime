<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-time Name Update</title>

    <!-- Inclua o arquivo JavaScript compilado -->
    @vite('resources/js/app.js')
</head>
<body>
    <h1>User Information</h1>
    <p>Name: <span id="user-name">{{ $user->name }}</span></p>


    <!-- Script para Escutar o Evento de Atualização de Nome -->
    <script  type="module">
        Echo.channel('user')
            .listen('.UserNameUpdated', (event) => {
                console.log('Nome atualizado:', event);
                document.getElementById('user-name').innerText = event.user.name;
            });
        /**    
        Echo.private('App.Models.User.'{.{$userAuth->id}.})
            .listen('.UserNameUpdated', (event) => {
                    console.log('Nome atualizado:', event.name);
                    document.getElementById('user-name').innerText = event.name;
                });
                */
    </script>

</body>
</html>
