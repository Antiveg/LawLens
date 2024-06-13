@extends('layouts/main_layout')

@section('container')
<div class="relative isolate overflow-hidden bg-zinc-800 px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
        <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
            {{-- Title --}}
            <div class="lg:max-w-lg">
                <a href="#" class="bg-yellow-100 text-yellow-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Library
            </a>
            {{-- <p class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</p> --}}
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Article 12 - Law Enforcement</h1>
            <p class="mt-6 text-xl leading-8 text-white">"Effective law enforcement is the backbone of a safe society, blending advanced technology, community engagement, and unwavering ethical standards to protect and serve with integrity."</p>
            </div>
        </div>
    </div>
    <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
        <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="/assets/law-library/law-enforcement.png" alt="">
    </div>
    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
        <div class="lg:pr-4">
            <div class="max-w-xl text-base leading-7 text-white lg:max-w-lg">
                <p>Law enforcement agencies play a crucial role in maintaining public safety and upholding the rule of law. These agencies, which include local police departments, sheriff's offices, state police, and federal organizations such as the FBI, are tasked with a wide range of responsibilities. Their primary duties involve preventing and investigating crimes, apprehending offenders, and ensuring community safety through regular patrolling and community engagement. Effective law enforcement requires collaboration with the community, leveraging technology, and adhering to legal and ethical standards to build trust and legitimacy. As societies evolve, law enforcement agencies continuously adapt their strategies to address new challenges such as cybercrime, terrorism, and drug trafficking.</p>
                <p class="mt-8">Modern law enforcement is increasingly characterized by the integration of advanced technologies and data-driven approaches. Innovations such as predictive policing, body-worn cameras, and forensic science enhancements have revolutionized crime detection and prevention. Additionally, the emphasis on community-oriented policing aims to foster better relationships between law enforcement officers and the communities they serve, promoting mutual trust and cooperation. Training programs focusing on de-escalation, cultural competency, and mental health awareness are essential for officers to effectively handle diverse and complex situations. Despite facing challenges like public scrutiny and resource constraints, law enforcement agencies remain committed to their mission of safeguarding citizens and maintaining social order.</p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
