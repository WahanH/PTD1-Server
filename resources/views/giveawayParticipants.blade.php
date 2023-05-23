<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pokémon Center - Giveaway {{ $id }} Participants</title>
    <meta charset="UTF-8">
    <link rel='stylesheet' type='text/css' href='/_static/css/base.css'>
    <link rel='stylesheet' type='text/css' href='/_static/css/suckerfish.css'>
    <link rel='stylesheet' type='text/css' href="/_static/css/style.css">
    <style>
        .pagination {
            display: inline-block;
        }
    </style>
    <script type='text/javascript' src='/_static/js/tracking.js'></script>
    <script>
        window.addEventListener('load', function () {
            const endTimeElements = document.getElementsByClassName('endTime');

            for (let i = 0; i < endTimeElements.length; i++) {
                endTimeElements[i].innerText = new Date(endTimeElements[i].innerText).toLocaleString('en-US');
            }

            const userTimezoneElements = document.getElementsByClassName('userTimezone');

            for (let i = 0; i < userTimezoneElements.length; i++) {
                userTimezoneElements[i].innerText = Intl.DateTimeFormat().resolvedOptions().timeZone;
            }
        });
    </script>
</head>
<body>
@include('components.header')
<div id="content">
    @include('components.nav')
    <table id="content_table">
        <tbody>
        <tr>
            <x-profiles/>
            <td id="main">
                <div class="block">
                    <div class="title"><p>Giveaway {{$id}} - <a
                                href="https://ptd1.jordanplayz158.xyz/games/ptd/checkPokemon.php">Go Back</a></p></div>
                    <div class="content">
                        <p>Here is a list of participants for giveaway {{$id}}.</p>
                    </div>
                </div>
                <div id="pokemonResult"></div>
                @foreach($participants as $participant)
                    <div class="block pokemon_compact" style="text-align: center">
                        <img src="/_static/images/avatars/{{ $participant->entrySave->avatar }}.png" alt="[Avatar]">
                        <p>{{ $participant->entrySave->nickname ?? 'Satoshi' }}</p>
                    </div>
                @endforeach
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
