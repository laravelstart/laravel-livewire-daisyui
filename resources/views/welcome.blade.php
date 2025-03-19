<x-layout>
    <div class="card flex-1 bg-base-100 shadow-lg rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none p-6 pb-12 lg:p-20">
        <div class="card-body p-0">
            <h1 class="card-title text-lg mb-1">Let's get started</h1>
            <p class="text-medium mb-2 text-base-content/70">Laravel has an incredibly rich ecosystem. <br>We suggest starting with the following.</p>

            <ul class="steps steps-vertical">
                <li class="step step-neutral">
                    <span class="step-icon text-xl">📚</span>
                    <span class="text-[13px]">
                        Read the
                        <a href="https://laravel.com/docs" target="_blank" class="link link-primary font-medium ml-1">
                            <span>Documentation</span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block w-2.5 h-2.5">
                                <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                            </svg>
                        </a>
                    </span>
                </li>
                <li class="step step-neutral">
                    <span class="step-icon text-xl">🧑‍🎓</span>
                    <span class="text-medium">
                        Watch video tutorials at
                        <a href="https://laracasts.com" target="_blank" class="link link-primary font-medium ml-1">
                            <span>Laracasts</span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block w-2.5 h-2.5">
                                <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                            </svg>
                        </a>
                    </span>
                </li>
            </ul>

            <div class="flex gap-3 text-sm mt-4">
                <livewire:deploy-button />
                <livewire:browse-kits-button />
            </div>
        </div>
    </div>

    <div class="relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden bg-neutral-800 p-4">
        <x-icons.laravel />
        <div class="flex gap-2 items-end transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6">
            <span class="text-[#F53003] dark:text-[#F61500] text-[12em] leading-[1]">&</span>
            <x-icons.daisy />
        </div>
    </div>
</x-layout>
