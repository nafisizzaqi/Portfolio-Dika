<?php 
    include 'koneksi.php';
    $query = "SELECT * FROM users";
    $query_sql = mysqli_query($koneksi, $query);
    $tampil = mysqli_fetch_assoc($query_sql);

    
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dika</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <!-- nav  -->
     <section>
        <nav class="bg-gray-400 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="image/<?= $tampil['logo']?>" class="w-12 bg-gray-900  rounded-full" alt="Flowbite Logo">
                <span class="font-bold self-center text-2xl whitespace-nowrap dark:text-white"><?= $tampil['logoname']?></span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
              </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
              <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                  <a href="#biodata" class="text-xl font-bold block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 " style="transition: 0.2s;">MY BIODATA</a>
                </li>
                <li>
                  <a href="#experience" class="text-xl font-bold block py-2 px-3  mx-10 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" style="transition: 0.2s;">EXPERIENCE</a>
                </li>
                <li>
                  <a href="#portfolio" class="text-xl font-bold block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" style="transition: 0.2s;">PORTFOLIO</a>
                </li>
              </ul>
            </div>
            </div>
          </nav>
     </section>


     <!-- hero -->
      <section class="pt-56">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="text-start ml-20">
                    <h1 class="text-4xl font-bold text-gray-600">Hello Everyone I'm <span class="mt-3 block text-6xl font-bold text-black"><?= $tampil['name']?></span></h1>
                    <p class="text-2xl w-96 font-semibold mt-5"><?= $tampil['job']?></p>

                    <div class="mt-28 ">
                        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-10 py-5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">100+ PROJECT</button>

                        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4   focus:ring-gray-300 font-medium rounded-full text-sm px-10 py-5 me-2 mb-2 dark:bg-gray-800   dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">90% RATED</button>

                        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4   focus:ring-gray-300 font-medium rounded-full text-sm px-10 py-5 me-2 mb-2 dark:bg-gray-800   dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">4 YEARS+</button>
                        </div>

                </div>

                

                <div class="w-80 ml-80 ">
                    <div class="relative bottom-32">
                        <img src="image/poto2.jpg" class="w-80" alt="">

                        <div class="mt-10 flex">
                            

                             <a href="https://api.whatsapp.com/send/?phone=62895391622424" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center hover:bg-gray-700 hover:text-white text-slate-800">
                                <svg  role="img" width="25" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                             </a>

                             <a href="https://instagram.com/apissssayangibuuu" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-800 hover:bg-gray-700 hover:text-white "  > 
                                <svg role="img"  width="25" class="fill-current "  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                             </a>

                             <a href="https://tiktok.com/@zaqstudents" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center  text-slate-800 hover:bg-gray-700 hover:text-white ">
                                <svg role="img" width="25" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                             </a>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
      </section>

      <!-- bio -->
<?php 
    include 'koneksi.php';
    $bio_query = "SELECT * FROM my_biodata ";
    $query_sql = mysqli_query($koneksi, $bio_query);
    $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
?>
      <section id="biodata" class="pt-28">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap items-center">
                <div class="w-full">
                    <h1 class="text-5xl font-bold"><?= $ambildata[0]['title']?></h1>
                </div>

                <div class="flex relative bottom-14">
                    <img src="image/<?= $ambildata[0]['picture']?>" class="w-6/12" style="z-index: -1;" alt="">
                    <div class="mt-36">
                        <div class="grid gap-10">
                            <?php 
                            foreach($ambildata as $tampil) {
                            ?>
                            <div class="flex">
                                <img src="image/<?= $tampil['icon']?>" class="w-7" alt="">
                                <p class="ml-5 text-xl"><span class="font-semibold"><?= $tampil['label']?></span><?= $tampil['bio']?></p>
                            </div>

                            <?php 
                            }
                            ?>  
                        </div>

                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- exp  -->
      <?php 
    include 'koneksi.php';
    $experience_query = "SELECT * FROM my_experience";
    $query_sql = mysqli_query($koneksi, $experience_query);
    $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
?>
       <section id="experience" class="pt-20 pb-10">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap items-center">
                <div class="w-full">
                    <h1 class="text-5xl font-bold"><?= $ambildata[0]['title']?></h1>
                </div>

                <div class="grid mx-44">
                    <?php 
                    foreach($ambildata as $tampil) {
                    ?>
                    <div class="flex flex-wrap">
                        <img src="image/<?= $tampil['picture']?>" class="w-72" alt="">
                        <h1 class="text-4xl text-start mt-20 font-bold"><?= $tampil['namepict']?><span class="block text-xl font-normal"><?= $tampil['description']?></h1>
                    </div>
                        <?php 
                        }
                        ?>
                    
                    
                </div>
            </div>
        </div>
       </section>

       <!-- port  -->
       <?php 
    include 'koneksi.php';
    $portfolio_query = "SELECT * FROM portfolio";
    $query_sql = mysqli_query($koneksi, $portfolio_query);
    $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
?>
        <section id="portfolio" class="pt-28 pb-28">
            <div class="container mx-auto text-center">
                <div class="flex flex-wrap items-center">
                    <div class="w-full">
                        <h1 class="text-5xl font-bold"><?= $ambildata[0]['title']?></h1>
                    </div>

                    <div class="flex mx-auto mt-16 gap-28">
                        <?php 
                        foreach($ambildata as $tampil){
                        ?>
                        <div class="grid">
                            <img src="image/<?= $tampil['picture']?>" class="w-60 rounded-3xl" alt="">
                            <p class="text-xl mt-5 w-56 font-bold"><?= $tampil['description']?></span></p>
                        </div>
                            <?php 
                            }
                            ?>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- contact -->
         <section class="pt-28 pb-28">
            <div class="container mx-auto text-center">
                <div class="flex flex-wrap items-center">
                    <div class="w-full">
                        <h1 class="text-5xl font-bold">CONTACT ME</h1>
                    </div>

                    <div class="w-full mt-10">
                        <div class="grid">
                            <form action="proses.php" method="post" class="mx-80">
                                <div class="w-[40rem] px-2 mb-4">
                                    <input type="text" name="name" id="name" placeholder="Your Name :" class="w-full bg-slate-900 text-white p-2 focus:outline-none rounded-lg focus:ring-blue-500 focus:ring-1 focus:border-blue-500">
                                </div>
                                <div class="flex">
                                    <div class="w-80 px-2 mb-4"> 
                                        <input type="email" name="email" id="email" placeholder="Email Addres :" class="w-full bg-slate-900 text-white p-2 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-1 focus:border-blue-500" >
                                    </div>
    
                                    <div class="w-80 px-2 mb-4">
                                        <input type="text" name="number" id="number"  placeholder="Phone Number :" class="w-full bg-slate-900  text-white p-2 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-1      focus:border-blue-500" >
                                    </div>
                                </div>

                                <div class="w-[40rem] px-2 mb-4">
                                    <textarea name="message" id="message" placeholder="Message" class="w-full bg-slate-900 text-white p-2 rounded-xl focus:outline-none focus:ring-blue-500 focus:ring-1 focus:border-blue-500 h-24"></textarea>
                                </div>

                                <div class="ml-80">
                                    <div class="w-[28rem] px-2">
                                        <button type="submit" name="submit" class="text-sm font-semibold text-white bg-slate-900 py-2 px-6 rounded-full w-24 hover:opacity-90 hover:bg-blue-600 hover:shadow-lg transition duration-500">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- footer  -->
          <section class="pt-10 pb-10 bg-gray-400">
            <div class="mx-auto text-center">
                <p class="text-xl font-bold">copyright by Andika Surya 2024</p>
            </div>
          </section>
</body>
</html>