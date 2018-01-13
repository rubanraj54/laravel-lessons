<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>customers</title>
    </head>
    <body>
        <ul>
            @foreach ($customers as $key => $customer)
                <li>
                    <a href={{url("/customers/".$customer->id)}}>
                        {{$customer->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>
