<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-full bg-black text-white/50">
    <div class="w-full max-w-4xl mx-auto p-8 bg-zinc-900 rounded-md text-zinc-100">
        <h2 class="text-2xl font-seminbold mb-6">Messages</h2>
        @foreach ($messages as $message)
            <div class="mb-4">
                <h2 class="mb-1">Sender: {{$message->sender_name}}</h2>
                <p>{{$message->message}}</p>
            </div>
        
        @endforeach
    </div>
    

</body>
</html>