<div
  x-show="loaded"
  x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
  class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-landing-black-1"
>
  <div
    class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-landing-brown-3 dark:border-landing-brown-1 border-t-transparent"
  ></div>
</div>