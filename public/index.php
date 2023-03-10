<?php
$img = array('anya','bleach','bluelock','bocchi','csm','deku','iamatomic','mob','sugoidekai');
$alam = array('mountaint','beach','swamp','greenfield','paris','japan','italia','spinx','sea');
$win = array('100.jpg','101.png','102.jpg','103.png','104.jpg');
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Galery Tailwind CSS</title>
    <link rel="preload" id="image" href="img/anime/anya.webp">
    <link rel="preload" id="image" href="img/anime/bleach.webp">
    <link rel="preload" id="image" href="img/anime/bluelock.webp">
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="startup()">
    <!-- Navbar Start -->
    <nav class="bg-slate-900 fixed -top-20 left-0 w-full flex items-center z-10 duration-700">
        <div class="container">
            <a href="#header" class="font-bold text-lg text-white block py-6">Teyvat Travel Guide</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <header id="header" class="h-screen bg-slate-200 relative overflow-hidden bg-no-repeat bg-cover bg-fixed bg-center duration-700" style="background-image: url('img/wisata/img100.jpg');">
        <div class="container">
            <h1 id="welcomeText" class="font-bold text-white bg-slate-900 px-4 py-2 text-4xl absolute bottom-1/2 left-full opacity-0 duration-1000 min-w-[80%] max-w-[90%] lg:min-w-max lg:duration-[2000ms]"> Butuh Rekomendasi Tempat Untuk Liburan?</h1>
            <p class="absolute text-white text-xs italic bottom-[20%] lg:bottom-[30%] max-w-[80%] lg:max-w-[70%] text-justify -left-full opacity-0 duration-[2000ms]" style="text-shadow: 2px 2px 5px black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat tempore voluptatum, est ut nobis molestias quisquam fuga incidunt eligendi totam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic labore alias repellendus laudantium? Tenetur repellendus error delectus iusto harum recusandae aliquam enim libero quae. Praesentium consectetur at numquam ducimus quos?</p>
            <a id="btnScroll" href="#main" class="rounded-full bg-primary text-white text-sm lg:text-base p-3 duration-1000 absolute opacity-0 -bottom-[10%] left-0 right-0 m-auto max-w-max lg:duration-[2000ms] hover:bg-blue-600 hover:ease-in-out animate-bounce ">
                <span class="hidden lg:inline">Scroll Down</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" role="img" width="20" class="inline fill-current"><path d="M246.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-160-160c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L224 402.7 361.4 265.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3l-160 160zm160-352l-160 160c-12.5 12.5-32.8 12.5-45.3 0l-160-160c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L224 210.7 361.4 73.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3z"/></svg>
            </a>
        </div>
    </header>
    <!-- Hero Section End -->

    <!-- Main Galery Start -->
    <section id="main" class="pt-36 pb-32 snap-y">
        <div class="container">
            <div class="flex flex-wrap justify-center">
                <?php for($x = 0; $x < 2; $x++): ?>
                <?php for($i = 0; $i < count($win); $i++): ?>
                <div class="w-full p-2 md:w-1/2 lg:w-1/3 xl:w-1/4 snap-start">
                    <div onclick="myBtn(<?=$i?>)" onmouseover="bg('img<?=$win[$i]?>')" class="rounded-xl shadow-lg overflow-hidden group hover:cursor-pointer hover:shadow-2xl h-full">
                        <div class="relative h-60">
                            <img src="img/wisata/img<?=$win[$i]?>" alt="Avatar" class="w-full h-full object-cover" loading="lazy">
                            <!-- <div class="overflow-y-auto p-4 absolute -bottom-full left-0 w-full h-0 flex flex-col justify-start items-start bg-primary group-hover:h-full duration-1000 group-hover:bottom-0 opacity-0 group-hover:opacity-100">
                                <div class="font-bold text-lg text-white capitalize">img <?=$win[$i]?></div>
                                <div class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Itaque ipsum temporibus magnam quidem rem deleniti ducimus! Soluta fuga et est
                                    ipsam, aperiam, sit deleniti iste quaerat incidunt veritatis cum recusandae?</div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div id="modal<?=$i?>" class="myModal hidden fixed z-10 pt-28 left-0 top-0 w-screen h-screen overflow-auto bg-black bg-opacity-60 duration-1000">
                    <div class="bg-white m-auto p-5 box-border border-y-8 border-white w-80 h-[80%] lg:w-80 rounded-xl overflow-auto">
                        <div onclick="tutup(<?=$i?>)" class="mb-5 text-white bg-red-600 rounded-full p-2 float-right text-xs opacity-100 hover:opacity-80 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="8" class="fill-current"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
                        </div>
                        <h1 class="capitalize">img<?=$win[$i]?></h1>
                        <a href="img/wisata/img<?=$win[$i]?>" target="_blank"><img src="img/wisata/img<?=$win[$i]?>" alt="Avatar" class="object-cover mb-3" loading="lazy"></a>
                        <div class="text-xs font-normal">
                            <p class="text-justify my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima consequatur at quae aspernatur temporibus dolore est aperiam aliquid. Soluta, rerum.</p>
                            <p class="text-justify my-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error hic provident aliquid placeat, excepturi, impedit eos voluptatem maiores et ipsa, atque quisquam quia cum enim voluptates unde similique repellendus minima!</p>
                            <p class="text-justify my-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo assumenda exercitationem quaerat voluptatum repudiandae beatae nemo quae libero maiores rerum.</p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <div class="relative">
        <a id="btnTop" href="#header" class="bg-primary text-white text-sm lg:text-base p-3 rounded-full fixed -bottom-[10%] right-[8%] opacity-0 z-50 duration-1000 hover:bg-blue-600 hover:ease-in-out flex flex-col items-center animate-bounce drop-shadow-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" role="img" width="20" class="fill-current"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M246.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L224 109.3 361.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160zm160 352l-160-160c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L224 301.3 361.4 438.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3z"/></svg>
            <span>Top</span>
        </a>
    </div>
    <!-- Main Galery End -->

    <!-- Footer Start -->
    <footer id="footer" class="bg-slate-800 pt-20 pb-12 mt-8">
        <div class="container">
            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- youtube -->
                    <a href="https://www.youtube.com" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white ">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                            class="fill-current">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>

                    <!-- bilibili -->
                    <a href="https://www.bilibili.tv" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white ">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                            class="fill-current">
                            <path
                                d="M17.813 4.653h.854c1.51.054 2.769.578 3.773 1.574 1.004.995 1.524 2.249 1.56 3.76v7.36c-.036 1.51-.556 2.769-1.56 3.773s-2.262 1.524-3.773 1.56H5.333c-1.51-.036-2.769-.556-3.773-1.56S.036 18.858 0 17.347v-7.36c.036-1.511.556-2.765 1.56-3.76 1.004-.996 2.262-1.52 3.773-1.574h.774l-1.174-1.12a1.234 1.234 0 0 1-.373-.906c0-.356.124-.658.373-.907l.027-.027c.267-.249.573-.373.92-.373.347 0 .653.124.92.373L9.653 4.44c.071.071.134.142.187.213h4.267a.836.836 0 0 1 .16-.213l2.853-2.747c.267-.249.573-.373.92-.373.347 0 .662.151.929.4.267.249.391.551.391.907 0 .355-.124.657-.373.906zM5.333 7.24c-.746.018-1.373.276-1.88.773-.506.498-.769 1.13-.786 1.894v7.52c.017.764.28 1.395.786 1.893.507.498 1.134.756 1.88.773h13.334c.746-.017 1.373-.275 1.88-.773.506-.498.769-1.129.786-1.893v-7.52c-.017-.765-.28-1.396-.786-1.894-.507-.497-1.134-.755-1.88-.773zM8 11.107c.373 0 .684.124.933.373.25.249.383.569.4.96v1.173c-.017.391-.15.711-.4.96-.249.25-.56.374-.933.374s-.684-.125-.933-.374c-.25-.249-.383-.569-.4-.96V12.44c0-.373.129-.689.386-.947.258-.257.574-.386.947-.386zm8 0c.373 0 .684.124.933.373.25.249.383.569.4.96v1.173c-.017.391-.15.711-.4.96-.249.25-.56.374-.933.374s-.684-.125-.933-.374c-.25-.249-.383-.569-.4-.96V12.44c.017-.391.15-.711.4-.96.249-.249.56-.373.933-.373Z" />
                        </svg>
                    </a>

                    <!-- facebook -->
                    <a href="https://www.facebook.com" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white ">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                            class="fill-current">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>

                    <!-- instagram -->
                    <a href="https://www.instagram.com" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white ">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                            class="fill-current">
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>

                    <!-- twitter -->
                    <a href="https://www.twitter.com" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white ">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                            class="fill-current">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-500 text-center">Made by Nizar menggunakan Tailwind CSS</p>
                <p class="font-medium text-xs text-slate-500 text-center">Copyright &copy; 2023</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="js/script.js"></script>
</body>
</html>