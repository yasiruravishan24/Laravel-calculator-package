<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Calculator</title>
</head>
<body>

    <form action="{{ route('calculator.calculate') }}" method="GET">
        <input type="number" name="a" @if (isset($a )) value="{{ $a }}" @endif>

        <select name="op">
            <option value="+" @if (isset($op) && $op == '+') selected @endif>+</option>
            <option value="-" @if (isset($op) && $op == '-') selected @endif>-</option>
            <option value="/" @if (isset($op) && $op == '/') selected @endif>/</option>
            <option value="*" @if (isset($op) && $op == '*') selected @endif>*</option>

        </select>
        <input type="number" name="b" @if (isset($b)) value="{{ $b }}" @endif>
        <button type="submit">=</button>
    </form>
    @if (isset($result))
        <h1>{{  $result  }}</h1>
    @endif
</body>
</html>
