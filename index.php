<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.2/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">

    <!--    Thêm các thư viện javascript của slick vào project-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#single_item').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
            });
            $('#single_item').slick('setPosition');

            $('#single_item6').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 6,
                autoplay: true,
            });
        });
    </script>
</head>
<body>
    <div class="md:mx-6 md:my-6">
        <div class="grid grid-cols-3 pb-7 gap-4 shadow-md">
            <div class="col-span-1">
                <img src="img/img_1.png" class="w-28 ml-10 mt-4 md:w-52 md:h-9 md:ml-36">
            </div>
            <div class="col-span-1 border-l-2 border-slate-400 hidden md:block">
                <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-start">
                    <div class="max-w-lg w-full lg:max-w-xs">
                        <label for="search" class="sr-only">Search </label>
                        <form methode="get" action="#" class="relative z-50">
                            <button type="submit" id="searchsubmit" class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <input type="text" name="s" id="s" class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:text-gray-900 sm:text-sm transition duration-150 ease-in-out" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex">
                <button class="text-white rounded-3xl bg-blue-900 px-5 py-2 font-bold hidden md:block">Daftar MPC</button>
                <button class="text-blue-800 rounded-3xl bg-white border px-9 py-2 border-blue-700 font-bold border-solid ml-6 hidden md:block">Masuk</button>
                <img src="img/img_65.png" class="float-right mt-2 md:ml-6 md:w-1/12 w-2/6 ml-36">
            </div>
        </div>

        <div class="mx-10 md:slider relative mt-1.5 hidden md:block" id="single_item">
            <div class="js-slide text-center p-10 bg-white rounded-2xl w-48 relative">
                <img src="img/img.png">
                <div class="-mt-96 ml-20 p-5 text-left text-white">
                    <p class="font-light"><span class="font-light">DetikOto</span> | juni 14, 2022</p>
                    <p class="font-bold mr-40 pr-96 text-5xl">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                    <p class="mt-4 text-white"><span class="font-medium text-white">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                    <p class="mt-4 text-sm">1 miggu yang lalu</p>
                </div>
            </div>
            <div class="js-slide text-center p-10 bg-white rounded-2xl w-48 relative">
                <img src="img/img.png">
                <div class="-mt-96 ml-20 p-5 text-left text-white">
                    <p class="font-light"><span class="font-light">DetikOto</span> | juni 14, 2022</p>
                    <p class="font-bold mr-40 pr-96 text-5xl">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                    <p class="mt-4 text-white"><span class="font-medium text-white">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                    <p class="mt-4 text-sm">1 miggu yang lalu</p>
                </div>
            </div>
            <div class="js-slide text-center p-10 bg-white rounded-2xl w-48">
                <img src="img/img.png">
            </div>
        </div>
        <div class="-my-24 m-auto w-5/6 relative hidden md:block">
            <img src="img/img_2.png">
        </div>

        <div class="container m-auto mb-7 mt-10 md:mt-40">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <p class="ml-2 text-lg font-medium md:text-3xl">detikcom Categories</p>
                </div>
                <div class="col-span-1">
                    <p class="md:text-right text-blue-700">See all</p>
                </div>
            </div>
        </div>
        <div class="container gap-8 grid grid-cols-3 md:grid md:grid-cols-9 m-auto mb-5">
            <div class="shadow-md p-2 p-3 rounded-3xl">
                <img src="img/img_6.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_7.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_8.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_9.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_10.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_11.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_3.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_4.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_14.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_15.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_16.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_17.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_18.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_19.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_3.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_4.png" class="m-auto w-4/6">
            </div>
            <div class="shadow-md p-3 rounded-3xl">
                <img src="img/img_5.png" class="m-auto w-4/6">
            </div>
        </div>
        <div class="bg-blue-800 border-2 gap-4 grid grid-cols-3 md:grid md:grid-cols-12 container m-auto p-6 rounded-2xl text-white">
            <p class="font-bold">Live TV</p>
            <p class="font-bold">Adsmart</p>
            <p class="font-bold">detikX</p>
            <p class="font-bold">Foto</p>
            <p class="font-bold">Sepakbola</p>
            <p class="font-bold">Hikmah</p>
            <p class="font-bold">Pasangmata</p>
            <p class="font-bold">Edukasi</p>
            <p class="font-bold">berbuatbaik.id</p>
            <p class="font-bold col-span-3">Live Streaming MotoGP</p>
        </div>
        <div class="md:flex container m-auto rounded-2xl mt-10 px-3 md:px-0">
            <div class="hidden md:block">
                <img src="img/img_20.png" class="h-5/6">
            </div>
            <div class="flex flex-col ">
                <div class="border-b-2 md:flex md:p-4">
                    <div class="mb-10 md:mb-0">
                        <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                        <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                        <p class="text-gray-600 text-xs">1 miggu yang lalu</p>
                    </div>
                    <div>
                        <img src="img/img_21.png" class="container m-auto md:ml-16 md:w-4/6">
                    </div>
                </div>
                <div class="border-b-2 md:flex md:p-4">
                    <div class="mb-10 md:mb-0">
                        <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                        <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                        <p class="text-gray-600 text-xs">1 miggu yang lalu</p>
                    </div>
                    <div>
                        <img src="img/img_22.png" class="container m-auto md:ml-16 md:w-4/6">
                    </div>
                </div>
            </div>
        </div>
        <div class="font-black container m-auto md:text-3xl mt-5 text-2xl p-3 md:p-0">
            <p>Berita terkini</p>
        </div>
        <div class="md:flex mt-8 container m-auto">
            <div class="mb-5 mx-3">
                <img src="img/img_61.png" class="container m-auto rounded-2xl">
                <p class="font-black mt-5">Isu Panas Terbaru Seputar<br>Reshuffle 15 Juni</p>
                <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
            </div>
            <div class="mb-5 mx-3">
                <img src="img/img_24.png" class="container m-auto rounded-2xl">
                <p class="font-black mt-5">Isu Panas Terbaru Seputar<br>Reshuffle 15 Juni</p>
                <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
            </div>
            <div class="mb-5 mx-3">
                <img src="img/img_22.png" class="container m-auto rounded-2xl">
                <p class="font-black mt-5">Isu Panas Terbaru Seputar<br>Reshuffle 15 Juni</p>
                <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
            </div>
            <div class="mb-5 mx-3">
                <img src="img/img_26.png" class="container m-auto rounded-2xl">
                <p class="font-black mt-5">Isu Panas Terbaru Seputar<br>Reshuffle 15 Juni</p>
                <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
            </div>
        </div>
        <div class="container m-auto mt-10 grid grid-cols-3 gap-4 px-3 md:px-0">
            <div class="col-span-2">
                <p class="font-black md:text-3xl text-2xl">News Feed</p>
            </div>
            <div class="text-blue-800">Indeks berita ></div>
        </div>
        <div class="container m-auto mt-10 md:flex px-3 md:px-0">
            <div class="col-span-2 container m-auto">
                <div class="flex flex-col">
                    <div class="md:flex mb-5">
                        <div>
                            <img src="img/img_27.png" class="container m-auto">
                        </div>
                        <div class="mt-12 p-5">
                            <p class="font-light"><span class="font-light">DetikOto</span> | juni 14, 2022</p>
                            <p class="font-bold text-2xl">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs mt-3">1 miggu yang lalu</p>
                        </div>
                    </div>
                    <div class="border-b-2 md:flex py-4">
                        <div>
                            <img src="img/img_28.png" class="container m-auto md:w-5/6">
                        </div>
                        <div class="col-span-2 md:pl-4 pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs">1 miggu yang lalu</p>
                        </div>
                    </div>
                    <div class="border-b-2 md:flex py-4">
                        <div>
                            <img src="img/img_29.png" class="container m-auto md:w-5/6">
                        </div>
                        <div class="col-span-2 md:pl-4 pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs">1 miggu yang lalu</p>
                        </div>
                    </div>
                    <div class="border-b-2 md:flex py-4">
                        <div>
                            <img src="img/img_30.png" class="container m-auto md:w-5/6 px-3 md:px-0">
                        </div>
                        <div class="col-span-2 md:pl-4 pt-8 px-3 md:px-0">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs">1 miggu yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col hidden md:block">
                <div>
                    <img src="img/img_31.png" class="mb-10 md:w-5/6 float-right">
                </div>
                <div class="border-solid">
                    <img src="img/img_31.png" class="mb-10 w-5/6 float-right border-b-2">
                </div>
                <div class="ml-20">
                    <p class="font-bold mb-7 text-3xl text-blue-600">Tag Terpopuler #</p>
                    <p class="font-bold mb-3">#reshuffle kabinet</p>
                    <p class="font-bold mb-3">#reshuffle kabinet</p>
                    <p class="font-bold mb-3">#reshuffle kabinet</p>
                    <p class="font-bold mb-3">#reshuffle kabinet</p>
                    <p class="border-b-2 border-blue-700 font-bold mb-3 pb-3">#reshuffle kabinet</p>
                </div>
            </div>
        </div>
        <div class="bg-red-800 mt-12 md:mx-6 md:px-5 rounded-3xl pb-12">
            <p class="text-2xl font-bold ml-5 p-12 md:text-5xl text-white">Video Terpopuler</p>
            <div class="flex flex-col">
                <div class="md:flex">
                    <div class="col-span">
                        <img src="img/img_62.png" class="md:ml-16 md:w-5/6 container m-auto p-3 md:p-0">
                    </div>
                    <div class="pr-5 mt-10 pl-16">
<!--                        <img src="img/img_32.png" class="w-5/6">-->
                        <svg width="80" height="16" viewBox="0 0 80 16" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="80" height="16" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_0_220" transform="translate(0 -0.0138889) scale(0.00277778 0.0138889)"/>
                                </pattern>
                                <image id="image0_0_220" width="360" height="74" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>
                        <p class="text-2xl font-bold md:text-4xl text-white">Puluhan polisi menghadang para pendemo di istan keoresidenan</p>
                        <p class="mt-3 text-sm text-white">Juni 14, 2022</p>
                        <button class="bg-white font-bold mt-12 p-3 px-10 rounded-3xl text-red-800">Video Lainnya &gt;</button>
                    </div>
                </div>
                <div class="md:flex mt-8 md:mx-16">
                    <div class="mx-3 mb-5">
                        <img src="img/img_33.png" class="rounded-2xl container m-auto">
                        <p class="mt-5 text-lg text-white">Tarif Tiket Masuk Candi Borobudur Rp 750 Rubi Dibatakan</p>
                        <p class="mt-3 text-sm text-white">Juni 14, 2022</p>
                    </div>
                    <div class="mx-3 mb-5">
                        <img src="img/img_34.png" class="rounded-2xl  container m-auto">
                        <p class="mt-5 text-lg text-white">Tarif Tiket Masuk Candi Borobudur Rp 750 Rubi Dibatakan</p>
                        <p class="mt-3 text-sm text-white">Juni 14, 2022</p>
                    </div>
                    <div class="mx-3 mb-5">
                        <img src="img/img_35.png" class="rounded-2xl container m-auto">
                        <p class="mt-5 text-lg text-white">Tarif Tiket Masuk Candi Borobudur Rp 750 Rubi Dibatakan</p>
                        <p class="mt-3 text-sm text-white">Juni 14, 2022</p>
                    </div>
                    <div class="mx-3 mb-5">
                        <img src="img/img_36.png" class="rounded-2xl container m-auto">
                        <p class="mt-5 text-lg text-white">Tarif Tiket Masuk Candi Borobudur Rp 750 Rubi Dibatakan</p>
                        <p class="mt-3 text-sm text-white">Juni 14, 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container m-auto mt-10 md:flex">
            <div class="col-span-2">
                <div class="flex flex-col px-3 md:px-0">
                    <div class="md:flex mb-5">
                        <div class="mt-12 p-5">
                            <p class="font-light text-gray-500"><span class="font-light">DetikOto</span> | juni 14, 2022</p>
                            <p class="font-bold text-2xl">Jokowi Pakai Kemeja Putih 'Indonesia Maju' di Hari Reshuffle Kabinet</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs mt-3">1 miggu yang lalu</p>
                        </div>
                        <div>
                            <img src="img/img_30.png" class=" container m-auto">
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4">
                        <div>
                            <img src="img/img_38.png" class=" container m-auto">
                        </div>
                        <div class="col-span-2 pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs">1 miggu yang lalu</p>
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4">
                        <div>
                            <img src="img/img_39.png">
                        </div>
                        <div class="col-span-2 pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs">1 miggu yang lalu</p>
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4">
                        <div>
                            <img src="img/img_40.png">
                        </div>
                        <div class="col-span-2 pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs">1 miggu yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="md:ml-20 px-3 md:px-0">
                    <p class="font-bold mb-7 md:text-3xl text-2xl text-blue-600 mt-10">Berita terpopuler</p>
                    <div class="mb-4">
                        <p class="font-medium md:font-bold mb-2">#1 Beta Versi Ayu Thalia Vs Nicholas Sean di Sidang soal Tidur Bareng</p>
                        <p class="text-gray-400">detikNews | 1 jam yang lalu</p>
                    </div>
                    <div class="mb-4">
                        <p class="font-medium md:font-bold mb-2">#2 Beta Versi Ayu Thalia Vs Nicholas Sean di Sidang soal Tidur Bareng</p>
                        <p class="text-gray-400">detikNews | 1 jam yang lalu</p>
                    </div>
                    <div class="mb-4">
                        <p class="font-medium md:font-bold mb-2">#3 Beta Versi Ayu Thalia Vs Nicholas Sean di Sidang soal Tidur Bareng</p>
                        <p class="text-gray-400">detikNews | 1 jam yang lalu</p>
                    </div>
                    <div class="mb-4">
                        <p class="font-medium md:font-bold mb-2">#4 Beta Versi Ayu Thalia Vs Nicholas Sean di Sidang soal Tidur Bareng</p>
                        <p class="text-gray-400">detikNews | 1 jam yang lalu</p>
                    </div>
                    <div class="mb-4">
                        <p class="font-medium md:font-bold mb-2">#5 Beta Versi Ayu Thalia Vs Nicholas Sean di Sidang soal Tidur Bareng</p>
                        <p class="text-gray-400">detikNews | 1 jam yang lalu</p>
                    </div>
                    <div class="font-medium md:border-b-2 border-blue-700 font-bold mb-3 pb-3">
                        <button class="bg-blue-300 font-bold ml-24 mt-8 p-3 md:px-10 rounded-3xl text-blue-600">Lihat selelngkapnya</button>
                    </div>
                </div>
                <div class="md:ml-20 px-3 md:px-0">
                    <p class="font-bold mb-7 md:text-3xl text-2xl text-blue-600 mt-10">Kementar Terbanyak</p>
                    <div class="mb-4 grid grid-cols-12 gap-4">
                        <div class="col-span-1">
                            <img src="img/img_63.png">
                        </div>
                        <div class="col-span-11">
                            <p class="font-medium md:font-bold mb-2">Anggota DPR Geram Ada Usaha Kuliner Nasi Padang Babi do Jakarta</p>
                            <p class="text-gray-400">185 kemetar</p>
                        </div>
                    </div>
                    <div class="mb-4 grid grid-cols-12 gap-4">
                        <div class="col-span-1">
                            <img src="img/img_63.png">
                        </div>
                        <div class="col-span-11">
                            <p class="font-medium md:font-bold mb-2">Anggota DPR Geram Ada Usaha Kuliner Nasi Padang Babi do Jakarta</p>
                            <p class="text-gray-400">185 kemetar</p>
                        </div>
                    </div>
                    <div class="mb-4 grid grid-cols-12 gap-4 border-b-2 border-blue-700 font-bold mb-3 pb-3">
                        <div class="col-span-1">
                            <img src="img/img_63.png">
                        </div>
                        <div class="col-span-11">
                            <p class="font-medium md:font-bold mb-2">Anggota DPR Geram Ada Usaha Kuliner Nasi Padang Babi do Jakarta</p>
                            <p class="text-gray-400">185 kemetar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container m-auto mt-10 grid grid-cols-3 gap-4 px-3 md:px-0">
            <div class="col-span-2">
                <p class="font-black md:text-3xl text-2xl">Foto Terpopuler</p>
            </div>
            <div>
                <img src="img/img_10.png" class="float-right">
            </div>
        </div>
        <div class="container m-auto mt-10 pb-12 px-3 md:px-0 relative w-full flex gap-4 snap-x pb-2 flex overflow-scroll">
            <div class="snap-end scroll-mx-6 flex-shrink-0 relative">
                <img class="shrink-0 w-30 h-56 md:h-80 rounded-lg shadow-xl bg-white" src="img/img_41.png">
                <div class="-mt-36 p-2 text-left text-white absolute">
                    <p class="font-bold">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                    <p class="mt-4 text-sm">12 Foto</p>
                </div>
            </div>
            <div class="snap-end scroll-mx-6 flex-shrink-0 relative">
                <img class="shrink-0 w-30 h-56 md:h-80 rounded-lg shadow-xl bg-white" src="img/img_42.png">
                <div class="-mt-36 p-2 text-left text-white absolute">
                    <p class="font-bold">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                    <p class="mt-4 text-sm">12 Foto</p>
                </div>
            </div>
            <div class="snap-end scroll-mx-6 flex-shrink-0 relative">
                <img class="shrink-0 w-30 h-56 md:h-80 rounded-lg shadow-xl bg-white" src="img/img_43.png">
                <div class="-mt-36 p-2 text-left text-white absolute">
                    <p class="font-bold">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                    <p class="mt-4 text-sm">12 Foto</p>
                </div>
            </div>
            <div class="snap-end scroll-mx-6 flex-shrink-0 relative">
                <img class="shrink-0 w-30 h-56 md:h-80 rounded-lg shadow-xl bg-white" src="img/img_44.png">
                <div class="-mt-36 p-2 text-left text-white absolute">
                    <p class="font-bold">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                    <p class="mt-4 text-sm">12 Foto</p>
                </div>
            </div>
            <div class="snap-end scroll-mx-6 flex-shrink-0 relative">
                <img class="shrink-0 w-30 h-56 md:h-80 rounded-lg shadow-xl bg-white" src="img/img_45.png">
                <div class="-mt-36 p-2 text-left text-white absolute">
                    <p class="font-bold">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                    <p class="mt-4 text-sm">12 Foto</p>
                </div>
            </div>
            <div class="snap-end scroll-mx-6 flex-shrink-0 relative">
                <img class="shrink-0 w-30 h-56 md:h-80 rounded-lg shadow-xl bg-white" src="img/img_46.png">
                <div class="-mt-36 p-2 text-left text-white absolute">
                    <p class="font-bold">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                    <p class="mt-4 text-sm">12 Foto</p>
                </div>
            </div>
        </div>
        <div class="mb-3 pb-3 grid grid-cols-3 gap-4">
            <div>
            </div>
            <div>
                <button class="bg-blue-300 font-bold ml-24 mt-8 p-3 px-10 rounded-3xl text-blue-600 hidden md:block">Lihat selelngkapnya</button>
            </div>
            <div>
            </div>
        </div>
        <div class="container m-auto mt-10 md:flex">
            <div class="col-span-2">
                <div class="flex flex-col">
                    <div class="md:flex mb-5">
                        <div class=" px-3 md:px-0">
                            <img src="img/img_47.png" class="md:w-5/6">
                        </div>
                        <div class="mt-12 p-5">
                            <p class="font-light"><span class="font-light">DetikOto</span> | juni 14, 2022</p>
                            <p class="font-bold md:text-3xl text-2xl">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-600 text-xs md:mt-28">1 miggu yang lalu</p>
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4 px-3 md:px-0">
                        <div class="col-span-2 md:pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs mt-3">1 miggu yang lalu</p>
                        </div>
                        <div>
                            <img src="img/img_50.png">
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4 px-3 md:px-0">
                        <div class="col-span-2 md:pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs mt-3">1 miggu yang lalu</p>
                        </div>
                        <div>
                            <img src="img/img_51.png">
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4 px-3 md:px-0">
                        <div class="col-span-2 md:pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs mt-3">1 miggu yang lalu</p>
                        </div>
                        <div>
                            <img src="img/img_52.png">
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4 px-3 md:px-0">
                        <div class="col-span-2 md:pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs mt-3">1 miggu yang lalu</p>
                        </div>
                        <div>
                            <img src="img/img_53.png">
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4 px-3 md:px-0">
                        <div class="col-span-2 md:pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs mt-3">1 miggu yang lalu</p>
                        </div>
                        <div>
                            <img src="img/img_54.png">
                        </div>
                    </div>
                    <div class="border-b-2 grid grid-cols-3 gap-4 py-4 px-3 md:px-0">
                        <div class="col-span-2 md:pl-4 md:pt-8">
                            <p class="font-bold text-lg">Andrie Bayueyaj Ditankap, Bengini Kata Yovie Vovie Widianto</p>
                            <p class="text-gray-500 mt-4"><span class="font-medium text-black">Jakarta - LINE </span>Today akan resi dituup pada 6 Juli 2022. Line Indonesia menyamoaikan...</p>
                            <p class="text-gray-600 text-xs mt-3">1 miggu yang lalu</p>
                        </div>
                        <div>
                            <img src="img/img_55.png">
                        </div>
                    </div>
                    <div class="mb-3 pb-3 grid grid-cols-3 gap-4">
                        <div>
                        </div>
                        <div>
                            <button class="bg-blue-200 font-bold ml-24 mt-8 p-3 px-10 rounded-3xl text-blue-600 hidden md:block">Indesks berita -></button>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col hidden md:block">
                <div>
                    <img src="img/img_48.png" class="mb-10 w-5/6 float-right">
                </div>
                <div class="border-solid">
                    <img src="img/img_49.png" class="mb-10 w-5/6 float-right border-b-2">
                </div>
            </div>
        </div>
        <div class="bg-gray-200 md:flex mt-10 pb-8 pt-20">
            <div class="col-span-3">
                <div class="flex flex-col md:px-20">
                    <img src="img/img_1.png" class="m-auto md:w-2/6 w-3/6">
                    <img src="img/img_64.png" class="m-auto mb-10 mt-4 md:w-2/12 w-2/6">
                    <p class="mb-7 px-20 text-sm">Nikmati berita yang kami sangajsh untuk anda seman, cermati dan ghdshd dalam menyampaikan kembail berita</p>
                    <div class="grid grid-cols-12 gap-4">
                        <div></div>
                        <div></div>
                        <img src="img/img_57.png"><span class="text-gray-600">|</span>
                        <img src="img/img_58.png"><span class="text-gray-600">|</span>
                        <img src="img/img_59.png"><span class="text-gray-600">|</span>
                        <img src="img/img_60.png">
                    </div>
                    <div>
                        <p class="ml-10 md:ml-20 mt-24 text-gray-500">detikCom | Copyrignt by mangcoding2022</p>
                    </div>
                </div>
            </div>
            <div class="col-span-5 pr-16 pl-18 mt-16 ml-16 md:ml-0 md:mt-0 md:pl-0 hidden md:block">
                <div class="gap-4 grid grid-cols-4">
                    <div class="col-span-1">
                        <div class="flex flex-col">
                            <p class="font-bold mb-8 text-2xl">Kategori</p>
                            <div class="gap-4 grid grid-cols-2">
                                <div class="col-span-1">
                                    <div class="flex flex-col">
                                        <p class="mb-5 text-sm">News</p>
                                        <p class="mb-5 text-sm">Edukasi</p>
                                        <p class="mb-5 text-sm">Finance</p>
                                        <p class="mb-5 text-sm">Teknologi</p>
                                        <p class="mb-5 text-sm">Entertaiment</p>
                                        <p class="mb-5 text-sm">Sport</p>
                                        <p class="mb-5 text-sm">Sepakbola</p>
                                        <p class="mb-5 text-sm">Otomotif</p>
                                    </div>
                                </div>
                                <div class="col-span-1">
                                    <div class="flex flex-col">
                                        <p class="mb-5 text-sm">Travel</p>
                                        <p class="mb-5 text-sm">Food</p>
                                        <p class="mb-5 text-sm">Health</p>
                                        <p class="mb-5 text-sm">Wolipop</p>
                                        <p class="mb-5 text-sm">DetikX</p>
                                        <p class="mb-5 text-sm">20Detik</p>
                                        <p class="mb-5 text-sm">Foto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="flex flex-col">
                            <p class="font-bold mb-8 text-2xl">layanan</p>
                            <div class="flex flex-col">
                                <p class="mb-5 text-sm">berbuatbaik.id</p>
                                <p class="mb-5 text-sm">Pasang Mata</p>
                                <p class="mb-5 text-sm">Adsmart</p>
                                <p class="mb-5 text-sm">detikEvent</p>
                                <p class="mb-5 text-sm">Trans Snow World</p>
                                <p class="mb-5 text-sm">Trans Studio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="flex flex-col">
                            <p class="font-bold mb-8 text-2xl">Informasi</p>
                            <div class="flex flex-col">
                                <p class="mb-5 text-sm">Redaksi</p>
                                <p class="mb-5 text-sm">Pedoman Media Siber</p>
                                <p class="mb-5 text-sm">Karir</p>
                                <p class="mb-5 text-sm">Media Partner</p>
                                <p class="mb-5 text-sm">Info Iklan</p>
                                <p class="mb-5 text-sm">Privacy Policy</p>
                                <p class="mb-5 text-sm">Disclaimer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="flex flex-col">
                            <p class="font-bold mb-8 text-2xl">Jaringan Media</p>
                            <div class="flex flex-col">
                                <p class="mb-5 text-sm">berbuatbaik.id</p>
                                <p class="mb-5 text-sm">Pasang Mata</p>
                                <p class="mb-5 text-sm">Adsmart</p>
                                <p class="mb-5 text-sm">detikEvent</p>
                                <p class="mb-5 text-sm">Trans Snow World</p>
                                <p class="mb-5 text-sm">Trans Studio</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>


































