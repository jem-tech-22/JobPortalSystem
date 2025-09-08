<div {{ $attributes->merge(['class' => 'w-fit flex items-center p-5 text-sm text-green-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-green-300']) }}
    role="alert" id="alert">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 inline size-6 me-3"
        aria-hidden="true">
        <path fill-rule="evenodd"
            d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
            clip-rule="evenodd" />
    </svg>
    <div>
        <span class="text-base font-medium ">{{ $slot }}</span>
    </div>
    <button class="cursor-pointer" id="x-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 ms-3">
            <path fill-rule="evenodd"
                d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                clip-rule="evenodd" />
        </svg>
    </button>
</div>

<script defer>
    document.addEventListener('DOMContentLoaded', function() {
        const closeBtn = document.getElementById('x-btn');
        const alert = document.getElementById('alert');

        // Manual close on X button click
        if (closeBtn && alert) {
            closeBtn.addEventListener('click', () => {
                alert.remove();
            });
        }

        // Auto-hide after 3 seconds
        setTimeout(() => {
            if (alert) {
                alert.remove();
            }
        }, 3000);
    });
</script>
