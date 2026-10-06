<section id="experience" class="relative isolate overflow-hidden bg-background px-6 py-24 lg:px-8">

    {{-- Grid Pattern Overlay --}}
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 bg-grid-pattern mask-radial opacity-75"></div>

    {{-- Ambient Glow --}}
    <div aria-hidden="true" class="ambient-glow-soft animate-pulse-slow pointer-events-none -left-20 top-1/3" style="animation-delay: 1s;"></div>
    <div aria-hidden="true" class="ambient-glow-soft animate-pulse-slow pointer-events-none -bottom-2 -right-20" style="animation-delay: 3s;"></div>

    <div class="relative z-10 mx-auto max-w-7xl">

        {{-- Section Header --}}
        <div class="reveal max-w-2xl" style="transition-delay: 100ms;">
            <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-accent">
                Experience
            </p>

            <h2 class="text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl">
                Learning, growing, and building.
            </h2>

            <p class="mt-5 text-lg leading-8 text-white/80">
                A collection of professional experiences, development programs, and achievements that have shaped my skills through academic, collaborative, and project-based environments.
            </p>
        </div>

        {{-- Experience Timeline List --}}
        <div class="relative mt-16 flex flex-col gap-8 before:absolute before:left-3 before:top-3 before:h-[calc(100%-24px)] before:w-0.5 before:bg-accent/80 md:before:left-47.5">

            {{-- Experience Item 1 --}}
            <div style="transition-delay: 200ms;"
                class="reveal group relative rounded-2xl border border-white/10 bg-surface/40 p-6 backdrop-blur-md transition-all duration-500 hover:-translate-y-1 hover:border-accent/50 hover:bg-surface/70 hover:shadow-[0_0_30px_rgba(0,229,255,0.15)] md:p-8">
                
                {{-- Timeline Node Marker (Desktop) --}}
                <div class="absolute -left-2.75 top-9 hidden h-6 w-6 items-center justify-center rounded-full border-2 border-accent bg-background shadow-[0_0_10px_rgba(0,229,255,0.5)] transition-transform duration-300 group-hover:scale-125 md:left-45 md:flex">
                    <div class="h-2 w-2 rounded-full bg-accent"></div>
                </div>

                <div class="grid gap-6 md:grid-cols-[180px_1fr] md:gap-8">

                    {{-- Year Badge --}}
                    <div>
                        <span class="inline-flex items-center gap-2 rounded-full border border-accent/30 bg-accent/10 px-4 py-1.5 text-xs font-semibold tracking-wide text-accent shadow-sm backdrop-blur-sm">
                            <i class="fa-solid fa-calendar-days text-[11px]"></i>
                            2026
                        </span>
                    </div>

                    {{-- Content --}}
                    <div class="flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white transition duration-300 group-hover:text-accent sm:text-2xl">
                                3rd Place — Informatics Festival 2026
                            </h3>

                            <p class="mt-1 flex items-center gap-2 text-sm font-medium text-white/60">
                                <i class="fa-solid fa-laptop-code text-accent/80"></i>
                                UI/UX Design Competition — Universitas PGRI Semarang
                            </p>

                            <p class="mt-4 max-w-2xl text-base leading-relaxed text-white/80">
                                Achieved 3rd place in a national-level UI/UX Design competition through the design of “Tukar Bersih”, a mobile application concept that allows users to exchange recyclable waste for points redeemable for essential groceries.
                            </p>
                        </div>

                        {{-- Action Button --}}
                        <div class="mt-6 border-t border-white/5 pt-4">
                            <a href="{{ asset('experience/uiux.pdf') }}" target="_blank" class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-semibold text-white transition-all duration-300 hover:border-accent hover:bg-accent hover:text-black hover:shadow-lg hover:shadow-accent/20">
                                <i class="fa-solid fa-award"></i>
                                <span>Lihat Sertifikat</span>
                                <i class="fa-solid fa-arrow-up-right-from-square text-xs transition-transform duration-300 group-hover/btn:translate-x-0.5 group-hover/btn:-translate-y-0.5"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            
            {{-- Experience Item 2 --}}
            <div style="transition-delay: 350ms;"
                class="reveal group relative rounded-2xl border border-white/10 bg-surface/40 p-6 backdrop-blur-md transition-all duration-500 hover:-translate-y-1 hover:border-accent/50 hover:bg-surface/70 hover:shadow-[0_0_30px_rgba(0,229,255,0.15)] md:p-8">
                
                {{-- Timeline Node Marker (Desktop) --}}
                <div class="absolute -left-2.75 top-9 hidden h-6 w-6 items-center justify-center rounded-full border-2 border-accent bg-background shadow-[0_0_10px_rgba(0,229,255,0.5)] transition-transform duration-300 group-hover:scale-125 md:left-45 md:flex">
                    <div class="h-2 w-2 rounded-full bg-accent"></div>
                </div>

                <div class="grid gap-6 md:grid-cols-[180px_1fr] md:gap-8">

                    {{-- Year Badge --}}
                    <div>
                        <span class="inline-flex items-center gap-2 rounded-full border border-accent/30 bg-accent/10 px-4 py-1.5 text-xs font-semibold tracking-wide text-accent shadow-sm backdrop-blur-sm">
                            <i class="fa-solid fa-calendar-days text-[11px]"></i>
                            2025
                        </span>
                    </div>

                    {{-- Content --}}
                    <div class="flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white transition duration-300 group-hover:text-accent sm:text-2xl">
                                Web Development Intern
                            </h3>

                            <p class="mt-1 flex items-center gap-2 text-sm font-medium text-white/60">
                                <i class="fa-solid fa-building-columns text-accent/80"></i>
                                Direktorat Sumber Daya Manusia — Universitas Diponegoro
                            </p>

                            <p class="mt-4 max-w-2xl text-base leading-relaxed text-white/80">
                                Contributed to the development of an information system supporting non-ASN employee retirement administration at Universitas Diponegoro. Involved in requirements analysis, system development, user-role implementation, workflow adjustments, and team collaboration throughout the internship.
                            </p>
                        </div>

                        {{-- Action Button --}}
                        <div class="mt-6 border-t border-white/5 pt-4">
                            <a href="{{ asset('experience/magang.pdf') }}" target="_blank" class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-semibold text-white transition-all duration-300 hover:border-accent hover:bg-accent hover:text-black hover:shadow-lg hover:shadow-accent/20">
                                <i class="fa-solid fa-folder-open"></i>
                                <span>Lihat Sertifikat</span>
                                <i class="fa-solid fa-arrow-up-right-from-square text-xs transition-transform duration-300 group-hover/btn:translate-x-0.5 group-hover/btn:-translate-y-0.5"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Experience Item 3 --}}
            <div style="transition-delay: 500ms;"
                class="reveal group relative rounded-2xl border border-white/10 bg-surface/40 p-6 backdrop-blur-md transition-all duration-500 hover:-translate-y-1 hover:border-accent/50 hover:bg-surface/70 hover:shadow-[0_0_30px_rgba(0,229,255,0.15)] md:p-8">
                
                {{-- Timeline Node Marker (Desktop) --}}
                <div class="absolute -left-2.75 top-9 hidden h-6 w-6 items-center justify-center rounded-full border-2 border-accent bg-background shadow-[0_0_10px_rgba(0,229,255,0.5)] transition-transform duration-300 group-hover:scale-125 md:left-45 md:flex">
                    <div class="h-2 w-2 rounded-full bg-accent"></div>
                </div>

                <div class="grid gap-6 md:grid-cols-[180px_1fr] md:gap-8">

                    {{-- Year Badge --}}
                    <div>
                        <span class="inline-flex items-center gap-2 rounded-full border border-accent/30 bg-accent/10 px-4 py-1.5 text-xs font-semibold tracking-wide text-accent shadow-sm backdrop-blur-sm">
                            <i class="fa-solid fa-calendar-days text-[11px]"></i>
                            2024
                        </span>
                    </div>

                    {{-- Content --}}
                    <div class="flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white transition duration-300 group-hover:text-accent sm:text-2xl">
                                Full Stack Web Development — Independent Study
                            </h3>

                            <p class="mt-1 flex items-center gap-2 text-sm font-medium text-white/60">
                                <i class="fa-solid fa-certificate text-accent/80"></i>
                                LearningX Academy — MSIB Kampus Merdeka
                            </p>

                            <p class="mt-4 max-w-2xl text-base leading-relaxed text-white/80">
                                Participated in a one-semester independent study program focused on full stack web development. Learned and applied frontend, backend, database, and web application development concepts through project-based learning and team collaboration. Developed a service and registration platform for BBC English Pati using Python and MongoDB.
                            </p>
                        </div>

                        {{-- Action Button --}}
                        <div class="mt-6 border-t border-white/5 pt-4">
                            <a href="{{ asset('experience/msib.pdf') }}" target="_blank" class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-semibold text-white transition-all duration-300 hover:border-accent hover:bg-accent hover:text-black hover:shadow-lg hover:shadow-accent/20">
                                <i class="fa-solid fa-folder-open"></i>
                                <span>Lihat Sertifikat</span>
                                <i class="fa-solid fa-arrow-up-right-from-square text-xs transition-transform duration-300 group-hover/btn:translate-x-0.5 group-hover/btn:-translate-y-0.5"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>