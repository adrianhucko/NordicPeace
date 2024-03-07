<template>
    <button class="flex items-center rounded-bo shadow bg-neutral-50 hover:bg-teal-500 transition duration-100 ease-in-out mt-2 group">
        <svg class="w-8 h-full ml-4 fill-zinc-700 group-hover:fill-neutral-50 transition duration-100 ease-in-out;" viewBox="0 0 35 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Home_fill">
                <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M6.49393 13.4165C6.07843 14.2717 6.07843 15.2446 6.07843 17.1904V23.2675C6.07843 25.9698 6.07843 27.321 6.96524 28.1605C7.82651 28.9758 9.19758 28.9993 11.8909 29V21.8344C11.8909 20.4397 13.0687 19.4013 14.4047 19.4013H18.9463C20.2824 19.4013 21.4602 20.4397 21.4602 21.8344V29C24.1535 28.9993 25.5246 28.9758 26.3858 28.1605C27.2726 27.321 27.2726 25.9698 27.2726 23.2675V17.1904C27.2726 15.2446 27.2726 14.2717 26.8571 13.4165C26.4416 12.5613 25.6613 11.9281 24.1007 10.6617L22.5868 9.43334C19.766 7.14445 18.3556 6 16.6755 6C14.9955 6 13.5851 7.14445 10.7642 9.43335L9.25037 10.6617C7.68974 11.9281 6.90943 12.5613 6.49393 13.4165ZM19.4602 29V21.8344C19.4602 21.6462 19.2825 21.4013 18.9463 21.4013H14.4047C14.0686 21.4013 13.8909 21.6462 13.8909 21.8344V29H19.4602Z"/>
            </g>
        </svg>
        <p class="font-rem font-bold text-xl pr-5 pl-1.5 py-3 group-hover:text-neutral-50 transition duration-100 ease-in-out">
            <slot />
        </p>
    </button>
</template>

<script setupc>

</script>

