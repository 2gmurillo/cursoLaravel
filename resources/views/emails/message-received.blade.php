<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@lang('Message received')</title>
</head>

<body>
  <p>@lang('You have received a message from'): {{$msg['name']}} - {{$msg['email']}}</p>
  <p><strong>@lang('Subject'):</strong> {{$msg['subject']}}</p>
  <p><strong>@lang('Content'):</strong> {{$msg['content']}}</p>
</body>

</html>