<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shrines</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <header>
            <a href="{{ route('ShrineChoose') }}">Home</a>
            <a href="{{ route('ShrineBernkastel') }}">Bernkastel</a>
            <a href="{{ route('ShrineLambdadelta') }}">Lambdadelta</a>
            <a href="{{ route('ShrineBeatrice') }}">Beatrice</a>
            <a href="{{ route('ShrineVirgilia') }}">Virgilia</a>
        </header>
                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8" id="aaaaaa2">
                            <a
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                                id="contr"
                                >
                                <div class="pt-3 sm:pt-5">
                                    <img src="{{ asset('img/Virgilia.jpg') }}">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Shrine of Virgilia</h2>
                                </div>
                            </a>
                        </div>
                    </main>
                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Made by ♣Norako♣
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
