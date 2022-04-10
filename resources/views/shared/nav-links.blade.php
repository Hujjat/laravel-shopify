<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

<template x-for="navLink in nav">
    <button type="button"
        @click="fetchPage(navLink.url)"
        class="hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-sm w-full"
        :class="{'bg-gray-900 text-white': navLink.active, 'hover:bg-gray-700 text-gray-200': !navLink.active}"
        >
        @include('partials.icons')
        <span x-text="navLink.title">
            Settings
        </span>
    </button>
</template>

