<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="{{asset('assets/index.css')}}">
    @livewireStyles
</head>
<body>
    <div class="result2">
        <span>MASTER JS</span>
    </div>
    <section>
        The Uncoventional Calculator
    </section>
    <div class="calculator">
        @livewire("counter")
    </div>
    @livewireScripts
</body>
</html>
