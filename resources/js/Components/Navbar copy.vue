<template>
   <div class="backdrop-xl bg-black/10 border-b border-white/20 py-4 fixed top-0 left-0 z-40 w-full backdrop-blur-md bg-black/40">
      <div class="xl:container px-2 mx-auto transition-all">
        <nav >
          <div class="flex flex-wrap gap-4 justify-between">
            <!-- return typing animation -->
            <div id="lumas" class="text-4xl font-bold text-blue-400 hover:text-blue-500 text-logo flex-1 transition-all duration-500 whitespace-nowrap">Lumas<span class="blink inline">|</span></div>
            <div class="flex justify-end flex-auto self-center text-right md:hidden">
              <router-link to="/login" class="text-sky-200 self-center mr-2 p-2">Login</router-link>
              <button @click="navShow = !navShow" :class="{'hidden':navShow}" class="text-2xl mr-4 p-1 text-sky-200 hover:text-red-500 transition"><i class="fa-solid fa-bars"></i></button>
            </div>
            <div class="hidden flex-auto self-center text-right gap-2 flex flex-wrap md:inline-block">
              <router-link to="/" class="px-4 py-2  bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl transition-all  mx-1 border-b-4 border-blue-700 hover:bg-gradient-to-l hover:from-pink-600 hover:to-blue-500 hover:border-b-4 hover:border-red-500">Home</router-link>
              <router-link to="/services" class="px-4 py-2  bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl transition-all mx-1 border-b-4 border-blue-700 hover:bg-gradient-to-l hover:from-pink-600 hover:to-blue-500 hover:border-b-4 hover:border-red-500">Services</router-link>
              <router-link to="/web" class="px-4 py-2  bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl transition-all mx-1 border-b-4 border-blue-700 hover:bg-gradient-to-l hover:from-pink-600 hover:to-blue-500 hover:border-b-4 hover:border-red-500">Websites</router-link>
              <router-link to="/mobile" class="px-4 py-2  bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl transition-all mx-1 border-b-4 border-blue-700 hover:bg-gradient-to-l hover:from-pink-600 hover:to-blue-500 hover:border-b-4 hover:border-red-500">Mobile Apps</router-link>
              <router-link to="/about" class="px-4 py-2  bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl transition-all mx-1 border-b-4 border-blue-700 hover:bg-gradient-to-l hover:from-pink-600 hover:to-blue-500 hover:border-b-4 hover:border-red-500">About me</router-link>
              <router-link to="/blogs" class="px-4 py-2  bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl transition-all mx-1 border-b-4 border-blue-700 hover:bg-gradient-to-l hover:from-pink-600 hover:to-blue-500 hover:border-b-4 hover:border-red-500">Blog</router-link>
              <router-link to="/contacts" class="px-4 py-2  bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl transition-all mx-1 border-b-4 border-blue-700 hover:bg-gradient-to-l hover:from-pink-600 hover:to-blue-500 hover:border-b-4 hover:border-red-500">Contact me</router-link>
              <router-link to="/login" class="px-4 py-2  bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl transition-all mx-1 border-b-4 border-blue-700 hover:bg-gradient-to-l hover:from-pink-600 hover:to-blue-500 hover:border-b-4 hover:border-red-500">Login</router-link>
            </div>
          </div>

        </nav>
      </div>
    </div>
    <!-- side nav -->
    <div @click="navShow = false" :class="{'w-0': !navShow, 'w-full': navShow, 'delay-300': !navShow, 'delay-0':navShow, 'bg-none':!navShow, 'bg-gray-900/70': !user_agent_suport, 'bg-gray-900/10': user_agent_suport}" class="fixed transition-w duration-0 h-full top-0 left-0 z-50 backdrop-filter backdrop-blur-sm">
      <div class="overflow-x-hidden h-full bg-indigo-900 transition-all duration-500 ease-in-out shadow-md w-2/3 md:w-72" :class="{'-translate-x-full': !navShow}">
        <img src="../../assets/lumasbg.png" alt="lumas" class="aspect-video">
        <h2 class="text-xl pl-4 text-sky-200">Lumas Mulomya</h2>

        <!-- links -->
        <div class="p-4 text-sky-200">
          <ul>
            <li class="my-2 nob"><router-link to="/" class="block px-2"><i class="fa-solid fa-home mr-4"></i> Home</router-link></li>
            <li class="my-2 nob"><router-link to="/services" class="block px-2"><i class="fa-solid fa-puzzle-piece mr-4"></i>Services</router-link></li>
            <li class="my-2 nob"><router-link to="/web" class="block px-2"><i class="fa-solid fa-puzzle-piece mr-4"></i>Websites</router-link></li>
            <li class="my-2 nob"><router-link to="/mobile" class="block px-2"><i class="fa-solid fa-puzzle-piece mr-4"></i>Mobile Apps</router-link></li>
            <li class="my-2 nob"><router-link to="/about" class="block px-2"><i class="fa-solid fa-circle-info mr-4"></i>About me</router-link></li>
            <li class="my-2 nob"><router-link to="/contacts" class="block px-2"><i class="fa-solid fa-address-card mr-4"></i>Contact me</router-link></li>
            <li class="my-2 nob"><router-link to="/blogs" class="block px-2"><i class="fa-solid fa-file-invoice mr-4"></i>Blogs</router-link></li>
            <hr class="border-t border-sky-600/50">
            <li class="my-2 nob"><router-link to="/login" class="block px-2"><i class="fa-solid fa-lock mr-4"></i>Login</router-link></li>
            <li class="my-2 nob"><router-link to="/register" class="block px-2"><i class="fa-solid fa-user-plus mr-4"></i>Register</router-link></li>
          </ul>
        </div>
      </div>
      <button>
        <i class="fa fa-close text-2xl absolute top-6 right-8 text-white font-thin hover:text-red-500 transition"></i>
      </button>

    </div>
</template>

<script>
import { ref } from 'vue'

export default {
  setup() {
    const navShow = ref(false)
    const user_agent_suport = ref(true)

    return {
      navShow, user_agent_suport
    }
  },

  created(){
    if (navigator.userAgent.search('Chrome') == -1) {
      this.user_agent_suport = false
    }
  }
}
</script>

<style>
  .text-logo{
    text-shadow: 2px 4px  rgb(139, 35, 236);

  }

  .text-logo:hover{
    text-shadow: -2px -4px  rgb(139, 35, 236);
  }
  .blink{
    color: #C72D7D;
    -webkit-animation: 1s blink step-end infinite;
    -moz-animation: 1s blink step-end infinite;
    -ms-animation: 1s blink step-end infinite;
    -o-animation: 1s blink step-end infinite;
    animation: 1s blink step-end infinite;
    text-shadow: none;
    animation: blink 300 ease-in-out 0 infinite;
  }
  @keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #C72D7D;
  }
}
@-moz-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-webkit-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-ms-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-o-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
</style>