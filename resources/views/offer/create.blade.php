@extends('layouts.default')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create offer</title>
</head>
<body>
    <form method="POST">
        @csrf
        Name:
        <input type="text" name="name">
        Description:
        <input type="text" name="description">
        <input type="submit" value="Create!">
    </form>
</body>
</html>