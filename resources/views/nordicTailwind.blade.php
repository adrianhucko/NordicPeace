<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@400;500;600&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')


    </head>


    <body class="flex justify-center bg-neutral-200 mt-8">


       <!-- LEFT Section -->


        <div class="Left w-66 mt-1.5">
            
            <div class="sticky top-[38px]">
                <div class="TopBar flex justify-center">
                    <div class="Logo flex">
                        <svg class="w-8 h-full" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current" d="M18 24.975C19.95 24.975 21.6 24.3 22.95 22.95C24.3 21.6 24.975 19.95 24.975 18C24.975 16.05 24.3 14.4 22.95 13.05C21.6 11.7 19.95 11.025 18 11.025C16.05 11.025 14.4 11.7 13.05 13.05C11.7 14.4 11.025 16.05 11.025 18C11.025 19.95 11.7 21.6 13.05 22.95C14.4 24.3 16.05 24.975 18 24.975ZM18.0052 33.9375C15.8017 33.9375 13.7314 33.524 11.7942 32.6969C9.85704 31.8698 8.16432 30.7321 6.7161 29.2839C5.26787 27.8357 4.13022 26.1447 3.30315 24.2109C2.47605 22.2772 2.0625 20.2086 2.0625 18.0052C2.0625 15.7767 2.47605 13.6939 3.30315 11.7567C4.13022 9.81954 5.26591 8.13243 6.71021 6.6954C8.15451 5.25835 9.84445 4.12069 11.78 3.28241C13.7156 2.44414 15.7862 2.025 17.9917 2.025C20.2222 2.025 22.3076 2.44318 24.2477 3.27953C26.1878 4.11585 27.8755 5.25088 29.3107 6.6846C30.7458 8.11833 31.882 9.80429 32.7192 11.7425C33.5564 13.6807 33.975 15.7665 33.975 18C33.975 20.2069 33.5559 22.2787 32.7176 24.2155C31.8793 26.1523 30.7416 27.8433 29.3046 29.2884C27.8676 30.7336 26.1822 31.8698 24.2484 32.6969C22.3147 33.524 20.2336 33.9375 18.0052 33.9375ZM18 30.4125C21.45 30.4125 24.3812 29.2078 26.7937 26.7985C29.2062 24.3892 30.4125 21.4564 30.4125 18C30.4125 14.55 29.2062 11.6188 26.7937 9.20625C24.3812 6.79375 21.4437 5.5875 17.9812 5.5875C14.5437 5.5875 11.6187 6.79375 9.20625 9.20625C6.79375 11.6188 5.5875 14.5563 5.5875 18.0188C5.5875 21.4563 6.79215 24.3813 9.20145 26.7938C11.6107 29.2063 14.5436 30.4125 18 30.4125Z" fill="black"/>
                        </svg>
                        <h1 class="font-rem text-2xl font-medium text-black ml-3.5">NordicPeace</h1>
                    </div>
                </div>
            </div>

            <div class="sticky top-27">
                <button class="flex items-center max-w-fit bg-neutral-50 rounded-full p-2 mt-18 btn group" href="#">
                    <img class="w-16 h-full rounded-full " src="/img/Screenshot 2023-08-30 at 22.35.57.png" alt="profilePhoto">
                    <p class="font-rem font-normal text-lg pl-3.5 pr-2 group-hover:text-neutral-50 transition duration-200 ease-in-out">Jonne Kinnunen</p>
                </button>
                
                <button class="flex items-center bg-neutral-50 rounded-bo btn mt-2 group">
                    <svg class="w-8 h-full ml-4 fill-hvr" viewBox="0 0 35 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Home_fill">
                            <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M6.49393 13.4165C6.07843 14.2717 6.07843 15.2446 6.07843 17.1904V23.2675C6.07843 25.9698 6.07843 27.321 6.96524 28.1605C7.82651 28.9758 9.19758 28.9993 11.8909 29V21.8344C11.8909 20.4397 13.0687 19.4013 14.4047 19.4013H18.9463C20.2824 19.4013 21.4602 20.4397 21.4602 21.8344V29C24.1535 28.9993 25.5246 28.9758 26.3858 28.1605C27.2726 27.321 27.2726 25.9698 27.2726 23.2675V17.1904C27.2726 15.2446 27.2726 14.2717 26.8571 13.4165C26.4416 12.5613 25.6613 11.9281 24.1007 10.6617L22.5868 9.43334C19.766 7.14445 18.3556 6 16.6755 6C14.9955 6 13.5851 7.14445 10.7642 9.43335L9.25037 10.6617C7.68974 11.9281 6.90943 12.5613 6.49393 13.4165ZM19.4602 29V21.8344C19.4602 21.6462 19.2825 21.4013 18.9463 21.4013H14.4047C14.0686 21.4013 13.8909 21.6462 13.8909 21.8344V29H19.4602Z"/>
                        </g>
                    </svg>
                    <p class="font-rem font-bold text-xl pr-5 pl-1.5 py-3 group-hover:text-neutral-50 transition duration-200 ease-in-out">Home</p>
                </button>
                
                <button class="flex items-center group bg-neutral-50 rounded-bo btn mt-2">
                    <svg class="w-7 h-full ml-4 str-hvr" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Bookmark">
                            <path id="Rectangle 1" d="M4.33333 9.75C4.33333 6.68587 4.33333 5.15381 5.28523 4.2019C6.23713 3.25 7.7692 3.25 10.8333 3.25H15.1667C18.2308 3.25 19.7629 3.25 20.7148 4.2019C21.6667 5.15381 21.6667 6.68587 21.6667 9.75V17.1466C21.6667 20.0535 21.6667 21.5069 20.752 21.9515C19.8374 22.396 18.6945 21.4981 16.4087 19.7021L15.6772 19.1273C14.392 18.1175 13.7494 17.6126 13 17.6126C12.2506 17.6126 11.608 18.1175 10.3228 19.1273L9.59125 19.7021C7.3055 21.4981 6.16263 22.396 5.24798 21.9515C4.33333 21.5069 4.33333 20.0535 4.33333 17.1466V9.75Z" stroke-width="2"/>
                        </g>
                    </svg>
                    <p class="font-rem font-normal text-xl pr-5 pl-2 py-3 group-hover:text-neutral-50 transition duration-200 ease-in-out">Saved</p>
                </button>
            </div>
        </div>
            
            
            
        <!-- CENTER Section -->


        <div class="Center mx-6">

            <div class="flex">
                <div class="Title relative w-77 font-rem font-medium text-black">
                    <div class="absolute right-0">
                        <h1 class="text-4xl">Welocme home</h1>
                        <h3 class="absolute right-0 text-lg">0% bug free!</h3>
                    </div>
                </div>
                <div class="w-77 h-26"></div>
            </div>

            <div class="Stories flex overflow-x-auto scrollbar-hide w-150 snap-x snap-mandatory">
                <div class="flex flex-shrink-0">
                    
                    <a class="Story1 flex flex-col relative mr-3 drop-shadow snap-always snap-end" href="#">
                        <img class="StoryPhoto w-34 h-46 object-cover rounded-3xl" src="/img/left-01.jpg.webp" alt="story">
                        <div class="absolute bottom-0 w-34 pt-4 pb-2 backdrop-blur-sm backdrop-brightness-90 rounded-b-3xl text-center" href="#">
                            <img class="ProfilePhoto absolute bottom-0 left-1/2 -translate-x-1/2 mb-7 w-8 h-8 object-cover rounded-full border border-gray-500 border-opacity-30 drop-shadow-md" src="/img/Screenshot 2023-09-12 at 22.17.34.png" alt="profilePhoto">
                            <p class="ProfileName bottom-1 font-rem font-light text-[13px] text-neutral-50">Einar Johannson</p>
                        </div>
                    </a>
                    
                    <a class="Story2 flex flex-col relative mr-3 drop-shadow snap-always snap-end" href="#">
                        <img class="StoryPhoto w-34 h-46 object-cover rounded-3xl" src="/img/left-01.jpg.webp" alt="story">
                        <div class="absolute bottom-0 w-34 pt-4 pb-2 backdrop-blur-sm backdrop-brightness-90 rounded-b-3xl text-center" href="#">
                            <img class="ProfilePhoto absolute bottom-0 left-1/2 -translate-x-1/2 mb-7 w-8 h-8 object-cover rounded-full border border-gray-500 border-opacity-30 drop-shadow-md" src="/img/Screenshot 2023-09-12 at 22.17.34.png" alt="profilePhoto">
                            <p class="ProfileName bottom-1 font-rem font-light text-[13px] text-neutral-50">Einar Johannson</p>
                        </div>
                    </a>

                    <a class="Story3 flex flex-col relative mr-3 drop-shadow snap-always snap-end" href="#">
                        <img class="StoryPhoto w-34 h-46 object-cover rounded-3xl" src="/img/left-01.jpg.webp" alt="story">
                        <div class="absolute bottom-0 w-34 pt-4 pb-2 backdrop-blur-sm backdrop-brightness-90 rounded-b-3xl text-center" href="#">
                            <img class="ProfilePhoto absolute bottom-0 left-1/2 -translate-x-1/2 mb-7 w-8 h-8 object-cover rounded-full border border-gray-500 border-opacity-30 drop-shadow-md" src="/img/Screenshot 2023-09-12 at 22.17.34.png" alt="profilePhoto">
                            <p class="ProfileName bottom-1 font-rem font-light text-[13px] text-neutral-50">Einar Johannson</p>
                        </div>
                    </a>

                    <a class="Story4 flex flex-col relative mr-3 drop-shadow snap-always snap-end" href="#">
                        <img class="StoryPhoto w-34 h-46 object-cover rounded-3xl" src="/img/left-01.jpg.webp" alt="story">
                        <div class="absolute bottom-0 w-34 pt-4 pb-2 backdrop-blur-sm backdrop-brightness-90 rounded-b-3xl text-center" href="#">
                            <img class="ProfilePhoto absolute bottom-0 left-1/2 -translate-x-1/2 mb-7 w-8 h-8 object-cover rounded-full border border-gray-500 border-opacity-30 drop-shadow-md" src="/img/Screenshot 2023-09-12 at 22.17.34.png" alt="profilePhoto">
                            <p class="ProfileName bottom-1 font-rem font-light text-[13px] text-neutral-50">Einar Johannson</p>
                        </div>
                    </a>

                    <a class="Story5 flex flex-col relative mr-3 drop-shadow snap-always snap-end" href="#">
                        <img class="StoryPhoto w-34 h-46 object-cover rounded-3xl" src="/img/left-01.jpg.webp" alt="story">
                        <div class="absolute bottom-0 w-34 pt-4 pb-2 backdrop-blur-sm backdrop-brightness-90 rounded-b-3xl text-center" href="#">
                            <img class="ProfilePhoto absolute bottom-0 left-1/2 -translate-x-1/2 mb-7 w-8 h-8 object-cover rounded-full border border-gray-500 border-opacity-30 drop-shadow-md" src="/img/Screenshot 2023-09-12 at 22.17.34.png" alt="profilePhoto">
                            <p class="ProfileName bottom-1 font-rem font-light text-[13px] text-neutral-50">Einar Johannson</p>
                        </div>
                    </a>

                    <a class="Story6 flex flex-col relative mr-3 drop-shadowsnap-always snap-end" href="#">
                        <img class="StoryPhoto w-34 h-46 object-cover rounded-3xl" src="/img/left-01.jpg.webp" alt="story">
                        <div class="absolute bottom-0 w-34 pt-4 pb-2 backdrop-blur-sm backdrop-brightness-90 rounded-b-3xl text-center" href="#">
                            <img class="ProfilePhoto absolute bottom-0 left-1/2 -translate-x-1/2 mb-7 w-8 h-8 object-cover rounded-full border border-gray-500 border-opacity-30 drop-shadow-md" src="/img/Screenshot 2023-09-12 at 22.17.34.png" alt="profilePhoto">
                            <p class="ProfileName bottom-1 font-rem font-light text-[13px] text-neutral-50">Einar Johannson</p>
                        </div>
                    </a>

                    <a class="Story7 flex flex-col relative mr-3 drop-shadow snap-always snap-end" href="#">
                        <img class="StoryPhoto w-34 h-46 object-cover rounded-3xl" src="/img/left-01.jpg.webp" alt="story">
                        <div class="absolute bottom-0 w-34 pt-4 pb-2 backdrop-blur-sm backdrop-brightness-90 rounded-b-3xl text-center" href="#">
                            <img class="ProfilePhoto absolute bottom-0 left-1/2 -translate-x-1/2 mb-7 w-8 h-8 object-cover rounded-full border border-gray-500 border-opacity-30 drop-shadow-md" src="/img/Screenshot 2023-09-12 at 22.17.34.png" alt="profilePhoto">
                            <p class="ProfileName bottom-1 font-rem font-light text-[13px] text-neutral-50">Einar Johannson</p>
                        </div>
                    </a>

                </div>
            </div>


            <div class="TimeLine flex justify-center mt-3 mb-20">
                <div class="flex flex-col items-center">

                    <div class="Post1 flex flex-col w-150 bg-neutral-50 rounded-bo2 mt-10">
                        <div class="postBg pb-5">
                            
                            <!-- <div class="">
                                <img class="w-150 h-[490px] rounded-bo2" src="/img/ad.jpeg" alt="photo">
                            </div> -->
                            
                            <div class="bg-neutral-300 h-[490px] rounded-t-bo2 pt-6">
                                <div class="flex justify-between">
                                    <div class="flex justify-start ml-6">
                                        <img class="w-12 h-12 object-cover rounded-full" src="/img/Screenshot 2023-09-19 at 11.32.08.png" alt="profilePhoto">
                                        <div class="NameTime font-rem ml-2.5">
                                            <p class="text-lg text-black">Adrián Hučko</p>
                                            <p class="text-xs text-neutral-500">10 minutes ago</p>
                                        </div>
                                    </div>
                                    <div class="postOptions flex justify-end mr-6">
                                        <div class="flex">
                                            
                                            <a class="optionsButton" href="#">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Meatballs_menu">
                                                        <circle id="Ellipse 206" cx="14" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                                        <circle id="Ellipse 207" cx="6.99998" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                                        <circle id="Ellipse 208" cx="21" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="Photos flex mt-4 overflow-x-auto scrollbar-hide snap-x snap-mandatory rtl">
                                    <img class="postPhoto ml-6" src="/img/ad.jpeg" alt="photo">
                                    <img class="postPhoto" src="/img/532f700fa5f54c7d15ff08d088596474.jpeg" alt="photo">
                                    <img class="postPhoto" src="/img/tim-schmidbauer-zeJgSHUCaeE-unsplash.jpg" alt="photo">
                                    <img class="postPhoto mr-6" src="/img/tim-schmidbauer-zeJgSHUCaeE-unsplash.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                            
                        <div class="flex">
                            <p class="font-man text-sm font-normal text-neutral-800 px-6 -mb-1">
                                <span class="font-bold">Adrián Hučko</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiususs tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="LikeCount flex justify-end mr-10 my-3">
                            <p class="font-rem text-neutral-700 font-normal text-lg">6 Likes</p>
                        </div>
                        
                            
                        <div class="PostButtons flex ml-12 -mb-6 -mt-9 pb-2">
                            
                            <button class="likeBtn group">
                                <svg class="likeSvg" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Favorite">
                                        <path class="likeStr-hvr" id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="1.8"/>
                                    </g>
                                </svg>
                            </button>
                            
                            <button class="commentBtn group">
                                <svg class="w-7 h-7" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Messages">
                                        <path class="str-hvr" id="Rectangle 1" d="M4.57141 13.7143C4.57141 13.5816 4.57141 13.5153 4.57211 13.4592C4.63298 8.57646 8.57644 4.633 13.4592 4.57213C13.5153 4.57143 13.5816 4.57143 13.7143 4.57143V4.57143C13.8469 4.57143 13.9132 4.57143 13.9693 4.57213C18.8521 4.633 22.7955 8.57646 22.8564 13.4592C22.8571 13.5153 22.8571 13.5816 22.8571 13.7143V19.5325C22.8571 20.7704 22.8571 21.3894 22.5926 21.8512C22.4158 22.1599 22.1599 22.4158 21.8512 22.5926C21.3894 22.8571 20.7704 22.8571 19.5324 22.8571H13.7143C13.5816 22.8571 13.5153 22.8571 13.4592 22.8564C8.57644 22.7956 4.63298 18.8521 4.57211 13.9693C4.57141 13.9132 4.57141 13.8469 4.57141 13.7143V13.7143Z" stroke="#333333" stroke-width="1.8"/>
                                        <path class="str-hvr" id="Vector 7" d="M10.2858 12.5714L17.1429 12.5714" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="str-hvr" id="Vector 8" d="M13.7142 17.1429H17.1428" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </button>
                            
                            <button class="ShareButton group border btn hover:border-teal-500 py-1.5 px-[9px]">
                                <svg class="w-8 h-8 -ml-0.5 -mb-1" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Send">
                                        <path class="fill-hvr" id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M25.5833 7.25456C25.2044 7.32197 24.6672 7.49827 23.807 7.785L14.0099 11.0507C12.1448 11.6724 10.8267 12.1133 9.93226 12.5223C8.96689 12.9638 8.86573 13.2138 8.85826 13.2417C8.81303 13.4109 8.81303 13.589 8.85826 13.7582C8.86573 13.7862 8.96689 14.0361 9.93226 14.4776C10.8267 14.8867 12.1448 15.3276 14.0099 15.9492C14.0522 15.9633 14.0941 15.9772 14.1357 15.9911C14.7451 16.1932 15.2839 16.3719 15.7175 16.7287C15.8674 16.852 16.0049 16.9895 16.1282 17.1394C16.485 17.573 16.6637 18.1118 16.8659 18.7212C16.8797 18.7628 16.8936 18.8048 16.9077 18.847C17.5293 20.7121 17.9702 22.0302 18.3793 22.9246C18.8208 23.89 19.0707 23.9912 19.0987 23.9986C19.2679 24.0439 19.446 24.0439 19.6152 23.9986C19.6431 23.9912 19.8931 23.89 20.3346 22.9246C20.7436 22.0302 21.1845 20.7121 21.8062 18.847L25.0719 9.04991C25.3586 8.18973 25.5349 7.65251 25.6023 7.2736C25.6037 7.26572 25.6051 7.25804 25.6063 7.25057C25.5989 7.25183 25.5912 7.25316 25.5833 7.25456ZM25.8423 7.23145C25.8421 7.23163 25.8388 7.23136 25.833 7.23009C25.8396 7.23063 25.8425 7.23126 25.8423 7.23145ZM25.6268 7.02386C25.6255 7.01812 25.6253 7.01484 25.6255 7.01463C25.6256 7.01443 25.6263 7.01729 25.6268 7.02386ZM25.233 5.28547C25.784 5.18746 26.5385 5.15827 27.1186 5.73833C27.6986 6.31838 27.6694 7.07289 27.5714 7.62389C27.4751 8.16533 27.2487 8.84446 26.9931 9.61076L26.9693 9.68236L23.7036 19.4795L23.6823 19.5432C23.0866 21.3304 22.6127 22.7521 22.1534 23.7564C21.7211 24.7017 21.144 25.6602 20.1316 25.9308C19.6241 26.0665 19.0898 26.0665 18.5822 25.9308C17.5698 25.6602 16.9928 24.7017 16.5605 23.7564C16.1011 22.7521 15.6273 21.3304 15.0315 19.5431L15.0103 19.4795C14.7408 18.6711 14.6739 18.5196 14.5837 18.4101C14.5426 18.3601 14.4968 18.3143 14.4468 18.2732C14.3373 18.183 14.1858 18.1161 13.3774 17.8466L13.3138 17.8254C11.5265 17.2296 10.1048 16.7558 9.10046 16.2965C8.15517 15.8641 7.19672 15.2871 6.9261 14.2747C6.79042 13.7671 6.79042 13.2328 6.9261 12.7253C7.19672 11.7129 8.15517 11.1358 9.10046 10.7035C10.1048 10.2442 11.5265 9.77029 13.3138 9.17453L13.3774 9.15333L23.1745 5.88763L23.2462 5.86375C24.0125 5.60824 24.6916 5.38179 25.233 5.28547Z" fill="#33363F"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
    
                    </div>


                    <div class="Post2 flex flex-col w-150 bg-neutral-50 rounded-bo2 mt-10">
                        <div class="relative flex pt-6 pl-6">
                            <img class="w-12 h-12 object-cover rounded-full" src="/img/Screenshot 2023-09-16 at 09.03.00.png" alt="profilePhoto">
                            <div class="NameTime font-rem ml-2.5">
                                <p class="text-lg text-black">Jonne Kauski</p>
                                <p class="text-xs text-neutral-500">50 minutes ago</p>
                            </div>
                            <div class="postOptions absolute right-6 top-6">
                                <a class="optionsButton" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Meatballs_menu">
                                            <circle id="Ellipse 206" cx="14" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                            <circle id="Ellipse 207" cx="6.99998" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                            <circle id="Ellipse 208" cx="21" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                        </g>
                                    </svg>
                                </a>
                            </div> 
                        </div>
                        
                        <div class="Status flex justify-center">
                            <p class="font-man mt-3 font-regular text-[17px] w-120 ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="LikeCount flex justify-end mr-10 my-3">
                            <p class="font-rem text-neutral-700 font-normal text-lg">38 Likes</p>
                        </div>
                        


                        <div class="PostButtons flex ml-12 -mb-6 -mt-9 pb-2 z-10">
                            <button class="likeBtn group">
                                <svg class="likeSvg" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Favorite">
                                        <path class="likeStr-hvr" id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="1.8"/>
                                    </g>
                                </svg>
                            </button>

                            <button class="commentBtn group">
                                <svg class="w-7 h-7" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Messages">
                                        <path class="str-hvr" id="Rectangle 1" d="M4.57141 13.7143C4.57141 13.5816 4.57141 13.5153 4.57211 13.4592C4.63298 8.57646 8.57644 4.633 13.4592 4.57213C13.5153 4.57143 13.5816 4.57143 13.7143 4.57143V4.57143C13.8469 4.57143 13.9132 4.57143 13.9693 4.57213C18.8521 4.633 22.7955 8.57646 22.8564 13.4592C22.8571 13.5153 22.8571 13.5816 22.8571 13.7143V19.5325C22.8571 20.7704 22.8571 21.3894 22.5926 21.8512C22.4158 22.1599 22.1599 22.4158 21.8512 22.5926C21.3894 22.8571 20.7704 22.8571 19.5324 22.8571H13.7143C13.5816 22.8571 13.5153 22.8571 13.4592 22.8564C8.57644 22.7956 4.63298 18.8521 4.57211 13.9693C4.57141 13.9132 4.57141 13.8469 4.57141 13.7143V13.7143Z" stroke="#333333" stroke-width="1.8"/>
                                        <path class="str-hvr" id="Vector 7" d="M10.2858 12.5714L17.1429 12.5714" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="str-hvr" id="Vector 8" d="M13.7142 17.1429H17.1428" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </button>

                            <button class="ShareButton group border btn hover:border-teal-500 py-1.5 px-[9px]">
                                <svg class="w-8 h-8 -ml-0.5 -mb-1" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Send">
                                        <path class="fill-hvr" id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M25.5833 7.25456C25.2044 7.32197 24.6672 7.49827 23.807 7.785L14.0099 11.0507C12.1448 11.6724 10.8267 12.1133 9.93226 12.5223C8.96689 12.9638 8.86573 13.2138 8.85826 13.2417C8.81303 13.4109 8.81303 13.589 8.85826 13.7582C8.86573 13.7862 8.96689 14.0361 9.93226 14.4776C10.8267 14.8867 12.1448 15.3276 14.0099 15.9492C14.0522 15.9633 14.0941 15.9772 14.1357 15.9911C14.7451 16.1932 15.2839 16.3719 15.7175 16.7287C15.8674 16.852 16.0049 16.9895 16.1282 17.1394C16.485 17.573 16.6637 18.1118 16.8659 18.7212C16.8797 18.7628 16.8936 18.8048 16.9077 18.847C17.5293 20.7121 17.9702 22.0302 18.3793 22.9246C18.8208 23.89 19.0707 23.9912 19.0987 23.9986C19.2679 24.0439 19.446 24.0439 19.6152 23.9986C19.6431 23.9912 19.8931 23.89 20.3346 22.9246C20.7436 22.0302 21.1845 20.7121 21.8062 18.847L25.0719 9.04991C25.3586 8.18973 25.5349 7.65251 25.6023 7.2736C25.6037 7.26572 25.6051 7.25804 25.6063 7.25057C25.5989 7.25183 25.5912 7.25316 25.5833 7.25456ZM25.8423 7.23145C25.8421 7.23163 25.8388 7.23136 25.833 7.23009C25.8396 7.23063 25.8425 7.23126 25.8423 7.23145ZM25.6268 7.02386C25.6255 7.01812 25.6253 7.01484 25.6255 7.01463C25.6256 7.01443 25.6263 7.01729 25.6268 7.02386ZM25.233 5.28547C25.784 5.18746 26.5385 5.15827 27.1186 5.73833C27.6986 6.31838 27.6694 7.07289 27.5714 7.62389C27.4751 8.16533 27.2487 8.84446 26.9931 9.61076L26.9693 9.68236L23.7036 19.4795L23.6823 19.5432C23.0866 21.3304 22.6127 22.7521 22.1534 23.7564C21.7211 24.7017 21.144 25.6602 20.1316 25.9308C19.6241 26.0665 19.0898 26.0665 18.5822 25.9308C17.5698 25.6602 16.9928 24.7017 16.5605 23.7564C16.1011 22.7521 15.6273 21.3304 15.0315 19.5431L15.0103 19.4795C14.7408 18.6711 14.6739 18.5196 14.5837 18.4101C14.5426 18.3601 14.4968 18.3143 14.4468 18.2732C14.3373 18.183 14.1858 18.1161 13.3774 17.8466L13.3138 17.8254C11.5265 17.2296 10.1048 16.7558 9.10046 16.2965C8.15517 15.8641 7.19672 15.2871 6.9261 14.2747C6.79042 13.7671 6.79042 13.2328 6.9261 12.7253C7.19672 11.7129 8.15517 11.1358 9.10046 10.7035C10.1048 10.2442 11.5265 9.77029 13.3138 9.17453L13.3774 9.15333L23.1745 5.88763L23.2462 5.86375C24.0125 5.60824 24.6916 5.38179 25.233 5.28547Z" fill="#33363F"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>




                    <div class="Post3 flex flex-col w-150">
                        <div class="PostSection bg-neutral-50 rounded-bo2 mt-10 z-10">

                            <div class="relative flex pt-6 pl-6">
                                <img class="w-12 h-12 object-cover rounded-full" src="/img/Screenshot 2023-09-20 at 12.11.27.png" alt="profilePhoto">
                                <div class="NameTime font-rem ml-2.5">
                                    <p class="text-lg text-black">Freya Johansdóttir</p>
                                    <p class="text-xs text-neutral-500">2 hours ago</p>
                                </div>
                                <div class="postOptions absolute right-6 top-6">
                                    <a class="optionsButton" href="#">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Meatballs_menu">
                                                <circle id="Ellipse 206" cx="14" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                                <circle id="Ellipse 207" cx="6.99998" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                                <circle id="Ellipse 208" cx="21" cy="14" r="1.16667" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div> 
                            </div>
                            
                            <div class="Status flex justify-center">
                                <p class="font-man mt-3 font-regular text-[20px] w-120 ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                            <div class="LikeCount flex justify-end mr-10 my-3">
                                <p class="font-rem text-neutral-700 font-normal text-lg">26 Likes</p>
                            </div>
                            
                            
                            <div class="PostButtons flex ml-12 -mb-6 -mt-9 pb-2">
                                <button class="likeBtn group">
                                    <svg class="likeSvg" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Favorite">
                                            <path class="likeStr-hvr" id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="1.8"/>
                                        </g>
                                    </svg>
                                </button>
                                
                                <button class="commentBtn group">
                                    <svg class="w-7 h-7" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Messages">
                                            <path class="str-hvr" id="Rectangle 1" d="M4.57141 13.7143C4.57141 13.5816 4.57141 13.5153 4.57211 13.4592C4.63298 8.57646 8.57644 4.633 13.4592 4.57213C13.5153 4.57143 13.5816 4.57143 13.7143 4.57143V4.57143C13.8469 4.57143 13.9132 4.57143 13.9693 4.57213C18.8521 4.633 22.7955 8.57646 22.8564 13.4592C22.8571 13.5153 22.8571 13.5816 22.8571 13.7143V19.5325C22.8571 20.7704 22.8571 21.3894 22.5926 21.8512C22.4158 22.1599 22.1599 22.4158 21.8512 22.5926C21.3894 22.8571 20.7704 22.8571 19.5324 22.8571H13.7143C13.5816 22.8571 13.5153 22.8571 13.4592 22.8564C8.57644 22.7956 4.63298 18.8521 4.57211 13.9693C4.57141 13.9132 4.57141 13.8469 4.57141 13.7143V13.7143Z" stroke="#333333" stroke-width="1.8"/>
                                            <path class="str-hvr" id="Vector 7" d="M10.2858 12.5714L17.1429 12.5714" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path class="str-hvr" id="Vector 8" d="M13.7142 17.1429H17.1428" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                </button>
                                
                                <button class="shareButton group">
                                    <svg class="w-8 h-8 -ml-0.5 -mb-1" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Send">
                                            <path class="fill-hvr" id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M25.5833 7.25456C25.2044 7.32197 24.6672 7.49827 23.807 7.785L14.0099 11.0507C12.1448 11.6724 10.8267 12.1133 9.93226 12.5223C8.96689 12.9638 8.86573 13.2138 8.85826 13.2417C8.81303 13.4109 8.81303 13.589 8.85826 13.7582C8.86573 13.7862 8.96689 14.0361 9.93226 14.4776C10.8267 14.8867 12.1448 15.3276 14.0099 15.9492C14.0522 15.9633 14.0941 15.9772 14.1357 15.9911C14.7451 16.1932 15.2839 16.3719 15.7175 16.7287C15.8674 16.852 16.0049 16.9895 16.1282 17.1394C16.485 17.573 16.6637 18.1118 16.8659 18.7212C16.8797 18.7628 16.8936 18.8048 16.9077 18.847C17.5293 20.7121 17.9702 22.0302 18.3793 22.9246C18.8208 23.89 19.0707 23.9912 19.0987 23.9986C19.2679 24.0439 19.446 24.0439 19.6152 23.9986C19.6431 23.9912 19.8931 23.89 20.3346 22.9246C20.7436 22.0302 21.1845 20.7121 21.8062 18.847L25.0719 9.04991C25.3586 8.18973 25.5349 7.65251 25.6023 7.2736C25.6037 7.26572 25.6051 7.25804 25.6063 7.25057C25.5989 7.25183 25.5912 7.25316 25.5833 7.25456ZM25.8423 7.23145C25.8421 7.23163 25.8388 7.23136 25.833 7.23009C25.8396 7.23063 25.8425 7.23126 25.8423 7.23145ZM25.6268 7.02386C25.6255 7.01812 25.6253 7.01484 25.6255 7.01463C25.6256 7.01443 25.6263 7.01729 25.6268 7.02386ZM25.233 5.28547C25.784 5.18746 26.5385 5.15827 27.1186 5.73833C27.6986 6.31838 27.6694 7.07289 27.5714 7.62389C27.4751 8.16533 27.2487 8.84446 26.9931 9.61076L26.9693 9.68236L23.7036 19.4795L23.6823 19.5432C23.0866 21.3304 22.6127 22.7521 22.1534 23.7564C21.7211 24.7017 21.144 25.6602 20.1316 25.9308C19.6241 26.0665 19.0898 26.0665 18.5822 25.9308C17.5698 25.6602 16.9928 24.7017 16.5605 23.7564C16.1011 22.7521 15.6273 21.3304 15.0315 19.5431L15.0103 19.4795C14.7408 18.6711 14.6739 18.5196 14.5837 18.4101C14.5426 18.3601 14.4968 18.3143 14.4468 18.2732C14.3373 18.183 14.1858 18.1161 13.3774 17.8466L13.3138 17.8254C11.5265 17.2296 10.1048 16.7558 9.10046 16.2965C8.15517 15.8641 7.19672 15.2871 6.9261 14.2747C6.79042 13.7671 6.79042 13.2328 6.9261 12.7253C7.19672 11.7129 8.15517 11.1358 9.10046 10.7035C10.1048 10.2442 11.5265 9.77029 13.3138 9.17453L13.3774 9.15333L23.1745 5.88763L23.2462 5.86375C24.0125 5.60824 24.6916 5.38179 25.233 5.28547Z" fill="#33363F"/>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            
                        </div>



                        <div class="CommentSection bg-stone-300 -mt-5 pb-6 rounded-bo2">

                            <div class="MyComment flex items-center mx-6 mt-12 bg-neutral-50 rounded-bo-sm">
                                <button class="opacity-40 focus:opacity-100" href="#">
                                    <img class="w-12 h-12 object-cover rounded-full ml-6.4 outline outline-4 outline-stone-300" src="/img/Screenshot 2023-08-30 at 22.35.57.png" alt="profilePhoto">
                                </button>
                                    <input class="ml-6 w-100 bg-neutral-50 font-man font-semibold text-neutral-700 outline-none placeholder:opacity-80" type="text" placeholder="Post your reply..">
                                <svg class="w-7 h-7 ml-3 opacity-30" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Messages">
                                        <path class="str-hvr" id="Rectangle 1" d="M4.57141 13.7143C4.57141 13.5816 4.57141 13.5153 4.57211 13.4592C4.63298 8.57646 8.57644 4.633 13.4592 4.57213C13.5153 4.57143 13.5816 4.57143 13.7143 4.57143V4.57143C13.8469 4.57143 13.9132 4.57143 13.9693 4.57213C18.8521 4.633 22.7955 8.57646 22.8564 13.4592C22.8571 13.5153 22.8571 13.5816 22.8571 13.7143V19.5325C22.8571 20.7704 22.8571 21.3894 22.5926 21.8512C22.4158 22.1599 22.1599 22.4158 21.8512 22.5926C21.3894 22.8571 20.7704 22.8571 19.5324 22.8571H13.7143C13.5816 22.8571 13.5153 22.8571 13.4592 22.8564C8.57644 22.7956 4.63298 18.8521 4.57211 13.9693C4.57141 13.9132 4.57141 13.8469 4.57141 13.7143V13.7143Z" stroke="#333333" stroke-width="2"/>
                                        <path class="str-hvr" id="Vector 7" d="M10.2858 12.5714L17.1429 12.5714" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="str-hvr" id="Vector 8" d="M13.7142 17.1429H17.1428" stroke="#333333" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </div>

                            <div class="Comment1 flex mt-8 bg-neutral-50 mx-6 rounded-bo-sm">
                                <a class="w-[58px] h-12 -mt-3 ml-6.4 rounded-full" href="#">
                                    <img class="comPhoto" src="/img/Screenshot 2023-09-20 at 14.51.04.png" alt="profilePhoto">
                                </a>
                                <div class="NameTime flex flex-col w-full font-rem mt-2 ml-6">
                                    <div class="flex justify-between w-full">
                                        <div class="flex">
                                            <a class="mr-1.5 text-neutral-800 text-base" href="#">Kristine Larsen</a>
                                            <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                                                <p class="mr-1.5">•</p>
                                                <p class="mt-[1px]">30 m</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <button class="comLikeBtn group">
                                                <svg class="comLikeSvg" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Favorite">
                                                        <path id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="2.4"/>
                                                    </g>
                                                </svg>
                                                <p class="absolute left-1/2 -translate-x-1/2 top-5 font-rem text-neutral-700">8</p>
                                            </button>
                                        </div>
                                    </div>
                                    <p class="w-110 font-man font font-light -mt-1">
                                        Jujubes toffee pie lollipop lollipop donut halvah macaroon 
                                        gingerbread.
                                    </p>
                                    <div class="flex">
                                        <button class="replyButton">
                                            Reply
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="Comment2 flex mt-8 bg-neutral-50 mx-6 rounded-bo-sm">
                                <a class="w-14 h-12 -mt-3 ml-5 rounded-full" href="#">
                                    <img class="comPhoto" src="/img/Screenshot 2023-09-21 at 11.00.57.png" alt="profilePhoto">
                                </a>
                                <div class="NameTime flex flex-col w-full font-rem mt-2.5 ml-3">
                                    <div class="flex justify-between w-full">
                                        <div class="flex">
                                            <a class="mr-1.5 text-neutral-800 text-base" href="#">Anna Kultanainen</a>
                                            <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                                                <p class="mr-1.5">•</p>
                                                <p class="mt-[1px]">2 h</p>
                                            </div>
                                        </div>
                                        <div class="CommlikeBtn flex flex-col">
                                            <button class="comLikeBtn group">
                                                <svg class="comLikeSvg" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Favorite">
                                                        <path id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="2.4"/>
                                                    </g>
                                                </svg>
                                                <p class="absolute left-1/2 -translate-x-1/2 top-5 font-rem text-neutral-700">20</p>
                                            </button>
                                        </div>
                                    </div>


                                    <div class="DashLine flex flex-col border-l-2 border-solid border-neutral-300 pl-8.5 -ml-9">

                                        <p class="w-110 font-man font font-light -mt-1">
                                            Jujubes toffee pie lollipop lollipop donut halvah macaroon 
                                            gingerbread. Cake cupcake marshmallow tiramisu dessgert shortbread sugar plum oat cake.
                                        </p>
                                        <div class="flex">
                                            <button class="replyButton">
                                                Reply
                                            </button>
                                        </div>


                                        <div class="ReplyComment1 flex mt-5 -ml-5.5">
                                            <a class="w-14 h-12 -mt-3 ml-6.4 rounded-full" href="#">
                                                <img class="comPhoto" src="/img/Screenshot 2023-08-30 at 22.35.57.png" alt="profilePhoto">
                                            </a>
                                            <div class="NameTime flex justify-between w-full -mt-3">
                                                <div class="flex flex-col ml-3">
                                                    <div class="flex">
                                                        <a class=" mr-1.5 text-neutral-800 text-base" href="#">Jonne Kinnunen</a>
                                                        <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                                                            <p class="mr-1.5">•</p>
                                                            <p class="mt-[1px]">1 h</p>
                                                        </div>
                                                    </div>

                                                    <p class="w-84 font-man font font-light">
                                                        <a href="#">
                                                            <span class="font-rem font-normal bg-neutral-200 rounded-full px-1">@Jonne Kinnunen</span>
                                                        </a>Jujubes toffee pie lollipop lollipop donut halvah macaroon gingerbread.Cake cupcake marsh malglow tiramisu dessert shortbread sugar.
                                                    </p>

                                                    <div class="flex">
                                                        <button class="replyButton">
                                                            Reply
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="ComlikeBtn flex flex-col">
                                                    <button class="comLikeBtn group">
                                                        <svg class="comLikeSvg" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Favorite">
                                                                <path id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="2.4"/>
                                                            </g>
                                                        </svg>
                                                        <p class="absolute left-1/2 -translate-x-1/2 top-5 font-rem text-neutral-700">11</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="ReplyComment2 flex mt-5 -ml-5.5">
                                            <a class="w-14 h-12 -mt-3 ml-6.4 rounded-full" href="#">
                                                <img class="comPhoto" src="/img/Screenshot 2023-08-30 at 23.09.44.png" alt="profilePhoto">
                                            </a>
                                            <div class="NameTime flex justify-between w-full -mt-3">
                                                <div class="flex flex-col ml-3">
                                                    <div class="flex">
                                                        <a class=" mr-1.5 text-neutral-800 text-base" href="#">Erik Bjornsson</a>
                                                        <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                                                            <p class="mr-1.5">•</p>
                                                            <p class="mt-[1px]">10 m</p>
                                                        </div>
                                                    </div>

                                                    <p class="w-84 font-man font font-light">
                                                        <a href="#">
                                                            <span class="font-rem font-normal bg-neutral-200 rounded-full px-1">@Jonne Kinnunen</span>
                                                        </a>Jujubes toffee pie lollipop lollipop donut halvah macaroon gingerbread.
                                                    </p>

                                                    <div class="flex">
                                                        <button class="replyButton">
                                                            Reply
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="ComlikeBtn flex flex-col">
                                                    <button class="comLikeBtn group">
                                                        <svg class="comLikeSvg" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Favorite">
                                                                <path id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="2.4"/>
                                                            </g>
                                                        </svg>
                                                        <p class="absolute left-1/2 -translate-x-1/2 top-5 font-rem text-neutral-700">3</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>

                            <div class="Comment3 flex mt-8 bg-neutral-50 mx-6 rounded-bo-sm">
                                <a class="w-[58px] h-12 -mt-3 ml-6.4 rounded-full" href="#">
                                    <img class="comPhoto" src="/img/Screenshot 2023-09-20 at 14.51.04.png" alt="profilePhoto">
                                </a>
                                <div class="NameTime flex flex-col w-full font-rem mt-2 ml-6">
                                    <div class="flex justify-between w-full">
                                        <div class="flex">
                                            <a class="mr-1.5 text-neutral-800 text-base" href="#">Kristine Larsen</a>
                                            <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                                                <p class="mr-1.5">•</p>
                                                <p class="mt-[1px]">30 m</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <button class="comLikeBtn group">
                                                <svg class="comLikeSvg" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Favorite">
                                                        <path id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="2.4"/>
                                                    </g>
                                                </svg>
                                                <p class="absolute left-1/2 -translate-x-1/2 top-5 font-rem text-neutral-700">8</p>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="w-110">
                                        <p class="font-man font font-light -mt-1">
                                            Jujubes toffee pie lollipop lollipop donut halvah macaroon 
                                            gingerbread.
                                        </p>
                                        <div class="flex justify-between w-full">
                                            <button class="replyButton">Reply</button>
                                            <button class="replyButton mt-2">3 Replies</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                
                                
                                
                                


                        </div>


                    </div>
                        


                </div>
            </div>
        </div>


        <!-- RIGHT Section -->

        <div class="Right flex flex-col relative w-66 mt-8">
            <div class="sticky top-11">
                <div class="TopButtons flex">
                    <button class="MessagesButton flex group btn rounded-bo py-2 px-3">
                        <svg class="w-7 h-full btn" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Messages">
                                <path class="str-hvr" id="Rectangle 1" d="M4.57141 13.7143C4.57141 13.5816 4.57141 13.5153 4.57211 13.4592C4.63298 8.57646 8.57644 4.633 13.4592 4.57213C13.5153 4.57143 13.5816 4.57143 13.7143 4.57143V4.57143C13.8469 4.57143 13.9132 4.57143 13.9693 4.57213C18.8521 4.633 22.7955 8.57646 22.8564 13.4592C22.8571 13.5153 22.8571 13.5816 22.8571 13.7143V19.5325C22.8571 20.7704 22.8571 21.3894 22.5926 21.8512C22.4158 22.1599 22.1599 22.4158 21.8512 22.5926C21.3894 22.8571 20.7704 22.8571 19.5324 22.8571H13.7143C13.5816 22.8571 13.5153 22.8571 13.4592 22.8564C8.57644 22.7956 4.63298 18.8521 4.57211 13.9693C4.57141 13.9132 4.57141 13.8469 4.57141 13.7143V13.7143Z" stroke-width="2"/>
                                <path class="str-hvr" id="Vector 7" d="M10.2858 12.5714L17.1429 12.5714" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="str-hvr" id="Vector 8" d="M13.7142 17.1429H17.1428" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        <p class="text-sm font-rem font-normal mx-1 text-zinc-700 group-hover:text-neutral-50 transition duration-200 ease-in-out ">Messages</p>
                    </button>

                    <button class="NotificationButton group btn px-2.5 py-2 ml-3.5">
                        <svg class="w-6 h-full" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Favorite">
                                <path class="str-hvr" id="Vector 15" d="M4.76856 14.9016L12.2178 21.8994C12.4982 22.1628 12.6384 22.2946 12.8073 22.3115C12.8404 22.3148 12.8738 22.3148 12.907 22.3115C13.0758 22.2946 13.216 22.1628 13.4964 21.8994L13.4965 21.8994L20.9457 14.9016C23.0416 12.9328 23.2961 9.69278 21.5333 7.42078L21.2019 6.99358C19.0931 4.27562 14.8603 4.73144 13.3785 7.83605C13.1692 8.27459 12.545 8.27459 12.3357 7.83605C10.8539 4.73144 6.62111 4.27562 4.51235 6.99358L4.1809 7.42078C2.41814 9.69278 2.67266 12.9328 4.76856 14.9016Z" stroke-width="2"/>
                            </g>
                        </svg>  
                    </button>

                    <button class="Settings group btn absolute right-0 p-1.5">
                        <svg class="w-8 h-full" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="str-hvr" d="M10.3879 23.8515C9.45484 23.2927 8.9883 23.0134 8.72887 22.564C8.46945 22.1147 8.46078 21.571 8.44344 20.4835L8.39585 17.5L8.44344 14.5165C8.46078 13.429 8.46945 12.8853 8.72887 12.436C8.98829 11.9866 9.45484 11.7073 10.3879 11.1485L12.9479 9.61556L15.5555 8.16502C16.506 7.63631 16.9812 7.37195 17.5 7.37195C18.0189 7.37195 18.4941 7.63631 19.4445 8.16502L22.0521 9.61556L24.6121 11.1485C25.5452 11.7073 26.0117 11.9866 26.2712 12.436C26.5306 12.8853 26.5393 13.429 26.5566 14.5165L26.6042 17.5L26.5566 20.4835C26.5393 21.571 26.5306 22.1147 26.2712 22.564C26.0117 23.0134 25.5452 23.2927 24.6121 23.8515L22.0521 25.3844L19.4445 26.835C18.4941 27.3637 18.0189 27.628 17.5 27.628C16.9812 27.628 16.506 27.3637 15.5555 26.835L12.9479 25.3844L10.3879 23.8515Z" stroke-width="2"/>
                            <circle class="str-hvr" cx="17.5" cy="17.5" r="3.125" transform="rotate(-30 17.5 17.5)" stroke-width="2"/>
                        </svg>
                    </button>
                </div>


                <div class="flex flex-col">

                    <div class="SearchBar mt-8">
                        <div class="relative flex items-center">
                            <svg class="absolute w-7 h-full stroke-neutral-800 opacity-40 ml-3.5" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Search_alt">
                                    <ellipse id="Ellipse 65" cx="9.33333" cy="9.33333" rx="9.33333" ry="9.33333" transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 23.6666 5.33334)" stroke-width="2"/>
                                    <path id="Ellipse 66" d="M14.3334 10.6667C14.8587 10.6667 15.3788 10.7701 15.8641 10.9711C16.3494 11.1722 16.7904 11.4668 17.1618 11.8382C17.5332 12.2097 17.8279 12.6506 18.0289 13.1359C18.2299 13.6212 18.3334 14.1414 18.3334 14.6667" stroke-width="2" stroke-linecap="round"/>
                                <path id="Vector 109" d="M2.33337 26.6667L6.33337 22.6667" stroke-width="2" stroke-linecap="round"/>
                                </g>
                            </svg>
                            <input class="w-full h-13 bg-neutral-50 px-4 py-3 rounded-bo focus:shadow-md font-rem font-light text-md pl-12 outline-none" type="text" placeholder="Search">
                        </div>
                    </div>

                    <!-- <div class="">
                        <button class="p-3 m-3 bg-lime-600 rounded hover:bg-lime-500 focus:ring-lime-700 active:bg-teal-500">
                            test button
                        </button>
                    </div> -->


                    <div class="SuggestedPeople bg-neutral-50 px-2 rounded-bo mt-3.5">
                        <h3 class="font-rem font-normal text-lg text-zinc-600 mx-3 mt-2">Suggested people</h3>
                        <div class="mb-4 mt-2.5">
                            
                            <a class="SugProfile1 sProfileBg">
                                <div class="sProfilePhoto">
                                    <img src="/img/robert-godwin-cdksyTqEXzo-unsplash.jpg" alt="profilePhoto">
                                </div>
                                <div class="flex flex-col font-rem">
                                    <h4 class="text-sm text-zinc-800 font-light -mb-1">Jonne Kinnunen</h4>
                                    <p class="text-xs text-zinc-400 font-light">3 people following</p>
                                </div>
                                <div class="followButton btn">
                                    <button>Follow</button>
                                </div>
                            </a>

                            <a class="SugProfile1 sProfileBg">
                                <div class="sProfilePhoto">
                                    <img src="/img/robert-godwin-cdksyTqEXzo-unsplash.jpg" alt="profilePhoto">
                                </div>
                                <div class="flex flex-col font-rem">
                                    <h4 class="text-sm text-zinc-800 font-light -mb-1">Jonne Kinnunen</h4>
                                    <p class="text-xs text-zinc-400 font-light">3 people following</p>
                                </div>
                                <div class="followButton btn">
                                    <button>Follow</button>
                                </div>
                            </a>

                            <a class="SugProfile1 sProfileBg">
                                <div class="sProfilePhoto">
                                    <img src="/img/robert-godwin-cdksyTqEXzo-unsplash.jpg" alt="profilePhoto">
                                </div>
                                <div class="flex flex-col font-rem">
                                    <h4 class="text-sm text-zinc-800 font-light -mb-1">Jonne Kinnunen</h4>
                                    <p class="text-xs text-zinc-400 font-light">3 people following</p>
                                </div>
                                <div class="followButton btn">
                                    <button>Follow</button>
                                </div>
                            </a>

                            <a class="SugProfile1 sProfileBg">
                                <div class="sProfilePhoto">
                                    <img src="/img/robert-godwin-cdksyTqEXzo-unsplash.jpg" alt="profilePhoto">
                                </div>
                                <div class="flex flex-col font-rem">
                                    <h4 class="text-sm text-zinc-800 font-light -mb-1">Jonne Kinnunen</h4>
                                    <p class="text-xs text-zinc-400 font-light">3 people following</p>
                                </div>
                                <div class="followButton btn">
                                    <button>Follow</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
    </body>

</html>
