<?php 
session_start();
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="css/tailwind.css/tailwind.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <title>Blogging Website</title>
</head>
<body>

    <!-- header navbar -->
      <header class="text-gray-600 body-font border border-t sticky transition-shadow top-0 bg-white z-10">
        <nav class="container mx-auto flex flex-wrap px-20 flex-col md:flex-row items-center">
          <div class="flex title-font items-center text-gray-900 mb-4 md:mb-0">
              <a class=" text-xl cursor-pointer" style="text-transform: uppercase;" href="index.html">Info<span class="font-bold">Station</span></a>
          </div>
          <div class="links md:ml-10 md:mr-auto flex flex-wrap items-center text-base justify-center border-l">
              <a class=" p-6 hover:text-gray-900 hover:font-bold hover:text-black transition-all duration-300 border-r border-y-0 cursor-pointer">Popular</a>
              <a class=" p-6 hover:text-gray-900  hover:text-white hover:bg-purple-500 duration-300 transition-all  border-r border-y-0 cursor-pointer"><span class="border-b-2 border-purple-500">Personal</span></a>
            <a class=" p-6 hover:text-gray-900 hover:text-white hover:bg-green-500 duration-300 transition-all  border-r border-y-0 cursor-pointer"><span class="border-b-2 border-green-500">Business</span></a>
            <a class=" p-6 hover:text-gray-900 hover:text-white hover:bg-yellow-500 duration-300 transition-all  border-r border-y-0 cursor-pointer"><span class="border-b-2 border-yellow-500">Affiliate</span></a>
          </div>
          <?php 
          if(isset($_SESSION['id']))
          { ?>
            <a href="add-post.php" class="button" style="padding: 8px;
            border: 1px solid;
            background: cornflowerblue;
            color: white;
            border-radius: 5%;">Enter a Post</a>

            <a href="view-posts.php" class="button" style="padding: 8px;
            border: 1px solid;
            background: cornflowerblue;
            color: white;
            border-radius: 5%;
            margin-right:2%;">View my Posts</a>

            <a href="logout.php" class="button" style="padding: 8px;
            border: 1px solid;
            background: red;
            color: white;
            border-radius: 5%;
            margin-right:2%;">Logout</a>            

          <?php }
          else
          {
            ?>

            <a href="signin.php" class="button" style="padding: 8px;
            border: 1px solid;
            background: cornflowerblue;
            color: white;
            border-radius: 5%;">Log In</a>

            <a href="signup.php" class="button" style="padding: 8px;
            border: 1px solid;
            background: cornflowerblue;
            color: white;
            border-radius: 5%;">Sign Up</a>
          <?php
          }
          ?>

          <div class="search">
              <form method="get">
                  <input type="text" class="search-textbox" placeholder="Search Blogs" style="background: transparent !important;">
                  <a href="#search" class="search-icon"><i class="fas fa-search"></i></a>
              </form>
          </div>
          <div class="menu" id="menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </nav>
      </header>

      <!-- Hero section -->
      <section class="hero-section text-gray-600 body-font text-white">
        <div class="container px-20 py-10 mx-auto flex flex-wrap">
          <div class="flex flex-wrap -m-4">
            <div class=" p-4 lg:w-1/2 md:w-full">
              <div class="background-image hover:opacity-90 cursor-pointer transition-opacity flex  justify-end  p-3 sm:flex-col flex-col lg:h-80">
                <div class="flex items-center">
                    <div class="category mr-5 bg-purple-500 px-3 shadow-lg">Personal</div>
                    <div class="date text-sm">March 27, 2018</div>
                </div>
                <div>
                  <a class="text-white-1000 text-lg title-font font-medium mt-2 mb-3 post-link" href="posts/Lorem-ipsum-232.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, qui.</a>

                </div>
              </div>
            </div>
            <div class=" p-4 lg:w-1/2 md:w-full">
                <div class="background-image-rain hover:opacity-90 cursor-pointer transition-opacity	flex justify-end  p-3 sm:flex-col flex-col lg:h-80">
                  <div class="flex items-center">
                      <div class="category mr-5 bg-yellow-500 px-3 shadow-lg">Affiliate</div>
                      <div class="date text-sm">March 27, 2018</div>
                  </div>
                  <div>
                    <h2 class="text-white-1000 text-lg title-font font-medium mt-2 mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, qui.</h2>
  
                  </div>
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </section>

      <!-- hero <-> content divider / Recent -->
      <section class="text-gray-600 body-font">
        <div class="container px-20  pb-5 mx-auto">
          <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mr-auto">
            <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Recent Posts</h1>
          </div>
        </div>
      </section>

      <!-- Recent Posts  -->
      <section class="text-gray-600 body-font">
        <div class="container px-20 py-5 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
              <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1495563893439-5e257f2bc3ef.jpg" alt="blog">
                <div class="p-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-yellow-500 px-3 shadow-lg sm:w-1/3">AFFILIATE</h2>
                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>6
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1526241671692-e7d3195c9531.jpg" alt="blog">
                <div class="p-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-green-500 px-3 shadow-lg sm:w-1/3">BUSINESS</h2>
                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <div class="flex items-center flex-wrap">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>6
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1613490493576-7fde63acd811.jpg" alt="blog">
                <div class="p-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-yellow-500 px-3 shadow-lg sm:w-1/3">AFFILIATE</h2>
                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>6
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1594631252845-29fc4cc8cde9.jpg" alt="blog">
                  <div class="p-6">
                    <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-purple-500 px-3 shadow-lg sm:w-1/3">PERSONAL</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    <div class="flex items-center flex-wrap ">
                      <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                          <path d="M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                      <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                          <circle cx="12" cy="12" r="3"></circle>
                        </svg>1.2K
                      </span>
                      <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                        </svg>6
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3">
                <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1597242200858-271d245da53a.jpg" alt="blog">
                  <div class="p-6">
                    <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-purple-500 px-3 shadow-lg sm:w-1/3">PERSONAL</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    <div class="flex items-center flex-wrap">
                      <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                          <path d="M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                      <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                          <circle cx="12" cy="12" r="3"></circle>
                        </svg>1.2K
                      </span>
                      <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                        </svg>6
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3">
                <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1503777119540-ce54b422baff.jpg" alt="blog">
                  <div class="p-6">
                    <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-green-500 px-3 shadow-lg sm:w-1/3">BUSINESS</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    <div class="flex items-center flex-wrap ">
                      <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                          <path d="M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                      <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                          <circle cx="12" cy="12" r="3"></circle>
                        </svg>1.2K
                      </span>
                      <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                        </svg>6
                      </span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>

      <hr>
      <!-- Featured posts -->
      <div class="featured py-10 bg-slate-50">

          <section class="text-gray-600 body-font mb-5">
              <div class="container px-20 mx-auto">
                  <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                      <h1 class="flex-grow text-3xl font-medium title-font text-gray-900 text-center">Featured Posts</h1>
                    </div>
                </div>
            </section>

            <section class="text-gray-600 body-font">
              <div class="container px-20 py-5 mx-auto">
                <div class="flex flex-wrap -m-4">
                  <div class="p-4 md:w-1/3">
                    <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1532767153582-b1a0e5145009.jpg" alt="blog">
                      <div class="p-6 bg-white">
                        <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-yellow-500 px-3 shadow-lg sm:w-1/3">AFFILIATE</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                        <div class="flex items-center flex-wrap ">
                          <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                              <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                          </span>
                          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>6
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-4 md:w-1/3">
                    <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1495563893439-5e257f2bc3ef.jpg" alt="blog">
                      <div class="p-6 bg-white">
                        <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-green-500 px-3 shadow-lg sm:w-1/3">BUSINESS</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                        <div class="flex items-center flex-wrap">
                          <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                              <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                          </span>
                          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>6
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-4 md:w-1/3">
                    <div class="hover:opacity-90 cursor-pointer transition-opacity h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/photo-1613490493576-7fde63acd811.jpg" alt="blog">
                      <div class="p-6 bg-white">
                        <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1 category mr-5 bg-yellow-500 px-3 shadow-lg sm:w-1/3">AFFILIATE</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                        <div class="flex items-center flex-wrap ">
                          <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                              <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                          </span>
                          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>6
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>




            
            
        </div>
        <hr>
        <!-- Footer  -->
        <footer class="text-gray-600 body-font">
          <div class="container px-20 py-24 mx-auto">
            <div class="flex flex-wrap md:text-left text-center order-first">
              <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">ABOUT US</h2>
                <nav class="list-none mb-10">
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">About Us</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Join Us</a>
                  </li>

                </nav>
              </div>
              <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Personal</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Affiliate</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Business</a>
                  </li>
                </nav>
              </div>
              <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
                <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
                  <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                    <label for="footer-field" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                  <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Sub !</button>
                </div>
                <p class="text-gray-500 text-sm mt-2 md:text-left text-center">You will receive all the
                  <br class="lg:block hidden">updates along with Most popular Articles
                </p>
              </div>
            </div>
          </div>
          <div class="bg-gray-100">
            <div class="container px-20 py-6 mx-auto flex items-center sm:flex-row flex-col">
              <a class="flex title-font items-center md:justify-start justify-center text-gray-900">
                <a class=" text-xl cursor-pointer" style="text-transform: uppercase;" href="index.html">Info<span class="font-bold">Station</span></a>
              </a>
              <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 InfoStation —
                <a href="https://facebook.com/Hasnain.980" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@HasnainHashmi</a>
              </p>
              <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </footer>
</body>
</html>